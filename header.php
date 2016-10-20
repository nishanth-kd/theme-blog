<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1">
        <title>Paranoid Programmer <?php wp_title(); ?> </title>
        <!--[if lt IE 9]!>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![end if]-->
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,700" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="//db.onlinewebfonts.com/c/e964e105b78e8de781e629486cf8b31f?family=CamphorW01-Light" rel="stylesheet" type="text/css">
        <link href="//db.onlinewebfonts.com/c/4dbaa3adcaa1e0b2b87ff13dabcf5bfb?family=CamphorW01-Medium" rel="stylesheet" type="text/css">
        <link href="//db.onlinewebfonts.com/c/fb4b3fc0253f9898cdcb1b7ad0898477?family=CamphorW01-Thin" rel="stylesheet" type="text/css">

        <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
        <script type="text/javascript">
            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        </script>
        <?php 
            do_action('wp_head');
            include_once("analytics-tracking.php");
            $color = rand(1, 7);
            paranoid_var_color($color);
        ?>
    </head>
    <body>
        <input type="hidden" id="ajax_url" value="<?php echo admin_url('admin-ajax.php'); ?>">
        
        <div class="container" id="navbar-main">
            <div class="row">
                <a href="<?php echo home_url();?>">
                        <div class="col-xs-8 company-logo">
                            <p><span class="programming">programming</span> ( <span class="paranoia">paranoia</span> ) { ... }</p>
                        </div>
                        
                </a>
                <a href="#">
                        <div class="col-xs-4 menu">
                            
                        </div>
                </a>
            </div>
        </div>