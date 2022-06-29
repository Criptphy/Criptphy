// animations on web page
import ScrollReveal from 'scrollreveal';

export function animations() {
    ScrollReveal({ reset: true}).reveal('.reveal', { duration: 1300, interval: 100, scale: 0.85 });
    ScrollReveal({ reset: true}).reveal('.fade', { duration: 1500, interval: 100 });
}

