
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 40);
});

//  borgir

const hamburger = document.getElementById('hamburger');
const navLinks  = document.getElementById('navLinks');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    navLinks.classList.toggle('open');
    document.body.style.overflow = navLinks.classList.contains('open') ? 'hidden' : '';
});

navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('open');
        navLinks.classList.remove('open');
        document.body.style.overflow = '';
    });
});

const observerOptions = { threshold: 0.15, rootMargin: '0px 0px -40px 0px' };

//fade-in
const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.timeline-item, .project-card, .edu-card, .about-card, .gallery-item').forEach(el => {
    el.classList.add('fade-in');
    fadeObserver.observe(el);
});

const skillObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const fill = entry.target;
            const width = fill.getAttribute('data-width');
            setTimeout(() => { fill.style.width = width + '%'; }, 200);
            skillObserver.unobserve(fill);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.skill-bar-fill').forEach(bar => skillObserver.observe(bar));

const timelineObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const index = parseInt(entry.target.getAttribute('data-index')) || 0;
            setTimeout(() => entry.target.classList.add('visible'), index * 150);
            timelineObserver.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.timeline-item').forEach(item => timelineObserver.observe(item));

const sections = document.querySelectorAll('section[id]');

const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const id = entry.target.getAttribute('id');
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.style.color = link.getAttribute('href') === `#${id}` ? 'var(--white)' : '';
            });
        }
    });
}, { threshold: 0.4 });

sections.forEach(section => sectionObserver.observe(section));

// formfadeout
const flash = document.querySelector('.flash');
if (flash) {
    setTimeout(() => {
        flash.style.transition = 'opacity 0.5s ease';
        flash.style.opacity = '0';
        setTimeout(() => flash.remove(), 500);
    }, 4000);
}

// lightbox
const lightbox      = document.getElementById('lightbox');
const lightboxImg   = document.getElementById('lightboxImg');
const lightboxCap   = document.getElementById('lightboxCaption');
const lightboxClose = document.getElementById('lightboxClose');
const lightboxPrev  = document.getElementById('lightboxPrev');
const lightboxNext  = document.getElementById('lightboxNext');

const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
let currentIndex = 0;

function openLightbox(index) {
    const item = galleryItems[index];
    const img  = item.querySelector('img');
    if (!img || img.style.display === 'none') return; // placeholder — nothing to show
    lightboxImg.src = img.src;
    lightboxImg.alt = img.alt;
    lightboxCap.textContent = item.dataset.caption || '';
    currentIndex = index;
    lightbox.classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
}

function showPrev() { openLightbox((currentIndex - 1 + galleryItems.length) % galleryItems.length); }
function showNext() { openLightbox((currentIndex + 1) % galleryItems.length); }

galleryItems.forEach((item, i) => item.addEventListener('click', () => openLightbox(i)));
lightboxClose.addEventListener('click', closeLightbox);
lightboxPrev.addEventListener('click', showPrev);
lightboxNext.addEventListener('click', showNext);
lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });

document.addEventListener('keydown', e => {
    if (!lightbox.classList.contains('open')) return;
    if (e.key === 'Escape')      closeLightbox();
    if (e.key === 'ArrowLeft')   showPrev();
    if (e.key === 'ArrowRight')  showNext();
});

//  butter label + title fade
const labelObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.2 });

document.querySelectorAll('.section-label, .section-title, .contact-subtitle').forEach(el => {
    el.classList.add('fade-in');
    labelObserver.observe(el);
});
