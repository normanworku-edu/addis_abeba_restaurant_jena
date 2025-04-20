/**
 * Admin panel functionality for the Ethiopian restaurant website
 * Includes menu management, announcements, reviews, and translations
 */

document.addEventListener('DOMContentLoaded', function() {
    // Check if user is logged in
    if (!isAdminLoggedIn() && !window.location.hash.includes('#login')) {
        window.location.href = 'admin.html#login';
    }

    // Show appropriate tab based on URL hash
    if (window.location.hash) {
        const tabTrigger = new bootstrap.Tab(document.querySelector(`a[href="${window.location.hash}"]`));
        tabTrigger.show();
    }

    // Initialize admin functionality
    if (isAdminLoggedIn()) {
        initMenuManagement();
        initAnnouncements();
        initReviews();
        initTranslations();
    } else {
        initLoginForm();
    }
});

// Check if admin is logged in
function isAdminLoggedIn() {
    return localStorage.getItem('adminLoggedIn') === 'true';
}

// Initialize login form
function initLoginForm() {
    const loginForm = document.getElementById('login-form');
    if (!loginForm) return;

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const username = document.getElementById('admin-username').value;
        const password = document.getElementById('admin-password').value;
        
        // In a real app, this would be more secure
        if (username === 'admin' && password === 'ethiopia123') {
            localStorage.setItem('adminLoggedIn', 'true');
            window.location.href = 'admin.html';
        } else {
            alert('Invalid credentials. Please try again.');
        }
    });
}

// Initialize menu management
function initMenuManagement() {
    loadMenuItems();
    
    // Add event listener for add menu item button
    document.getElementById('add-menu-item-btn').addEventListener('click', function() {
        showMenuItemModal();
    });
}

// Load menu items from localStorage
function loadMenuItems() {
    const menuItems = JSON.parse(localStorage.getItem('menuItems')) || [];
    const tableBody = document.getElementById('menu-items-table');
    
    tableBody.innerHTML = menuItems.map(item => `
        <tr>
            <td>${item.name.en}</td>
            <td>${item.category}</td>
            <td>€${item.price}</td>
            <td>
                <button class="btn btn-sm btn-primary me-2 edit-item" data-id="${item.id}">
                    <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-danger delete-item" data-id="${item.id}">
                    <i class="bi bi-trash"></i>
                </button>
            </td>
        </tr>
    `).join('');
    
    // Add event listeners to edit and delete buttons
    document.querySelectorAll('.edit-item').forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            editMenuItem(itemId);
        });
    });
    
    document.querySelectorAll('.delete-item').forEach(btn => {
        btn.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            deleteMenuItem(itemId);
        });
    });
}

// Show menu item modal for adding/editing
function showMenuItemModal(item = null) {
    const modal = new bootstrap.Modal(document.getElementById('menu-item-modal'));
    const form = document.getElementById('menu-item-form');
    
    if (item) {
        // Editing existing item
        form.dataset.id = item.id;
        document.getElementById('menu-item-name-en').value = item.name.en;
        document.getElementById('menu-item-name-de').value = item.name.de;
        document.getElementById('menu-item-name-am').value = item.name.am;
        document.getElementById('menu-item-category').value = item.category;
        document.getElementById('menu-item-price').value = item.price;
        document.getElementById('menu-item-image').value = item.image;
        document.getElementById('menu-item-desc-en').value = item.description.en;
        document.getElementById('menu-item-desc-de').value = item.description.de;
        document.getElementById('menu-item-desc-am').value = item.description.am;
        document.getElementById('modal-title').textContent = 'Edit Menu Item';
    } else {
        // Adding new item
        form.reset();
        form.removeAttribute('data-id');
        document.getElementById('modal-title').textContent = 'Add Menu Item';
    }
    
    modal.show();
}

// Save menu item
function saveMenuItem() {
    const form = document.getElementById('menu-item-form');
    const menuItems = JSON.parse(localStorage.getItem('menuItems')) || [];
    
    const menuItem = {
        id: form.dataset.id || Date.now().toString(),
        name: {
            en: document.getElementById('menu-item-name-en').value,
            de: document.getElementById('menu-item-name-de').value,
            am: document.getElementById('menu-item-name-am').value
        },
        category: document.getElementById('menu-item-category').value,
        price: document.getElementById('menu-item-price').value,
        image: document.getElementById('menu-item-image').value,
        description: {
            en: document.getElementById('menu-item-desc-en').value,
            de: document.getElementById('menu-item-desc-de').value,
            am: document.getElementById('menu-item-desc-am').value
        },
        allergens: [] // Would add allergen selection in a complete implementation
    };
    
    if (form.dataset.id) {
        // Update existing item
        const index = menuItems.findIndex(item => item.id === form.dataset.id);
        if (index !== -1) {
            menuItems[index] = menuItem;
        }
    } else {
        // Add new item
        menuItems.push(menuItem);
    }
    
    localStorage.setItem('menuItems', JSON.stringify(menuItems));
    loadMenuItems();
    
    const modal = bootstrap.Modal.getInstance(document.getElementById('menu-item-modal'));
    modal.hide();
}

// Delete menu item
function deleteMenuItem(id) {
    if (confirm('Are you sure you want to delete this menu item?')) {
        const menuItems = JSON.parse(localStorage.getItem('menuItems')) || [];
        const updatedItems = menuItems.filter(item => item.id !== id);
        localStorage.setItem('menuItems', JSON.stringify(updatedItems));
        loadMenuItems();
    }
}

