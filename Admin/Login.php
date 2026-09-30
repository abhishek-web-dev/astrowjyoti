<?php
// Admin Screen: Login
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - AstroJyoti Platform</title>
    
    <!-- Tailwind CSS (via Vite) -->
    <link rel="stylesheet" href="/src/style.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script type="module" src="/src/main.js"></script>
    
    <style>
        /* Base Overrides for strict 100vh fit */
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-color: #f8fafc;
            background-image: url('/Admin/Admin-login-banner.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .font-serif-custom { font-family: 'Playfair Display', serif; }
        .font-sans-custom { font-family: 'Inter', sans-serif; }
        
        /* Exact 50/50 Split Layout */
        .split-layout {
            display: grid;
            grid-template-columns: 1fr;
            width: 100%;
            min-height: 100vh;
        }
        
        @media (min-width: 1024px) {
            body {
                height: 100vh;
                overflow: hidden; /* No scroll on desktop */
            }
            .split-layout {
                grid-template-columns: 1fr 1fr; /* Exactly 50% left, 50% right */
                height: 100vh;
            }
            .left-pane {
                /* Comfortable left padding inside the 50% space */
                padding-left: clamp(115px, 12vw, 150px);
                padding-right: 40px;
            }
            .right-pane {
                /* Ensure card is perfectly centered in the right 50% */
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 40px;
            }
        }

        .left-pane {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            padding: 2rem 5%;
        }
        
        /* Colors */
        .primary-text { color: #dd5c23; }
        .primary-bg { background-color: #dd5c23; }
        .primary-bg-hover:hover { background-color: #c25022; }
        .feature-icon-bg { background-color: #fdf3ef; }
        .alert-bg { background-color: #fff4ef; border-color: #fce7de; }
        .input-bg { background-color: #f8f9fc; border: 1px solid transparent; }
        .input-bg:focus-within { background-color: #ffffff; border-color: #ffedd5; }
        
        /* Card & Input Sizing */
        .auth-card {
            width: 100%;
            max-width: 430px; /* Constrained exactly as requested */
            border-radius: 1.5rem;
            box-shadow: 0 20px 40px -10px rgba(0,0,0,0.1);
            padding: 36px; /* 36px internal padding for proper breathing room */
        }
        
        .form-input {
            height: 54px;
            border-radius: 0.75rem;
            padding-left: 16px;
            padding-right: 16px;
        }
        
        .transition-all { transition: all 0.2s ease-in-out; }
    </style>
</head>
<body class="font-sans-custom relative">
    
    <!-- Main Content Container (No overlay) -->
    <div class="split-layout relative z-10">
        
        <!-- ==========================================
             LEFT SECTION (Exactly 50%)
             ========================================== -->
        <div class="left-pane text-slate-800">
            
            <!-- Logo Section -->
            <div style="margin-bottom: 20px;">
                <img src="/asset/logo.png" alt="AstroJyoti Logo" class="w-auto object-contain" style="max-width: 260px; max-height: 85px;" onerror="this.src='https://placehold.co/260x80/ea580c/ffffff?text=AstroJyoti'">
            </div>

            <!-- Headings -->
            <h1 class="font-serif-custom font-bold text-slate-800 tracking-tight" style="font-size: clamp(2.5rem, 4vw, 3.25rem); line-height: 1.05; margin-bottom: 12px;">
                Manage Your <br>
                <span class="primary-text">AstroJyoti Platform</span>
            </h1>
            
            <!-- Description -->
            <p class="leading-relaxed" style="color: #0f172a; font-weight: 600; font-size: 18px; margin-bottom: 32px; max-width: 500px;">
                Secure access for administrators to manage users, astrologers, consultations, payments and more.
            </p>

            <!-- Features Grid (2 Columns) -->
            <div class="grid grid-cols-1 sm:grid-cols-2" style="column-gap: 24px; row-gap: 28px;">
                <!-- Feature 1 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Users</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 3px;">Management</span>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Astrologers</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 3px;">Onboarding</span>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Consultations</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 3px;">Monitoring</span>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Payments</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 3px;">& Reports</span>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">System Logs</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 3px;">& Insights</span>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Settings</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 3px;">& RBAC</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==========================================
             RIGHT SECTION (Exactly 50%)
             ========================================== -->
        <div class="right-pane w-full flex justify-center lg:justify-center">
            
            <div class="auth-card bg-white flex flex-col items-center">
                
                <h2 class="font-bold primary-text" style="font-size: 34px; margin-bottom: 10px;">Sign in</h2>
                <p class="text-slate-500 font-medium" style="font-size: 17px; margin-bottom: 30px;">to continue to Admin Panel</p>

                <form class="w-full flex flex-col" action="#" method="POST" id="adminLoginForm" autocomplete="off">
                    
                    <!-- Email Input -->
                    <div class="input-bg form-input transition-all flex items-center" style="margin-bottom: 16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-slate-400 flex-shrink-0" style="width: 20px; height: 20px; margin-right: 14px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <input type="email" name="email" autocomplete="off" placeholder="E-mail Address *" class="bg-transparent border-none outline-none w-full text-slate-700 placeholder-slate-400 font-medium" style="font-size: 16px;" required>
                    </div>

                    <!-- Password Input -->
                    <div class="input-bg form-input transition-all flex items-center" style="margin-bottom: 16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-slate-400 flex-shrink-0" style="width: 20px; height: 20px; margin-right: 14px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <input type="password" name="password" autocomplete="new-password" placeholder="Password *" class="bg-transparent border-none outline-none w-full text-slate-700 placeholder-slate-400 font-medium" style="font-size: 16px;" required>
                        <button type="button" class="text-slate-400 hover:text-slate-600 focus:outline-none flex-shrink-0 ml-2 toggle-password">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Admin Code Input -->
                    <div class="input-bg form-input transition-all flex items-center" style="margin-bottom: 16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-slate-400 flex-shrink-0" style="width: 20px; height: 20px; margin-right: 14px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <input type="password" name="admin_code" autocomplete="new-password" placeholder="Admin Code *" class="bg-transparent border-none outline-none w-full text-slate-700 placeholder-slate-400 font-medium" style="font-size: 16px;" required>
                        <button type="button" class="text-slate-400 hover:text-slate-600 focus:outline-none flex-shrink-0 ml-2 toggle-password">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Forgot Password -->
                    <a href="#" class="primary-text font-semibold self-end hover:underline" style="font-size: 15px; margin-bottom: 28px;">Forgot password?</a>

                    <!-- Sign In Button -->
                    <button type="submit" class="primary-bg primary-bg-hover text-white w-full flex items-center justify-center transition-colors shadow-md" style="height: 54px; border-radius: 0.75rem; font-size: 17px; font-weight: 600;">
                        Sign in 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>

                <!-- Divider -->
                <div class="flex items-center w-full" style="margin-top: 18px; margin-bottom: 18px;">
                    <div class="flex-grow border-t border-slate-200"></div>
                    <span class="px-3 font-semibold text-slate-400" style="font-size: 13px;">OR</span>
                    <div class="flex-grow border-t border-slate-200"></div>
                </div>

                <!-- Alert Box -->
                <div class="alert-bg border flex gap-3.5 w-full" style="border-radius: 0.75rem; padding: 14px 16px;">
                    <div class="primary-text mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 22px; height: 22px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold mb-0.5" style="color: #c25022; font-size: 15px;">Authorized personnel only</h4>
                        <p class="font-medium leading-snug" style="color: #d8896d; font-size: 13.5px;">This is a restricted area. Please use your valid admin credentials to access the system.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Password Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleButtons = document.querySelectorAll('.toggle-password');
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    if (input.type === 'password') {
                        input.type = 'text';
                        this.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" /></svg>`;
                    } else {
                        input.type = 'password';
                        this.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>`;
                    }
                });
            });
        });
    </script>
</body>
</html>
