<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classic - Blog Page</title>
    <link rel="stylesheet" href="/Public/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/index/css/templatemo-style.css">
          <script src="/Public/index/js/html5shiv.min.js"></script>
          <script src="/Public/index/js/respond.min.js"></script>
</head>
    <body">

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


        <div class="tm-blog-img-container"></div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="tm-blog-post">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                                        <h2 class="tm-gold-text tm-title"><?php echo ($arts["title"]); ?></h2>
                                        <p class="tm-subtitle"><?php echo ($arts["desc"]); ?></p>
                                    </div>
                                </div>
                            </div>
                            <p><?php echo htmlspecialchars_decode($arts['content']); ?></p>
                        </div>


                    </div>
                </div>
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
        <script src="/Public/index/https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
        <script src="/Public/index/js/bootstrap.min.js"></script>
       
</body>
</html>