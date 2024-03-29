<?php
/**
 * @package WordPress
 * @subpackage Modularity
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lte IE 6]>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="lteIE6">
<![endif]-->
<!--[if !IE]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<!-- <![endif]-->
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

<!-- Styles  -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/print.css" type="text/css" media="print" />
	<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/library/styles/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if lte IE 7]><link type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/library/styles/ie-nav.css" rel="stylesheet" media="all" /><![endif]-->

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39180260-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <?php body_class(); ?>>
<div id="top">

<!-- Begin Masthead -->
<div id="masthead">
 <h4 class="left"><a href="<?php echo home_url( '/' ); ?>" title="<?php _e( 'Home', 'modularity' ); ?>" class="logo"><?php bloginfo( 'name' ); ?></a> <span class="description"><?php bloginfo( 'description' ); ?></span></h4>
</div>


<div class="clear"></div>
</div>

<div class="container">
<div class="container-inner">
	
	<?php if ( get_theme_mod( 'header_image' ) ) : ?>	    
	<div id="header-image">
	<a href="/" style="none"><img src="<?php header_image() ?>" width="950" height="200" alt="" /></a>
	</div>
	<?php endif; ?>
	<div id="icon-right">
		<img src="http://www.folkloredemode.com/wp-content/themes/modularity-lite/images/square.png" />
	</div>
	<div id="navigation-wrap">
		<div id="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'main-nav' ) ); ?>
		</div>
	</div>
	<div id="icon-left">
		<img src="http://www.folkloredemode.com/wp-content/themes/modularity-lite/images/square.png" />
	</div>