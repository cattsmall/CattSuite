
<!-- footer -->
<footer>
	<section class="half">
		<nav><p>Stalk me on: <a href="http://twitter.com/cattsmall">twitter</a>, <a href="http://www.linkedin.com/in/cattsmall/">linkedin</a>, <a href="http://letter-q.tumblr.com">tumblr</a>.</p></nav>
	</section>
	<section class="half">
		<nav><p>Website design &amp; portfolio work © <script type="text/javascript"> var date = new Date();
		  var year = date.getFullYear();
		  document.write(year);</script> Catt Small.</p></nav>
	</section>
	<div class="clearfix"></div>
</footer><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min-ck.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min-ck.js"></script>
	<script>
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

		  $('a:not(.carousel-control)[href^="#"]').click(function() {
		  		$('html,body').animate({ scrollTop: $(this.hash).offset().top}, 200);
		  		return false;
		  		e.preventDefault();
		  	});
		$('.post.carousel .item:first-child').addClass("active");
      
      $('.current_page_parent + li').addClass("current-menu-item");

		$('section.skills header button.btn').click(function(){
			$('section.skills > article').slideToggle();
		})
	</script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37601066-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>