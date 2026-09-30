document.addEventListener('DOMContentLoaded', () => {
    const gridContainer = document.getElementById('astrologer-grid');
    if (!gridContainer) return;

    loadAstrologers();

    const filters = document.querySelectorAll('.filter-input');
    filters.forEach(f => f.addEventListener('change', () => {
        if (f.type === 'radio') {
            const group = f.closest('.filter-group');
            if (group) {
                group.querySelectorAll('label').forEach(lbl => {
                    const box = lbl.querySelector('.box-indicator');
                    if (box) {
                        if (lbl.querySelector('input').checked) {
                            box.classList.add('bg-astro-orange', 'border-astro-orange', 'text-white');
                            box.classList.remove('border-gray-300', 'text-transparent', 'group-hover:border-astro-orange');
                        } else {
                            box.classList.remove('bg-astro-orange', 'border-astro-orange', 'text-white');
                            box.classList.add('border-gray-300', 'text-transparent', 'group-hover:border-astro-orange');
                        }
                    }
                });
            }
        }
        
        if (f.id === 'availability_toggle') {
            const track = document.getElementById('availability_track');
            const knob = document.getElementById('availability_knob');
            if (f.checked) {
                track.classList.add('bg-astro-orange');
                track.classList.remove('bg-gray-300');
                knob.classList.add('translate-x-4');
                knob.classList.remove('translate-x-0');
            } else {
                track.classList.remove('bg-astro-orange');
                track.classList.add('bg-gray-300');
                knob.classList.remove('translate-x-4');
                knob.classList.add('translate-x-0');
            }
        }

        loadAstrologers();
    }));

    const clearBtn = document.getElementById('clear_all_filters');
    if (clearBtn) {
        clearBtn.addEventListener('click', () => {
            document.querySelectorAll('input[type="radio"][value=""]').forEach(r => r.checked = true);
            const toggle = document.getElementById('availability_toggle');
            if (toggle) toggle.checked = false; // Reset to false or true based on default? Usually false, but HTML had it true. Let's set it to false so it shows ALL.
            
            document.querySelectorAll('input[type="radio"]').forEach(f => {
                f.dispatchEvent(new Event('change'));
            });
            if (toggle) toggle.dispatchEvent(new Event('change'));
        });
    }

    const searchInput = document.querySelector('input[placeholder="Search by name..."]');
    if (searchInput) {
        let debounceTimer;
        searchInput.addEventListener('input', () => {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(loadAstrologers, 300);
        });
    }
});

let isProcessingFav = false;

async function toggleFavorite(id, btnElement) {
    if(isProcessingFav) return;
    isProcessingFav = true;

    const svg = btnElement.querySelector('svg');
    const isFav = svg.classList.contains('fill-current');
    
    try {
        if (isFav) {
            await window.api.delete(`/favorites/${id}`);
            svg.classList.remove('fill-current', 'text-[#EF4444]');
            svg.classList.add('text-gray-400');
        } else {
            await window.api.post(`/favorites/${id}`);
            svg.classList.add('fill-current', 'text-[#EF4444]');
            svg.classList.remove('text-gray-400');
        }
    } catch(err) {
        console.error("Failed to toggle favorite", err);
        if (window.showNotification) window.showNotification("Failed to update favorite status.", "error");
    } finally {
        isProcessingFav = false;
    }
}

