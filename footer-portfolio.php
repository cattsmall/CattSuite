   <!-- footer -->
   <?php include_once("footer-links.php") ?>
   
   <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min-ck.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min-ck.js"></script>
	<script>
		$("[rel=tooltip]").tooltip();
      
      setTimeout( "$('.scroll-links-sidebar').removeClass('visible-tablet-horiz');", 500 );

		topDistance = 58;
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

		$('section.skills header button.btn').click(function(){
			$('section.skills > article').slideToggle();
		});
      
		$('section.blog-sidebar button.btn').click(function(){
			$('section.blog-sidebar .menu-categories-container').slideToggle();
		});
      
      $(window).resize( function() {
         if ( $(document).width() >= 950 ) {
   			$('section.skills > article').attr("style","");
   			$('section.blog-sidebar .menu-categories-container').attr("style","");
         }
      });
            
      $(window).bind("load", function() {
         $('[data-spy="scroll"]').each(function () {
             var $spy = $(this).scrollspy('refresh')
         });
      });

		
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