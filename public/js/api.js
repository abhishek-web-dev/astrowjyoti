const API_BASE_URL = 'http://localhost:8001/api';

const api = {
    async request(endpoint, options = {}) {
        const url = `${API_BASE_URL}${endpoint}`;
        const headers = {
            'Accept': 'application/json',
            ...(options.headers || {})
        };

        if (!(options.body instanceof FormData)) {
            if(!headers['Content-Type']) headers['Content-Type'] = 'application/json';
        }

        const config = {
            ...options,
            headers,
            credentials: 'include' // CRITICAL: This sends the PHP session cookie!
        };

        if (config.body && typeof config.body === 'object' && !(config.body instanceof FormData)) {
            config.body = JSON.stringify(config.body);
        }

        try {
            const response = await fetch(url, config);
            const data = await response.json().catch(() => null);

            if (!response.ok) {
                if (response.status === 401 && !window.location.pathname.toLowerCase().includes('/auth/') && !options.silent) {
                    window.location.href = '/Auth/Login';
                    throw { status: 401, message: 'Unauthorized, redirecting to login...' };
                }
                
                throw {
                    status: response.status,
                    message: data?.error || data?.message || 'An error occurred',
                    data: data
                };
            }

            return data;
        } catch (error) {
            console.error('API Request Error:', error);
            throw error;
        }
    },

    post(endpoint, data, options = {}) {
        return this.request(endpoint, { ...options, method: 'POST', body: data });
    },

    get(endpoint, options = {}) {
        return this.request(endpoint, { ...options, method: 'GET' });
    },

    put(endpoint, data, options = {}) {
        return this.request(endpoint, { ...options, method: 'PUT', body: data });
    },
    
    delete(endpoint, options = {}) {
        return this.request(endpoint, { ...options, method: 'DELETE' });
    },

    resolveImageUrl(path) {
        if (!path) return '';
        if (path.startsWith('/api/public/')) {
            return API_BASE_URL.replace(/\/api$/, '') + path.replace('/api', '');
        }
        return path;
    }
};

window.api = api;
