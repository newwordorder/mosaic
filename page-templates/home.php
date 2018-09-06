<?php
/**
* Template Name: Home
*
*
* @package understrap
*/

get_header();

$headerType = get_field('image_or_video');

$image = get_field('background_image');
$imageOverlay = get_field('image_overlay');

$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$imageOverlay = $backgroundImage['image_overlay'];
$backgroundEffect = $backgroundImage['background_effect'];
$invertColours = $backgroundImage['invert_colours'];

$video = get_field('youtube_code');
$fallbackImage = get_field('fallback_image');
?>

<section id="sub-header"

class="home page-header page-header--home bg-effect--<?php echo $backgroundEffect ?> imagebg videobg <?php if( $invertColours == 'yes' ): echo 'image--light'; endif; ?>"
data-overlay="<?php echo $imageOverlay ?>"
>

<?php if( $headerType == 'image' ): ?>

  <?php if( !empty($image) ):

    // vars
    $url = $image['url'];
    $alt = $image['alt'];

  ?>
    <div class="background-image-holder">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
  <?php endif; ?>
<?php endif; ?>
<?php if( $headerType == 'video' ): ?>

  <div class="youtube-background" data-video-url="<?php echo $video ?>"></div>

  <?php if( !empty($fallbackImage) ):

    // vars
    $url = $fallbackImage['url'];
    $alt = $fallbackImage['alt'];

  ?>
    <div class="background-image-holder">
      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
    </div>
  <?php endif; ?>
<?php endif; ?>
<div class="container pos-vertical-center">
  <div class="row">
    <div class="col-md-4 ">
      <h1 class="page-title">Relationships that count</h1>
      <p>&nbsp;</p>
      <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
    <div class="col-md-8">
      <img class="home__img" src="<?php bloginfo('template_directory'); ?>/img/people.png" />
    </div>
  </div>
</div>



</section>

<div id="page">

<?php get_template_part( 'page-templates/blocks' ); ?>

<?php get_footer();
