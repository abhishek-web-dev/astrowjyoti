<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OTP Verification - Astrowjyoti</title>
  <link rel="stylesheet" href="/src/style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
    /* OTP Input styling to hide arrows and handle focus */
    .otp-input::-webkit-outer-spin-button,
    .otp-input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    .otp-input[type=number] {
      -moz-appearance: textfield;
    }
    .otp-input {
      width: 48px;
      height: 48px;
      text-align: center;
      font-size: 1.25rem;
      font-weight: 700;
      border: 1px solid #E2E8F0;
      border-radius: 0.75rem;
      outline: none;
      transition: all 0.2s;
      color: #0F172A;
    }
    .otp-input:focus {
      border-color: #EA580C;
      box-shadow: 0 0 0 2px rgba(234, 88, 12, 0.2);
    }
    /* Mobile responsive for OTP */
    @media (max-width: 480px) {
      .otp-input {
        width: 40px;
        height: 44px;
        font-size: 1.1rem;
      }
    }
  </style>
</head>

<body class="bg-[#FFFDF9] font-sans antialiased text-gray-800 flex flex-col min-h-screen">

  <!-- Navbar Component -->
  <div class="app-navbar"></div>

  <main class="flex-grow flex flex-col relative">
    
    <!-- Hero Background Section -->
    <section class="w-full relative flex-grow flex items-center justify-center bg-cover bg-center overflow-visible md:overflow-hidden py-8 md:py-4"
      style="background-image: url('/Auth/login-banner.png'); min-height: calc(100vh - 80px);">
      
      <!-- Gradient overlay removed as requested -->
      
      <div class="max-w-[1400px] w-full mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Bulletproof flex layout bypassing Tailwind JIT compilation bugs -->
        <div class="flex flex-col md:flex-row gap-8 lg:gap-16 items-center justify-center md:justify-between w-full">
          
          <!-- Left Column: Content -->
          <div class="hidden md:flex w-full flex-1 flex-col justify-center" style="padding-left: calc(max(40px, 12vw) + 150px);">
            
            <h1 class="text-4xl md:text-5xl lg:text-[56px] font-extrabold text-[#1E293B] leading-[1.15] mb-4" 
                style="font-family: 'Playfair Display', serif;">
              Verify Your <br />
              <span class="text-[#EA580C]">Identity</span>
            </h1>
            
            <p class="text-slate-600 text-[15px] md:text-[16px] mb-8 leading-relaxed max-w-[480px]">
              We have sent a 6-digit OTP to your registered email/mobile. Enter it below to proceed.
            </p>
            
            <!-- Features List -->
            <div class="space-y-4 mb-6 max-w-[480px]">
              
              <!-- Feature 1 -->
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-[#FFF5EB] flex items-center justify-center shrink-0 shadow-sm border border-orange-100">
                  <svg class="w-6 h-6 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-slate-900 font-bold text-[16px]">Secure & Safe</h3>
                  <p class="text-slate-500 text-[14px] mt-0.5">Your data is always protected with encryption.</p>
                </div>
              </div>

              <!-- Feature 2 -->
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-[#FFF5EB] flex items-center justify-center shrink-0 shadow-sm border border-orange-100">
                  <svg class="w-6 h-6 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-slate-900 font-bold text-[16px]">Quick Verification</h3>
                  <p class="text-slate-500 text-[14px] mt-0.5">Instant OTP delivery and verification.</p>
                </div>
              </div>
              
            </div>
          </div>

          <!-- Right Column: Card -->
          <div class="w-full shrink-0 relative" style="max-width: 480px;">
            
            <div class="bg-white rounded-[32px] p-8 sm:p-10 shadow-xl border border-gray-100 relative overflow-hidden flex flex-col items-center">
              
              <!-- Decorative Lock Icon -->
              <div class="relative w-24 h-24 mb-6 flex items-center justify-center">
                <!-- Subtle wheel background -->
                <svg class="absolute inset-0 w-full h-full text-orange-100 animate-spin-slow" style="animation-duration: 20s;" viewBox="0 0 100 100" fill="currentColor">
                  <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="2" stroke-dasharray="4 4" />
                </svg>
                <!-- Shield/Lock -->
                <div class="relative z-10 w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center shadow-inner">
                  <svg class="w-8 h-8 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                  </svg>
                </div>
              </div>

              <!-- Header -->
              <div class="relative z-10 text-center mb-6">
                <h2 class="text-[26px] md:text-[30px] font-bold text-slate-900 mb-2" style="font-family: 'Playfair Display', serif;">
                  Verify OTP
                </h2>
                <p class="text-slate-500 text-[14px] leading-relaxed">
                  Please enter the 6-digit verification code sent to <br/>
                  <span id="displayEmail" class="font-bold text-slate-800">your email</span> 
                  <a href="/Auth/Forgot-Password" class="text-[#EA580C] font-semibold text-[13px] ml-1 hover:underline">Change</a>
                </p>
              </div>

              <!-- Form -->
              <form id="otpForm" class="relative z-10 w-full" style="display: flex; flex-direction: column; gap: 24px;">
                <div id="otpError" class="hidden text-red-600 text-sm bg-red-50 p-3 rounded-lg -mb-2"></div>
                <div id="otpSuccess" class="hidden text-green-600 text-sm bg-green-50 p-3 rounded-lg -mb-2"></div>
                
                <!-- OTP Inputs -->
                <div style="display: flex; justify-content: space-between; gap: 8px;" id="otp-container">
                  <input type="number" class="otp-input" maxlength="1" oninput="if(this.value.length > 1) this.value = this.value.slice(0, 1);" required>
                  <input type="number" class="otp-input" maxlength="1" oninput="if(this.value.length > 1) this.value = this.value.slice(0, 1);" required>
                  <input type="number" class="otp-input" maxlength="1" oninput="if(this.value.length > 1) this.value = this.value.slice(0, 1);" required>
                  <input type="number" class="otp-input" maxlength="1" oninput="if(this.value.length > 1) this.value = this.value.slice(0, 1);" required>
                  <input type="number" class="otp-input" maxlength="1" oninput="if(this.value.length > 1) this.value = this.value.slice(0, 1);" required>
                  <input type="number" class="otp-input" maxlength="1" oninput="if(this.value.length > 1) this.value = this.value.slice(0, 1);" required>
                </div>

                <div class="text-center w-full">
                  <p class="text-[13px] text-slate-500 font-medium">
                    Didn't receive code? 
                    <button type="button" id="resendBtn" class="text-[#EA580C] hover:text-orange-700 font-bold ml-1 disabled:opacity-50 disabled:cursor-not-allowed" disabled>Resend OTP <span id="resendTimer">(30)</span></button>
                  </p>
                </div>

                <button type="submit" 
                  class="w-full flex items-center justify-center gap-2 bg-[#EA580C] text-white py-3 px-4 rounded-xl font-bold text-[15px] hover:bg-orange-700 hover:shadow-md transition-all mt-2">
                  Verify OTP 
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                  </svg>
                </button>
              </form>

              <!-- Divider -->
              <div class="relative flex items-center justify-center w-full mt-6 mb-5">
                <div class="absolute inset-0 flex items-center">
                  <div class="w-full border-t border-gray-100"></div>
                </div>
              </div>

              <!-- Info Box -->
              <div class="w-full bg-[#FFF9F3] border border-orange-100 rounded-xl p-4 flex items-start gap-3 mb-6 shadow-sm">
                <div class="bg-[#EA580C] text-white rounded-full w-5 h-5 flex items-center justify-center shrink-0 mt-0.5">
                  <span class="font-bold text-[12px] italic">i</span>
                </div>
                <p class="text-[13px] text-slate-700 leading-tight">
                  For your security, please do not share this OTP with anyone. Our team will never ask for your verification code.
                </p>
              </div>

              <!-- Sign In Link -->
              <p class="text-center text-slate-600 text-[14px]">
                <a href="Login" class="flex items-center justify-center gap-1.5 font-bold text-[#EA580C] hover:text-orange-700 transition-colors">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                  </svg>
                  Back to Login
                </a>
              </p>

            </div>
          </div>
          
        </div>
      </div>
    </section>

  </main>

  <!-- Component Script -->
  <script src="/js/api.js"></script>
  <script src="/js/component.js"></script>

  <script>
    // OTP Auto-focus script
    document.addEventListener('DOMContentLoaded', () => {
      const urlParams = new URLSearchParams(window.location.search);
      const mode = urlParams.get('mode') || 'password_reset';
      const email = urlParams.get('email') || sessionStorage.getItem('resetEmail');
      
      const changeEmailLink = document.querySelector('a[href="/Auth/Forgot-Password"]');
      if (mode === 'registration' && changeEmailLink) {
          changeEmailLink.href = '/Auth/Register';
      }

      if (email) {
        document.getElementById('displayEmail').textContent = email;
      }
      
      const inputs = document.querySelectorAll('.otp-input');
      inputs.forEach((input, index) => {
        input.addEventListener('keyup', (e) => {
          if (e.key === "Backspace") {
            if (input.value === '' && index > 0) {
              inputs[index - 1].focus();
            }
          } else if (input.value.length === 1 && index < inputs.length - 1) {
            inputs[index + 1].focus();
          }
        });
      });

      const form = document.getElementById('otpForm');
      const errorDiv = document.getElementById('otpError');
      const successDiv = document.getElementById('otpSuccess');
      const submitBtn = form.querySelector('button[type="submit"]');
      const btnText = submitBtn.innerHTML;
      
      const resendBtn = document.getElementById('resendBtn');
      const resendTimerSpan = document.getElementById('resendTimer');
      let countdown = 30;
      let timerInterval = setInterval(() => {
        countdown--;
        resendTimerSpan.textContent = `(${countdown})`;
        if (countdown <= 0) {
          clearInterval(timerInterval);
          resendBtn.disabled = false;
          resendTimerSpan.textContent = '';
        }
      }, 1000);

      resendBtn.addEventListener('click', async () => {
        if (!email) return;
        resendBtn.disabled = true;
        resendTimerSpan.textContent = '(...)';
        errorDiv.classList.add('hidden');
        successDiv.classList.add('hidden');
        try {
          const endpoint = mode === 'registration' ? '/auth/resend-registration-otp' : '/auth/forgot-password';
          const res = await window.api.post(endpoint, { email });
          if (res) {
            successDiv.textContent = res.message || 'OTP resent successfully!';
            successDiv.classList.remove('hidden');
            countdown = 30;
            resendTimerSpan.textContent = `(${countdown})`;
            timerInterval = setInterval(() => {
              countdown--;
              resendTimerSpan.textContent = `(${countdown})`;
              if (countdown <= 0) {
                clearInterval(timerInterval);
                resendBtn.disabled = false;
                resendTimerSpan.textContent = '';
              }
            }, 1000);
          }
        } catch (error) {
          errorDiv.textContent = error.message || 'Failed to resend OTP';
          errorDiv.classList.remove('hidden');
          resendBtn.disabled = false;
          resendTimerSpan.textContent = '';
        }
      });

      form.addEventListener('submit', async (e) => {
        e.preventDefault();
        errorDiv.classList.add('hidden');
        successDiv.classList.add('hidden');
        
        const otpStr = Array.from(inputs).map(i => i.value).join('');
        if (otpStr.length !== 6) {
          errorDiv.textContent = 'Please enter a 6-digit OTP';
          errorDiv.classList.remove('hidden');
          return;
        }

        if (!email) {
          errorDiv.textContent = 'Session expired. Please try again.';
          errorDiv.classList.remove('hidden');
          return;
        }

        submitBtn.innerHTML = 'Verifying...';
        submitBtn.disabled = true;

        try {
          if (mode === 'registration') {
              const res = await window.api.post('/auth/verify-registration-otp', { email, otp: otpStr });
              if (res) {
                successDiv.textContent = res.message || 'OTP Verified! Redirecting...';
                successDiv.classList.remove('hidden');
                setTimeout(() => {
                  window.location.href = '/Dashboard/Dashboard'; // The standard dashboard route
                }, 1000);
              }
          } else {
              const res = await window.api.post('/auth/verify-otp', { email, otp: otpStr });
              
              if (res && res.reset_token) {
                successDiv.textContent = res.message || 'OTP Verified!';
                successDiv.classList.remove('hidden');
                
                // Store reset token securely in sessionStorage
                sessionStorage.setItem('resetToken', res.reset_token);

                setTimeout(() => {
                  window.location.href = '/Auth/Reset-Password';
                }, 1000);
              } else {
                errorDiv.textContent = 'Invalid response from server. Missing reset token.';
                errorDiv.classList.remove('hidden');
                submitBtn.innerHTML = btnText;
                submitBtn.disabled = false;
              }
          }
        } catch (error) {
          errorDiv.textContent = error.message || 'Verification failed';
          errorDiv.classList.remove('hidden');
          submitBtn.innerHTML = btnText;
          submitBtn.disabled = false;
        }
      });
    });
  </script>
</body>
</html>
