/**
 * Shared functionality across all pages
 * Includes language switching, header/footer generation, and common utilities
 */

// DOM elements
const languageSwitcher = document.getElementById('language-switcher');
const currentLanguage = localStorage.getItem('language') || 'de';

// Initialize the page with translations
document.addEventListener('DOMContentLoaded', function() {
    loadTranslations(currentLanguage);
    setActiveLanguage(currentLanguage);
    initWhatsAppButton();
    initMobileMenu();
});


// Language switching functionality
function setActiveLanguage(lang) {
    const buttons = document.querySelectorAll('.lang-btn');
    buttons.forEach(btn => {
        btn.classList.remove('active');
        btn.classList.remove('btn-warning'); // Remove the yellowish color
        if (btn.dataset.lang === lang) {
            btn.classList.add('active');
            btn.classList.add('btn-warning'); // Add yellowish color to the selected button
        } else {
            btn.classList.add('btn-outline-light'); // Ensure other buttons are outlined
        }
    });
    localStorage.setItem('language', lang);
}


// Load translations from JSON files
async function loadTranslations(lang) {
    try {
        const response = await fetch(`assets/translations/${lang}.json`);
        if (!response.ok) throw new Error('Translation file not found');
        
        const translations = await response.json();
        applyTranslations(translations);
    } catch (error) {
        console.error('Error loading translations:', error);
        // Fallback to German if translation fails
        if (lang !== 'de') {
            loadTranslations('de');
        }
    }
}

// Apply translations to the page
function applyTranslations(translations) {
    // Translate all elements with data-translate attribute
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[key]) {
            element.textContent = translations[key];
        }
    });

    // Translate all elements with data-translate-placeholder attribute
    document.querySelectorAll('[data-translate-placeholder]').forEach(element => {
        const key = element.getAttribute('data-translate-placeholder');
        if (translations[key]) {
            element.setAttribute('placeholder', translations[key]);
        }
    });

    // Translate page title if available
    if (translations['pageTitle']) {
        document.title = translations['pageTitle'];
    }
}

// Initialize WhatsApp button
function initWhatsAppButton() {
    const whatsappBtn = document.createElement('a');
    whatsappBtn.href = 'https://wa.me/49123456789?text=' + encodeURIComponent('Hello, I have a question about your restaurant.');
    whatsappBtn.className = 'whatsapp-button';
    whatsappBtn.target = '_blank';
    whatsappBtn.innerHTML = '<i class="bi bi-whatsapp"></i>';
    document.body.appendChild(whatsappBtn);
}

// Mobile menu toggle
function initMobileMenu() {
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const navMenu = document.getElementById('main-nav');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
    }
}

// Event delegation for language switcher
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('lang-btn')) {
        e.preventDefault();
        const lang = e.target.dataset.lang;
        loadTranslations(lang);
        setActiveLanguage(lang);
    }
});

// Generate header HTML (to be inserted in each page)
function generateHeader() {
    return `
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5A3E1B;">
            <div class="container">
                <a class="navbar-brand text-white" href="index.html">
                    <img src="assets/img/logo/logo.png" alt="Restaurant Logo" height="50">
                </a>
                <button id="mobile-menu-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="main-nav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.html" data-translate="navHome">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="menu.html" data-translate="navMenu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="reservations.html" data-translate="navReservations">Reservations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="gallery.html" data-translate="navGallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="reviews.html" data-translate="navReviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.html" data-translate="navContact">Contact</a>
                        </li>
                    </ul>
                    <div class="language-switcher ms-3">
                        <button class="btn btn-sm lang-btn ${currentLanguage === 'de' ? 'btn-warning' : 'btn-outline-light'}" data-lang="de">DE</button>
                        <button class="btn btn-sm lang-btn ${currentLanguage === 'en' ? 'btn-warning' : 'btn-outline-light'}" data-lang="en">EN</button>
                        <button class="btn btn-sm lang-btn ${currentLanguage === 'am' ? 'btn-warning' : 'btn-outline-light'}" data-lang="am">አማ</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    `;
}






// Generate footer HTML (to be inserted in each page)
function generateFooter() {
    return `
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-heading" data-translate="footerHours">Opening Hours</h5>
                    <ul class="list-unstyled">
                        <li data-translate="footerMonFri">Monday - Friday: 11:00 - 22:00</li>
                        <li data-translate="footerSatSun">Saturday - Sunday: 12:00 - 23:00</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-heading" data-translate="footerContact">Contact</h5>
                    <address>
                        <p data-translate="footerAddress">123 Ethiopian Street, Berlin, Germany</p>
                        <p>Tel: <a href="tel:+49123456789">+49 123 456 789</a></p>
                        <p>Email: <a href="mailto:info@ethiopian-restaurant.com">info@ethiopian-restaurant.com</a></p>
                    </address>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-heading" data-translate="footerFollow">Follow Us</h5>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-tripadvisor"></i></a>
                    </div>
                    <div class="mt-3">
                        <a href="admin.html" class="btn btn-sm btn-outline-light">Admin</a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0" data-translate="footerCopyright">© 2023 Ethiopian Restaurant. All rights reserved.</p>
            </div>
        </div>
    </footer>
    `;
}