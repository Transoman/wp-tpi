<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mytheme
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post(); ?>

      <div class="article-head">
        <time datetime="<?php echo get_the_time( 'Y-m-d' ); ?>" class="article-head__publish"><?php echo get_the_date(); ?></time>
        <h1 class="article-head__title"><?php the_title(); ?></h1>
      </div>

      <div class="article-content">
        <?php the_content(); ?>
      </div>

    <?php endwhile; // End of the loop.
    ?>

      <div class="article-nav">
        <div class="article-nav__left">
          <a href="<?php echo home_url( '/' ); ?>news">←	Back to news & thoughts</a>
        </div>
        <?php $next_post = get_next_post();
        if (!empty($next_post)): ?>
          <div class="article-nav__right">
            <h3 class="article-nav__title">Next article</h3>
            <a href="<?php echo get_permalink( $next_post ); ?>">→ <?php echo esc_html($next_post->post_title); ?></a>
          </div>
        <?php endif; ?>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer( 'white' );
