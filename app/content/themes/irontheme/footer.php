  </div><!-- /.content -->

  <footer class="footer">
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
          <img src="<?php echo THEME_URL; ?>/images/general/logo-small.svg" width="100" alt="<?php echo bloginfo( 'name' ); ?>">
        </a>
      </div>
    </div>
  </footer><!-- #colophon -->

  <div class="nav">

    <div class="nav__wrap">
      <div class="row">
        <div class="nav__left">
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

        <div class="nav__right">

          <div class="nav__list-wrap">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu'            => '',
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'nav-list',
              'menu_id'         => '',
            ) );
            ?>
          </div>

          <div class="contact-block nav__contact-block">
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
        </div>
      </div>
    </div>
  </div>
  <!-- /.nav -->

  <div class="get-in-touch">
    <div class="get-in-touch__head">
      <a href="<?php echo home_url( '/' ); ?>" class="logo get-in-touch__logo">
        <img src="<?php echo THEME_URL; ?>/images/general/logo-dark.svg" width="345" alt="<?php echo bloginfo( 'name' ); ?>">
      </a>
      <button type="button" class="btn-close get-in-touch__close"></button>
    </div>

    <div class="get-in-touch__body">
      <div class="row">
        <div class="get-in-touch__left">
          <h2 class="get-in-touch__title">Do you have <br>a great business <br>idea and need help <br>with branding?</h2>
        </div>
        <div class="get-in-touch__right">
          <?php echo do_shortcode( '[contact-form-7 id="6" title="Get in touch"]' ); ?>
        </div>

        <div class="contact-block get-in-touch__contact-block">
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
      </div>
    </div>

  </div>
  <!-- /.get-in-touch -->

</div><!-- /.wrapper -->

<?php wp_footer(); ?>

</body>
</html>
