<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,300|Open+Sans:400,300' rel='stylesheet' type='text/css'>

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>

<?php 
// Define and select a random color class to add to our body
// This then will style our page based on our SCSS work in style.scss
$colors = array( 'one', 'two', 'three', 'four', 'five', 'six' ); 
$count = count( $colors );
$num = rand( 0, $count );
$color = 'color-' . $colors[ $num ];
?>
<body <?php body_class( $color ); ?>>
<?php include_once("analyticstracking.php") ?>

<header>
  <div class="wrapper">
    <div class="fa fa-bars fa-2x"></div>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div>
</header><!--/.header-->

