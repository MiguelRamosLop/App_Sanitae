$('.profile_nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass('active');
})

const tabBtn = document.querySelectorAll('.profile_nav ul li');

const tab = document.querySelectorAll('.profile_tab');

function tabs(panelIndex) {
    tab.forEach(function(node) {
        node.style.display = 'none';
    });
    tab[panelIndex].style.display = 'block';
}
tabs(0);


const toggleBtn = document.querySelector('.toggle_button');

const navbar_links = document.querySelector('.navbar_links');

toggleBtn.addEventListener('click', function() {
    navbar_links.classList.toggle('active');
});