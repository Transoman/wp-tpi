<?php

/**
 * Quote Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'quote-' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'quote';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('quote') ?: 'Your quote here...';
$author = get_field('author') ?: 'Author name';
$image = get_field('image');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
  <div class="quote__container">
    <div class="row">
      <div class="quote__image">
        <?php echo wp_get_attachment_image( $image, 'ith-news-quote' ); ?>
      </div>
      <blockquote class="quote__blockquote">
        <div class="quote__text"><?php echo $text; ?></div>
        <span class="quote__author"><?php echo $author; ?></span>
      </blockquote>
    </div>
  </div>
</div>