/**
 * Main JavaScript functionality for the Ethiopian restaurant website
 * Includes page-specific functionality for all pages except admin
 */
// Check for hash on page load AND after navigation
function scrollToAnchor() {
    const hash = window.location.hash;
    if (hash) {
      setTimeout(() => {
        const element = document.querySelector(hash);
        if (element) {
          // Get the height of your fixed header/banner
          const headerHeight = document.querySelector('header')?.offsetHeight + 5 || 80; // Fallback to 60px if header not found
          
          // Calculate the position with offset
          const elementPosition = element.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerHeight;
          
          // Scroll to the adjusted position
          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      }, 100);
    }
  }
  
  // Run on initial load
  document.addEventListener('DOMContentLoaded', scrollToAnchor);
  
  // Run when URL changes (like after button click)
  window.addEventListener('hashchange', scrollToAnchor);

  
document.addEventListener('DOMContentLoaded', function() {
    // Load menu on menu page
    if (document.querySelector('.menu-page')) {
        loadMenu();
    }

    // Initialize reservation form
    if (document.getElementById('reservation-form')) {
        initReservationForm();
    }

    // Initialize contact form
    if (document.getElementById('contact-form')) {
        initContactForm();
    }

    // Initialize gallery lightbox
    if (document.querySelector('.gallery-page')) {
        initGallery();
    }

    // Load reviews on reviews page
    if (document.querySelector('.reviews-page')) {
        const onlySelectedReview = false;
        loadReviews(onlySelectedReview);
    }

    // Load special offers from localStorage
    if (document.querySelector('.home-page')) {
        loadSelectedDishes()
        loadSpecialOffersAndNews();

        const onlySelectedReview = true;
        loadReviews(onlySelectedReview);
    }
    
});

// Load and display menu from XML
async function loadMenu() {
    try {
        const response = await fetch('menu.xml');
        if (!response.ok) throw new Error('Menu data not found');
        
        const xmlText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(xmlText, "text/xml");
        
        displayMenu(xmlDoc);
    } catch (error) {
        console.error('Error loading menu:', error);
        document.getElementById('menu-items-container').innerHTML = 
            '<div class="alert alert-danger" data-translate="xmlLoadError">Error loading xml file. Please try again later.</div>';
    }
}

// Display menu categories and items
function displayMenu(xmlDoc) {
    const menuContainer = document.getElementById('menu-items-container');
    const categories = xmlDoc.getElementsByTagName('category');
    
    const currentLang = localStorage.getItem('language') || 'de';

    // Clear existing content
    menuContainer.innerHTML = '';
    
    // Loop through each category
    for (let category of categories) {
        const categoryName = category.querySelector(`name[lang="${currentLang}"]`).textContent;
        const categoryId = category.getAttribute('id');
        const dishes = category.getElementsByTagName('dish');
        
        // Create category section
        const categorySection = document.createElement('section');
        categorySection.className = 'menu-category';
        categorySection.id = categoryId;
        
        // Create category heading
        const heading = document.createElement('h3');
        heading.textContent = categoryName;
        categorySection.appendChild(heading);
        
        // Create row for dishes
        const row = document.createElement('div');
        row.className = 'row';
        
        // Loop through dishes in this category
        for (let dish of dishes) {
            // Get dish details
            const name = dish.querySelector(`name[lang="${currentLang}"]`).textContent;
            const shortDesc = dish.querySelector(`shortDescription[lang="${currentLang}"]`).textContent;
            const price = dish.querySelector('price').textContent;
            const image = dish.querySelector('image').textContent;
            const allergens = dish.querySelectorAll('allergens allergen');
            const id = dish.querySelector('id').textContent;

            // Create dish card
            const col = document.createElement('div');
            col.className = 'col-md-6 col-lg-4 mb-4';
            
            col.innerHTML = `
                <div class="menu-item">
                <!--
                    <img src="assets/img/dishes/${image}" alt="${name}" class="img-fluid mb-3">
                -->
                <div class="d-flex align-items-center justify-content-between">  <!-- Changed to space-between -->
                    <!-- Name on the left -->
                    <h4>${id}. ${name}</h4>
                    
                    <!-- Arrow button on the right -->
                    <a href="#top" class="btn btn-sm btn-link p-0 ms-2" title="Go to top" style="font-size: 1.5rem;">
                        <i class="bi bi-arrow-up-circle"></i>  <!-- Upward arrow icon -->
                    </a>
                </div>

                <!--
                <h4>${id}. ${name}</h4>
                -->

                <p class="text-muted">${shortDesc}</p>
                
                <!-- Price and allergens in one line -->
                <div class="d-flex align-items-center justify-content-between">  <!-- Flex container -->
                    <!-- Price (keeps original styling) -->
                    <p class="price mb-2">€${price}</p>  <!-- mb-0 removes default paragraph margin -->
                    
                    <!-- Allergens (keeps original styling) -->
                    <div class="allergens mb-2">
                        ${Array.from(allergens)
                            .filter(a => a.getAttribute('lang') === currentLang)
                            .map(a => `<span>${a.textContent}</span>`)
                            .join('')}
                    </div>
                </div>
                
                <!-- Centered button -->
                <div class="text-center">
                    <button class="btn btn-sm btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#dishModal" 
                            data-name="${name}" data-desc="${shortDesc}" data-price="${price}" data-image="${image}">
                            <span data-translate="viewDetails">View Details</span>
                    </button>
                </div>                   
             </div>
            `;
            
            row.appendChild(col);
        }
        
        categorySection.appendChild(row);
        menuContainer.appendChild(categorySection);
    }
    
    // Add allergen information section
    addAllergenInfo();
}

// Add allergen information to menu page
function addAllergenInfo() {
    const menuContainer = document.getElementById('menu-items-container');
    const allergenSection = document.createElement('section');
    allergenSection.className = 'allergen-info mt-5';
    
    allergenSection.innerHTML = `
        <h3 data-translate="allergenInfoTitle">Allergen Information</h3>
        <p data-translate="allergenInfoText">Please inform our staff about any food allergies or intolerances. 
        The following symbols indicate possible allergens in our dishes:</p>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li><strong>G</strong> - <span data-translate="gluten">Gluten</span></li>
                    <li><strong>E</strong> - <span data-translate="egg">Egg</span></li>
                    <li><strong>D</strong> - <span data-translate="dairy">Dairy</span></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><strong>N</strong> - <span data-translate="nuts">Nuts</span></li>
                    <li><strong>S</strong> - <span data-translate="sesame">Sesame</span></li>
                    <li><strong>F</strong> - <span data-translate="fish">Fish</span></li>
                </ul>
            </div>
        </div>
    `;
    
    menuContainer.appendChild(allergenSection);
}

// Initialize reservation form
function initReservationForm() {
    const form = document.getElementById('reservation-form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const name = document.getElementById('reservation-name').value;
        const phone = document.getElementById('reservation-phone').value;
        const guests = document.getElementById('reservation-guests').value;
        const date = document.getElementById('reservation-date').value;
        const time = document.getElementById('reservation-time').value;
        const tablePref = document.getElementById('reservation-table-pref').value;
        const notes = document.getElementById('reservation-notes').value;
        
        // Format WhatsApp message
        const message = `New Reservation:\nName: ${name}\nPhone: ${phone}\nGuests: ${guests}\nDate: ${date}\nTime: ${time}\nTable Preference: ${tablePref}\nNotes: ${notes}`;
        
        // Open WhatsApp with pre-filled message
        window.open(`https://wa.me/49123456789?text=${encodeURIComponent(message)}`, '_blank');
        
        // Show success message
        alert('Please send the pre-filled WhatsApp message to confirm your reservation. Thank you!');
        form.reset();
    });
}