async function loadAstrologers() {
    const gridContainer = document.getElementById('astrologer-grid');
    
    // Show Loading
    gridContainer.innerHTML = Array.from({length: 8}).map(() => `
        <div class="bg-[#FFFDF9] rounded-3xl border border-orange-100 shadow-sm p-4 animate-pulse flex flex-col" style="max-width: 250px; height: 350px;">
            <div class="w-full rounded-2xl bg-gray-200" style="height: 160px;"></div>
            <div class="pt-4 flex flex-col gap-2">
                <div class="h-4 bg-gray-200 rounded w-3/4"></div>
                <div class="h-3 bg-gray-200 rounded w-1/2"></div>
                <div class="h-3 bg-gray-200 rounded w-full mt-4"></div>
                <div class="h-8 bg-gray-200 rounded-full w-full mt-auto"></div>
            </div>
        </div>
    `).join('');

    try {
        const specEl = document.querySelector('input[name="specialization"]:checked');
        const spec = specEl ? specEl.value : '';

        const langEl = document.querySelector('input[name="language"]:checked');
        const lang = langEl ? langEl.value : '';

        const availEl = document.getElementById('availability_toggle');
        let isAvail = '';
        if (availEl && availEl.checked) {
            isAvail = 'true';
        } else if (availEl && !availEl.checked) {
            isAvail = 'false';
        }

        const searchEl = document.querySelector('input[placeholder="Search by name..."]');
        const search = searchEl ? searchEl.value.trim() : '';

        const params = new URLSearchParams();
        params.append('consultation_type', 'Chat'); // FORCED
        if(spec) params.append('specialization', spec);
        if(lang) params.append('language', lang);
        if(isAvail !== '') params.append('availability', isAvail);
        if(search) params.append('search', search);

        const url = `/astrologers?${params.toString()}`;
        const res = await window.api.get(url);
        
        const countEl = document.getElementById('astrologer-count');
        if (countEl) {
            countEl.textContent = `(${res?.pagination?.total || 0})`;
        }

        if (res && res.data && res.data.length > 0) {
            gridContainer.innerHTML = res.data.map(astro => `
              <div class="bg-[#FFFDF9] rounded-3xl border border-orange-100 shadow-sm p-4 relative flex-col hover:shadow-md transition-shadow group w-full mx-auto" style="max-width: 250px; display: flex;">
                <div class="w-full rounded-2xl bg-orange-50 overflow-hidden relative flex justify-center items-end border border-orange-50/50" style="height: 160px; position: relative;">
                  <div class="absolute inset-0 bg-gradient-to-b from-orange-100/40 to-transparent"></div>
                  
                  ${astro.is_available ? `
                  <span class="shadow-sm border border-green-100" style="position: absolute; top: 10px; left: 10px; background-color: #F0FDF4; color: #15803D; font-size: 11px; font-weight: bold; padding: 4px 8px; border-radius: 9999px; display: flex; align-items: center; gap: 4px; z-index: 10;">
                    <span style="width: 6px; height: 6px; border-radius: 50%; background-color: #22C55E;"></span> Online
                  </span>` : ''}

                  <button onclick="event.stopPropagation(); toggleFavorite(${astro.astrologer_id || astro.id}, this)" class="shadow-sm border border-gray-100 transition-colors" style="position: absolute; top: 10px; right: 10px; background-color: white; padding: 6px; border-radius: 50%; z-index: 10; cursor: pointer;">
                    <svg style="width: 18px; height: 18px;" class="text-gray-400 fav-icon transition-colors" data-astro-id="${astro.astrologer_id || astro.id}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                  </button>

                  <img src="${astro.profile_image || '/lady.png'}" alt="${astro.name}" class="w-full h-full relative z-0 transition-transform duration-500" style="width: 100%; height: 100%; object-fit: cover; object-position: top; z-index: 0;" onerror="this.src='https://placehold.co/200x200/ea580c/fff?text=A'">
                </div>

                <div class="pt-4 flex flex-col flex-grow cursor-pointer" onclick="window.location.href='/Booking/Consultation-Form?id=${astro.id}&type=chat'">
                  <h3 class="font-bold text-gray-900 leading-tight truncate" style="font-size: 16px;">${astro.display_name || astro.name}</h3>
                  <p class="text-gray-500 font-medium mt-1 truncate" style="font-size: 12px;">${(typeof astro.specializations === 'string' ? astro.specializations.split(',')[0].trim() : (astro.specializations?.[0])) || 'Astrology'} | ${astro.experience_years}+ Years</p>

                  <div class="flex items-center gap-1" style="margin-top: 6px;">
                    <svg style="width: 14px; height: 14px; color: #F97316; fill: #F97316;" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <span class="font-bold text-gray-900" style="font-size: 13px;">${parseFloat(astro.rating).toFixed(1)}</span>
                    <span class="font-medium text-gray-400" style="font-size: 11px;">(${astro.total_reviews})</span>
                  </div>

                  <div class="flex items-center gap-1 text-gray-500 font-medium truncate" style="margin-top: 4px; font-size: 12px;">
                    <svg style="width: 14px; height: 14px; min-width: 14px;" class="text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    ${(typeof astro.languages === 'string' ? astro.languages.split('\,').map(s=>s.trim()) : (astro.languages || [])).slice(0, 2).join(', ')}
                  </div>

                  <div class="flex flex-wrap gap-1 mb-3 mt-3">
                    ${(typeof astro.specializations === 'string' ? astro.specializations.split('\,').map(s=>s.trim()) : (astro.specializations || [])).slice(0, 3).map(s => `<span class="bg-gray-50 border border-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full whitespace-nowrap" style="font-size: 11px;">${s}</span>`).join('')}
                  </div>

                  <div class="mt-auto flex items-center justify-between gap-2">
                    <div class="font-bold text-gray-900" style="font-size: 16px;">₹ ${astro.chat_price || astro.video_price || astro.audio_price || 0}<span class="text-gray-500 font-medium" style="font-size: 12px;">/min</span></div>
                  </div>

                  <button onclick="event.stopPropagation(); window.location.href='/Booking/Consultation-Form?id=${astro.id}&type=chat'" class="w-full text-white font-bold rounded-full flex items-center justify-center gap-1.5 transition-colors shadow-sm hover:bg-orange-700" style="margin-top: 12px; padding: 10px 0; background-color: #EA580C; font-size: 14px;">
                    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    Chat
                  </button>
                </div>
              </div>
            `).join('');
            
            // Check favorite statuses in background for logged-in users
            setTimeout(async () => {
                try {
                    const favsRes = await window.api.get('/favorites', { silent: true });
                    if(favsRes && favsRes.data) {
                        const favIds = new Set(favsRes.data.map(f => f.astrologer_id || f.id));
                        document.querySelectorAll('.fav-icon').forEach(icon => {
                            const id = parseInt(icon.getAttribute('data-astro-id'));
                            if (favIds.has(id)) {
                                icon.classList.add('fill-current', 'text-[#EF4444]');
                                icon.classList.remove('text-gray-400');
                            }
                        });
                    }
                } catch(e) {
                    // Not logged in or error, ignore silent fail
                }
            }, 100);
            
        } else {
            gridContainer.innerHTML = `
              <div class="col-span-full flex flex-col items-center justify-center bg-white rounded-2xl shadow-sm border border-gray-100 p-12 text-center mt-4">
                  <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                  </div>
                  <h3 class="text-xl font-bold text-gray-900 mb-2">No chat astrologers available</h3>
                  <p class="text-gray-500 max-w-sm mx-auto">Please check again later or explore other consultation options.</p>
              </div>`;
        }
    } catch (err) {
        console.error('Error loading astrologers:', err);
        gridContainer.innerHTML = `<div class="col-span-full py-12 text-center text-red-500">Failed to load astrologers.</div>`;
    }
}
