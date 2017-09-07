<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit">
<title>乐仁后台管理系统</title>
<link href="/minigueinon/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/minigueinon/Public/ht/js/action.js"></script>
<script type="text/javascript" src="/minigueinon/Public/ht/js/jquery.js"></script>
</head>
<body>
<!--top-->
<div id="top">
   <div class="top_1">小程序后台管理系统</div>
   <div class="top_2">
      您好：<font style="color:#738a19;"><?php echo $_SESSION['admininfo']['name']; ?></font> ，欢迎使用  后台程序！
      <a href="index">主菜单</a> |
      <a href="<?php echo U('Login/logout');?>">注销</a>
   </div>
</div>
<div class="clear"></div>
<!--body-->
<div id="mybody">
  <div class="body_2">
     <div class="body_1">
      <!-- 判断登录权限给予不同菜单显示 -->
        <div class="aaa_pts_left_1" onclick="left_open(this,'zh')">综合管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="zh">
 <ul class="aaa_pts_left_2">
   <li>
       <a href="<?php echo U('Shangchang/add');?>" target="iframe">店铺信息</a>
   </li>
   <li>
       <a href="<?php echo U('Shangchang/password');?>" target="iframe">修改密码</a>
   </li>
 </ul>
</div>

<div class="aaa_pts_left_1" onclick="left_open(this,'product')">产品管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="product">
 <ul class="aaa_pts_left_2">
   <li>
       <a href="<?php echo U('Product/add');?>" target="iframe">添加产品</a>
   </li>
   <li>
       <a href="<?php echo U('Product/index');?>" target="iframe">产品管理</a>
   </li>
<!--    <li>
       <a href="<?php echo U('ProAttribute/add');?>" target="iframe">添加产品属性</a>
   </li>
   <li>
       <a href="<?php echo U('ProAttribute/index');?>" target="iframe">产品属性管理</a>
   </li> -->
 </ul>
</div>

<div class="aaa_pts_left_1" onclick="left_open(this,'attr')">产品属性管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="attr">
 <ul class="aaa_pts_left_2">
   <li>
       <a href="<?php echo U('ProAttribute/add');?>" target="iframe">添加属性</a>
   </li>
   <li>
       <a href="<?php echo U('ProAttribute/index');?>" target="iframe">属性管理</a>
   </li>
 </ul>
</div>

<div class="aaa_pts_left_1" onclick="left_open(this,'spec')">产品规格管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="spec">
 <ul class="aaa_pts_left_2">
   <li>
       <a href="<?php echo U('ProSpec/add');?>" target="iframe">添加规格</a>
   </li>
   <li>
       <a href="<?php echo U('ProSpec/index');?>" target="iframe">规格管理</a>
   </li>
 </ul>
</div>

<div class="aaa_pts_left_1" onclick="left_open(this,'tag')">标签管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="tag">
 <ul class="aaa_pts_left_2">
   <li>
       <a href="<?php echo U('Tag/add');?>" target="iframe">添加标签</a>
   </li>
   <li>
       <a href="<?php echo U('Tag/index');?>" target="iframe">标签管理</a>
   </li>
 </ul>
</div>

<!-- <div class="aaa_pts_left_1" onclick="left_open(this,'brand')">品牌管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="brand">
 <ul class="aaa_pts_left_2">
   <li>
       <a href="<?php echo U('Brand/add');?>" target="iframe">添加品牌</a>
   </li>
   <li>
       <a href="<?php echo U('Brand/index');?>" target="iframe">品牌管理</a>
   </li>
 </ul>
</div> -->

<div class="aaa_pts_left_1" onclick="left_open(this,'order')">订单管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="order">
 <ul class="aaa_pts_left_2">
   <li>
       <a href="<?php echo U('Order/index');?>" target="iframe">全部订单</a>
   </li>
 </ul>
</div>

<!-- <div class="aaa_pts_left_1" onclick="left_open(this,'nav')">分类管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="nav">
 <ul class="aaa_pts_left_2">
   <li>
       <a href="<?php echo U('Category/add');?>" target="iframe">添加分类</a>
   </li>
   <li>
       <a href="<?php echo U('Category/index');?>" target="iframe">分类管理</a>
   </li>
 </ul>
</div> -->

<!-- <div class="aaa_pts_left_1" onclick="left_open(this,'voucher')">优惠券管理</div>
<div class="aaa_pts_left_3" style="display:none;" id="voucher">
 <ul class="aaa_pts_left_2">
    <li>
       <a href="<?php echo U('Voucher/add');?>" target="iframe">添加优惠券</a>
   </li>
   <li>
       <a href="<?php echo U('Voucher/index');?>" target="iframe">优惠券管理</a>
   </li>
 </ul>
</div> -->
       <!-- 判断登录权限给予不同菜单显示 -->
     </div>
     <div class="body_3">
       <!-- 判断登录权限给予不同首页显示 -->
        <iframe src='<?php echo U("Page/adminindex");?>' id='iframe' name='iframe'></iframe>
       <!-- 判断登录权限给予不同首页显示 -->
     </div>
  </div>
</div>

<!--bottom-->
<div id="bottom">
   <?php echo ($copy); ?>
</div>
</body>
</html>