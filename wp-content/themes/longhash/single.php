<?php get_header(); ?>

  <section class="subTtl">
<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
    <h1 class="hstyle01"><?php the_title(); ?></h1>
  </section>

  <section class="sub">
    <div class="inner">
      <?php the_content(); ?>
      <!-- <p class="day"><?php the_time('Y.m.d'); ?></p> -->
      <ul class="pager">
        <li><?php previous_post_link('%link', '&lt; PERV'); ?></li>
        <li><a href="<?php echo home_url('/'); ?>#topNews">TOPページ</a></li>
        <li><?php next_post_link('%link', 'NEXT  &gt;'); ?></li>
      </ul>
    </div>
<?php
  endwhile;
  endif;
?>
  </section>

<?php get_footer(); ?>
