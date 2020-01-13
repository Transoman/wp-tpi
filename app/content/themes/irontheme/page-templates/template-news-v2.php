<?php
/**
 * News V2
 */
?>

<?php $post_type = get_field( 'post_view_type' );
$type = null;

switch ($post_type) {
  case 'white_double':
    $type = ' news-card--double';
    break;
  case 'dark_double':
    $type = ' news-card--double news-card--dark';
    break;
  case 'dark':
    $type = ' news-card--dark';
    break;
  case 'dark_reverse':
    $type = ' news-card--dark news-card--reverse';
    break;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'news-card' . $type ); ?>>
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
          <div class="share">
            <a href="#" class="share__toggle link">→ share this article</a>
            <div class="share__items">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_the_permalink()); ?>&t=<?php echo esc_html(get_the_title()); ?>" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" class="share__link link" title="Share on Facebook" target="_parent">Facebook</a>
              <a href="https://twitter.com/share?url=<?php echo esc_url(get_the_permalink()); ?>&text=<?php echo esc_html(get_the_title()); ?>" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" class="share__link link" title="Share on Twitter" target="_parent">Twitter</a>
            </div>
          </div>
        </div>
      </div>

      <?php if ($post_type == 'white_double' || $post_type == 'dark_double' && get_the_post_thumbnail()): ?>
        <div class="news-card__img">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'ith-news-card-double' ); ?>
          </a>

          <?php $additional_image = get_field( 'additional_image' );
          if ($additional_image): ?>
            <a href="<?php the_permalink(); ?>">
              <?php echo wp_get_attachment_image( $additional_image, 'ith-news-card-double' ); ?>
            </a>
          <?php endif; ?>
        </div>
      <?php elseif (get_the_post_thumbnail()): ?>
        <div class="news-card__img">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'ith-news-card-large' ); ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
