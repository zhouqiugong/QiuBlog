-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-29 09:39:08
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qiu`
--

-- --------------------------------------------------------

--
-- 表的结构 `qiu_admin`
--

CREATE TABLE IF NOT EXISTS `qiu_admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` varchar(40) NOT NULL COMMENT '管理员名称',
  `password` char(32) NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `qiu_admin`
--

INSERT INTO `qiu_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'qiugong', '85b4b563c803a3b3734482ae38b2cd00');

-- --------------------------------------------------------

--
-- 表的结构 `qiu_article`
--

CREATE TABLE IF NOT EXISTS `qiu_article` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `cateid` mediumint(9) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `qiu_article`
--

INSERT INTO `qiu_article` (`id`, `title`, `desc`, `pic`, `content`, `cateid`, `time`) VALUES
(1, 'QiuBlog v1.0', 'Qiu Blog简约而不简单...', './Uploads/2017-02-13/58a1ba39e58e3.jpg', '&lt;p class=&quot;tm-margin-b-30&quot; style=&quot;box-sizing: inherit; margin-top: 0px; margin-bottom: 30px; line-height: 1.9; color: rgb(140, 140, 140); font-family: &amp;quot;Open Sans&amp;quot;, Helvetica, Arial, sans-serif; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;本系统由创始人周秋宫（小豪）利用ThinkPHP+Bootstrap基于PHP+MySQL环境开发的一个简单清晰大方的博客！&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/Public/index/img/tm-img-660x330-1.jpg&quot; alt=&quot;Image&quot; class=&quot;tm-margin-b-40 img-fluid&quot; style=&quot;box-sizing: inherit; border: 0px; vertical-align: middle; display: block; max-width: 100%; height: auto; margin-bottom: 40px; color: rgb(140, 140, 140); font-family: &amp;quot;Open Sans&amp;quot;, Helvetica, Arial, sans-serif; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem; line-height: 1.9; color: rgb(140, 140, 140); font-family: &amp;quot;Open Sans&amp;quot;, Helvetica, Arial, sans-serif; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;该博客系统名为（QiuBlog）顾名思义，就是取于创始人名中间的(秋)来命名的，该博客主打简单清晰大方没有复杂多样的功能 相信喜欢 “简单清晰大方” 的人也很会喜欢上这个博客系统的！&lt;/p&gt;&lt;p style=&quot;box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem; line-height: 1.9; color: rgb(140, 140, 140); font-family: &amp;quot;Open Sans&amp;quot;, Helvetica, Arial, sans-serif; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;由于本人还是个 “菜鸟” 太过于复杂的系统不会开发，有个别BUG或者意见的可以给我们发E-mail：mail@fenxd.com，相信我们也不会放弃更新下去的！&lt;/p&gt;&lt;p class=&quot;m-b-2&quot; style=&quot;box-sizing: inherit; margin-top: 0px; line-height: 1.9; color: rgb(140, 140, 140); font-family: &amp;quot;Open Sans&amp;quot;, Helvetica, Arial, sans-serif; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); margin-bottom: 1.5rem !important;&quot;&gt;&lt;span style=&quot;box-sizing: inherit; font-weight: 700;&quot;&gt;Qiu Blog 简 约 而 不 简 单 . . .&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 1, 1486993977),
(3, 'HTML5入门了解', '超文本标记语言', './Uploads/2017-02-13/58a1bf99f194e.jpg', '&lt;p style=&quot;text-align: left; text-indent: 2em;&quot;&gt;&lt;span style=&quot;font-size: 20px; color: rgb(54, 96, 146);&quot;&gt;&lt;strong&gt;标准通用标记语言下的一个应用HTML标准自1999年12月发布的HTML4.01后，后继的HTML5和其它标准被束之高阁，为了推动Web标准化运动的发展，一些公司联合起来，成立了一个叫做 Web Hypertext Application Technology Working Group （Web超文本应用技术工作组 -WHATWG） 的组织。WHATWG 致力于 Web 表单和应用程序，而W3C（World Wide Web Consortium，万维网联盟） 专注于XHTML2.0。在 2006 年，双方决定进行合作，来创建一个新版本的 HTML。&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;例子：&lt;/p&gt;&lt;p style=&quot;text-align: left; text-indent: 2em;&quot;&gt;&lt;span style=&quot;font-size: 20px; color: rgb(54, 96, 146);&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245); font-size: 12px;&quot;&gt;&amp;lt;!DOCTYPE&amp;nbsp;HTML&amp;gt;\r\n&amp;lt;html&amp;gt;\r\n&amp;lt;body&amp;gt;\r\n\r\n&amp;lt;p&amp;gt;Hello&amp;nbsp;World&amp;lt;/p&amp;gt;\r\n\r\n&amp;lt;/body&amp;gt;\r\n&amp;lt;/html&amp;gt;&lt;/pre&gt;', 2, 1486995353),
(4, 'CSS入门了解', 'CSS、CSS3', './Uploads/2017-02-13/58a1c0db9675f.jpg', '&lt;h2 style=&quot;text-indent: 2em;&quot;&gt;&lt;span style=&quot;font-size: 18px; color: rgb(84, 141, 212);&quot;&gt;CSS即层叠样式表（Cascading&amp;nbsp;StyleSheet）。 在网页制作时采用层叠样式表技术，可以有效地对页面的布局、字体、颜色、背景和其它效果实现更加精确的控制。 只要对相应的代码做一些简单的修改，就可以改变同一页面的不同部分，或者页数不同的网页的外观和格式。CSS3是CSS技术的升级版本，CSS3语言开发是朝着模块化发展的。以前的规范作为一个模块实在是太庞大而且比较复杂，所以，把它分解为一些小的模块，更多新的模块也被加入进来。这些模块包括： 盒子模型、列表模块、超链接方式 、语言模块 、背景和边框 、文字特效 、多栏布局等。&lt;/span&gt;&lt;/h2&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;h2 style=&quot;margin: 0px; padding: 0px; border: 0px; font-family: 微软雅黑; font-size: 14px;&quot;&gt;&lt;br/&gt;&lt;/h2&gt;&lt;h2 style=&quot;margin: 0px; padding: 0px; border: 0px; font-family: 微软雅黑; font-size: 14px;&quot;&gt;CSS 语法&lt;/h2&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;CSS 规则由两个主要的部分构成：选择器，以及一条或多条声明。&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;selector {declaration1; declaration2; ... declarationN }&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;选择器通常是您需要改变样式的 HTML 元素。&lt;/p&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;每条声明由一个属性和一个值组成。&lt;/p&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;属性（property）是您希望设置的样式属性（style attribute）。每个属性有一个值。属性和值被冒号分开。&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;selector {property: value}&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;下面这行代码的作用是将 h1 元素内的文字颜色定义为红色，同时将字体大小设置为 14 像素。&lt;/p&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;在这个例子中，h1 是选择器，color 和 font-size 是属性，red 和 14px 是值。&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;h1 {color:red; font-size:14px;}&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;下面的示意图为您展示了上面这段代码的结构：&lt;/p&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170213/1486995578729991.gif&quot; alt=&quot;CSS 语法&quot; style=&quot;margin: 25px 0px 0px 25px; padding: 0px; border: 0px;&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; font-weight: bold; color: rgb(255, 153, 85);&quot;&gt;提示：&lt;/span&gt;请使用花括号来包围声明。&lt;/p&gt;&lt;h2 style=&quot;margin: 0px; padding: 0px; border: 0px; font-family: 微软雅黑; font-size: 14px;&quot;&gt;值的不同写法和单位&lt;/h2&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;除了英文单词 red，我们还可以使用十六进制的颜色值 #ff0000：&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;p { color: #ff0000; }&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;为了节约字节，我们可以使用 CSS 的缩写形式：&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;p { color: #f00; }&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;我们还可以通过两种方法使用 RGB 值：&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;p { color: rgb(255,0,0); }&lt;br/&gt;p { color: rgb(100%,0%,0%); }&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;请注意，当使用 RGB 百分比时，即使当值为 0 时也要写百分比符号。但是在其他的情况下就不需要这么做了。比如说，当尺寸为 0 像素时，0 之后不需要使用 px 单位，因为 0 就是 0，无论单位是什么。&lt;/p&gt;&lt;h2 style=&quot;margin: 0px; padding: 0px; border: 0px; font-family: 微软雅黑; font-size: 14px;&quot;&gt;记得写引号&lt;/h2&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; font-weight: bold; color: rgb(255, 153, 85);&quot;&gt;提示：&lt;/span&gt;如果值为若干单词，则要给值加引号：&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;p {font-family: &amp;quot;sans serif&amp;quot;;}&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;h2 style=&quot;margin: 0px; padding: 0px; border: 0px; font-family: 微软雅黑; font-size: 14px;&quot;&gt;多重声明：&lt;/h2&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; font-weight: bold; color: rgb(255, 153, 85);&quot;&gt;提示：&lt;/span&gt;如果要定义不止一个声明，则需要用分号将每个声明分开。下面的例子展示出如何定义一个红色文字的居中段落。最后一条规则是不需要加分号的，因为分号在英语中是一个分隔符号，不是结束符号。然而，大多数有经验的设计师会在每条声明的末尾都加上分号，这么做的好处是，当你从现有的规则中增减声明时，会尽可能地减少出错的可能性。就像这样：&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;p {text-align:center; color:red;}	&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;你应该在每行只描述一个属性，这样可以增强样式定义的可读性，就像这样：&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;p {&lt;br/&gt; &amp;nbsp;text-align: center;&lt;br/&gt; &amp;nbsp;color: black;&lt;br/&gt; &amp;nbsp;font-family: arial;&lt;br/&gt;}&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;h2 style=&quot;margin: 0px; padding: 0px; border: 0px; font-family: 微软雅黑; font-size: 14px;&quot;&gt;空格和大小写&lt;/h2&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;大多数样式表包含不止一条规则，而大多数规则包含不止一个声明。多重声明和空格的使用使得样式表更容易被编辑：&lt;/p&gt;&lt;pre style=&quot;margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &amp;quot;Courier New&amp;quot;, Courier, monospace; width: 685px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;p style=&quot;margin-bottom: 0px;&quot;&gt;body {&lt;br/&gt; &amp;nbsp;color: #000;&lt;br/&gt; &amp;nbsp;background: #fff;&lt;br/&gt; &amp;nbsp;margin: 0;&lt;br/&gt; &amp;nbsp;padding: 0;&lt;br/&gt; &amp;nbsp;font-family: Georgia, Palatino, serif;&lt;br/&gt; &amp;nbsp;}&lt;br/&gt;&lt;/p&gt;&lt;/pre&gt;&lt;p style=&quot;margin-top: 12px; padding: 0px; border: 0px; line-height: 18px; margin-bottom: 0px;&quot;&gt;是否包含空格不会影响 CSS 在浏览器的工作效果，同样，与 XHTML 不同，CSS 对大小写不敏感。不过存在一个例外：如果涉及到与 HTML 文档一起工作的话，class 和 id 名称对大小写是敏感的。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 2, 1486995675),
(5, 'Bootstrap前端框架', 'Bootstrap、Twitter', './Uploads/2017-02-13/58a1c36add520.jpg', '&lt;p style=&quot;text-align: center; text-indent: 2em;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size: 18px; color: rgb(95, 73, 122);&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170213/1486996310139384.jpg&quot; title=&quot;1486996310139384.jpg&quot; alt=&quot;u=2681340480,1097196253&amp;amp;fm=214&amp;amp;gp=0.jpg&quot;/&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify; text-indent: 2em;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size: 18px; color: rgb(95, 73, 122);&quot;&gt;&lt;br/&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify; text-indent: 2em;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size: 18px; color: rgb(95, 73, 122);&quot;&gt;Bootstrap，来自 Twitter，是目前很受欢迎的前端框架。Bootstrap 是基于 HTML、CSS、JAVASCRIPT 的，它简洁灵活，使得 Web 开发更加快捷。它由Twitter的设计师Mark Otto和Jacob Thornton合作开发，是一个CSS/HTML框架。Bootstrap提供了优雅的HTML和CSS规范，它即是由动态CSS语言Less写成。Bootstrap一经推出后颇受欢迎，一直是GitHub上的热门开源项目，包括NASA的MSNBC（微软全国广播公司）的Breaking News都使用了该项目。国内一些移动开发者较为熟悉的框架，如WeX5前端开源框架等，也是基于Bootstrap源码进行性能优化而来。&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;', 1, 1486996330),
(6, '3216416', '6546546546', './Uploads/2017-04-07/58e73ae3e34d3.jpg', '&lt;p&gt;6874968469746541657465416&lt;/p&gt;', 1, 1491548899),
(7, '64654654', '64565416546', './Uploads/2017-04-07/58e73c89d9fa6.png', '&lt;p&gt;6746468416541654654&lt;/p&gt;', 1, 1491549321),
(8, '4654111111', '654968466', './Uploads/2017-04-07/58e73ca69184e.jpg', '&lt;p&gt;6746541654641654&lt;/p&gt;', 1, 1491549350);

-- --------------------------------------------------------

--
-- 表的结构 `qiu_cate`
--

CREATE TABLE IF NOT EXISTS `qiu_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `catename` varchar(40) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `qiu_cate`
--

INSERT INTO `qiu_cate` (`id`, `catename`, `sort`) VALUES
(1, '博客动态', 1),
(2, '资源分享', 2);

-- --------------------------------------------------------

--
-- 表的结构 `qiu_link`
--

CREATE TABLE IF NOT EXISTS `qiu_link` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '链接id',
  `title` varchar(40) NOT NULL COMMENT '链接名称',
  `url` varchar(100) NOT NULL COMMENT '链接地址',
  `desc` varchar(255) NOT NULL COMMENT '链接简介',
  `sort` int(11) NOT NULL DEFAULT '50' COMMENT '链接排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `qiu_link`
--

INSERT INTO `qiu_link` (`id`, `title`, `url`, `desc`, `sort`) VALUES
(1, '分享的博客', 'http://www.fenxd.com', '分享的博客', 1),
(7, 'ThinkPHP', 'http://www.thinkphp.cn', 'ThinkPHP', 50),
(8, 'phpMyAdmin', 'https://www.phpmyadmin.net', 'phpMyAdmin', 50),
(6, 'Bootstrap', 'http://www.bootcss.com', 'Bootstrap，来自 Twitter', 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
