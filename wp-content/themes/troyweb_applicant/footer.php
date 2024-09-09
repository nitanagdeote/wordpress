<div>
    <nav class="main-navigation">
  <div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/tw-logo-header.png'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 20vh; width:20vw; text-align: center; display: flex; align-items: left; justify-content: center;margin:20px">
</div>

        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'container' => false,
            'menu_class' => 'nav-menu',
        ) );
        ?>
    </nav>
</div>

