<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="/minibeilikaishop/Public/ht/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/minibeilikaishop/Public/ht/js/jquery.js"></script>
<script type="text/javascript" src="/minibeilikaishop/Public/ht/plugins/xheditor/xheditor-1.2.1.min.js"></script>
<script type="text/javascript" src="/minibeilikaishop/Public/ht/plugins/xheditor/xheditor_lang/zh-cn.js"></script>
</head>
<body>
<div class="aaa_pts_show_1">【 栏目管理 】</div>
<div class="aaa_pts_show_2">   
    <div class="aaa_pts_3">
      <form action="<?php echo U('save');?>" method="post" onsubmit="return ac_from();" enctype="multipart/form-data">
      <ul class="aaa_pts_5">
         <li>
            <div class="d1">所属栏目:</div>
            <div id="append">
              <select class="inp_1" name="tid" id="tid">
                <!-- <option value="0">一级栏目</option> -->
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op1): $mod = ($i % 2 );++$i; if($op1["id"] == $cate_info['tid']): ?><option value="<?php echo ($op1["id"]); ?>" id="cate_<?php echo ($op1["id"]); ?>" name="one" selected="selected">- <?php echo ($op1["name"]); ?></option>
                  <?php else: ?>
                    <option value="<?php echo ($op1["id"]); ?>" id="cate_<?php echo ($op1["id"]); ?>" name="one">- <?php echo ($op1["name"]); ?></option><?php endif; ?>
                  <?php if(is_array($op1['list2'])): $i = 0; $__LIST__ = $op1['list2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op2): $mod = ($i % 2 );++$i; if($op2["id"] == $cate_info['tid']): ?><option value="<?php echo ($op2["id"]); ?>" id="cate_<?php echo ($op2["id"]); ?>" name="two" selected="selected">&nbsp; &nbsp;- <?php echo ($op2["name"]); ?></option>
                    <?php else: ?>
                      <option value="<?php echo ($op2["id"]); ?>" id="cate_<?php echo ($op2["id"]); ?>" name="two">&nbsp; &nbsp;- <?php echo ($op2["name"]); ?></option><?php endif; ?>
                    <?php if(is_array($op2['list3'])): $i = 0; $__LIST__ = $op2['list3'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op3): $mod = ($i % 2 );++$i;?><option value="<?php echo ($op3["id"]); ?>" id="cate_<?php echo ($op3["id"]); ?>" name="three">&nbsp; &nbsp;&nbsp; &nbsp;- <?php echo ($op3["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				      </select> 
            </div>
         </li>
         <li>
            <div class="d1">栏目名:</div>
            <div>
              <input class="inp_1" name="name" id="name" value="<?php echo $cate_info['name']; ?>"/>
              <input type="hidden" name="err" id="err" value="0"/>
            </div>
         </li>
		 <?php if($action=='tuijian' || 2>1){ ?>
		 <!-- <li>
			<div style="color:#c00; font-size:14px; padding-left:20px;">上传推荐缩略图为 ：200*120</div>
     </li>
		 <li data-index="0">
            <div class="d1">推荐略缩图:</div>
            <div>
              <input class="inp_1" name="bz_5" id="photo_sj1" value="<?php ?>">
              <iframe class="pro_2" src="../../../inc/photo_add.php?id=photo_sj1&width=200&height=120" frameborder="0"></iframe>
            </div>
      </li> -->
		 <?php } ?>
		 <li>
            <div style="color:#c00; font-size:14px; padding-left:20px;"> 产品分类上传缩略图为 ：100*100；<!-- 其它缩略图为200*120; --></div>
         </li>
         <li data-index="0">
            <div class="d1">略缩图:</div>
            <div>
              <input type='hidden' name="bz_1" id="photo_sj0" value="<?php echo $cate_info['bz_1']; ?>">
            <!-- <iframe class="pro_2" src="/minibeilikaishop/Data/inc/photo_add.php?id=photo_sj0&width=200&height=200" frameborder="0"></iframe> -->
              <?php if ($cate_info['bz_1']) { ?>
                <img src="/minibeilikaishop/Data/<?php echo $cate_info['bz_1']; ?>" width="200" height="200" />
              <?php } ?>
              <input type="file" name="file2" id="bz_1" />
            </div>
         </li>
         <li>
            <div class="d1">栏目介绍:</div>
            <div>
              <textarea class="inp_1 inp_8" name="concent" id="concent"/><?php echo $cate_info['concent']; ?></textarea>
            </div>
         </li>
         <li>
            <div class="d1">排 序:</div>
            <div>
              <input class="inp_1" name="sort" id="sort" value="<?php echo $cate_info['sort']; ?>"/>
            </div>
         </li>
         <li><input type="submit" name="submit" value="提交" class="aaa_pts_web_3" border="0">
         <input type="hidden" name="cid" id="cid" value="<?php echo $cate_info['id']; ?>">
         </li>
      </ul>
      </form>
         
    </div>
    
</div>
<script>
function ac_from(){
  //判断栏目名称
  var name=document.getElementById('name').value;
  if(name.length<1){
	  alert('栏目名不能为空.');
	  return false;
	  }
   //判断是否第三级分类 
  var err=document.getElementById('err').value;
  if (err==1) {
    alert('该栏目已经是第三级分类，不可添加下级分类.');
    return false;
  };
  //判断用户选择的分类id是否等于修改的分类id
  var cid=document.getElementById('cid').value;
  var the_tid = $('#tid').val();
  if (cid>0 && cid==the_tid) {
    alert('所属栏目不能成为自己的上级.');
    return false;
  };
  return true;
}

//下拉框的onchange事件，提示限制无限极分类错误信息
$('#tid').change(function(){
  //获取选中分类的id
  var tid = $(this).val();
  $('#err').val(0);
  var op_name = document.getElementById("cate_"+tid).getAttribute("name");
  document.getElementById("name").disabled=false;
  $('#font').remove();
  if (op_name==='three') {
    var info = '<font id="font" style="color:red">&nbsp;&nbsp;* 该栏目已经是第三级分类，不可添加下级分类</font>';
    $("#append").append(info);
    document.getElementById("name").disabled=true;
    $('#err').val(1);
  };
  
});

//初始化编辑器
$('#concent').xheditor({
	skin:'nostyle'
});
</script>
</body>
</html>