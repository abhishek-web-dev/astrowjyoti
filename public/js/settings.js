// settings.js

document.addEventListener('DOMContentLoaded', () => {
    fetchProfile();
    fetchSettings();
    attachHandlers();
});

async function fetchProfile() {
    try {
        const response = await api.get('/user/profile');
        if (response.user) {
            const u = response.user;
            
            const nameEl = document.getElementById('profile-name');
            if (nameEl) nameEl.value = u.name || '';
            
            const emailEl = document.getElementById('profile-email');
            if (emailEl) emailEl.value = u.email || '';
            
            const phoneEl = document.getElementById('profile-phone');
            if (phoneEl) phoneEl.value = u.phone || '';
            
            const dobEl = document.getElementById('profile-dob');
            if (dobEl) dobEl.value = u.date_of_birth || '';

            const locEl = document.getElementById('profile-location');
            if (locEl) locEl.value = u.location || '';
            
            const genderEl = document.getElementById('profile-gender');
            if (genderEl && u.gender) {
                // capitalize first letter
                const gen = u.gender.charAt(0).toUpperCase() + u.gender.slice(1);
                genderEl.value = gen;
            }

            const sinceEl = document.getElementById('info-member-since');
            if (sinceEl && u.created_at) {
                const d = new Date(u.created_at);
                sinceEl.textContent = d.toLocaleDateString('en-IN', { day: 'numeric', month: 'long', year: 'numeric' });
            }

            const imgEl = document.getElementById('settings-profile-img');
            if (imgEl && u.profile_image) {
                imgEl.src = api.resolveImageUrl(u.profile_image);
            }

            const headerAvatar = document.getElementById('header-avatar');
            if (headerAvatar && u.profile_image) {
                headerAvatar.src = api.resolveImageUrl(u.profile_image);
            }

            const headerUsername = document.getElementById('header-username');
            if (headerUsername && u.name) {
                headerUsername.textContent = u.name.split(' ')[0]; // first name
            }

            // Estimate completion
            let filled = 0;
            let total = 7; // added location
            if(u.name) filled++;
            if(u.email) filled++;
            if(u.phone) filled++;
            if(u.date_of_birth) filled++;
            if(u.gender) filled++;
            if(u.location) filled++;
            if(u.profile_image) filled++;

            const pct = Math.round((filled / total) * 100);
            document.querySelectorAll('.percentage').forEach(el => el.textContent = pct + '%');
            
            // The sidebar completion
            document.querySelectorAll('.profile-completion-text').forEach(el => el.textContent = pct);

            const circle = document.querySelector('.circle');
            if (circle) {
                circle.style.strokeDasharray = `${pct}, 100`;
            }
        }
    } catch (error) {
        console.error('Error fetching profile:', error);
    }
}

async function fetchSettings() {
    try {
        const response = await api.get('/settings');
        if (response.data) {
            const s = response.data;
            const checkboxes = document.querySelectorAll('#sec-notifications input[type="checkbox"]');
            if (checkboxes.length >= 3) {
                checkboxes[0].checked = s.consultation_notifications;
                checkboxes[1].checked = s.promotional_notifications;
                checkboxes[2].checked = s.email_notifications;
            }

            const langSelects = document.querySelectorAll('.lang-select');
            langSelects.forEach(select => {
                select.value = s.language === 'hi' ? 'hi' : 'en';
                
                select.addEventListener('change', (e) => {
                    const code = e.target.value;
                    const name = code === 'hi' ? 'Hindi' : 'English';
                    if (window.setLang) window.setLang(code, name);
                });
            });
        }
    } catch (error) {
        console.error('Error fetching settings:', error);
    }
}

