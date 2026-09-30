<?php
require_once __DIR__ . '/../auth_guard.php';

// Wallet-and-Payments.php (Dashboard)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wallet & Payments - Astrowjyoti</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    .tab-btn {
      transition: all 0.2s ease;
    }
    .tab-active {
      background-color: #ea580c; /* text-white */
      color: white;
      border-color: #ea580c;
    }
    .tab-inactive {
      background-color: transparent;
      color: #4b5563; /* text-gray-600 */
      border-color: transparent;
    }
    .tab-inactive:hover {
      color: #111827;
      background-color: #f3f4f6;
    }
    
    .amount-btn-active {
      border-color: #f97316;
      color: #f97316;
      background-color: #fffaf5;
    }
    
    .mandala-bg {
      background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23f97316' fill-opacity='0.03' d='M50 100c-27.614 0-50-22.386-50-50S22.386 0 50 0s50 22.386 50 50-22.386 50-50 50zm0-2c26.51 0 48-21.49 48-48S76.51 2 50 2 2 23.49 2 50s21.49 48 48 48zm0-10c-21.054 0-38-16.946-38-38s16.946-38 38-38 38 16.946 38 38-16.946 38-38 38zm0-2c19.95 0 36-16.05 36-36s-16.05-36-36-36-36 16.05-36 36 16.05 36 36 36zm0-10c-14.432 0-26-11.568-26-26s11.568-26 26-26 26 11.568 26 26-11.568 26-26 26zm0-2c13.327 0 24-10.673 24-24s-10.673-24-24-24-24 10.673-24 24 10.673 24 24 24zm0-10c-7.808 0-14-6.192-14-14s6.192-14 14-14 14 6.192 14 14-6.192 14-14 14zm0-2c6.704 0 12-5.296 12-12s-5.296-12-12-12-12 5.296-12 12 5.296 12 12 12z'/%3E%3C/svg%3E");
    }
  </style>
