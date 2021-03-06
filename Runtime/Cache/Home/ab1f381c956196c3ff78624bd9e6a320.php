<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo C('CH_SET_TITLE');?></title>
		<meta name="keywords" content="<?php echo C('CH_SET_META_KEY');?>" />
		<meta name="description" content="<?php echo C('CH_SET_META_DESC');?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?php echo C('WEB_SITE_KEYWORD2');?>">
		<meta name="keywords" content="<?php echo C('WEB_SITE_DESCRI2');?>">
		<link href="/Public/Home/css/global.min.css" rel="stylesheet">
		<link href="/Public/Home/css/index_01.min.css" rel="stylesheet">
		<link rel="icon" href="/Public/Media/image/s_logo.png"/>
		<script type="text/javascript" src="/Public/Home/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="/Public/static/layer/layer.js" ></script>
		<script type="text/javascript" src="/Public/Home/js/common.js"></script>
		<script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?bc19aa51515f215def6b091f540c83ea";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
		<!--<![endif]-->
		<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
		<?php echo hook('pageHeader');?>
	</head>
	<body>
		<div class="header">
			<div class="section topBar">
				<h1 class="hid"></h1>
					<?php $logo = C('CH_SET_LOGO');$logo = get_cover($logo);$logo = $logo['path']; ?>
					<a href="http://www.zhishengwh.com" title="" class="logo" style="background:url(<?php echo ($logo); ?>) no-repeat 0 14.5px;width: 160px;"></a>
			
				<p id="userInfo" class="uInfo"><?php echo ($ad["cName"]); ?></p>
			</div>
			<div class="nav">
				<ul class="section">
					<?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><li>
                            <a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="intro-con">
			
<script type="text/javascript" src="/Public/Home/js/jquery.validate.js"></script>
<script type="text/javascript" src="/Public/Home/js/register.js"></script>

<div class="ctitle"><div class="section">用户注册
	<span class="ctreg">已经有账号? <a href="<?php echo U('Index/index');?>">点此登录</a> </span>
</div></div>
<div class="reg_list">
	<div class="reg_form section">
        <form class="login_form" id="login_form" action="/index.php?s=/Home/Index/register.html" method="post" novalidate="novalidate" >
			<div class="reg-con">
			  <h2>注册信息</h2>
				<ol class="clearfix">
				  <li><em><i>*</i>用户名</em> <span>
					<input type="text" name="account" id="account" class="input-txt" value="" placeholder="输入您的用户名">
					</span>
					<p id="account_tip" class=""></p>
				  </li>
				  <li><em><i>*</i>密码</em> <span>
					<input type="password" name="password" id="password" class="input-txt" placeholder="输入您的登录密码">
					</span>
					<p id="password_tip" class=""></p>
				  </li>
				  <li><em><i>*</i>确认密码</em> <span>
					<input type="password" name="repassword" id="repassword" class="input-txt" placeholder="输入您的登录密码">
					</span>
					<p id="repassword_tip" class=""></p>
				  </li>
                  <li><em><i>*</i>联系人</em> <span>
					<input type="text" name="real_name" id="real_name" class="input-txt">
					</span>
					<p id="real_name_tip" class=""></p>
				  </li>
                  <li><em><i>*</i>联系电话</em> <span>
					<input type="text" name="mobile_phone" id="mobile_phone" class="input-txt">
					</span>
					<p id="mobile_phone_tip"></p>
				  </li>
				</ol>
                <div class="rulebox">
				  <p>
					<input name="agreement" type="checkbox" id="agreement" checked="">
					<label for="agreement">我已阅读并接受<a href="<?php echo U('rule');?>" target="_blank">《玩转平台渠道合作协议》</a></label>
					<span id="agreement_tip"></span>
				  </p>
				  <div class="reg-btn">
					<input type="submit" class="btn" value="立即注册" title="">
				  </div>
				</div>
				  
			</div>
        </form>
	</div>
</div>
<div id="info" style="display:none;"></div>

		</div>
		<div class="footer">  网络备案:<?php echo C('CH_SET_FOR_THE_RECORD');?>&nbsp;&nbsp;网络文化经营许可证编号：<?php echo C('CH_SET_LICENSE');?>
                 版权所有:<?php echo C('CH_SET_COPYRIGHT');?></div>
		<!-- <div class="toolBar">
			<ul>
				<li><a href="mailto:tui@vlcms.com" target="_blank"><span class="ico-contact"></span>联系我们</a></li>
				<li><a href="#" target="_blank"><span class="ico-help"></span>帮助中心</a></li>
				<li><a href="javascript:void(0)" id="goTop"><span class="ico-gotop"></span>回到顶部</a></li>
			</ul>
		</div> -->
		<script type="text/javascript">
			(function(){
				var ThinkPHP = window.Think = {
					"ROOT"   : "", //当前网站地址
					"APP"    : "/index.php?s=", //当前项目地址
					"PUBLIC" : "/Public", //项目公共目录地址
					"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
					"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
					"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
				}
			})();
		</script>
	</body>
</html>