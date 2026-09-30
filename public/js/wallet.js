// wallet.js

function initWallet() {
    fetchWallet();
    fetchTransactions();

    const addMoneyBtn = document.getElementById('add-money-btn');
    if (addMoneyBtn) {
        addMoneyBtn.addEventListener('click', handleAddMoney);
    }
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initWallet);
} else {
    initWallet();
}

let isProcessingPayment = false;

async function handleAddMoney() {
    if (isProcessingPayment) return;
    
    const amount = window.selectedAmount || 0;
    if (amount <= 0) {
        if(window.showNotification) window.showNotification("Please select or enter a valid amount.", "warning");
        return;
    }

    isProcessingPayment = true;
    const btn = document.getElementById('add-money-btn');
    const originalText = btn.innerHTML;
    btn.innerHTML = 'Processing...';
    btn.disabled = true;

    try {
        const res = await api.post('/wallet/recharge/order', { amount: amount });
        
        if (!res || !res.data) {
            throw new Error('Failed to create order');
        }

        const options = {
            "key": res.data.razorpay_key_id,
            "amount": res.data.amount,
            "currency": res.data.currency,
            "name": "Astrowjyoti",
            "description": "Wallet Recharge",
            "order_id": res.data.razorpay_order_id,
            "handler": async function (response) {
                try {
                    const verifyRes = await api.post('/wallet/recharge/verify', {
                        razorpay_order_id: response.razorpay_order_id,
                        razorpay_payment_id: response.razorpay_payment_id,
                        razorpay_signature: response.razorpay_signature
                    });
                    
                    if(window.showNotification) window.showNotification("Wallet recharge successful!", "success");
                    fetchWallet();
                    fetchTransactions();
                } catch (err) {
                    if(window.showNotification) window.showNotification(err.message || "Payment verification failed.", "error");
                } finally {
                    isProcessingPayment = false;
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                }
            },
            "prefill": {
                "name": "User", // Can be updated if user data is fetched
                "email": "user@example.com",
                "contact": "9999999999"
            },
            "theme": {
                "color": "#EA580C"
            },
            "modal": {
                "ondismiss": function() {
                    isProcessingPayment = false;
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                }
            }
        };

        const rzp = new Razorpay(options);
        rzp.on('payment.failed', function (response){
            if(window.showNotification) window.showNotification(response.error.description, "error");
        });
        rzp.open();

    } catch (err) {
        if(window.showNotification) window.showNotification(err.message || "Failed to initiate payment.", "error");
        isProcessingPayment = false;
        btn.innerHTML = originalText;
        btn.disabled = false;
    }
}

