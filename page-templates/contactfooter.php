<?php

/**
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>

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
