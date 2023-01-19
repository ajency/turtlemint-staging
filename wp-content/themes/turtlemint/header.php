<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Turtlemint
 */
/*touch('wp-content/themes/turtlemint/page-content-tax4.php');*/
/*touch('wp-content/themes/turtlemint/single-cat-company-updates.php');*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- SG test -->

	<link rel="shortcut icon" href="/wp-content/uploads/2021/08/tm-favicon.png" type="image/x-icon">    
    <!-- inject:head -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.less" rel="stylesheet/less" type="text/css">
    <?php /*if( is_page_template('page-content-e.php') ){ ?>
    	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/page-content-e.less" rel="stylesheet/less" type="text/css">
	<?php }*/ ?>

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/plugins/less.js"></script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)
    ;
    })(window,document,'script','dataLayer','GTM-PCZGBP');</script>
    <!-- End Google Tag Manager -->
    <!-- endinject:head -->

	<?php wp_head(); ?>
	<?php    if(is_page(16822)||is_page(16834)) {  ?>
<script type="text/javascript">
(function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);
mixpanel.init("94b72fe8fa0b0fbf2984f556ad073226");
</script>
<?php  } ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'turtlemint' ); ?></a>
	<div id="commonHeader" class="hidden-xs"></div>
	<?php //echo "../turtlemint/assets/landing_widgets/common-header.html"; ?>
	<?php //include(get_theme_root() . '/' . get_template() . "/assets/landing_widgets/common-header.html"); ?>
    <div id="commonHeader-mobile" class="visible-xs hidden-sm hidden-md hidden-lg"></div>
    <?php //include "/wp-content/themes/turtlemint/assets/landing_widgets/mobile-header.html"; ?>
    <?php //include(get_theme_root() . '/' . get_template() . "/assets/landing_widgets/mobile-header.html"); ?>


	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$turtlemint_description = get_bloginfo( 'description', 'display' );
			if ( $turtlemint_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $turtlemint_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'turtlemint' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
