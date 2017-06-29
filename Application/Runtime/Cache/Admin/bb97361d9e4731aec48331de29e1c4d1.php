<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>基本配置</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/Public/admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/index.php/Admin/index">首页</a></li>
                <li><a href="/index.php" target="#">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li>管理员：<?php echo $_SESSION['username']; ?></li>
                <li><a href="/index.php/admin/Admin/edit/id/<?php echo $_SESSION['id']; ?>">修改密码</a></li>
                <li><a href="/index.php/admin/Admin/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container clearfix">
    <div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                <ul class="sub-menu">
                    <li><a href="/index.php/admin/Article/lst"><i class="icon-font">&#xe005;</i>文章管理</a></li>
                    <li><a href="/index.php/admin/Cate/lst"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                    <li><a href="/index.php/admin/Link/lst"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                    <li><a href="/index.php/admin/Admin/lst"><i class="icon-font">&#xe008;</i>管理员管理</a></li>
                    <li><a href="/index.php/admin/Basic/index.html"><i class="icon-font">&#xe008;</i>基本管理</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="#">链接管理</a><span class="crumb-step">&gt;</span><span>修改链接</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form id="myform" name="myform">
                    <input type="hidden" name="id" value="<?php echo ($links["id"]); ?>">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>站点标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="title" size="50" value="<?php echo ($vo["title"]); ?>" type="text">
                            </td>
                        </tr>

                        <tr>
                            <th><i class="require-red">*</i>关键词：</th>
                            <td>
                                <input class="common-text required" id="url" name="url" size="50" value="<?php echo ($vo["keywords"]); ?>" type="text">
                            </td>
                        </tr>

                        <tr>
                            <th><i class="require-red">*</i>网站简介：</th>
                            <td>
                                <textarea style="width:382px; height: 100px;" name="desc"><?php echo ($vo["description"]); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>