<?php get_header(); ?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>

  <section class="subTtl">
    <h1 class="hstyle01"><?php the_title(); ?></h1>
  </section>

  <section class="sub">
    <div class="inner">
      <?php the_content(); ?>
    </div>
<?php
  endwhile;
  endif;
?>
  </section>
  
<?php get_footer(); ?>
