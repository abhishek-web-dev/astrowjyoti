document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    
    if (id && id !== 'undefined' && id !== 'null') {
        loadAstrologerProfile(id);
    } else {
        document.getElementById('astrologer-profile-container').innerHTML = `
          <div class="bg-white rounded-2xl p-8 shadow-sm border border-red-100 text-center">
            <h3 class="text-red-500 font-bold mb-4">Astrologer information could not be loaded.</h3>
            <a href="/Dashboard/Talk-to-Astrologer" class="inline-block bg-astro-orange hover:bg-orange-700 text-white font-bold py-2 px-6 rounded-lg transition-colors">Back to Astrologers</a>
          </div>`;
        
        const summaryName = document.getElementById('summary-name');
        if(summaryName) summaryName.textContent = 'Astrologer not found.';
    }
});

async function loadAstrologerProfile(id) {
    const container = document.getElementById('astrologer-profile-container');
    try {
        const res = await window.api.get(`/astrologers/${id}`);
        if (res && res.data) {
            const astro = res.data;
            const isOnline = astro.is_online ? `
              <div class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm px-2 py-1 rounded-full flex items-center gap-1.5 shadow-sm">
                <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                <span class="text-xs font-bold text-green-600">Online</span>
              </div>
            ` : '';

            const specializationsArray = typeof astro.specializations === 'string' 
                ? astro.specializations.split(',').map(s => s.trim()) 
                : (astro.specializations || []);
            const specializations = specializationsArray.map(s => 
                `<span class="px-2.5 py-1 bg-gray-50 text-gray-600 text-xs font-medium rounded-md border border-gray-200">${s}</span>`
            ).join('');

            container.innerHTML = `
          <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 sticky top-0">
            <div class="relative rounded-xl overflow-hidden mb-4 aspect-square">
              <img src="${astro.profile_image || '/lady.png'}" alt="${astro.name}" class="w-full h-full object-cover" onerror="this.src='https://placehold.co/400x400/ea580c/fff?text=A'">
              ${isOnline}
            </div>
            
            <div class="flex items-center gap-1 mb-1">
              <h2 class="text-lg font-bold text-gray-900">${astro.display_name || astro.name}</h2>
              <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            </div>
            
            <div class="flex items-center gap-2 text-sm text-gray-500 font-medium mb-4">
              <span class="flex items-center text-yellow-500">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                ${parseFloat(astro.rating).toFixed(1)} <span class="text-gray-400 ml-1">(${astro.total_reviews} reviews)</span>
              </span>
              <span class="w-1 h-1 rounded-full bg-gray-300"></span>
              <span>${astro.experience_years}+ Years Exp.</span>
            </div>
            
            <div class="flex flex-wrap gap-2 mb-6">
              ${specializations}
            </div>
            
            <div class="mb-6">
              <h3 class="font-bold text-gray-900 text-sm mb-2">About Me</h3>
              <p class="text-sm text-gray-600 leading-relaxed">
                ${astro.bio || 'Astrologer at Astrowjyoti.'}
              </p>
            </div>
            
            <div class="grid grid-cols-3 gap-2 py-4 border-y border-gray-100 mb-6 text-center">
              <div>
                <div class="font-bold text-astro-orange text-lg">${astro.total_reviews}+</div>
                <div class="text-xs text-gray-500 font-medium">Happy Clients</div>
              </div>
              <div>
                <div class="font-bold text-astro-orange text-lg">${astro.experience_years}+</div>
                <div class="text-xs text-gray-500 font-medium">Years Exp.</div>
              </div>
              <div>
                <div class="font-bold text-astro-orange text-lg">${parseFloat(astro.rating).toFixed(1)}</div>
                <div class="text-xs text-gray-500 font-medium">Rating</div>
              </div>
            </div>
            
            <ul class="space-y-3">
              <li class="flex items-start gap-2.5">
                <div class="w-5 h-5 rounded-full bg-green-50 flex items-center justify-center text-green-500 shrink-0 mt-0.5">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <span class="text-sm text-gray-700 font-medium">99% Positive Reviews</span>
              </li>
              <li class="flex items-start gap-2.5">
                <div class="w-5 h-5 rounded-full bg-green-50 flex items-center justify-center text-green-500 shrink-0 mt-0.5">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <span class="text-sm text-gray-700 font-medium">Private & Secure Consultations</span>
              </li>
              <li class="flex items-start gap-2.5">
                <div class="w-5 h-5 rounded-full bg-green-50 flex items-center justify-center text-green-500 shrink-0 mt-0.5">
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <span class="text-sm text-gray-700 font-medium">Guidance in Simple Language</span>
              </li>
            </ul>
          </div>
            `;
            
            // Also update the prices and disable unsupported types dynamically in the form!
            const typesStr = (astro.consultation_types || '').toLowerCase();
            const supportsChat = typesStr.includes('chat');
            const supportsAudio = typesStr.includes('audio') || typesStr.includes('call');
            const supportsVideo = typesStr.includes('video');

            const chatRadio = document.querySelector('input[name="consultation_type"][value="chat"]');
            if (chatRadio) {
                chatRadio.dataset.rate = astro.chat_price || 0;
                chatRadio.disabled = !supportsChat;
                // keep visible
            }
            
            const audioRadio = document.querySelector('input[name="consultation_type"][value="audio"]');
            if (audioRadio) {
                audioRadio.dataset.rate = astro.audio_price || 0;
                audioRadio.disabled = !supportsAudio;
            }

            const videoRadio = document.querySelector('input[name="consultation_type"][value="video"]');
            if (videoRadio) {
                videoRadio.dataset.rate = astro.video_price || 0;
                videoRadio.disabled = !supportsVideo;
            }

            // Update the UI texts
            const chatRateEl = document.getElementById('rate-chat');
            if (chatRateEl) chatRateEl.textContent = `₹${astro.chat_price || 0}/min`;
            
            const audioRateEl = document.getElementById('rate-audio');
            if (audioRateEl) audioRateEl.textContent = `₹${astro.audio_price || 0}/min`;
            
            const videoRateEl = document.getElementById('rate-video');
            if (videoRateEl) videoRateEl.textContent = `₹${astro.video_price || 0}/min`;
            
            const currentUrlParams = new URLSearchParams(window.location.search);
            const requestedType = currentUrlParams.get('type');
            
            // First uncheck everything
            const radios = document.querySelectorAll('input[name="consultation_type"]');
            radios.forEach(r => r.checked = false);

            let selected = false;

            if (requestedType) {
                const requestedRadio = document.querySelector(`input[name="consultation_type"][value="${requestedType}"]`);
                if (requestedRadio && !requestedRadio.disabled) {
                    requestedRadio.checked = true;
                    selected = true;
                }
            }
            
            if (!selected) {
                // Auto-select first available if none selected or if selected is disabled
                for (let r of radios) {
                    if (!r.disabled) {
                        r.checked = true;
                        break;
                    }
                }
            }
            
            const nextBtn = document.getElementById('next-btn-1');
            if(nextBtn) nextBtn.disabled = false;
            
            const proceedBtn = document.getElementById('proceed-payment-btn');
            if(proceedBtn) proceedBtn.disabled = false;
            
            const summaryImg = document.getElementById('summary-img');
            if (summaryImg) summaryImg.src = astro.profile_image || '/lady.png';
            
            const summaryName = document.getElementById('summary-name');
            if (summaryName) summaryName.textContent = astro.display_name || astro.name;
            
            const reviewAstroImg = document.getElementById('review-astro-img');
            if (reviewAstroImg) reviewAstroImg.src = astro.profile_image || '/lady.png';
            
            const reviewAstroName = document.getElementById('review-astro-name');
            if (reviewAstroName) reviewAstroName.textContent = astro.display_name || astro.name;
            
            const summaryMeta = document.getElementById('summary-meta');
            if (summaryMeta) summaryMeta.innerHTML = `
              <svg class="w-3.5 h-3.5 text-yellow-500 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              ${parseFloat(astro.rating).toFixed(1)} (${astro.total_reviews} reviews) <span class="mx-1">|</span> ${astro.experience_years}+ Years Exp.
            `;
            
            if(typeof window.generateBookingUI === 'function') {
                window.generateBookingUI(astro);
            }
            
            if(typeof updateSummary === 'function') {
                updateSummary();
            }

        } else {
            container.innerHTML = `<div class="p-5 text-red-500 text-center">Astrologer not found.</div>`;
        }
    } catch (err) {
        console.error(err);
        container.innerHTML = `<div class="p-5 text-red-500 text-center">Failed to load profile.</div>`;
    }
}
