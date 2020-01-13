<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<?php
if ( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'hero' ): ?>

      <section class="hero">
        <div class="container">
          <div class="hero__content">

            <h1 class="hero__title"><?php the_sub_field( 'title' ); ?></h1>

            <?php
            $link_type = get_sub_field( 'link_type' );
            $link = get_sub_field( 'link' );
            $video_popup = get_sub_field( 'video_popup' );
            $video_link_text = get_sub_field( 'link_text' );

            if ($link_type == 'link' && $link):
            ?>
              <a href="<?php echo esc_url( $link['url'] ); ?>" class="hero__link">→ <?php echo $link['title']; ?></a>
            <?php elseif ($link_type == 'video' && $video_popup): ?>
              <a href="<?php echo $video_popup; ?>" class="video-link hero__link" data-fancybox>→ <?php echo $video_link_text; ?></a>
            <?php endif; ?>

          </div>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'parallax_image_section' ): ?>

      <canvas class="parallax-bg" data-image-src="<?php the_sub_field( 'image' ); ?>"></canvas>

    <?php elseif ( get_row_layout() == 'short_text' ): ?>

      <section class="short-text">
        <div class="container">
          <p><?php the_sub_field( 'line_1' ); ?></p>
          <h2 class="section-title"><?php the_sub_field( 'line_2' ); ?></h2>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'about_1' ): ?>

      <section class="about-1">
        <div class="container">
          <div class="row">
            <div class="about-1__left">
              <h2 class="section-title"><?php the_sub_field( 'title' ); ?></h2>
              <?php the_sub_field( 'text' ); ?>
            </div>
            <div class="about-1__right">
              <?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'large' ); ?>
            </div>
          </div>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'about_2' ): ?>

      <section class="about-2">
        <div class="container">
          <div class="row">
            <?php $img = get_sub_field( 'image' );
            if ($img): ?>
              <div class="about-2__img">
                <?php echo wp_get_attachment_image( $img, 'large_xl' ); ?>
              </div>
            <?php endif; ?>

            <div class="about-2__content">
              <h2 class="section-title"><?php the_sub_field( 'title' ); ?></h2>
              <?php the_sub_field( 'text' ); ?>

              <div class="icons-box">
                <div class="icons-box__item">
                  <div class="icons-box__icon">
                    <img src="<?php echo THEME_URL; ?>/images/content/brand.svg" alt="Brand">
                  </div>
                  <p class="icons-box__title">Brand</p>
                </div>
                <div class="icons-box__item">
                  <div class="icons-box__icon">
                    <img src="<?php echo THEME_URL; ?>/images/content/communications.svg" alt="Communications">
                  </div>
                  <p class="icons-box__title">Communications</p>
                </div>
                <div class="icons-box__item">
                  <div class="icons-box__icon">
                    <img src="<?php echo THEME_URL; ?>/images/content/packaging.svg" alt="Packaging">
                  </div>
                  <p class="icons-box__title">Packaging</p>
                </div>
                <div class="icons-box__item">
                  <div class="icons-box__icon">
                    <img src="<?php echo THEME_URL; ?>/images/content/digital.svg" alt="Digital">
                  </div>
                  <p class="icons-box__title">Digital</p>
                </div>
                <div class="icons-box__item">
                  <div class="icons-box__icon">
                    <img src="<?php echo THEME_URL; ?>/images/content/photography.svg" alt="Photography & Video">
                  </div>
                  <p class="icons-box__title">Photography <br>& Video</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'last_news' ): ?>

      <section class="s-last-news">
        <div class="container">
          <?php $news = get_any_post( 'news', 4, '', '', 'date' );
          if ($news->have_posts()): ?>
            <div class="last-news row">
              <?php while ($news->have_posts()): $news->the_post(); ?>
                <div class="last-news__item">
                  <div class="last-news__img-wrap">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail( 'ith-last-news' ); ?>
                    </a>
                  </div>
                  <time datetime="<?php echo get_the_time( 'Y-m-d' ); ?>" class="last-news__publish"><?php echo get_the_date(); ?></time>
                  <div class="last-news__body">
                    <h2 class="last-news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="last-news__link link">→ read more</a>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          <?php endif; ?>
        </div>
      </section>

    <?php endif;

  endwhile;
endif;
?>

<?php get_footer();