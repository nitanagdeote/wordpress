
<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/troywebconsulting/style.css">

<?php
// This is the main index.php file for your WordPress theme
// It will display posts if no other specific template is found

get_header();  // Include the header.php file

?>
<div>
<a href="https://example.com" class="button">Contact me</a>
</div>
<div>
<h1> Testing 1<h2>
<p>testing2</p>
</div>


<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 50vh; text-align: center; display: flex; align-items: center; justify-content: center; color: white;">
    <h1 style="font-size: 48px; margin: 0;">Troy Web Developers:</h1>
    <h2 style="font-size: 48px;">Troy Web</h2>
</div>

// This is the main index.php file for your WordPress theme

// It will display posts if no other specific template is found
<?php
get_footer();  // Include the header.php file

?>
