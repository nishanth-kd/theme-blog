<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1">
        <title>Nishanth KD</title>
        <!--[if lt IE 9]!>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![end if]-->
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,700" rel="stylesheet" type="text/css">

        <script src="<?php bloginfo('template_directory');?>/dist/lib/js/jquery-1.11.3.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/dist/lib/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/main.js"></script>

        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/dist/lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/dist/css/social-buttons.css">
        <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
        <?php 
            include_once("analytics-tracking.php"); 
            $color = rand(1, 7);
            nishanthkd_var_color($color);
        ?>
    </head>
    <body>
        <input type="hidden" id="ajax_url" value="<?php echo admin_url('admin-ajax.php'); ?>">
        
        <div class="container" id="navbar-main">
            <div class="row">
                <a href="<?php echo home_url();?>">
                        <div class="col-x:s-8 company-logo">
                            <p>NISHANTH<span class="color-<?php echo $color;?>">KD</span> <sup><span>The <span class="color-<?php echo $color;?>">Pragmatic</span> Paranoia</span></sup></p>
                        </div>
                </a>
                <a href="#">
                        <div class="col-xs-4 menu">
                            
                        </div>
                </a>
            </div>
        </div>