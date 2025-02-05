// Получаем ссылки на кнопки
const aboutButton = document.getElementById('aboutButton');
const contactButton = document.getElementById('contactButton');
const skilliButton = document.getElementById('skilliButton')
const tgbot = document.getElementById('tgbot')

// Функция для анимации кнопок
function animateButtons() {
  gsap.from(aboutButton, { 
    duration: 1, 
    x: 20, 
    opacity: 0, 
    ease: "power2.out", 
    delay:0.5
  });

  gsap.from(contactButton, { 
    duration: 1, 
    x: 20, 
    opacity: 0, 
    ease: "power2.out", 
    delay: 0.5 
  });

  gsap.from(skilliButton,{
    duration: 1,
    x:20,
    opacity: 0,
    ease:'power2.out',
    delay: 0.5
  });

  gsap.from(tgbot,{
    duration: 1,
    x:20,
    opacity: 0,
    ease:'power2.out',
    delay: 0.5
  });
}


document.addEventListener('DOMContentLoaded', function() {
  var smoothScrollLinks = document.getElementsByClassName('smooth-scroll');
  
  for (var i = 0; i < smoothScrollLinks.length; i++) {
    smoothScrollLinks[i].addEventListener('click', function(event) {
      event.preventDefault();
      
      var target = document.querySelector(this.getAttribute('href'));
      
      target.scrollIntoView({
        behavior: 'smooth'
      });
    });
  }
});

window.addEventListener('load', function() {
  var animatedText = document.getElementById('animatedText');
  animatedText.style.animationDelay = '0.5s';
});

window.addEventListener('scroll', function() {
  var fadeInElements = document.querySelectorAll('.fade-in');
  for (var i = 0; i < fadeInElements.length; i++) {
    var element = fadeInElements[i];
    var elementPosition = element.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;
    if (elementPosition < windowHeight) {
      element.classList.add('fade-in-active');
    }
  }
});



