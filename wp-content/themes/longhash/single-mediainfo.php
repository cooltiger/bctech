<?php get_header(); ?>

  <section class="subTtl">
    <h1 class="hstyle01">MEDIA</h1>
  </section>

  <section id="media">
    <div class="inner">
      <ul>
<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
        <!-- <li>
          <p class="date"><?php the_time('Y.m.d'); ?></p>
          <div>
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
          </div>
        </li> -->
<?php
  endwhile;
  endif;
?>
      </ul>

    </div>
  </section>

<?php get_footer(); ?>