</head>
<body class="bg-[#fdfaf5] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include 'sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#fdfaf5]">
    
    <?php include 'header.php'; ?>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 custom-scrollbar relative">
      <div class="absolute top-0 right-0 w-full h-64 pointer-events-none mandala-bg z-0 opacity-80" style="background-size: 400px; background-position: top right;"></div>
      
      <!-- Main Layout -->
      <div class="max-w-[1400px] mx-auto relative z-10">
        
        <!-- Page Header -->
        <div class="flex flex-col md:flex-row md:items-start justify-between gap-4 mb-8">
          <div>
            <h1 class="text-2xl md:text-3xl font-bold text-[#111827]">Wallet & Payments</h1>
            <p class="text-gray-500 mt-1 text-sm md:text-base">Manage your wallet balance, add money, and view your payment history.</p>
          </div>
          <div class="bg-blue-50/80 border border-blue-100 rounded-xl p-3 flex items-start gap-3 backdrop-blur-sm shadow-sm md:max-w-[280px]">
            <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-500 flex items-center justify-center shrink-0">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
              <h4 class="text-sm font-bold text-gray-900">100% Secure Payments</h4>
              <p class="text-[11px] text-gray-500 leading-tight mt-0.5">Your transactions are safe and encrypted.</p>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8">
          
          <!-- LEFT COLUMN: Wallet Info & Transactions -->
          <div class="lg:col-span-8 flex flex-col gap-6">
            
            <!-- Top Cards Row -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
              <!-- Wallet Balance Card -->
              <div class="md:col-span-3 rounded-3xl p-6 relative overflow-hidden text-white flex flex-col justify-center shadow-md min-h-[160px]" style="background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%);">
                <!-- Decorative elements inside card -->
                <svg class="absolute -bottom-8 -right-8 w-32 h-32 text-white/10" fill="currentColor" viewBox="0 0 24 24"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div class="absolute top-0 right-0 w-40 h-40 bg-white/5 rounded-full blur-2xl -mr-10 -mt-10"></div>
                
                <div class="relative z-10 flex items-start gap-4">
                  <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center shrink-0 backdrop-blur-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                  </div>
                  <div class="flex-1">
                    <h3 class="text-white/80 text-sm font-medium">Wallet Balance</h3>
                    <div id="wallet-balance" class="text-4xl font-bold mt-1 tracking-tight">₹<?= number_format($walletBalance, 2) ?></div>
                    <p class="text-white/70 text-xs mt-3">Use your wallet balance for quick and easy bookings.</p>
                  </div>
                  <button class="hidden sm:flex bg-white text-purple-600 hover:bg-gray-50 px-4 py-2 rounded-xl text-sm font-bold items-center gap-1.5 transition-colors shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    Add Money <span aria-hidden="true">&rarr;</span>
                  </button>
                </div>
              </div>
              
              <!-- Quick Actions Panel -->
              <div class="md:col-span-2 bg-white rounded-3xl p-5 border border-gray-100 shadow-sm flex items-center justify-around">
                <a href="#" class="flex flex-col items-center group">
                  <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-500 group-hover:bg-blue-500 group-hover:text-white flex items-center justify-center mb-2 transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                  </div>
                  <span class="text-xs font-bold text-gray-800">Send Money</span>
                  <span class="text-[10px] text-gray-400 mt-0.5 text-center">To friends/family</span>
                </a>
                
                <div class="w-px h-12 bg-gray-100"></div>
                
                <a href="#" class="flex flex-col items-center group">
                  <div class="w-12 h-12 rounded-full bg-orange-50 text-orange-500 group-hover:bg-orange-500 group-hover:text-white flex items-center justify-center mb-2 transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                  </div>
                  <span class="text-xs font-bold text-gray-800">Apply Coupon</span>
                  <span class="text-[10px] text-gray-400 mt-0.5 text-center">Get discounts</span>
                </a>
                
                <div class="w-px h-12 bg-gray-100 hidden sm:block"></div>
                
                <a href="#" class="hidden sm:flex flex-col items-center group">
                  <div class="w-12 h-12 rounded-full bg-indigo-50 text-indigo-500 group-hover:bg-indigo-500 group-hover:text-white flex items-center justify-center mb-2 transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  </div>
                  <span class="text-xs font-bold text-gray-800">Payment History</span>
                  <span class="text-[10px] text-gray-400 mt-0.5 text-center">View all transactions</span>
                </a>
              </div>
            </div>

            <!-- Transactions Section -->
            <div class="bg-white rounded-3xl border border-gray-100 shadow-sm overflow-hidden flex flex-col flex-1">
              
              <!-- Tabs -->
              <div class="flex items-center gap-2 overflow-x-auto hide-scrollbar p-3 border-b border-gray-100">
                <button onclick="switchTxTab('all', this)" class="tx-tab tab-active px-5 py-2.5 rounded-lg text-sm font-semibold whitespace-nowrap flex items-center gap-2 border">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  All Transactions
                </button>
                <button onclick="switchTxTab('recharge', this)" class="tx-tab tab-inactive px-5 py-2.5 rounded-lg text-sm font-semibold whitespace-nowrap flex items-center gap-2 border">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                  Wallet Recharge
                </button>
                <button onclick="switchTxTab('consultation', this)" class="tx-tab tab-inactive px-5 py-2.5 rounded-lg text-sm font-semibold whitespace-nowrap flex items-center gap-2 border">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  Consultation Payments
                </button>
                <button onclick="switchTxTab('refund', this)" class="tx-tab tab-inactive px-5 py-2.5 rounded-lg text-sm font-semibold whitespace-nowrap flex items-center gap-2 border">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                  Refunds
                </button>
              </div>

              <!-- Desktop Table Header -->
              <div class="hidden md:grid grid-cols-12 gap-4 px-6 py-3 bg-gray-50/50 border-b border-gray-100 text-xs font-bold text-gray-500">
                <div class="col-span-2">Date & Time</div>
                <div class="col-span-3">Type</div>
                <div class="col-span-3">Details</div>
                <div class="col-span-2 text-right">Amount</div>
                <div class="col-span-2 text-right">Status</div>
              </div>

              <!-- Transaction List -->
              <div id="transactions-container" class="flex-1 overflow-y-auto">
                <?php foreach ($transactions as $tx): ?>
                  <div class="tx-item grid grid-cols-1 md:grid-cols-12 gap-y-3 gap-x-4 px-6 py-5 border-b border-gray-50 hover:bg-gray-50/50 transition-colors items-center" data-type="<?= htmlspecialchars($tx['typeGroup']) ?>">
                    
                    <!-- Date & Time -->
                    <div class="md:col-span-2">
                      <div class="text-sm font-bold text-gray-900"><?= htmlspecialchars($tx['date']) ?></div>
                      <div class="text-[11px] text-gray-500 font-medium mt-0.5"><?= htmlspecialchars($tx['time']) ?></div>
                    </div>
                    
                    <!-- Type -->
                    <div class="md:col-span-3 flex items-center gap-3">
                      <div class="w-8 h-8 rounded-full border border-gray-100 bg-white shadow-sm flex items-center justify-center shrink-0">
                        <?= $tx['icon'] ?>
                      </div>
                      <div class="text-sm font-bold text-gray-900"><?= htmlspecialchars($tx['typeLabel']) ?></div>
                    </div>
                    
                    <!-- Details -->
                    <div class="md:col-span-3 flex items-center gap-3">
                      <?php if ($tx['image']): ?>
                        <img src="<?= htmlspecialchars($tx['image']) ?>" alt="" class="w-8 h-8 rounded-full object-cover shrink-0 border border-gray-100" onerror="this.style.display='none'">
                      <?php else: ?>
                        <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0">
                          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                      <?php endif; ?>
                      <div>
                        <div class="text-sm font-bold text-gray-900"><?= htmlspecialchars($tx['title']) ?></div>
                        <div class="text-[11px] text-gray-500 mt-0.5"><?= htmlspecialchars($tx['subtitle']) ?></div>
                      </div>
                    </div>
                    
                    <!-- Amount -->
                    <div class="md:col-span-2 md:text-right flex items-center md:block mt-2 md:mt-0">
                      <div class="text-sm md:hidden text-gray-500 mr-2">Amount: </div>
                      <div class="text-sm font-bold <?= $tx['amountClass'] ?>"><?= htmlspecialchars($tx['amount']) ?></div>
                    </div>
                    
                    <!-- Status & Options -->
                    <div class="md:col-span-2 flex items-center justify-between md:justify-end gap-3 mt-1 md:mt-0">
                      <div class="text-[11px] font-bold px-2.5 py-1 rounded-full border <?= $tx['statusClass'] ?>">
                        <?= htmlspecialchars($tx['status']) ?>
                      </div>
                      <button class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                      </button>
                    </div>
                    
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

          </div>

          <!-- RIGHT COLUMN: Wallet Actions & Payment Methods -->
          <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-0 lg:self-start lg:h-max">
            
            <!-- Add Money to Wallet -->
            <div class="bg-white rounded-3xl shadow-sm border border-orange-100 p-6 relative overflow-hidden">
              <h3 class="font-bold text-gray-900 mb-4 text-lg">Add Money to Wallet</h3>
              
              <div class="grid grid-cols-3 gap-3 mb-5">
                <button class="amount-btn border border-gray-200 text-gray-700 hover:border-orange-300 rounded-xl py-2 text-sm font-semibold transition-colors" onclick="selectAmount(500, this)">₹500</button>
                <button class="amount-btn border border-orange-500 text-orange-500 bg-orange-50 rounded-xl py-2 text-sm font-semibold transition-colors amount-btn-active" onclick="selectAmount(1000, this)">₹1,000</button>
                <button class="amount-btn border border-gray-200 text-gray-700 hover:border-orange-300 rounded-xl py-2 text-sm font-semibold transition-colors" onclick="selectAmount(2000, this)">₹2,000</button>
                <button class="amount-btn border border-gray-200 text-gray-700 hover:border-orange-300 rounded-xl py-2 text-sm font-semibold transition-colors" onclick="selectAmount(5000, this)">₹5,000</button>
                <button class="amount-btn border border-gray-200 text-gray-700 hover:border-orange-300 rounded-xl py-2 text-sm font-semibold transition-colors" onclick="selectAmount(10000, this)">₹10,000</button>
                <button class="amount-btn border border-gray-200 text-gray-700 hover:border-orange-300 rounded-xl py-2 text-sm font-semibold transition-colors" onclick="selectAmount('Custom', this)">Custom</button>
              </div>

              <div class="relative mb-5 hidden" id="custom-amount-div">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <span class="text-gray-500 font-bold">₹</span>
                </div>
                <input type="number" id="custom-amount-input" class="w-full pl-8 pr-4 py-3 border border-gray-200 rounded-xl text-gray-900 font-bold focus:outline-none focus:ring-2 focus:ring-orange-100 focus:border-astro-orange shadow-sm" placeholder="Enter amount" oninput="updateBtnAmount(this.value)">
              </div>

              <button id="add-money-btn" class="w-full bg-astro-orange hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-xl transition-colors shadow-sm flex items-center justify-center gap-2">
                Add ₹1,000 <span aria-hidden="true">&rarr;</span>
              </button>
            </div>

            <!-- Payment Methods -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">
              <div class="flex items-center justify-between mb-5">
                <h3 class="font-bold text-gray-900 text-lg">Payment Methods</h3>
                <button class="text-xs font-bold text-astro-orange hover:text-orange-600">Manage</button>
              </div>
              
              <div class="space-y-4">
                <?php foreach ($paymentMethods as $pm): ?>
                  <div class="flex items-center justify-between group cursor-pointer p-2 -m-2 rounded-xl hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-3">
                      <div class="w-10 h-10 rounded-full border border-gray-100 bg-white shadow-sm flex items-center justify-center shrink-0 p-2 overflow-hidden">
                        <?php if ($pm['icon']): ?>
                          <img src="<?= htmlspecialchars($pm['icon']) ?>" class="max-w-full max-h-full object-contain" alt="">
                        <?php else: ?>
                          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        <?php endif; ?>
                      </div>
                      <div>
                        <h4 class="text-sm font-bold text-gray-900"><?= htmlspecialchars($pm['type']) ?></h4>
                        <p class="text-[11px] text-gray-500 mt-0.5"><?= htmlspecialchars($pm['details']) ?></p>
                      </div>
                    </div>
                    
                    <div class="flex items-center gap-2">
                      <?php if ($pm['isDefault']): ?>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-md bg-green-50 text-green-600 border border-green-100">Default</span>
                      <?php endif; ?>
                      <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Promotional Card -->
            <div class="bg-[#fffaf5] rounded-3xl shadow-sm border border-orange-200 p-5 flex items-center gap-4 relative overflow-hidden">
              <div class="w-12 h-12 rounded-xl bg-orange-100 text-astro-orange flex items-center justify-center shrink-0 relative z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
              </div>
              <div class="relative z-10">
                <h4 class="font-bold text-gray-900 text-sm mb-1">Get More Value!</h4>
                <p class="text-[11px] text-gray-600 leading-snug">Add ₹2,000 or more and get <span class="text-astro-orange font-bold">5% extra balance instantly.</span> <span class="text-astro-orange cursor-pointer hover:underline inline-block mt-1">Know more &rarr;</span></p>
              </div>
              <!-- Decorative element -->
              <svg class="absolute -bottom-4 -right-2 w-24 h-24 text-orange-200/50" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
            </div>

          </div>

        </div>
      </div>
    </div>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Sidebar toggle logic for mobile
      const openBtn = document.getElementById('open-sidebar');
      const closeBtn = document.getElementById('close-sidebar');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('mobile-overlay');

      if (openBtn && sidebar && overlay && closeBtn) {
        openBtn.addEventListener('click', () => {
          sidebar.classList.remove('-translate-x-full');
          overlay.classList.remove('hidden');
        });
        closeBtn.addEventListener('click', () => {
          sidebar.classList.add('-translate-x-full');
          overlay.classList.add('hidden');
        });
        overlay.addEventListener('click', () => {
          sidebar.classList.add('-translate-x-full');
          overlay.classList.add('hidden');
        });
      }
    });

    // Transaction Tab Switching Logic
    function switchTxTab(type, btnElement) {
      // Update Tab Styles
      const allTabs = document.querySelectorAll('.tx-tab');
      allTabs.forEach(tab => {
        tab.classList.remove('tab-active', 'border');
        tab.classList.add('tab-inactive', 'border'); // keep border for inactive to prevent jitter
        // Just overriding via CSS classes defined in header
        if(tab === btnElement) {
           tab.className = 'tx-tab tab-active px-5 py-2.5 rounded-lg text-sm font-semibold whitespace-nowrap flex items-center gap-2 border';
        } else {
           tab.className = 'tx-tab tab-inactive px-5 py-2.5 rounded-lg text-sm font-semibold whitespace-nowrap flex items-center gap-2 border border-transparent';
        }
      });

      // Filter Rows
      const allRows = document.querySelectorAll('.tx-item');
      allRows.forEach(row => {
        if (type === 'all') {
          row.style.display = 'grid'; // because it uses grid classes
        } else {
          if (row.getAttribute('data-type') === type) {
            row.style.display = 'grid';
          } else {
            row.style.display = 'none';
          }
        }
      });
    }
    
    // Add Money Logic
    window.selectedAmount = 1000; // default

    function selectAmount(val, btnElement) {
      // Update Buttons
      const allBtns = document.querySelectorAll('.amount-btn');
      allBtns.forEach(btn => {
        btn.classList.remove('border-orange-500', 'text-orange-500', 'bg-orange-50', 'amount-btn-active');
        btn.classList.add('border-gray-200', 'text-gray-700');
      });
      
      btnElement.classList.remove('border-gray-200', 'text-gray-700');
      btnElement.classList.add('border-orange-500', 'text-orange-500', 'bg-orange-50', 'amount-btn-active');
      
      const customDiv = document.getElementById('custom-amount-div');
      const addBtn = document.getElementById('add-money-btn');
      
      if (val === 'Custom') {
        customDiv.classList.remove('hidden');
        const inputVal = document.getElementById('custom-amount-input').value;
        if(inputVal) {
          addBtn.innerHTML = `Add ₹${Number(inputVal).toLocaleString('en-IN')} <span aria-hidden="true">&rarr;</span>`;
          window.selectedAmount = Number(inputVal);
        } else {
          addBtn.innerHTML = `Add Money <span aria-hidden="true">&rarr;</span>`;
          window.selectedAmount = 0;
        }
      } else {
        customDiv.classList.add('hidden');
        addBtn.innerHTML = `Add ₹${Number(val).toLocaleString('en-IN')} <span aria-hidden="true">&rarr;</span>`;
        window.selectedAmount = Number(val);
      }
    }
    
    function updateBtnAmount(val) {
      const addBtn = document.getElementById('add-money-btn');
      if(val && !isNaN(val) && Number(val) > 0) {
        addBtn.innerHTML = `Add ₹${Number(val).toLocaleString('en-IN')} <span aria-hidden="true">&rarr;</span>`;
        window.selectedAmount = Number(val);
      } else {
        addBtn.innerHTML = `Add Money <span aria-hidden="true">&rarr;</span>`;
        window.selectedAmount = 0;
      }
    }
  </script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="/js/api.js?v=2"></script>
<script src="/js/wallet.js?v=2"></script>
</body>
</html>