// Initialize contact form (simulated)
function initContactForm() {
    const form = document.getElementById('contact-form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your message! We will contact you soon.');
        form.reset();
    });
}

// Initialize gallery lightbox
function initGallery() {
    // This would use the lightbox.js library
    // Implementation depends on the specific lightbox library chosen
    console.log('Gallery initialized');
}




// Load and display selected reviews from XML
async function loadReviews(onlySelected) {
    try {
        const response = await fetch('reviews.xml');
        if (!response.ok) throw new Error('´Reviews data not found');
        
        const xmlText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(xmlText, "text/xml");
        
        displayReviews(xmlDoc,onlySelected);
    } catch (error) {
        console.error('Error loading menu:', error);
        document.getElementById('selected-reviews-placeholder').innerHTML = 
            '<div class="alert alert-danger" data-translate="xmlLoadError">Error loading xml file. Please try again later.</div>';
    }
}

function displayReviews(xmlDoc,onlySelected) {

    if (onlySelected === true) {
        //console.log("The boolean is true - doing something!");
        // Do something here
        review_placeholder_name = 'selected-reviews-placeholder';
      } else {
        //console.log("The boolean is false - doing nothing or something else");
        // Do something else here (optional)
        review_placeholder_name = 'reviews-placeholder';
      }
    

    const currentReviewsContainer = document.getElementById(review_placeholder_name);
    const categories = xmlDoc.getElementsByTagName('category');
    
    const currentLang = localStorage.getItem('language') || 'de';

    // Clear existing content
    currentReviewsContainer.innerHTML = '';
    
    // Create row for reviews
    const row = document.createElement('div');
    row.className = 'row';

    // Loop through each category
    for (let category of categories) {
        const reviews = category.getElementsByTagName('review');
        // Loop through reviews in this category
        for (let review of reviews) {
            // Get review details
            const selected = review.querySelector('selected').textContent;
            if (onlySelected === false || selected === 'true') {
                // Do something when selected is 'true'
                // console.log("Item is selected");
                const name = review.querySelector(`name[lang="${currentLang}"]`).textContent;
                const comment = review.querySelector(`comment[lang="${currentLang}"]`).textContent;
                const rating = review.querySelector('rating').textContent;
                const date = review.querySelector('date').textContent;
                const id = review.querySelector('id').textContent;

                const categoryName = category.querySelector(`name[lang="${currentLang}"]`).textContent;
                const categoryId = category.getAttribute('id');

                // Create review card
                const col = document.createElement('div');
                col.className = 'col-md-6 col-lg-6 mb-4'; // 50 % width each
                
                col.innerHTML = `
                        <div class="review-card">
                            <div class="d-flex align-items-center mb-3">
                                <div class="reviewer-img bg-secondary me-3"></div>
                                <div>
                                    <h5>${name}</h5>
                                    <div class="star-rating">★★★★☆</div>
                                </div>
                            </div>
                            <p>${comment}</p>
                            <small class="text-muted">${date}</small>
                        </div>
                    `;
                
                row.appendChild(col);
            } else {
                // Do nothing (you can omit this else block if not needed)
                // Or handle the not-selected case
                console.log("Item is not selected");
            }
        }
        
        currentReviewsContainer.appendChild(row);
    }
}





