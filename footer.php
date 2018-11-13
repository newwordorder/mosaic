<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>

<section id="pre-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 d-flex align-items-center">
					<h3 class="pre-footer__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h3>
			</div>
			<div class="col-sm-2 d-flex align-items-center">
					<a class="btn btn-dark">Get in Touch</a>
				</div>
		</div>
	</div>
</section>

<footer id="footer" style=" background-image:url('<?php bloginfo('template_directory'); ?>/img/footer_bg.svg');" >
	<div class="container">
		<div class="row">

				<div class="col-sm-2">
					<a href="<?php echo get_home_url(); ?>" id="" class="footer__logo">
						<img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/img/logo_white.svg" alt="Logo">
					</a>
				</div>

				<div class="col-sm-6">
					<ul class="footer__list">
						<li><span><i class="fas fa-map-marker-alt"></i></span> Level 2, 340 Adelaide St, Brisbane QLD 4000</li>
						<li><span><i class="fas fa-phone"></i></span> 07 3839 9275</li>
						<li><span><i class="fas fa-print"></i></span> 07 3839 9274</li>
						<li><span><i class="fas fa-envelope"></i></span> info@mosaicca.com.au</li>
						<li><span><i class="fab fa-linkedin"></i></span></li>

					</ul>
				</div>
				<div class="col-sm-4 d-flex align-items-end">
				<p style="font-weight:700;">© Mosaic Chartered Accountants</p>

				</div>
		</div>
	</div>

</footer>
</div>





<?php wp_footer(); ?>

<script>
	window.onload = function(){
		load();
	}

	function load(){
		var revealerOpts = {
			// the layers are the elements that move from the sides
			nmbLayers : 1,
			// bg color of each layer
			bgcolor : '#d1eff8',

			// effect classname
			effect : 'anim--effect-1',
			onStart : function(direction) {
				// next page gets class page--animate-[direction]
				//var nextPage = pages[currentPage === 0 ? 1 : 0];
				//classie.add(nextPage, 'page--animate-' + direction);
			},
			onEnd : function(direction) {
				// remove class page--animate-[direction] from next page
				//var nextPage = pages[currentPage === 0 ? 1 : 0];
				//nextPage.className = 'page';
			}
		};
		revealer = new Revealer(revealerOpts);

		function reveal(direction) {
			var callbackTime = 1000,
				callbackFn = function() {
					classie.remove(document.getElementById('page'), 'page--current');
				};

				revealer.reveal(direction, callbackTime, callbackFn);
		}

		classie.add(document.getElementById('page'), 'page--current');

		var pages = document.getElementsByClassName('page');

		revealerWrapper = document.getElementById('revealer');

		reveal('top');

		window.setTimeout(()=>{
			for (i = 0; i < pages.length; i++){
			pages[i].style.opacity = '1';
		}},500)


		var links = document.querySelectorAll('a');
		for (i = 0; i < links.length; i++){
			links[i].addEventListener('click', function(e) {
				e.preventDefault();
				reveal('top');
				if(e.target.tagName === 'A'){
					window.setTimeout(function (){window.location = e.target;}, 100);
				}else if(e.target.tagName === 'IMG'){
					var newTarget = e.target.parentElement.href; 
					window.setTimeout(function (){window.location = newTarget;}, 100);
				}else{

				}
			});
		}

	}


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flickity.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ytplayer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/reveal.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<script>
	AOS.init();
</script>

</body>

</html>
