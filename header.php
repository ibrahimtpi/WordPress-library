### Basic Structure. ###
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

</body>
</html>



### Dynamic Navigation Menu ###
// Register menus on functions.php
register_nav_menu('headerMenuLocation', 'Header Menu Location');

<?php
	//on template file.
	wp_nav_menu(array(
		'theme_location'	=> 'headerMenuLocation'
	));
?>



### Static Navigation Menu ###
<nav>
	<ul>
		<li <?php if(is_page('about-us') or wp_get_post_parent_id(0) == 10) echo 'class="current-menu-item"'; ?>>
			<a href="<?php echo site_url('/about-us') ?>">About Us</a>
		</li>
		<li <?php if(is_page('contact-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"'; ?>>
			<a href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
		</li>
	</ul>
</nav>
