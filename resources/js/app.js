import '@stisla/css';
import { Stisla } from '@stisla/vanilla';
import { createIcons, icons } from 'lucide';

window.lucide = {
    createIcons: (options = {}) => createIcons({ icons, ...options }),
};

const initIcons = () => createIcons({ icons });

document.addEventListener('DOMContentLoaded', initIcons);
document.addEventListener('livewire:navigated', initIcons);