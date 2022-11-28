$(document).ready(function(){
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('img').materialbox();
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true,
      duration: 500
    });
    $('.modal').modal();
});

//Nav Disapear on Scroll
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

//Refresh page in navbar
function refreshPage(){
  window.location.reload();
} 

//Carousel
setInterval(function(){
  $('.carousel.carousel-slider').carousel('next')
}, 5000);

//Easter Egg Footer
$('#gcicon').click(function(){
  $('.death').fadeOut('slow',function() {
    // Animation complete.
    $( "body" ).append( '<h1 class="center-align animate__animated animate__fadeInDown red-text text-lighten-2" id="deathbump">Oops...</h1>' );
  });
});

//Easter Egg Main Page
//Triggered by typing something in the email adress input bar and selecting it
$('#email').select(function() {
  $('<img src="img/grandma.jpg">').replaceAll('.parallax img');
  $('.parallax').parallax();
});

//Easter Egg Project Page
//Type c a r d s
var k = [67,65,82,68,83],
n = 0;
$(document).keydown(function (e) {
  if (e.keyCode === k[n++]) {
    if (n === k.length) {
      $('<div class="card-content"><span class="card-title">Card Title</span><p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p></div>').replaceAll('.card-content');
      n = 0;
      return false;
    }
  }
  else {
    n = 0;
  }
});

new WOW().init();