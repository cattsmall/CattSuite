$(document).ready(function() {
$("[rel=tooltip]").tooltip();

$('.scroll-links').scrollspy();

topDistance = 67;
  (function() {
    $(window).scroll(function() {
      position = $(window).scrollTop();
      if(position > topDistance) {
        $('*[role="sidebar"].fixed').addClass('scrolled');
      }
      else {
        $('*[role="sidebar"].fixed').removeClass('scrolled');
          }
    });
  })();

$('.post.carousel .item:first-child').addClass("active");

$('section.skills header button.btn').click(function(){
	$('section.skills > article').slideToggle();
})
});
