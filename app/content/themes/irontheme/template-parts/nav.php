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