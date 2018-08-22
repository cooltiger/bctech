<?php get_header(); ?>

  <section class="subTtl">
    <h1 class="hstyle01">事業内容</h1>
  </section>

  <section id="topNews">
    <div class="inner">

      <div class="newsListWrap">
<?php
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 99,
);
$blog_posts = new WP_Query( $args );
if ( $blog_posts->have_posts() ) :
?>

<?php
  while ( $blog_posts->have_posts() ) :
    $blog_posts->the_post();
?>
        <section class="newsList">
          <a href="<?php the_permalink(); ?>">
<?php
    if ( has_post_thumbnail() ) :
      the_post_thumbnail();
    else :
?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/thum_01.png" alt="thumbnail">
<?php
    endif;
?>
          </a>
          <!-- <p class="day"><?php the_time('Y.m.d'); ?></p> -->
          <h1 class="ttl "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <div>
            <?php the_excerpt(); ?>
          </div>
        </section>
<?php
  endwhile;
  endif;
?>

      </div>
  </section>

<?php get_footer(); ?>
