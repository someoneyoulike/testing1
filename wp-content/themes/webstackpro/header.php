<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name=”keywords”  content=”QQ技术导航,导航天下,技术导航,娱乐网,小刀娱乐网,爱Q,QQ技术,QQ导航,网址导航” />
<meta name=”description”  content=”智凡网址导航是国内首屈一指的技术教程活动导航分类平台，站点已累计收录数千网站，累计为中国网民提供多达数亿的访问点击，满足用户随时查阅最全面最权威的文章资讯教程 ”/>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php get_template_part( 'templates/title' ) ?>
<link rel="shortcut icon" href="<?php echo io_get_option('favicon')['url'] ?>">
<link rel="apple-touch-icon" href="<?php echo io_get_option('apple_icon')['url'] ?>">
<?php wp_head(); ?>
<?php custom_color() ?>
</head> 
<body class="<?php echo theme_mode() ?>">
<?php if(io_get_option('loading_fx')) { ?><div id="loading"><div id="preloader_3"></div></div><?php } ?>
   <div class="page-container">
      