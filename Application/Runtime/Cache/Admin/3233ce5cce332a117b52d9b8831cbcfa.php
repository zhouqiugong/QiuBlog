<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">文章管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" action="/index.php/admin/article/sort" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/index.php/admin/article/add"><i class="icon-font"></i>新增文章</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>文章标题</th>
                            <th>文章缩略图</th>
                            <th>文章栏目</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td title="<?php echo ($vo["title"]); ?>"><a target="_blank" href="#" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a>
                            </td>
                            <td>
                                <?php if($vo['pic'] != '' ): ?><img src="/<?php echo ($vo["pic"]); ?>" height="50px">
                                    <?php else: ?>
                                    暂无缩略图<?php endif; ?>
                            </td>
                            <td><?php echo ($vo["catename"]); ?></td>
                            <td>
                                <a class="link-update" href="/index.php/admin/article/edit/id/<?php echo ($vo["id"]); ?>">修改</a>
                                <a class="link-del" onclick="return confirm('确定删除吗？');" href="/index.php/admin/article/del/id/<?php echo ($vo["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>