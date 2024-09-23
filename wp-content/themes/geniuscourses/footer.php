<?php 
wp_nav_menu(
	array(
		'theme_location' => 'footer_nav',
    'menu_class' => 'myclass',
    'container' => 'div',
    'fallback_cd' => 'wp_page_menu'
	)
);
?>

<?php wp_footer(); ?>

</body>
</html>
