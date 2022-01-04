const toggleBtn = document.querySelector('.toggle_button');

const navbar_links = document.querySelector('.navbar_links');

toggleBtn.addEventListener('click', function() {
    navbar_links.classList.toggle('active');
});