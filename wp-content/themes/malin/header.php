<!DOCTYPE html>
<html lang ="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php 

if(function_exists('wp_body_open')){

    wp_body_open();
}

?>

<header class="site-header">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h4><?php bloginfo( 'description' ); ?></h4>
</header>
