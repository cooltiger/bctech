<?php get_header(); ?>

  <section class="subTtl">
    <h1 class="hstyle01">MEDIA</h1>
  </section>

  <section id="media">
    <div class="inner">
      <ul>
<?php
$args = array(
  'post_type'      => 'media',
  'posts_per_page' => 99,
);
$blog_posts = new WP_Query( $args );
if ( $blog_posts->have_posts() ) :
?>

<?php
  while ( $blog_posts->have_posts() ) :
    $blog_posts->the_post();
?>
        <li>
          <!-- <p class="date"><?php the_time('Y.m.d'); ?></p> -->
          <div>
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
          </div>
        </li>
<?php
  endwhile;
  wp_reset_postdata();
?>
<?php
endif;
?>
      </ul>

    </div>
  </section>

<?php get_footer(); ?>
