<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="/minibeilikaishop/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/minibeilikaishop/Public/ht/js/jquery.js"></script>
<script type="text/javascript" src="/minibeilikaishop/Public/ht/js/action.js"></script>
</head>
<body>

<div class="aaa_pts_show_1">【 视频管理 】</div>

<div class="aaa_pts_show_2">
    <div>
       <div class="aaa_pts_4"><a href="<?php echo U('Video/index');?>">全部视频</a></div>
       <div class="aaa_pts_4"><a href="<?php echo U('Video/add');?>">添加视频</a></div>
    </div>
    <div class="aaa_pts_3">
      
      <div class="pro_4 bord_1">
         <div class="pro_5">视频名称：<input type="text" class="inp_1 inp_6" id="name" value="<?php echo ($name); ?>"></div> 
         <div class="pro_6"><input type="button" class="aaa_pts_web_3" value="搜 索" style="margin:0;" onclick="product_option(0);"></div>
      </div>
      
      <table class="pro_3">
         <tr class="tr_1">
           <td>ID</td>
           <td>缩略图</td>
           <td>视频名称</td>
           <td>描述</td>
           <td>目标产品id</td>
           <td>浏览量</td>
           <td>人气</td>
           <td>添加时间</td>
           <td>操作</td>
         </tr>
         <tbody id="news_option">
         <!-- 遍历 -->
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
             <td><?php echo ($v["id"]); ?></td>
             <td><img src="/minibeilikaishop/Data/<?php echo ($v["photo"]); ?>" style="width:80px;height:80px;" /></td>
             <td><?php echo ($v["name"]); ?></td>
             <td><?php echo ($v["digest"]); ?></td>
             <td><?php echo ($v["pro_id"]); ?></td>
             <td><?php echo ($v["visit"]); ?></td>
             <td><?php echo ($v["renqi"]); ?></td>
             <td><?php echo date("Y-m-d H:i:s",$v['addtime']); ?></td>
            <td class="obj_1">
              <a href="<?php echo U('Video/add');?>?id=<?php echo ($v["id"]); ?>">修改</a> |
              <a onclick="del_id_urls(<?php echo ($v["id"]); ?>)">删除</a>
             </td>
           </tr><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
         <!-- 遍历 -->
         </tbody>
         <tr>
            <td colspan="10" class="td_2">
                  <?php echo ($page); ?>  
             </td>
         </tr>
      </table>      
    </div>
    
</div>
<script>
//更改按钮
function del_id_urls (id) {
  if (confirm('您确定要删除吗？')) {
    location.href="<?php echo U('del');?>?id="+id;
  };
}
</script>
</body>
</html>