// Initialize announcements
function initAnnouncements() {
    loadAnnouncements();
    
    document.getElementById('announcement-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const text = document.getElementById('announcement-text').value;
        const announcements = JSON.parse(localStorage.getItem('announcements')) || [];
        
        announcements.push({
            id: Date.now().toString(),
            text: {
                en: text,
                de: text,
                am: text
            },
            date: new Date().toISOString()
        });
        
        localStorage.setItem('announcements', JSON.stringify(announcements));
        loadAnnouncements();
        this.reset();
    });
}

// Load announcements
function loadAnnouncements() {
    const announcements = JSON.parse(localStorage.getItem('announcements')) || [];
    const tableBody = document.getElementById('announcements-table');
    
    tableBody.innerHTML = announcements.map(announcement => `
        <tr>
            <td>${announcement.text.en}</td>
            <td>
                <button class="btn btn-sm btn-danger delete-announcement" data-id="${announcement.id}">
                    <i class="bi bi-trash"></i>
                </button>
            </td>
        </tr>
    `).join('');
    
    document.querySelectorAll('.delete-announcement').forEach(btn => {
        btn.addEventListener('click', function() {
            deleteAnnouncement(this.getAttribute('data-id'));
        });
    });
}

// Delete announcement
function deleteAnnouncement(id) {
    if (confirm('Are you sure you want to delete this announcement?')) {
        const announcements = JSON.parse(localStorage.getItem('announcements')) || [];
        const updatedAnnouncements = announcements.filter(a => a.id !== id);
        localStorage.setItem('announcements', JSON.stringify(updatedAnnouncements));
        loadAnnouncements();
    }
}

// Initialize reviews
function initReviews() {
    loadReviews();
}

// Load reviews
function loadReviews() {
    const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
    const tableBody = document.getElementById('reviews-table'));
    
    tableBody.innerHTML = reviews.map(review => `
        <tr>
            <td>${review.name}</td>
            <td>${'★'.repeat(review.rating)}${'☆'.repeat(5 - review.rating)}</td>
            <td>${review.text.en}</td>
            <td>${review.approved ? 'Approved' : 'Pending'}</td>
            <td>
                ${!review.approved ? `
                <button class="btn btn-sm btn-success me-2 approve-review" data-id="${review.id}">
                    <i class="bi bi-check"></i>
                </button>
                ` : ''}
                <button class="btn btn-sm btn-danger delete-review" data-id="${review.id}">
                    <i class="bi bi-trash"></i>
                </button>
            </td>
        </tr>
    `).join('');
    
    document.querySelectorAll('.approve-review').forEach(btn => {
        btn.addEventListener('click', function() {
            approveReview(this.getAttribute('data-id'));
        });
    });
    
    document.querySelectorAll('.delete-review').forEach(btn => {
        btn.addEventListener('click', function() {
            deleteReview(this.getAttribute('data-id'));
        });
    });
}

// Approve review
function approveReview(id) {
    const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
    const index = reviews.findIndex(r => r.id === id);
    
    if (index !== -1) {
        reviews[index].approved = true;
        localStorage.setItem('reviews', JSON.stringify(reviews));
        loadReviews();
    }
}

// Delete review
function deleteReview(id) {
    if (confirm('Are you sure you want to delete this review?')) {
        const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        const updatedReviews = reviews.filter(r => r.id !== id);
        localStorage.setItem('reviews', JSON.stringify(updatedReviews));
        loadReviews();
    }
}

// Initialize translations
function initTranslations() {
    loadTranslationKeys();
    
    document.getElementById('translation-key').addEventListener('change', function() {
        loadTranslation(this.value);
    });
    
    document.getElementById('save-translation').addEventListener('click', saveTranslation);
}

// Load translation keys
function loadTranslationKeys() {
    const select = document.getElementById('translation-key');
    
    // In a real app, this would load from the translation files
    const keys = [
        'heroTitle', 'heroSubtitle', 'aboutTitle', 'aboutText', 
        'featuredTitle', 'specialOffersTitle', 'reviewsTitle'
    ];
    
    select.innerHTML = keys.map(key => `
        <option value="${key}">${key}</option>
    `).join('');
    
    if (keys.length > 0) {
        loadTranslation(keys[0]);
    }
}

// Load translation
function loadTranslation(key) {
    // In a real app, this would load from the translation files
    const translations = {
        'heroTitle': {
            en: 'Authentic Ethiopian Cuisine',
            de: 'Authentische äthiopische Küche',
            am: 'እውነተኛ የኢትዮጵያ ምግብ'
        },
        // Other translations would be here
    };
    
    if (translations[key]) {
        document.getElementById('translation-en').value = translations[key].en || '';
        document.getElementById('translation-de').value = translations[key].de || '';
        document.getElementById('translation-am').value = translations[key].am || '';
    } else {
        document.getElementById('translation-en').value = '';
        document.getElementById('translation-de').value = '';
        document.getElementById('translation-am').value = '';
    }
}

// Save translation
function saveTranslation() {
    const key = document.getElementById('translation-key').value;
    const translations = JSON.parse(localStorage.getItem('translations')) || {};
    
    translations[key] = {
        en: document.getElementById('translation-en').value,
        de: document.getElementById('translation-de').value,
        am: document.getElementById('translation-am').value
    };
    
    localStorage.setItem('translations', JSON.stringify(translations));
    alert('Translation saved successfully!');
}