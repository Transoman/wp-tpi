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
      the_post();

      if ( have_rows('portfolio_layout') ):

        // Loop through rows.
        while ( have_rows('portfolio_layout') ) : the_row();

          if ( get_row_layout() == 'video' ): ?>

          <section class="s-video alignfull">
            <div class="video">
              <a href="<?php echo esc_url(get_sub_field('video_link')); ?>" class="video__link">
                <?php echo wp_get_attachment_image( get_sub_field( 'video_poster' ), 'full', '', array('class' => 'video__media') ); ?>
              </a>
              <button type="button" aria-label="Запустить видео" class="video__button"></button>
            </div>
          </section>

          <?php elseif ( get_row_layout() == 'Content' ): ?>

          <section class="s-text">
            <div class="row">
              <div class="s-text__left">
                <?php the_sub_field( 'text' ); ?>
              </div>
              <div class="s-text__right">
                <?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); ?>
              </div>
            </div>
          </section>

          <?php elseif ( get_row_layout() == 'blockquote' ): ?>

          <section class="s-blockquote">
            <div class="container">
            <?php if (have_rows( 'banner_list' )): ?>
              <div class="row s-blockquote__banner-list">
                <?php while (have_rows( 'banner_list' )): the_row(); ?>
                <div class="s-blockquote__banner-list-item">
                  <?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'large' ); ?>
                </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

            <blockquote class="s-blockquote__blockquote">
              <?php the_sub_field( 'text' ); ?>
              <cite class="s-blockquote__author"><?php the_sub_field( 'author' ); ?></cite>
            </blockquote>
            </div>
          </section>

          <?php elseif ( get_row_layout() == 'image' ): ?>

          <div class="s-image">
            <?php echo wp_get_attachment_image( get_sub_field( 'image_bg' ), 'full', '', array('class' => 'scroll-bg') ); ?>
          </div>

          <?php endif;

        endwhile;
      endif;

    endwhile; // End of the loop.
    ?>

      <div class="article-nav">
        <div class="article-nav__left">
          <a href="<?php echo home_url( '/' ); ?>portfolio">←	Back to our work</a>
        </div>
        <?php $next_post = get_next_post();
        if (!empty($next_post)): ?>
          <div class="article-nav__right">
            <h3 class="article-nav__title">Next project</h3>
            <a href="<?php echo get_permalink( $next_post ); ?>">→ <?php echo esc_html($next_post->post_title); ?></a>
          </div>
        <?php endif; ?>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer( 'white' );
