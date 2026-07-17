import './bootstrap';
import 'preline';
import intersect from '@alpinejs/intersect';

document.addEventListener('alpine:init', () => {
    window.Alpine.plugin(intersect);
});