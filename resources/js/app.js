import './bootstrap';

import Alpine from 'alpinejs';
import dropdown from './dropdown.js';
import animation from './components/animation.js';
// import { gsap } from "gsap";


window.Alpine = Alpine;

// Alpine.start();
export default function() {

    // let box = document.querySelector('.box')
    const box = document.getElementById('box');
    box.addEventListener('click', function (e) { 
        e.preventDefault();
        
        console.log('hello world');
     });
    gsap.to(".box", { x: 300 });
    // gsap.to(".box", {rotation: 27, x: 100, duration: 1});
    
}


    // Alpine.data('myData',myData);
    Alpine.data('dropdown',dropdown);
    Alpine.start();
    

