import '../sass/tabler.scss';
import './bootstrap';
import './tabler-init';
import { CountUp } from 'countup.js';
import ScrollReveal from 'scrollreveal'
import KUTE from 'kute.js'

// Count Up Animation
var coutUpElements = document.querySelectorAll(".count-up");
coutUpElements.forEach((e, i)=>{
    var countUpEndVal = e.getAttribute('data-count-up-end-val')
    var countUpAnmation = new CountUp(e, countUpEndVal,{duration: 0.75});
    if (!countUpAnmation.error) {
        countUpAnmation.start();
    } else {
      console.error(countUpAnmation.error);
    }
});

// Scroll Reveal
ScrollReveal().reveal('.scroll-reveal',{ delay: 200})


// KUTE
const kuteElements = document.querySelectorAll('[data-kute-text]');
kuteElements.forEach((e, i)=>{
    var kuteText = e.getAttribute('data-kute-text');
    var kuteAnimation = KUTE.to(e, {text: kuteText});
    kuteAnimation.start();
});
