const hamburger = document.querySelector(".wrapper-hamburger");
const nav = document.querySelector("nav");
let state = false;

hamburger.addEventListener("click", () => {
    if (state) {
        hamburger.classList.remove("is-active");
        nav.classList.remove("is-open");
        state = false;
    } else {
        hamburger.classList.add("is-active");
        nav.classList.add("is-open");
        state = true;
    }
});

window.addEventListener('resize', () => {
    if(window.innerWidth > 768){
        hamburger.classList.remove("is-active");
        nav.classList.remove("is-open");
        state = false;
    }
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e){
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({ behavior: 'smooth' });
    });
});

const sections = document.querySelectorAll("section");
const navDots = document.querySelectorAll(".side-nav .dot");

window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 300;
        const sectionHeight = section.clientHeight;

        if(window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight - 150){
            current = section.getAttribute("id");
        }
    });

    if(window.scrollY < 100){ current = "Home"; }

    navDots.forEach(dot => {
        dot.classList.remove("active");
        if(dot.getAttribute("data-section") === current){
            dot.classList.add("active");
        }
    });
});