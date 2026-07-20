/* ============================================================
   BANAVO — Premium Construction Website
   JavaScript Interactions & Animations
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initScrollReveal();
    initCounterAnimation();
    initPortfolioFilter();
    initSmoothScroll();
    initMobileMenu();
    initParallax();
});


/* --- NAVBAR SCROLL EFFECT --- */
function initNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    let lastScroll = 0;
    let ticking = false;

    function updateNavbar() {
        const scrollY = window.scrollY;

        if (scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        lastScroll = scrollY;
        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    }, { passive: true });

    // Initialize on load
    updateNavbar();
}


/* --- SCROLL REVEAL ANIMATIONS --- */
function initScrollReveal() {
    const reveals = document.querySelectorAll('.reveal');
    if (reveals.length === 0) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -60px 0px'
    });

    reveals.forEach(el => observer.observe(el));
}


/* --- COUNTER ANIMATION --- */
function initCounterAnimation() {
    const counters = document.querySelectorAll('.trust-number[data-count]');
    if (counters.length === 0) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
}

function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-count'), 10);
    const duration = 2000; // 2 seconds
    const startTime = performance.now();
    const startValue = 0;

    function easeOutQuart(t) {
        return 1 - Math.pow(1 - t, 4);
    }

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easedProgress = easeOutQuart(progress);
        const currentValue = Math.floor(startValue + (target - startValue) * easedProgress);

        element.textContent = currentValue + '+';

        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            element.textContent = target + '+';
        }
    }

    requestAnimationFrame(update);
}


/* --- PORTFOLIO FILTER --- */
function initPortfolioFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');
    
    if (filterButtons.length === 0 || portfolioCards.length === 0) return;

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            // Filter cards with animation
            portfolioCards.forEach((card, index) => {
                const category = card.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    card.classList.remove('hidden');
                    card.style.animation = 'none';
                    card.offsetHeight; // Trigger reflow
                    card.style.animation = `portfolioFadeIn 0.4s ease-out ${index * 0.08}s forwards`;
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
}


/* --- SMOOTH SCROLL --- */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            e.preventDefault();

            const target = document.querySelector(href);
            if (!target) return;

            const navbarHeight = document.getElementById('navbar')?.offsetHeight || 80;
            const targetPosition = target.getBoundingClientRect().top + window.scrollY - navbarHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            const navbarMenu = document.getElementById('navbarMenu');
            const navbarToggle = document.getElementById('navbarToggle');
            const navbar = document.getElementById('navbar');
            if (navbarMenu?.classList.contains('active')) {
                navbarMenu.classList.remove('active');
                navbarToggle?.classList.remove('active');
                navbar?.classList.remove('menu-open');
                document.body.style.overflow = '';
            }
        });
    });
}


/* --- MOBILE MENU --- */
function initMobileMenu() {
    const toggle = document.getElementById('navbarToggle');
    const menu = document.getElementById('navbarMenu');
    const navbar = document.getElementById('navbar');
    
    if (!toggle || !menu) return;

    toggle.addEventListener('click', () => {
        toggle.classList.toggle('active');
        menu.classList.toggle('active');
        if (navbar) navbar.classList.toggle('menu-open');
        document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
    });
}


/* --- PARALLAX EFFECT ON HERO --- */
function initParallax() {
    const heroImg = document.querySelector('.hero-bg img');
    if (!heroImg) return;

    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(() => {
                const scrollY = window.scrollY;
                const heroHeight = document.querySelector('.hero')?.offsetHeight || 800;
                
                if (scrollY < heroHeight) {
                    const translate = scrollY * 0.3;
                    heroImg.style.transform = `translateY(${translate}px) scale(1.1)`;
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
}
