<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mytheme
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <?php
      $portfolio = get_any_post( 'portfolio', -1 );
      if ( $portfolio->have_posts() ) : ?>
      <div class="portfolio">
        <?php
        /* Start the Loop */
        while ( $portfolio->have_posts() ) :
          $portfolio->the_post();

          $post_type = get_field( 'post_type' );
          $type = null;

          switch ($post_type) {
            case 'small':
              $type = ' portfolio__item--small';
              break;
            case 'tall':
              $type = ' portfolio__item--tall';
              break;
          }
          ?>

          <a href="<?php the_permalink(); ?>" class="portfolio__item<?php echo $type ?: ''; echo get_field( 'color_card_text' ) == 'dark' ? ' portfolio__item--color-dark' : ''; ?>">
            <?php the_post_thumbnail( 'full' ); ?>
            <div class="portfolio__content">
              <h3 class="portfolio__title"><?php the_title(); ?></h3>
              <div class="portfolio__tag"><?php the_field( 'tags' ); ?></div>
            </div>
          </a>

        <?php endwhile;
        wp_reset_postdata();

        else :

          get_template_part( 'template-parts/content', 'none' );
          ?>

        <?php endif;
        ?>
      </div>

      <div class="cta">
        <h3 class="cta__title">Got a project in mind?</h3>
        <a href="#" class="cta__link get-in-touch_open">→ Get in touch</a>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();