function attachHandlers() {
    // Save Profile
    document.getElementById('btn-save-profile')?.addEventListener('click', async (e) => {
        e.preventDefault();
        const btn = e.target;
        const oldText = btn.textContent;
        btn.textContent = 'Saving...';
        btn.disabled = true;

        const payload = {
            name: document.getElementById('profile-name')?.value,
            phone: document.getElementById('profile-phone')?.value,
            date_of_birth: document.getElementById('profile-dob')?.value,
            gender: document.getElementById('profile-gender')?.value?.toLowerCase(),
            location: document.getElementById('profile-location')?.value
        };

        try {
            const response = await api.put('/user/profile', payload);
            if(window.showNotification) window.showNotification('Profile updated successfully.', 'success');
            fetchProfile();
        } catch (error) {
            console.error(error);
            if(window.showNotification) window.showNotification(error.message || 'Unable to update profile. Please try again.', 'error');
        } finally {
            btn.textContent = oldText;
            btn.disabled = false;
        }
    });

    // Profile Photo Upload
    const photoBtn = document.getElementById('btn-change-photo');
    const photoInput = document.getElementById('profile-photo-input');

    if (photoBtn && photoInput) {
        photoBtn.addEventListener('click', (e) => {
            e.preventDefault();
            photoInput.click();
        });

        photoInput.addEventListener('change', async (e) => {
            const file = e.target.files[0];
            if (!file) return;

            const formData = new FormData();
            formData.append('profile_image', file);

            const oldText = photoBtn.textContent;
            photoBtn.textContent = 'Uploading...';
            photoBtn.disabled = true;

            try {
                const data = await api.post('/user/profile/image', formData);

                if(window.showNotification) window.showNotification('Profile photo updated successfully.', 'success');
                
                // Refresh data to get new URL
                fetchProfile();
                
            } catch (error) {
                console.error(error);
                if(window.showNotification) window.showNotification(error.message || 'Unable to upload photo.', 'error');
            } finally {
                photoBtn.textContent = oldText;
                photoBtn.disabled = false;
                photoInput.value = ''; // reset
            }
        });
    }

    // Update Password
    const pwBtn = document.getElementById('btn-update-password');
    if (pwBtn) {
        pwBtn.addEventListener('click', async (e) => {
            e.preventDefault();
            const current = document.getElementById('current-password');
            const newPw = document.getElementById('new-password');
            const confirmPw = document.getElementById('confirm-password');

            if (!current.value || !newPw.value || !confirmPw.value) {
                if(window.showNotification) window.showNotification('All password fields are required.', 'error');
                return;
            }

            const oldText = pwBtn.textContent;
            pwBtn.textContent = 'Updating...';
            pwBtn.disabled = true;

            try {
                await api.put('/user/password', {
                    current_password: current.value,
                    new_password: newPw.value,
                    confirm_password: confirmPw.value
                });
                
                if(window.showNotification) window.showNotification('Password updated successfully.', 'success');
                current.value = '';
                newPw.value = '';
                confirmPw.value = '';
            } catch (error) {
                console.error(error);
                if(window.showNotification) window.showNotification(error.message || 'Unable to update password.', 'error');
            } finally {
                pwBtn.textContent = oldText;
                pwBtn.disabled = false;
            }
        });
    }

    // Password Eye Toggles
    const togglePasswordVisibility = (btn, inputId) => {
        const input = document.getElementById(inputId);
        if (input) {
            if (input.type === 'password') {
                input.type = 'text';
                btn.innerHTML = `<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>`;
            } else {
                input.type = 'password';
                btn.innerHTML = `<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>`;
            }
        }
    };

    const curBtn = document.getElementById('current-password')?.nextElementSibling;
    if (curBtn) curBtn.addEventListener('click', (e) => { e.preventDefault(); togglePasswordVisibility(curBtn, 'current-password'); });
    
    const newBtn = document.getElementById('new-password')?.nextElementSibling;
    if (newBtn) newBtn.addEventListener('click', (e) => { e.preventDefault(); togglePasswordVisibility(newBtn, 'new-password'); });

    const confBtn = document.getElementById('confirm-password')?.nextElementSibling;
    if (confBtn) confBtn.addEventListener('click', (e) => { e.preventDefault(); togglePasswordVisibility(confBtn, 'confirm-password'); });

}
