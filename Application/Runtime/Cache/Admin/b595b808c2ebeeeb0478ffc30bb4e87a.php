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
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎进入Qiu Blog后台管理系统！</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <!-- 后台php探针 -->
            <?php
error_reporting(0); @header("content-Type: text/html; charset=utf-8"); ob_start(); define('HTTP_HOST', preg_replace('~^www\.~i', '', $_SERVER['HTTP_HOST'])); switch(PHP_OS) { case "Linux": $sysReShow = (false !== ($sysInfo = sys_linux()))?"show":"none"; break; case "FreeBSD": $sysReShow = (false !== ($sysInfo = sys_freebsd()))?"show":"none"; break; case "WINNT": $sysReShow = (false !== ($sysInfo = sys_windows()))?"show":"none"; break; default: break; } function sys_linux() { if (false === ($str = @file("/proc/cpuinfo"))) return false; $str = implode("", $str); @preg_match_all("/model\s+name\s{0,}\:+\s{0,}([\w\s\)\(\@.-]+)([\r\n]+)/s", $str, $model); @preg_match_all("/cpu\s+MHz\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/", $str, $mhz); @preg_match_all("/cache\s+size\s{0,}\:+\s{0,}([\d\.]+\s{0,}[A-Z]+[\r\n]+)/", $str, $cache); @preg_match_all("/bogomips\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/", $str, $bogomips); if (false !== is_array($model[1])) { $res['cpu']['num'] = sizeof($model[1]); if($res['cpu']['num']==1) $x1 = ''; else $x1 = ' ×'.$res['cpu']['num']; $mhz[1][0] = ' | 频率:'.$mhz[1][0]; $cache[1][0] = ' | 二级缓存:'.$cache[1][0]; $bogomips[1][0] = ' | Bogomips:'.$bogomips[1][0]; $res['cpu']['model'][] = $model[1][0].$mhz[1][0].$cache[1][0].$bogomips[1][0].$x1; if (false !== is_array($res['cpu']['model'])) $res['cpu']['model'] = implode("<br />", $res['cpu']['model']); if (false !== is_array($res['cpu']['mhz'])) $res['cpu']['mhz'] = implode("<br />", $res['cpu']['mhz']); if (false !== is_array($res['cpu']['cache'])) $res['cpu']['cache'] = implode("<br />", $res['cpu']['cache']); if (false !== is_array($res['cpu']['bogomips'])) $res['cpu']['bogomips'] = implode("<br />", $res['cpu']['bogomips']); } if (false === ($str = @file("/proc/uptime"))) return false; $str = explode(" ", implode("", $str)); $str = trim($str[0]); $min = $str / 60; $hours = $min / 60; $days = floor($hours / 24); $hours = floor($hours - ($days * 24)); $min = floor($min - ($days * 60 * 24) - ($hours * 60)); if ($days !== 0) $res['uptime'] = $days."天"; if ($hours !== 0) $res['uptime'] .= $hours."小时"; $res['uptime'] .= $min."分钟"; if (false === ($str = @file("/proc/meminfo"))) return false; $str = implode("", $str); preg_match_all("/MemTotal\s{0,}\:+\s{0,}([\d\.]+).+?MemFree\s{0,}\:+\s{0,}([\d\.]+).+?Cached\s{0,}\:+\s{0,}([\d\.]+).+?SwapTotal\s{0,}\:+\s{0,}([\d\.]+).+?SwapFree\s{0,}\:+\s{0,}([\d\.]+)/s", $str, $buf); preg_match_all("/Buffers\s{0,}\:+\s{0,}([\d\.]+)/s", $str, $buffers); $res['memTotal'] = round($buf[1][0]/1024, 2); $res['memFree'] = round($buf[2][0]/1024, 2); $res['memBuffers'] = round($buffers[1][0]/1024, 2); $res['memCached'] = round($buf[3][0]/1024, 2); $res['memUsed'] = $res['memTotal']-$res['memFree']; $res['memPercent'] = (floatval($res['memTotal'])!=0)?round($res['memUsed']/$res['memTotal']*100,2):0; $res['memRealUsed'] = $res['memTotal'] - $res['memFree'] - $res['memCached'] - $res['memBuffers']; $res['memRealFree'] = $res['memTotal'] - $res['memRealUsed']; $res['memRealPercent'] = (floatval($res['memTotal'])!=0)?round($res['memRealUsed']/$res['memTotal']*100,2):0; $res['memCachedPercent'] = (floatval($res['memCached'])!=0)?round($res['memCached']/$res['memTotal']*100,2):0; $res['swapTotal'] = round($buf[4][0]/1024, 2); $res['swapFree'] = round($buf[5][0]/1024, 2); $res['swapUsed'] = round($res['swapTotal']-$res['swapFree'], 2); $res['swapPercent'] = (floatval($res['swapTotal'])!=0)?round($res['swapUsed']/$res['swapTotal']*100,2):0; if (false === ($str = @file("/proc/loadavg"))) return false; $str = explode(" ", implode("", $str)); $str = array_chunk($str, 4); $res['loadAvg'] = implode(" ", $str[0]); return $res; } function sys_freebsd() { if (false === ($res['cpu']['num'] = get_key("hw.ncpu"))) return false; $res['cpu']['model'] = get_key("hw.model"); if (false === ($res['loadAvg'] = get_key("vm.loadavg"))) return false; if (false === ($buf = get_key("kern.boottime"))) return false; $buf = explode(' ', $buf); $sys_ticks = time() - intval($buf[3]); $min = $sys_ticks / 60; $hours = $min / 60; $days = floor($hours / 24); $hours = floor($hours - ($days * 24)); $min = floor($min - ($days * 60 * 24) - ($hours * 60)); if ($days !== 0) $res['uptime'] = $days."天"; if ($hours !== 0) $res['uptime'] .= $hours."小时"; $res['uptime'] .= $min."分钟"; if (false === ($buf = get_key("hw.physmem"))) return false; $res['memTotal'] = round($buf/1024/1024, 2); $str = get_key("vm.vmtotal"); preg_match_all("/\nVirtual Memory[\:\s]*\(Total[\:\s]*([\d]+)K[\,\s]*Active[\:\s]*([\d]+)K\)\n/i", $str, $buff, PREG_SET_ORDER); preg_match_all("/\nReal Memory[\:\s]*\(Total[\:\s]*([\d]+)K[\,\s]*Active[\:\s]*([\d]+)K\)\n/i", $str, $buf, PREG_SET_ORDER); $res['memRealUsed'] = round($buf[0][2]/1024, 2); $res['memCached'] = round($buff[0][2]/1024, 2); $res['memUsed'] = round($buf[0][1]/1024, 2) + $res['memCached']; $res['memFree'] = $res['memTotal'] - $res['memUsed']; $res['memPercent'] = (floatval($res['memTotal'])!=0)?round($res['memUsed']/$res['memTotal']*100,2):0; $res['memRealPercent'] = (floatval($res['memTotal'])!=0)?round($res['memRealUsed']/$res['memTotal']*100,2):0; return $res; } function get_key($keyName) { return do_command('sysctl', "-n $keyName"); } function find_command($commandName) { $path = array('/bin', '/sbin', '/usr/bin', '/usr/sbin', '/usr/local/bin', '/usr/local/sbin'); foreach($path as $p) { if (@is_executable("$p/$commandName")) return "$p/$commandName"; } return false; } function do_command($commandName, $args) { $buffer = ""; if (false === ($command = find_command($commandName))) return false; if ($fp = @popen("$command $args", 'r')) { while (!@feof($fp)) { $buffer .= @fgets($fp, 4096); } return trim($buffer); } return false; } function sys_windows() { if (PHP_VERSION >= 5) { $objLocator = new COM("WbemScripting.SWbemLocator"); $wmi = $objLocator->ConnectServer(); $prop = $wmi->get("Win32_PnPEntity"); } else { return false; } $cpuinfo = GetWMI($wmi,"Win32_Processor", array("Name","L2CacheSize","NumberOfCores")); $res['cpu']['num'] = $cpuinfo[0]['NumberOfCores']; if (null == $res['cpu']['num']) { $res['cpu']['num'] = 1; } $cpuinfo[0]['L2CacheSize'] = ' ('.$cpuinfo[0]['L2CacheSize'].')'; if($res['cpu']['num']==1) $x1 = ''; else $x1 = '×'.$res['cpu']['num']; $res['cpu']['model'] = $cpuinfo[0]['Name'].$cpuinfo[0]['L2CacheSize'].$x1; $sysinfo = GetWMI($wmi,"Win32_OperatingSystem", array('LastBootUpTime','TotalVisibleMemorySize','FreePhysicalMemory','Caption','CSDVersion','SerialNumber','InstallDate')); $sysinfo[0]['Caption']=iconv('GBK', 'UTF-8',$sysinfo[0]['Caption']); $sysinfo[0]['CSDVersion']=iconv('GBK', 'UTF-8',$sysinfo[0]['CSDVersion']); $res['win_n'] = $sysinfo[0]['Caption']." ".$sysinfo[0]['CSDVersion']." 序列号:<?php echo ($sysinfo[0]['SerialNumber']); ?> 于".date('Y年m月d日H:i:s',strtotime(substr($sysinfo[0]['InstallDate'],0,14)))."安装"; $res['uptime'] = $sysinfo[0]['LastBootUpTime']; $sys_ticks = 3600*8 + time() - strtotime(substr($res['uptime'],0,14)); $min = $sys_ticks / 60; $hours = $min / 60; $days = floor($hours / 24); $hours = floor($hours - ($days * 24)); $min = floor($min - ($days * 60 * 24) - ($hours * 60)); if ($days !== 0) $res['uptime'] = $days."天"; if ($hours !== 0) $res['uptime'] .= $hours."小时"; $res['uptime'] .= $min."分钟"; $res['memTotal'] = round($sysinfo[0]['TotalVisibleMemorySize']/1024,2); $res['memFree'] = round($sysinfo[0]['FreePhysicalMemory']/1024,2); $res['memUsed'] = $res['memTotal']-$res['memFree']; $res['memPercent'] = round($res['memUsed'] / $res['memTotal']*100,2); $swapinfo = GetWMI($wmi,"Win32_PageFileUsage", array('AllocatedBaseSize','CurrentUsage')); $loadinfo = GetWMI($wmi,"Win32_Processor", array("LoadPercentage")); $res['loadAvg'] = $loadinfo[0]['LoadPercentage']; return $res; } function GetWMI($wmi,$strClass, $strValue = array()) { $arrData = array(); $objWEBM = $wmi->Get($strClass); $arrProp = $objWEBM->Properties_; $arrWEBMCol = $objWEBM->Instances_(); foreach($arrWEBMCol as $objItem) { @reset($arrProp); $arrInstance = array(); foreach($arrProp as $propItem) { eval("\$value = \$objItem->" . $propItem->Name . ";"); if (empty($strValue)) { $arrInstance[$propItem->Name] = trim($value); } else { if (in_array($propItem->Name, $strValue)) { $arrInstance[$propItem->Name] = trim($value); } } } $arrData[] = $arrInstance; } return $arrData; } $uptime = $sysInfo['uptime']; $stime = date("Y-n-j H:i:s"); $df = round(@disk_free_space(".")/(1024*1024*1024),3); $dt = round(@disk_total_space(".")/(1024*1024*1024),3); if($sysInfo['memTotal']<1024) { $memTotal = $sysInfo['memTotal']." M"; $mt = $sysInfo['memTotal']." M"; $mu = $sysInfo['memUsed']." M"; $mf = $sysInfo['memFree']." M"; $mc = $sysInfo['memCached']." M"; $mb = $sysInfo['memBuffers']." M"; $st = $sysInfo['swapTotal']." M"; $su = $sysInfo['swapUsed']." M"; $sf = $sysInfo['swapFree']." M"; $swapPercent = $sysInfo['swapPercent']; $memRealUsed = $sysInfo['memRealUsed']." M"; $memRealFree = $sysInfo['memRealFree']." M"; $memRealPercent = $sysInfo['memRealPercent']; $memPercent = $sysInfo['memPercent']; $memCachedPercent = $sysInfo['memCachedPercent']; } else { $memTotal = round($sysInfo['memTotal']/1024,3)." G"; $mt = round($sysInfo['memTotal']/1024,3)." G"; $mu = round($sysInfo['memUsed']/1024,3)." G"; $mf = round($sysInfo['memFree']/1024,3)." G"; $mc = round($sysInfo['memCached']/1024,3)." G"; $mb = round($sysInfo['memBuffers']/1024,3)." G"; $st = round($sysInfo['swapTotal']/1024,3)." G"; $su = round($sysInfo['swapUsed']/1024,3)." G"; $sf = round($sysInfo['swapFree']/1024,3)." G"; $swapPercent = $sysInfo['swapPercent']; $memRealUsed = round($sysInfo['memRealUsed']/1024,3)." G"; $memRealFree = round($sysInfo['memRealFree']/1024,3)." G"; $memRealPercent = $sysInfo['memRealPercent']; $memPercent = $sysInfo['memPercent']; $memCachedPercent = $sysInfo['memCachedPercent']; } ?>
            <!-- 后台php探针 -->
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info"><?php $os = explode(" ", php_uname()); echo $os[0];?></span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info"><?php echo $_SERVER['SERVER_SOFTWARE'];?></span>
                    </li>
                    <li>
                        <label class="res-lab">已运行时间</label><span class="res-info"><?php echo $uptime;?></span>
                    </li>
                    <li>
                        <label class="res-lab">Qiu Blog版本</label><span class="res-info">Qiu Blog - V1.0</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器可用空间</label><span class="res-info"><?php echo $df;?>&nbsp;（M/G）</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info"><?php echo $stime;?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info"><?php echo $_SERVER['SERVER_ADDR'];?></span>
                    </li>
                    <li>
                        <label class="res-lab">Web端口</label><span class="res-info"><?php echo $_SERVER['SERVER_PORT'];?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">QQ交流群：</label><span class="res-info">174231024</span>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>