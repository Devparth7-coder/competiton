// Intersection Observer for dynamic animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        }
    });
}, {
    threshold: 0.5
});

const fadeElements = document.querySelectorAll('.about, .form-container');
fadeElements.forEach(el => observer.observe(el));

// Scroll Event: Back-to-Top Button
window.onscroll = function() {
    let scrollTop = document.documentElement.scrollTop;
    if (scrollTop > 200) {
        document.getElementById('back-to-top').style.display = 'block';
    } else {
        document.getElementById('back-to-top').style.display = 'none';
    }
};

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Form Validation and AJAX Simulation
document.getElementById('registration-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const category = document.getElementById('category').value;

    if (!name || !email || !phone || !category) {
        alert("Please fill out all fields!");
        return;
    }

    setTimeout(() => {
        alert("Registration Successful!");
        saveToLocalStorage(name, email, phone, category);
    }, 1500);
});

function saveToLocalStorage(name, email, phone, category) {
    const registrationData = { name, email, phone, category };
    localStorage.setItem('registrationData', JSON.stringify(registrationData));
    console.log('Data saved to LocalStorage:', registrationData);
}

// Auto-save every 5 seconds
setInterval(() => {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const category = document.getElementById('category').value;

    saveToLocalStorage(name, email, phone, category);
}, 5000);