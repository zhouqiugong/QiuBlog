<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qiu Blog</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/common.css"/>
    <link rel="stylesheet" href="/Public/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/index/css/templatemo-style.css">
          <script src="/Public/index/js/html5shiv.min.js"></script>
          <script src="/Public/index/js/respond.min.js"></script>
<style type="text/css">
        img{
            width: 100%;
            height: auto;
            max-width: 100%;
            display: block;
        }
    </style>
</head>

    <body>
       
        <div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="#" class="navbar-brand tm-site-name">Qiu Blog</a>

            <!-- navbar -->
            <nav class="navbar tm-main-nav">

                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>

                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="/index.php" class="nav-link">首页</a>
                        </li>
                        <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="nav-item">
                            <a href="/index.php/home/Cate/index/id/<?php echo ($vo["id"]); ?>" class="nav-link"><?php echo ($vo["catename"]); ?></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <li class="nav-item">
                            <a href="http://www.fenxd.com/qiublog/" class="nav-link" target="_blank">关于</a>
                        </li>
                    </ul>
                </div>

            </nav>

        </div>
    </div>
</div>


        
            <img src="/Public/index/img/tm-home-img.jpg" alt="Image">
        

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">最新文章</h2>
                        <p class="tm-subtitle">本系统由创始人周秋宫（小豪）利用ThinkPHP+Bootstrap基于PHP+MySQL环境开发的一个简单清晰大方的博客！</p>
                    </div>
                </div>
                <div class="row">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <!-- 这里循环 -->
                        <div class="tm-content-box">
                            <img src="/./<?php echo ($vo["pic"]); ?>" alt="Image" class="tm-margin-b-20" width="240" height="120"><!-- 缩略图 -->
                            <h4 class="tm-margin-b-20 tm-gold-text"><?php echo ($vo["title"]); ?></h4><!-- 文章标题 -->
                            <p class="tm-margin-b-20"><span><?php echo (date("m-d",$vo["time"])); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["desc"]); ?></p><!-- 文章描述 -->
                            <a href="/index.php/home/Article/index/id/<?php echo ($vo["id"]); ?>" class="tm-btn text-uppercase">点击查看</a><!-- 文章地址 -->
                        </div>
                        <!-- 这里循环结束 -->
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!-- <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <div class="list-page"><?php echo ($page); ?></div>
                    </div>
                </div> -->
                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="tm-2-col-left">

                            <h3 class="tm-gold-text tm-title">下载程序Qiu Blog</h3>
                            <p class="tm-margin-b-30">本系统由创始人周秋宫（小豪）利用ThinkPHP+Bootstrap基于PHP+MySQL环境开发的一个简单清晰大方的博客！</p>
                            <img src="/Public/index/img/tm-img-660x330-1.jpg" alt="Image" class="tm-margin-b-40 img-fluid">
                            <p>
                                该博客系统名为（QiuBlog）顾名思义，就是取于创始人名中间的(秋)来命名的，该博客主打简单清晰大方没有复杂多样的功能
                                相信喜欢 “简单清晰大方” 的人也很会喜欢上这个博客系统的！
                            </p>
                            <p>由于本人还是个 “菜鸟” 太过于复杂的系统不会开发，有个别BUG或者意见的可以给我们发E-mail：mail@fenxd.com，相信我们也不会放弃更新下去的！</p>
                            <p class="m-b-2"><b>Qiu Blog 简 约 而 不 简 单 . . .</b></p>
                            <a href="http://www.fenxd.com/QiuBlog.zip" class="tm-btn text-uppercase">点击下载</a>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <div class="tm-2-col-right">

                            <div class="tm-2-rows-md-swap">

                                <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <h3 class="tm-gold-text tm-title tm-margin-b-30">动态文章</h3>
                                        <?php if(is_array($artres)): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="media tm-related-post">
                                            <div class="media-left media-middle">
                                                <a href="#">
                                                    <img class="media-object" src="<?php echo ($vo["pic"]); ?>" alt="Generic placeholder image" width="240" height="120">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="/index.php/home/Article/index/id/<?php echo ($vo["id"]); ?>"><h4 class="media-heading tm-gold-text tm-margin-b-15"><?php echo ($vo["title"]); ?></h4></a>
                                                <p class="tm-small-font tm-media-description"><?php echo ($vo["desc"]); ?></p>
                                            </div>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div> <!-- row -->

            </div>
        </section>
        <footer class="tm-footer">
    <div class="container-fluid">
        <!-- <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                <div class="tm-footer-content-box tm-footer-links-container">

                    <h3 class="tm-gold-text tm-title tm-footer-content-box-title">栏目分类</h3>
                    <style type="text/css">
                        a:link {
                            text-decoration: none;
                        }
                        a:visited {
                            text-decoration: none;
                        }
                        a:hover {
                            text-decoration: none;
                        }
                        a:active {
                            text-decoration: none;
                        }
                    </style>
                    <nav>
                        <ul class="nav">
                            <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/index.php/home/Cate/index/id/<?php echo ($vo["id"]); ?>" class="tm-footer-link"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </nav>

                </div>

            </div>

            <div class="clearfix hidden-lg-up"></div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">

                <div class="tm-footer-content-box">

                    <h3 class="tm-gold-text tm-title tm-footer-content-box-title">联系方式</h3>
                    <p class="tm-margin-b-30">QQ：1041117602</br>Q群：174231024</br>E-mail：mail@fenxd.com
                    </p><hr class="tm-margin-b-30">
                    <p class="tm-margin-b-30">（QiuBlog）博客基于ThinkPHP开发.</p>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">

                <div class="tm-footer-content-box">

                    <h3 class="tm-gold-text tm-title tm-footer-content-box-title">热门图片</h3>
                    <div class="tm-margin-b-30">
                        <img src="/Public/index/img/tm-img-100x100-1.jpg" alt="Image" class="tm-footer-thumbnail">
                        <img src="/Public/index/img/tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
                        <img src="/Public/index/img/tm-img-100x100-3.jpg" alt="Image" class="tm-footer-thumbnail">
                        <img src="/Public/index/img/tm-img-100x100-4.jpg" alt="Image" class="tm-footer-thumbnail">
                        <img src="/Public/index/img/tm-img-100x100-5.jpg" alt="Image" class="tm-footer-thumbnail">
                        <img src="/Public/index/img/tm-img-100x100-6.jpg" alt="Image" class="tm-footer-thumbnail">
                        <img src="/Public/index/img/tm-img-100x100-1.jpg" alt="Image" class="tm-footer-thumbnail">
                        <img src="/Public/index/img/tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
                    </div>
                </div>

            </div>


            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                <div class="tm-footer-content-box tm-footer-links-container">

                    <h3 class="tm-gold-text tm-title tm-footer-content-box-title">友情链接</h3>
                    <style type="text/css">
                        a:link {
                            text-decoration: none;
                        }
                        a:visited {
                            text-decoration: none;
                        }
                        a:hover {
                            text-decoration: none;
                        }
                        a:active {
                            text-decoration: none;
                        }
                    </style>
                    <nav>
                        <ul class="nav">
                            <?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" class="tm-footer-link" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </nav>

                </div>

            </div>

        </div> -->

        <div class="row">
            <div class="col-xs-12 tm-copyright-col">
                <p class="tm-copyright-text">Copyright 2016 Your Company By <a href="http://www.fenxd.com" class="tm-gold-text">Qiugong.</a></p>
            </div>
        </div>
    </div>
</footer>

        <script src="/Public/index/js/jquery-1.11.3.min.js"></script>
        <script src="/Public/index/js/tether.min.js"></script>
        <script src="/Public/index/js/bootstrap.min.js"></script>
</body>
</html>