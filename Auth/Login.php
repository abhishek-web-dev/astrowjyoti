<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Astrowjyoti</title>
  <link rel="stylesheet" href="/src/style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body class="bg-[#FFFDF9] font-sans antialiased text-gray-800 flex flex-col min-h-screen">

  <!-- Navbar Component -->
  <div class="app-navbar"></div>

  <main class="flex-grow flex flex-col relative">
    
    <!-- Hero Background Section -->
    <section class="w-full relative flex-grow flex items-center justify-center bg-cover bg-center overflow-visible md:overflow-hidden py-8 md:py-0"
      style="background-image: url('/Auth/login-banner.png'); min-height: calc(100vh - 80px);">
      
      <!-- Gradient overlay removed as requested -->
      
      <div class="max-w-[1400px] w-full mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Bulletproof flex layout bypassing Tailwind JIT compilation bugs -->
        <div class="flex flex-col md:flex-row gap-8 lg:gap-16 items-center justify-center md:justify-between w-full">
          
          <!-- Left Column: Content -->
          <div class="hidden md:flex w-full flex-1 flex-col justify-center" style="padding-left: calc(max(40px, 12vw) + 150px);">
            
            <h1 class="text-4xl md:text-5xl lg:text-[56px] font-extrabold text-[#1E293B] leading-[1.15] mb-4" 
                style="font-family: 'Playfair Display', serif;">
              Welcome Back to <br />
              <span class="text-[#EA580C]">Astrowjyoti</span>
            </h1>
            
            <p class="text-slate-600 text-[15px] md:text-[16px] mb-6 leading-relaxed max-w-[480px]">
              Login to continue your spiritual journey and get personalised guidance from expert astrologers.
            </p>
            
            <!-- Features List -->
            <div class="space-y-4 mb-6 max-w-[480px]">
              
              <!-- Feature 1 -->
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-[#FFF5EB] flex items-center justify-center shrink-0 shadow-sm border border-orange-100">
                  <svg class="w-6 h-6 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-slate-900 font-bold text-[16px]">Talk to Expert Astrologers</h3>
                  <p class="text-slate-500 text-[14px] mt-0.5">Get real-time guidance on life's important decisions.</p>
                </div>
              </div>

              <!-- Feature 2 -->
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-[#FFF5EB] flex items-center justify-center shrink-0 shadow-sm border border-orange-100">
                  <svg class="w-6 h-6 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-slate-900 font-bold text-[16px]">Chat & Video Consultation</h3>
                  <p class="text-slate-500 text-[14px] mt-0.5">Connect with astrologers anytime, anywhere.</p>
                </div>
              </div>

              <!-- Feature 3 -->
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-[#FFF5EB] flex items-center justify-center shrink-0 shadow-sm border border-orange-100">
                  <svg class="w-6 h-6 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-slate-900 font-bold text-[16px]">Personalised Horoscope</h3>
                  <p class="text-slate-500 text-[14px] mt-0.5">Receive daily, weekly and monthly predictions.</p>
                </div>
              </div>

              <!-- Feature 4 -->
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full bg-[#FFF5EB] flex items-center justify-center shrink-0 shadow-sm border border-orange-100">
                  <svg class="w-6 h-6 text-[#EA580C]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                  </svg>
                </div>
                <div>
                  <h3 class="text-slate-900 font-bold text-[16px]">Access Premium Services</h3>
                  <p class="text-slate-500 text-[14px] mt-0.5">Kundli, Matching, Tarot and more.</p>
                </div>
              </div>
              
            </div>


          </div>

          <!-- Right Column: Login Card -->
          <div class="w-full shrink-0 relative" style="max-width: 500px;">
            
            <div class="bg-white rounded-[32px] p-8 sm:p-10 shadow-xl border border-gray-100 relative overflow-hidden">
              
              <!-- Decorative Mandala Watermark -->
              <div class="absolute -top-24 -right-24 w-64 h-64 opacity-[0.03] pointer-events-none">
                <svg viewBox="0 0 100 100" fill="currentColor" class="text-orange-900 w-full h-full">
                  <!-- Simple mandala placeholder path -->
                  <path d="M50 0 C60 20 80 20 100 50 C80 60 60 80 50 100 C40 80 20 60 0 50 C20 40 40 20 50 0 Z" />
                  <circle cx="50" cy="50" r="30" fill="none" stroke="currentColor" stroke-width="2"/>
                  <circle cx="50" cy="50" r="15" fill="none" stroke="currentColor" stroke-width="2"/>
                </svg>
              </div>

              <div class="relative z-10 text-center mb-8">
                <h2 class="text-[28px] md:text-[32px] font-bold text-slate-900 mb-3" style="font-family: 'Playfair Display', serif;">
                  Login to Your Account
                </h2>
                <p class="text-slate-500 text-[14.5px] leading-relaxed px-4">
                  Access your consultations, horoscope, and personalised astrology services.
                </p>
              </div>

              <form id="loginForm" action="#" method="POST" class="space-y-5 relative z-10">
                <div id="loginError" class="hidden text-red-600 text-sm mb-4 bg-red-50 p-3 rounded-lg"></div>
                
                <!-- Email Field -->
                <div>
                  <label for="email" class="block text-[14px] font-semibold text-slate-800 mb-2">Email or Mobile Number</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" style="padding-left: 16px;">
                      <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                    </div>
                    <input type="text" id="email" name="email" autocomplete="username"
                      class="block w-full border border-gray-200 rounded-xl text-slate-900 text-[15px] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
                      style="padding: 14px 16px 14px 44px;"
                      placeholder="Enter your email or mobile number" required>
                  </div>
                </div>

                <!-- Password Field -->
                <div>
                  <label for="password" class="block text-[14px] font-semibold text-slate-800 mb-2">Password</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" style="padding-left: 16px;">
                      <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                      </svg>
                    </div>
                    <input type="password" id="password" name="password" autocomplete="current-password"
                      class="block w-full border border-gray-200 rounded-xl text-slate-900 text-[15px] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
                      style="padding: 14px 48px 14px 44px;"
                      placeholder="Enter your password" required>
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none" style="padding-right: 16px;">
                      <svg id="eyeIcon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                      </svg>
                    </button>
                  </div>
                </div>

                <div class="flex justify-end pt-1">
                  <a href="/Auth/Forgot-Password" class="text-[13.5px] font-semibold text-[#EA580C] hover:text-orange-700 transition-colors">
                    Forgot Password?
                  </a>
                </div>

                <button type="submit" 
                  class="w-full flex items-center justify-center gap-2 bg-[#EA580C] text-white py-3.5 px-4 rounded-xl font-bold text-[16px] hover:bg-orange-700 hover:shadow-md transition-all mt-6">
                  Login 
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                  </svg>
                </button>
              </form>

              <!-- Sign Up Link -->
              <p class="text-center text-slate-600 text-[14.5px] mt-6">
                Don't have an account? 
                <a href="/Auth/Register" class="font-bold text-[#EA580C] hover:text-orange-700 ml-1 transition-colors">Sign Up</a>
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
    document.addEventListener('DOMContentLoaded', () => {
      const loginForm = document.getElementById('loginForm');
      const loginError = document.getElementById('loginError');
      const submitBtn = loginForm.querySelector('button[type="submit"]');
      const btnText = submitBtn.innerHTML;

      loginForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        loginError.classList.add('hidden');
        
        submitBtn.innerHTML = 'Logging in...';
        submitBtn.disabled = true;

        const emailOrPhone = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;

        try {
          const res = await window.api.post('/auth/login', {
            email: emailOrPhone, // Backend expects email (but might handle phone via login logic if it's there. Actually, backend uses 'email' field in JSON and checks against both).
            password
          });
          
          if (res && res.message) {
            const urlParams = new URLSearchParams(window.location.search);
            const redirectUrl = urlParams.get('redirect');
            if (redirectUrl && redirectUrl.startsWith('/') && !redirectUrl.startsWith('//')) {
                window.location.href = redirectUrl;
            } else {
                window.location.href = '/Dashboard/Dashboard';
            }
          }
        } catch (error) {
          loginError.textContent = error.message || 'Login failed';
          loginError.classList.remove('hidden');
          submitBtn.innerHTML = btnText;
          submitBtn.disabled = false;
        }
      });
    });
  </script>
  <!-- Password Toggle Script -->
  <script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      
      // Swap icon (eye to eye-off)
      if (type === 'text') {
        eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />';
      } else {
        eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />';
      }
    });
  </script>
</body>

</html>
