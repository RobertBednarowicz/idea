import Alpine from 'alpinejs';
import axios from 'axios';

Alpine.store('theme', {
    on: localStorage.getItem('darkMode') !== 'false',

    toggle() {
        this.on = !this.on;
        localStorage.setItem('darkMode', this.on);
    }
});

window.Alpine = Alpine;
Alpine.start();

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