/*

// Load and display reviews
function loadReviews() {
    // In a real implementation, this would fetch from an API
    // For this demo, we'll use simulated data
    
    const reviews = [
        {
            name: "Anna Müller",
            rating: 5,
            text: "The best Ethiopian food I've had outside of Ethiopia! The Doro Wot is amazing.",
            date: "2023-05-15",
            lang: {
                en: "The best Ethiopian food I've had outside of Ethiopia! The Doro Wot is amazing.",
                de: "Das beste äthiopische Essen, das ich außerhalb Äthiopiens hatte! Das Doro Wot ist fantastisch.",
                am: "ከኢትዮጵያ ውጪ የተመገብኩት ምርጥ የኢትዮጵያ ምግብ! ዶሮ ወጡ አስደናቂ ነው።"
            }
        },
        {
            name: "John Smith",
            rating: 4,
            text: "Great atmosphere and friendly service. The vegetarian platter was delicious.",
            date: "2023-04-22",
            lang: {
                en: "Great atmosphere and friendly service. The vegetarian platter was delicious.",
                de: "Tolle Atmosphäre und freundlicher Service. Die vegetarische Platte war köstlich.",
                am: "ታምራት ያለው አቀራረብ እና በጎ አገልግሎት። የአታክልት ምግብ ጣፋጭ ነበር።"
            }
        }
    ];
    
    displayReviews(reviews);
}

// selected-reviews-placeholder
// Display reviews on page
function displayReviews(reviews) {
    const container = document.getElementById('reviews-container');
    const currentLang = localStorage.getItem('language') || 'de';
    
    container.innerHTML = reviews.map(review => `
        <div class="review-card">
            <div class="d-flex align-items-center mb-3">
                <div class="reviewer-img bg-secondary me-3"></div>
                <div>
                    <h5>${review.name}</h5>
                    <div class="star-rating">
                        ${'★'.repeat(review.rating)}${'☆'.repeat(5 - review.rating)}
                    </div>
                </div>
            </div>
            <p>${review.lang[currentLang] || review.text}</p>
            <small class="text-muted">${review.date}</small>
        </div>
    `).join('');
}

*/






