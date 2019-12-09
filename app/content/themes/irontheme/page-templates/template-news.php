<?php
/**
 * News
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'news-card news-card--strip' ); ?>>
  <div class="container">
    <div class="row">
      <div class="news-card__content">
        <time datetime="<?php echo get_the_time( 'Y-m-d' ); ?>" class="news-card__publish"><?php echo get_the_date(); ?></time>
        <h2 class="news-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="news-card__text">
          <?php the_excerpt(); ?>
        </div>

        <div class="news-card__bottom">
          <a href="<?php the_permalink(); ?>" class="news-card__link link">→ read more</a>
          <a href="#" class="news-card__link link">→ share this article</a>
        </div>
      </div>

      <?php if (get_the_post_thumbnail()): ?>
        <div class="news-card__img">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'ith-news-card-large' ); ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->