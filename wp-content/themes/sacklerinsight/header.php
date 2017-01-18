<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Sackler InSight Team, Tufts Sackler School">

    <title><?php echo get_bloginfo('name');?></title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Crimson+Text|Montserrat');
    </style>
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>
    <div class="masthead">
        <div class="container">
            <div class="container">
                <div class="header-left blog-title">
                    <?php
                    $blog_title = get_bloginfo('name');
                    switch ($blog_title):
                        case "InSight":?>
    <a class="flat tufts-brown" href="<?php bloginfo('wpurl');?>">IN</a><a class="tufts-blue flat" href="<?php bloginfo('wpurl') ?>">SIGHT</a>
                            <?php
                            break;
                        default:?>
    <a class="flat" href="<?php bloginfo('wpurl');?>"><?php get_bloginfo('name');?></a>
                            <?php
                            break;
                    endswitch;
                    ?>
                </div>
                <div class="header-right blog-description">
                    <?php
                    $blog_desc = get_bloginfo('description');
                    switch ($blog_desc):
                        case "InSightDefault":?>
                            <span class="tufts-brown">Tufts University</span>
                            <span class="tufts-blue">Sackler School</span><br />
                            <span class="tufts-brown">Graduate Student Council</span><br />
                            <span class="tufts-blue">Newsletter</span>
                            <span class="tufts-brown">&</span>
                            <span class="tufts-blue">Blog</span>
                            <?php
                            break;
                        default:
                            echo get_bloginfo('description');
                            break;
                    endswitch;
                    ?>
                </div>
            </div><!-- /.container -->
            <hr class="header tufts-brown">
        </div><!-- /.container -->
    </div><!-- /.masthead -->
    
    <div class="container">
        <div class="header">
            <div class="nav">
                <?php wp_list_pages('&title_li=');?>
            </div>
        </div><!-- /.header -->