// Load and display selected dishes from XML
async function loadSelectedDishes() {
    try {
        const response = await fetch('menu.xml');
        if (!response.ok) throw new Error('Menu data not found');
        
        const xmlText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(xmlText, "text/xml");
        
        displaySelectedDishes(xmlDoc);
    } catch (error) {
        console.error('Error loading menu:', error);
        document.getElementById('selected-dishes-placeholder').innerHTML = 
            '<div class="alert alert-danger" data-translate="xmlLoadError">Error loading xml file. Please try again later.</div>';
    }
}

// Display menu categories and items
function displaySelectedDishes(xmlDoc) {
    const selectedDishesContainer = document.getElementById('selected-dishes-placeholder');
    const categories = xmlDoc.getElementsByTagName('category');
    
    const currentLang = localStorage.getItem('language') || 'de';

    // Clear existing content
    selectedDishesContainer.innerHTML = '';
    
    // Create row for dishes
    const row = document.createElement('div');
    row.className = 'row';

    // Loop through each category
    for (let category of categories) {
        const dishes = category.getElementsByTagName('dish');
        // Loop through dishes in this category
        for (let dish of dishes) {
            // Get dish details
            const selected = dish.querySelector('selected').textContent;
            if (selected === 'true') {
                // Do something when selected is 'true'
                // console.log("Item is selected");
                const name = dish.querySelector(`name[lang="${currentLang}"]`).textContent;
                const shortDesc = dish.querySelector(`shortDescription[lang="${currentLang}"]`).textContent;
                const price = dish.querySelector('price').textContent;
                const image = dish.querySelector('image').textContent;
                const allergens = dish.querySelectorAll('allergens allergen');
                const id = dish.querySelector('id').textContent;

                const categoryName = category.querySelector(`name[lang="${currentLang}"]`).textContent;
                const categoryId = category.getAttribute('id');
                const dishes = category.getElementsByTagName('dish');


                // Create dish card
                const col = document.createElement('div');
                col.className = 'col-md-6 col-lg-4 mb-4';
                
                col.innerHTML = `
                    <div class="menu-item">
                        <img src="assets/img/dishes/${image}" alt="${name}" class="img-fluid mb-3">
                        <h4>${id}. ${name}</h4>
                        <p class="text-muted">${shortDesc}</p>
                        
                        <!-- Price and allergens in one line -->
                        <div class="d-flex align-items-center justify-content-between">  <!-- Flex container -->
                            <!-- Price (keeps original styling) -->
                            <p class="price mb-2">€${price}</p>  <!-- mb-0 removes default paragraph margin -->
                            
                            <!-- Allergens (keeps original styling) -->
                            <div class="allergens mb-2">
                                ${Array.from(allergens)
                                    .filter(a => a.getAttribute('lang') === currentLang)
                                    .map(a => `<span>${a.textContent}</span>`)
                                    .join('')}
                            </div>
                        </div>
                        
                        <!-- Centered button -->
                        <div class="text-center">
                            <a href="menu.html#${categoryId}" class="btn btn-sm btn-outline-primary" data-translate="viewBtnMenu">View Menu</a>
                        </div>                   
                    </div>
                `;
                
                row.appendChild(col);
            } else {
                // Do nothing (you can omit this else block if not needed)
                // Or handle the not-selected case
                console.log("Item is not selected");
            }
        }
        
        selectedDishesContainer.appendChild(row);
    }
}





