<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php if ( have_posts() ) :
      $news_template = get_field( 'template_news', 'option' );

      $template = null;

      if ($news_template == 'v1') {
        $template = 'news';
      }
      else {
        $template = 'news-v2';
      }
      ?>

      <?php
      /* Start the Loop */
      while ( have_posts() ) :
        the_post();

        get_template_part( 'page-templates/template', $template );

      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
