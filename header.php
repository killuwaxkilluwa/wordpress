<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>呼伦贝尔致承旅行社</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header id="header">
            <div class="header-container">
                <div class="header-logo"><a href="#" title="呼伦贝尔致承旅行社">呼伦贝尔致承旅行社</a></div>
                <div class="header-tel">预定电话 0470-8105006</div>
                <div class="header-code">
                    <?php $logo = get_bloginfo('template_url').'/img/weixin.png';?>
                    <img src="<?php echo $logo ?>" alt="">
                </div>
            </div>
        </header>
        <div class="nav">
            <div class="base-nav">
                <ul class="nav-ul">
                    <li><a titledec="首页" class="" id="" href="">首页</a></li>
                    <li><a titledec="产品路线" class="" id="" href="">产品路线</a></li>
                    <li><a titledec="旅行百科" class="" id="" href="">旅行百科</a></li>
                    <li><a titledec="旅行互动" class="" id="" href="">旅行互动</a></li>
                    <li><a titledec="官方淘宝" class="" id="" href="">官方淘宝</a></li>
                </ul>
            </div>
        </div>
        
       