// Load and display special offers and news from XML
async function loadSpecialOffersAndNews() {
    try {
        const response = await fetch('offers_and_news.xml');
        if (!response.ok) throw new Error('Offers and news data not found');
        
        const xmlText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(xmlText, "text/xml");
        
        displaySpecialOffersAndNews(xmlDoc);
    } catch (error) {
        console.error('Error loading Offers and news:', error);
        document.getElementById('offers-news-placeholder').innerHTML = 
            '<div class="alert alert-danger" data-translate="xmlLoadError">Error loading xml file. Please try again later.</div>';
    }
}

// Display menu categories and items
function displaySpecialOffersAndNews(xmlDoc) {
    const offerNewsContainer = document.getElementById('offers-news-placeholder');
    const categories = xmlDoc.getElementsByTagName('category');
    const currentLang = localStorage.getItem('language') || 'de';

    // Clear existing content
    offerNewsContainer.innerHTML = '';
    
    // Loop through each category
    for (let category of categories) {
        const categoryName = category.querySelector(`name[lang="${currentLang}"]`).textContent;
        const categoryId = category.getAttribute('id');

        const items = category.getElementsByTagName('item');
        
        // Create category section
        const categorySection = document.createElement('section');
        categorySection.className = 'offers-news-category';
        categorySection.id = categoryId;
        
        // Create category heading
        const heading = document.createElement('h3');
        heading.textContent = categoryName;
        categorySection.appendChild(heading);
        
        // Create row for dishes
        const row = document.createElement('div');
        row.className = 'row';
        
        // Loop through dishes in this category
        for (let item of items) {
            
            // Get dish details
            const title = item.querySelector(`title[lang="${currentLang}"]`).textContent;
            const shortDesc = item.querySelector(`shortDescription[lang="${currentLang}"]`).textContent;
            const longDesc = item.querySelector(`longDescription[lang="${currentLang}"]`).textContent;
            const date = item.querySelector('date').textContent;
            const image = item.querySelector('image').textContent;
            const id = item.querySelector('id').textContent;

            // Create dish card
            const col = document.createElement('div');
            //col.className = 'col-md-6 col-lg-4 mb-4';
            col.className = 'col-md-6 col-lg-6 mb-4';  // Two 50% width columns
            
            col.innerHTML = `
                <div class="menu-item">
                <!--
                    <img src="assets/img/dishes/${image}" alt="${title}" class="img-fluid mb-3">
                -->
                    <h4>${id}. ${title}</h4>
                    <p class="text-muted">${shortDesc}</p>
                    <p class="date">${date}</p>
                    <button class="btn btn-sm btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#offerNewsModal" 
                        data-title="${title}" data-desc="${longDesc}" data-date="${date}" data-image="${image}">
                        <span data-translate="viewDetails">View Details</span>
                    </button>
                </div>
            `;
            
            row.appendChild(col);
        }
        
        categorySection.appendChild(row);
        offerNewsContainer.appendChild(categorySection);
    }
}







