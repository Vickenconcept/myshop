import './bootstrap';

import Alpine from 'alpinejs';
import dropdown from './dropdown.js';
import animation from './components/animation.js';
// import { gsap } from "gsap";


window.Alpine = Alpine;

// Alpine.start()


    // Alpine.data('myData',myData);
    Alpine.data('dropdown',dropdown);
    Alpine.start();
    

