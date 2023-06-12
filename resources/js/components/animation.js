import { gsap } from "gsap";
// import { PixiPlugin } from "gsap/PixiPlugin.js";
// import { MotionPathPlugin } from "gsap/MotionPathPlugin.js";
// gsap.registerPlugin(PixiPlugin, MotionPathPlugin);


export default function() {

    let box = document.querySelector('.box')
    box.addEventListener('hover', function () { 
        console.log('hello world');
     });
    gsap.to(".box", { x: 300 });
    // gsap.to(".box", {rotation: 27, x: 100, duration: 1});
    
}