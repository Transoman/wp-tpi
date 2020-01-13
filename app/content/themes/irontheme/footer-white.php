  </div><!-- /.content -->

  <footer class="footer footer--white">
    <div class="container">
      <div class="row">
        <div class="footer__copy">Make design work <sup>TM</sup></div>

        <div class="contact-block footer__contact-block">
          <?php
          $address = get_field( 'address', 'option' );
          $phone = get_field( 'phone', 'option' );
          $email = get_field( 'email', 'option' );

          if ($address):
            ?>
            <?php echo $address; ?>
          <?php endif; ?>

          <?php if ($phone): ?>
            <p>T <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="link"><?php echo $phone; ?></a></p>
          <?php endif; ?>

          <?php if ($email): ?>
            <p><a href="mailto:<?php echo $email; ?>" class="link"><?php echo $email; ?></a></p>
          <?php endif; ?>

          <?php $instagram = get_field( 'instagram', 'option' );
          $linkedin = get_field( 'linkedin', 'option' );

          if ($instagram || $linkedin): ?>
            <div class="contact-block__social">
              <?php if ($instagram): ?>
                <a href="<?php echo esc_url( $instagram ); ?>" class="link" target="_blank">Instagram</a>
              <?php endif; ?>
              <?php if ($linkedin): ?>
                <a href="<?php echo esc_url( $linkedin ); ?>" class="link" target="_blank">Linkedin</a>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        </div>

        <a href="<?php echo home_url( '/' ); ?>" class="footer__logo">
          <img src="<?php echo THEME_URL; ?>/images/general/logo-small-dark.svg" width="100" alt="<?php echo bloginfo( 'name' ); ?>">
        </a>
      </div>
    </div>
  </footer><!-- #colophon -->

  <?php get_template_part( 'template-parts/nav' ); ?>
  <?php get_template_part( 'template-parts/get-in-touch' ); ?>

</div><!-- /.wrapper -->

<?php wp_footer(); ?>

</body>
</html>
