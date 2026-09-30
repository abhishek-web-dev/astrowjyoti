<?php
// Admin Screen: Astrologer Login
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrologer Login - AstroJyoti Platform</title>
    
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
            height: 100vh;
            overflow: hidden; /* Strict no scroll */
            background-color: #f8fafc;
            background-image: url('/Admin/Astrologer-Login-banner.png');
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
            height: 100vh;
        }
        
        @media (min-width: 1024px) {
            .split-layout {
                grid-template-columns: 1fr 1fr; /* Exactly 50% left, 50% right */
            }
            .left-pane {
                /* Comfortable left padding inside the 50% space */
                padding-left: clamp(100px, 12vw, 150px);
                padding-right: 40px;
            }
            .right-pane {
                /* Ensure card is perfectly centered in the right 50% */
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 30px;
            }
        }

        .left-pane {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            padding: 2rem 5%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.85) 0%, rgba(255, 255, 255, 0.4) 60%, transparent 100%);
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
            max-width: 480px; 
            border-radius: 1.5rem;
            box-shadow: 0 20px 40px -10px rgba(0,0,0,0.1);
            padding: 36px 40px 32px 40px; /* Big side padding, tight vertical padding */
        }
        
        .form-input {
            height: 54px; /* Restored premium height */
            border-radius: 0.75rem;
            padding-left: 16px;
            padding-right: 16px;
        }
        
        .transition-all { transition: all 0.2s ease-in-out; }
    </style>
</head>
<body class="font-sans-custom relative">
    
    <!-- Main Content Container -->
    <div class="split-layout relative z-10">
        
        <!-- ==========================================
             LEFT SECTION (Exactly 50%)
             ========================================== -->
        <div class="left-pane text-slate-800">
            
            <!-- Logo Section - Removed onerror placeholder box to fix size bug -->
            <div style="margin-bottom: 24px;">
                <img src="/asset/logo.png" alt="AstroJyoti Logo" class="w-auto object-contain" style="max-width: 220px; max-height: 55px;">
            </div>

            <!-- Headings -->
            <h1 class="font-serif-custom font-bold text-slate-800 tracking-tight" style="font-size: clamp(2.5rem, 4vw, 3rem); line-height: 1.1; margin-bottom: 12px;">
                Empower Lives <br>
                With Your <br>
                <span class="primary-text">Astrological Wisdom</span>
            </h1>
            
            <!-- Description -->
            <p class="leading-relaxed" style="color: #0f172a; font-weight: 700; font-size: 17px; margin-bottom: 28px; max-width: 460px;">
                Join AstroJyoti as an astrologer and connect with people seeking guidance, clarity and a better tomorrow.
            </p>

            <!-- Features List (1 Column) - Tight vertical gaps, big icons -->
            <div class="flex flex-col" style="row-gap: 16px;">
                <!-- Feature 1 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <!-- Users Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Connect</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 2px;">with genuine seekers</span>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <!-- Calendar Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Flexible Schedule</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 2px;">Set your own availability</span>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <!-- Rupee/Money Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 11.25v-1.5a3.375 3.375 0 013.375-3.375h3.937m-3.937 0v1.5a3.375 3.375 0 01-3.375 3.375h-3.937m3.937 0v1.5a3.375 3.375 0 013.375 3.375h3.937" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Grow Your Earnings</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 2px;">With secure payments</span>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full feature-icon-bg flex items-center justify-center primary-text flex-shrink-0">
                        <!-- Star Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="leading-tight" style="color: #000000; font-weight: 800; font-size: 17px;">Make a Positive Impact</span>
                        <span class="leading-tight" style="color: #0f172a; font-weight: 700; font-size: 15px; margin-top: 2px;">Guide people in their journey</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==========================================
             RIGHT SECTION (Exactly 50%)
             ========================================== -->
        <div class="right-pane w-full flex justify-center lg:justify-center">
            
            <div class="auth-card bg-white flex flex-col items-center">
                
                <!-- Astrologer Icon at top (Sun/Sparkle) -->
                <div class="feature-icon-bg primary-text rounded-full flex items-center justify-center" style="width: 64px; height: 64px; margin-bottom: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" style="width: 32px; height: 32px;">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-2.25l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                </div>

                <h2 class="font-serif-custom font-bold text-slate-800" style="font-size: 32px; margin-bottom: 2px;">
                    <span class="primary-text">Astrologer</span> Login
                </h2>
                <p class="text-slate-500 font-medium" style="font-size: 15px; margin-bottom: 24px;">Access your AstroJyoti Astrologer Panel</p>

                <form class="w-full flex flex-col" action="#" method="POST" id="astrologerLoginForm" autocomplete="off">
                    
                    <!-- Email / Phone Input -->
                    <div class="input-bg form-input transition-all flex items-center" style="margin-bottom: 16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-slate-400 flex-shrink-0" style="width: 20px; height: 20px; margin-right: 12px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <input type="text" name="email_or_phone" autocomplete="off" placeholder="E-mail Address or Phone Number *" class="bg-transparent border-none outline-none w-full text-slate-700 placeholder-slate-400 font-medium" style="font-size: 15.5px;" required>
                    </div>

                    <!-- Password Input -->
                    <div class="input-bg form-input transition-all flex items-center" style="margin-bottom: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-slate-400 flex-shrink-0" style="width: 20px; height: 20px; margin-right: 12px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <input type="password" name="password" autocomplete="new-password" placeholder="Password *" class="bg-transparent border-none outline-none w-full text-slate-700 placeholder-slate-400 font-medium" style="font-size: 15.5px;" required>
                        <button type="button" class="text-slate-400 hover:text-slate-600 focus:outline-none flex-shrink-0 ml-2 toggle-password">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex justify-between items-center w-full" style="margin-bottom: 24px;">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" class="w-4 h-4 text-[#dd5c23] border-slate-300 rounded focus:ring-[#dd5c23]" style="margin-right: 8px;">
                            <label for="remember" class="text-slate-500 font-medium" style="font-size: 15px;">Remember me</label>
                        </div>
                        <a href="#" class="primary-text font-semibold hover:underline" style="font-size: 15px;">Forgot password?</a>
                    </div>

                    <!-- Sign In Button -->
                    <button type="submit" class="primary-bg primary-bg-hover text-white w-full flex items-center justify-center transition-colors shadow-md" style="height: 54px; border-radius: 0.75rem; font-size: 17px; font-weight: 600;">
                        Login 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>

                <!-- Divider -->
                <div class="flex items-center w-full" style="margin-top: 20px; margin-bottom: 20px;">
                    <div class="flex-grow border-t border-slate-200"></div>
                    <span class="px-3 font-semibold text-slate-400" style="font-size: 13px;">OR</span>
                    <div class="flex-grow border-t border-slate-200"></div>
                </div>

                <!-- Need Help Box -->
                <div class="alert-bg border flex items-center justify-between w-full hover:shadow-sm cursor-pointer transition-all" style="border-radius: 0.75rem; padding: 14px 20px;">
                    <div class="flex gap-4 items-center">
                        <div class="primary-text">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold mb-0.5 primary-text" style="font-size: 15.5px;">Need help?</h4>
                            <p class="font-medium text-slate-500" style="font-size: 13.5px; line-height: 1.3;">Facing issues? Contact our support team.</p>
                        </div>
                    </div>
                    <div class="primary-text ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
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
