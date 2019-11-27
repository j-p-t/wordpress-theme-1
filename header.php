<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
  <?php wp_head();?>
  <?php wp_meta();?>
</head>
<!-- Navigation -->
<body>
<div class="container">
    <div class="container-fluid">
        <div class="page-header">
            <h1><?php echo get_bloginfo('name'); ?></h1>
            <h3><small><strong><?php echo get_bloginfo('description'); ?></strong></small></h3>
        </div>
    </div><!-- /.container-fluid -->
</div><!-- /.container -->
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container">
            <?php if (has_nav_menu('custom-nav-bar-menu')) : ?>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php $menu_obj = get_menu_by_location('custom-nav-bar-menu'); 
                    wp_nav_menu( array( 
                    'theme_location'  => 'custom-nav-bar-menu',
                    'menu_class' => 'nav navbar-nav',
                )); ?>
            </div><!-- /.navbar-collapse -->
            <?php endif; ?>
        </div>
    </nav>

</div>
<!-- Content -->
<div class="jumbotron">
<div class="container">
    <div class="row">
        <div class="col-sm-2 blog-sidebar">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-sm-8 blog-main">
