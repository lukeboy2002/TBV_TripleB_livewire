import './bootstrap';
import 'flowbite';
import 'remixicon/fonts/remixicon.css'
import './dark-mode.js';
import {initFlowbite} from "flowbite";

document.addEventListener('livewire:navigated', () => {
    initFlowbite();
})
