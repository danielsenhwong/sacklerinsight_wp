<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Sackler InSight Team, Tufts Sackler School">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29629616-4', 'auto');
      ga('send', 'pageview');

    </script>

    <?php wp_head(); # import everything in functions.php, e.g. Title, CSS, Google Fonts ?>
</head>

<body>
    <div class="fixed grab-handle blog-title border-bottom">
        <a href="#" id=menu-icon></a><a href="#" class="tufts-bown">In</a><a href="#" class="tufts-blue">Sight</a> Menu
    </div>
        <div id="handle" class="fixed left border-right">
            <div class="blog-title center">
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
            <div class="nav">
                <div>
                    <?php get_search_form(); ?>
                </div>
                <div class="menu">
                    Menu
	            <div class="submenu">
                        <?php wp_list_pages('&title_li=');?>
                    </div>
                </div>
                <div class="menu">
                    Archives
                    <div class="submenu">
                        <?php wp_get_archives('type=monthly');?>
                    </div>
                </div>
                <div>
                    <a href="<?php echo admin_url();?>">Admin</a>
                </div>
	    </div>
	    <div>
                <div style="margin-top: 10px;">
                    Tag Cloud<br/>
                </div>
                <div class="tag-cloud">
                    <?php wp_tag_cloud( array('number' => 20,
                                              'smallest' => 6,
                                              'largest' => 18));?>
                </div>
        </div>
    </div>
    <div class="container">
    </div><!-- /.container -->
    
    <div class="container">
        <div class="header">
            <div class="blog-desc center">
                <?php
                $blog_desc = get_bloginfo('description');
                switch ($blog_desc):
                    case htmlentities("Tufts University Sackler School Graduate Student Council Newsletter & Blog"):?>
                <span class="tufts-brown">Tufts University</span> 
                <span class="tufts-blue">Sackler School</span> 
                <span class="tufts-brown">Graduate Student Council</span> 
                <span class="tufts-blue">Newsletter</span>
                <span class="tufts-brown">&</span>
                <span class="tufts-blue">Blog</span>
                        <?php break;
                    default:
                        echo get_bloginfo('description');
                        break;
                endswitch; ?>
            </div>
        </div><!-- /.header -->
