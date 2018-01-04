
<?php get_header(); ?>

<?php pageBanner(); ?>

<?php 
  while(have_posts()) {
    the_post();
    
?>

    <div  class="container container--narrow page-section">
      <p>
          <?php the_title(); ?> 
      </p>
        <div class="generic-content">
          <?php the_content(); ?>
        </div>
    </div>

<?php } ?>

 
<?php  get_footer(); ?>
 