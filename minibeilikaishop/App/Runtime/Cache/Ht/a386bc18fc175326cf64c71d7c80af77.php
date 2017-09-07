<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="/minibeilikaishop/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/minibeilikaishop/Public/ht/js/jquery.js"></script>
<script type="text/javascript" src="/minibeilikaishop/Public/ht/js/action.js"></script>
</head>
<body>

<div class="aaa_pts_show_1">【 栏目管理 】</div>

<div class="aaa_pts_show_2">
    <div class="aaa_pts_3"><span style="color:red">备注：产品分类建议5个字以内，否则在pc端不能显示完整</span>
      <table class="pro_3">
         <tr class="tr_1">
           <td style="width:80px;">栏目ID</td>
           <td>栏目名称</td>
           <td style="width:80px;">属性</td>
           <td style="width:200px;">操作选项</td>
         </tr>
         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tr1): $mod = ($i % 2 );++$i;?><tr data-id="tr_<?php echo ($tr1["tid"]); ?>">
			 <td><?php echo ($tr1["id"]); ?></td>
			 <td style="text-align:left; padding-left:15px;">- <?php echo ($tr1["name"]); ?></td>
			 <td><?php if($tr1["bz_2"] == 1): ?><font style="color:#090">推荐</font><?php endif; ?></td>
			 <td>
			    <a href="<?php echo U('set_tj');?>?tj_id=<?php echo ($tr1["id"]); ?>">推荐</a>
			    <?php if($tr1["bz_4"] == 1): ?>| <a href="<?php echo U('add');?>?cid=<?php echo ($tr1["id"]); ?>">修改</a> | 
					<a onclick="del_id_url(<?php echo ($tr1["id"]); ?>)">删除</a><?php endif; ?>	
			 </td>
		  </tr>
		  <?php if(is_array($tr1["list2"])): $i = 0; $__LIST__ = $tr1["list2"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tr2): $mod = ($i % 2 );++$i;?><tr data-id="tr_<?php echo ($tr2["tid"]); ?>">
			 <td><?php echo ($tr2["id"]); ?></td>
			 <td style="text-align:left; padding-left:15px;">&nbsp; &nbsp; &nbsp;- <?php echo ($tr2["name"]); ?></td>
			 <td><?php if($tr2["bz_2"] == 1): ?><font style="color:#090">推荐</font><?php endif; ?></td>
			 <td>
			    <a href="<?php echo U('set_tj');?>?tj_id=<?php echo ($tr2["id"]); ?>">推荐</a> | 
				<a href="<?php echo U('add');?>?cid=<?php echo ($tr2["id"]); ?>">修改</a> | 
				<a onclick="del_id_url(<?php echo ($tr2["id"]); ?>)">删除</a>
			 </td>
		  </tr>
		  <?php if(is_array($tr2["list3"])): $i = 0; $__LIST__ = $tr2["list3"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tr3): $mod = ($i % 2 );++$i;?><tr data-id="tr_<?php echo ($tr3["tid"]); ?>">
			 <td><?php echo ($tr3["id"]); ?></td>
			 <td style="text-align:left; padding-left:15px;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;- <?php echo ($tr3["name"]); ?></td>
			 <td><?php if($tr3["bz_2"] == 1): ?><font style="color:#090">推荐</font><?php endif; ?></td>
			 <td>
			    <a href="<?php echo U('set_tj');?>?tj_id=<?php echo ($tr3["id"]); ?>">推荐</a> | 
				<a href="<?php echo U('add');?>?cid=<?php echo ($tr3["id"]); ?>">修改</a> | 
				<a onclick="del_id_url(<?php echo ($tr3["id"]); ?>)">删除</a>
			 </td>
		  </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
     </table>
    </div>
    
</div>
<script>
function del_id_url(id){
   if(confirm("确认删除吗？"))
   {
	  location='<?php echo U("del");?>?did='+id;
   }
}
</script>
</body>
</html>