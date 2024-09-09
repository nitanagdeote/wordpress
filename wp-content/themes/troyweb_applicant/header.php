<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TroyWebApplicant</title>
    <?php wp_head(); ?>
</head>
<body>
<header>



    <div class='container'>
         <!-- Add the logo on the left -->
 <div class="nav-logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tw-logo-header.png" alt="Site Logo">
        </a>
    </div>
<?php 
wp_nav_menu(
array(
'theme_location'=> 'top-menu',
'menu_class'=>'top-bar'
)

);

?>
 <a href="http://localhost/wordpress-6.6.1/wordpress/?page_id=88" >
        <button class='nav-button'>Contact Me</button>
    </a>
</div>
</header>