async function fetchWallet() {
    try {
        const response = await api.get('/wallet');
        if (response.data) {
            const balanceStr = parseFloat(response.data.balance).toLocaleString('en-IN', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            const balanceEl = document.getElementById('wallet-balance');
            if (balanceEl) {
                balanceEl.textContent = '₹' + balanceStr;
            }
        }
    } catch (error) {
        console.error('Error fetching wallet:', error);
    }
}

async function fetchTransactions() {
    try {
        const container = document.getElementById('transactions-container');
        if (!container) return;

        container.innerHTML = '<div class="p-6 text-center text-gray-500">Loading transactions...</div>';

        const response = await api.get('/wallet/transactions');
        const transactions = response.data || [];

        if (transactions.length === 0) {
            container.innerHTML = '<div class="p-6 text-center text-gray-500">No transactions found.</div>';
            return;
        }

        container.innerHTML = ''; // clear loading

        transactions.forEach(tx => {
            const safeDate = tx.created_at ? tx.created_at.replace(' ', 'T') : new Date().toISOString();
            const dateObj = new Date(safeDate);
            const dateStr = dateObj.toLocaleDateString('en-IN', { day: '2-digit', month: 'short', year: 'numeric' });
            const timeStr = dateObj.toLocaleTimeString('en-IN', { hour: '2-digit', minute: '2-digit' });
            
            let typeGroup = 'consultation';
            let typeLabel = 'Consultation';
            let amountClass = 'text-gray-900';
            let statusClass = 'bg-gray-50 text-gray-600 border-gray-100';
            let icon = '<svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>';
            let amountPrefix = '';

            // Mapping based on transaction type
            if (tx.type === 'credit' || tx.type === 'recharge') {
                typeGroup = 'recharge';
                typeLabel = 'Wallet Recharge';
                amountClass = 'text-green-500';
                amountPrefix = '+ ';
                icon = '<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>';
            } else if (tx.type === 'debit' || tx.type === 'consultation') {
                typeGroup = 'consultation';
                typeLabel = 'Consultation';
                amountClass = 'text-red-500';
                amountPrefix = '- ';
                icon = '<svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>';
            } else if (tx.type === 'refund') {
                typeGroup = 'refund';
                typeLabel = 'Refund';
                amountClass = 'text-blue-500';
                amountPrefix = '+ ';
                icon = '<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>';
            }

            if (tx.status === 'completed' || tx.status === 'success') {
                statusClass = 'bg-green-50 text-green-600 border-green-100';
            } else if (tx.status === 'pending') {
                statusClass = 'bg-yellow-50 text-yellow-600 border-yellow-100';
            } else if (tx.status === 'failed' || tx.status === 'cancelled') {
                statusClass = 'bg-red-50 text-red-600 border-red-100';
            }

            const amountStr = amountPrefix + '₹' + parseFloat(tx.amount).toLocaleString('en-IN');

            const item = document.createElement('div');
            item.className = 'tx-item grid grid-cols-1 md:grid-cols-12 gap-y-3 gap-x-4 px-6 py-5 border-b border-gray-50 hover:bg-gray-50/50 transition-colors items-center';
            item.setAttribute('data-type', typeGroup);

            item.innerHTML = `
                <!-- Date & Time -->
                <div class="md:col-span-2">
                    <div class="text-sm font-bold text-gray-900">${dateStr}</div>
                    <div class="text-[11px] text-gray-500 font-medium mt-0.5">${timeStr}</div>
                </div>
                
                <!-- Type -->
                <div class="md:col-span-3 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full border border-gray-100 bg-white shadow-sm flex items-center justify-center shrink-0">
                        ${icon}
                    </div>
                    <div class="text-sm font-bold text-gray-900">${typeLabel}</div>
                </div>
                
                <!-- Details -->
                <div class="md:col-span-3 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <div class="text-sm font-bold text-gray-900">${tx.description || 'Transaction'}</div>
                        <div class="text-[11px] text-gray-500 mt-0.5">Ref: ${tx.reference_id || 'N/A'}</div>
                    </div>
                </div>
                
                <!-- Amount -->
                <div class="md:col-span-2 md:text-right flex items-center md:block mt-2 md:mt-0">
                    <div class="text-sm md:hidden text-gray-500 mr-2">Amount: </div>
                    <div class="text-sm font-bold ${amountClass}">${amountStr}</div>
                </div>
                
                <!-- Status & Options -->
                <div class="md:col-span-2 flex items-center justify-between md:justify-end gap-3 mt-1 md:mt-0">
                    <div class="text-[11px] font-bold px-2.5 py-1 rounded-full border ${statusClass}" style="text-transform: capitalize;">
                        ${tx.status}
                    </div>
                </div>
            `;
            container.appendChild(item);
        });

        // Re-apply active tab filter
        const activeTab = document.querySelector('.tx-tab.tab-active');
        if (activeTab) {
            const onclickAttr = activeTab.getAttribute('onclick');
            if (onclickAttr) {
                const match = onclickAttr.match(/'([^']+)'/);
                if (match && match[1]) {
                    const type = match[1];
                    const allRows = document.querySelectorAll('.tx-item');
                    allRows.forEach(row => {
                        if (type === 'all') {
                            row.style.display = 'grid';
                        } else {
                            if (row.getAttribute('data-type') === type) {
                                row.style.display = 'grid';
                            } else {
                                row.style.display = 'none';
                            }
                        }
                    });
                }
            }
        }

    } catch (error) {
        console.error('Error fetching transactions:', error);
        const container = document.getElementById('transactions-container');
        if (container) {
            container.innerHTML = '<div class="p-6 text-center text-red-500">Failed to load transactions.</div>';
        }
    }
}
