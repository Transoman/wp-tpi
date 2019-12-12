<?php
/**
 * Template Name: Project v2
 * Template Post Type: portfolio
 */
get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php
      while ( have_posts() ) :
        the_post();

        if ( have_rows('portfolio_layout_v2') ):

          // Loop through rows.
          while ( have_rows('portfolio_layout_v2') ) : the_row();

            if ( get_row_layout() == 'video' ): ?>

              <section class="s-video-v2">
                <div class="video">
                  <a href="<?php echo esc_url(get_sub_field('video_link')); ?>" class="video__link">
                    <?php echo wp_get_attachment_image( get_sub_field( 'video_poster' ), 'full', '', array('class' => 'video__media') ); ?>
                  </a>
                  <button type="button" aria-label="Запустить видео" class="video__button"></button>
                </div>
              </section>

            <?php elseif ( get_row_layout() == 'Content' ): ?>

              <section class="s-text s-text--v2">
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

              <div class="s-quote quote alignfull">
                <div class="quote__container">
                  <div class="row">
                    <div class="quote__image">
                      <?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'ith-news-quote' ); ?>
                    </div>
                    <blockquote class="quote__blockquote">
                      <div class="quote__text"><?php the_sub_field( 'text' ); ?></div>
                      <span class="quote__author"><?php the_sub_field( 'author' ); ?></span>
                    </blockquote>
                  </div>
                </div>
              </div>

            <?php elseif ( get_row_layout() == 'gallery' ): ?>

            <div class="s-gallery">
              <?php $gallery = get_sub_field( 'gallery' );

              if ($gallery) {
                foreach ($gallery as $img): ?>
                  <div class="s-gallery__item">
                    <?php echo wp_get_attachment_image( $img, 'ith-gallery' ); ?>
                  </div>
                <?php endforeach;
              } ?>
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

<?php get_footer( 'white' );