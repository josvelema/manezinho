const navBtn = document.querySelector("#menu-btn");
const nav = document.querySelector("nav");
const navLinks = document.querySelector(".nav-links");
const navLink = document.querySelectorAll(".nav-link");


// active page
navLink.forEach(link => {
  console.log((link.href , window.location.href));
  if(link.href === window.location.href) {
    link.setAttribute('aria-current', 'page')
  };
})

// --

navBtn.addEventListener('click' , () => {
  navLinks.classList.add('activated')
  const isExpanded = JSON.parse(navBtn.getAttribute('aria-expanded'));
  navBtn.setAttribute('aria-expanded' , !isExpanded);

  !isExpanded && nav.classList.add('active')

})

// window.addEventListener('DOMContentLoaded', () => {
// })


// INTERSECTION OBSERVERS
const navObserver = new IntersectionObserver((watchEntry) => {
  !watchEntry[0].isIntersecting ? nav.classList.add('active') : nav.classList.remove('active');
}, {threshold: 0.25});

// navObserver.observe(document.querySelector('header'));

const fadeUpObserver = new IntersectionObserver((elsToWatch) => {
  elsToWatch.forEach((el) => {
    if (el.isIntersecting) {
      el.target.classList.add('faded');
      fadeUpObserver.unobserve(el.target);
    }
  });
}, {threshold: 0.25});

document.querySelectorAll('.fade-up').forEach((item) => {
  fadeUpObserver.observe(item);
});


//! panels
const panels = document.querySelectorAll('.panel');

function toggleOpen() {
 
  this.classList.toggle('open');
}

function toggleActive(e) {
  console.log(e.propertyName);
  if (e.propertyName.includes('flex')) {
    this.classList.toggle('open-active');
  }
}

panels.forEach(panel => panel.addEventListener('click', toggleOpen));
panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));