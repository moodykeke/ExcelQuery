<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>用户注册</title>

		<meta name="keywords" content="<?php echo (C("keywords")); ?>" />
		<meta name="description" content="<?php echo (C("description")); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

				<!-- bootstrap & fontawesome -->
    		<link rel="stylesheet" href="/Public/qwadmin/css/bootstrap.css" />
    		<link rel="stylesheet" href="/Public/qwadmin/css/font-awesome.css" />

<!--<link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">-->
<!--<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">-->

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/qwadmin/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/qwadmin/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		


		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/qwadmin/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/qwadmin/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/Public/qwadmin/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/Public/qwadmin/js/html5shiv.js"></script>
		<script src="/Public/qwadmin/js/respond.js"></script>
		<![endif]-->
		
		

 


		<link rel="stylesheet" href="/Public/lily/css/lilycss.css" />









		


<!--这里是验证字符-->
<script src="https://cdn.bootcss.com/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-validate/1.17.0/localization/messages_zh.js"></script>
<script>
$.validator.setDefaults({
    submitHandler: function() {
    
    }
});
$().ready(function() {
    $("#commentForm").validate();
});
</script>


   </head>

	<body class="no-skin">
		<div class="main-container" id="main-container">
		
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->


					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
<!--请最好全部填写，里面的QQ、邮箱在很多地方都会用到，尽量真实。<p>-->
<!--【注意】这是个人平台，没收人一分钱，因此也没有责任。所以想开我就开，想关我就关，大家高兴就好。---老黄牛-->


						<!-- /section:settings.box -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<form class="form-horizontal" action="<?php echo U('Lilyreg/reg');?>" method="post">

             <div class="form-group">
              <label class="col-sm-1 control-label no-padding-right" for="form-field-6"></label>
              <div class="col-sm-9">
									        <p>
        <label style="font-size: 36px;" class="center"><strong>用户注册</strong></label>
    </p>
               <span class="help-inline col-xs-12 col-sm-7">
                <span class="middle"></span>
               </span>
              </div>
             </div>

  <!-- 第一个是传值用的 -->
                                         <input id="wx_openid"  name="wx_openid" type="hidden"   value="<?php echo ($data['wx_openid']); ?>">

             <div class="form-group">
              <label class="col-sm-1 control-label no-padding-right" for="form-field-6">用户名</label>
              <div class="col-sm-9">
               <input type="text" name="user" id="user" minlength="4" required   placeholder="用户名" class="col-xs-10 col-sm-5" >
               <span class="help-inline col-xs-12 col-sm-7">
                <span class="middle">建议工号/学号(必填)</span>
               </span>
              </div>
             </div>
									<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-2"> 用户密码 </label>
										<div class="col-sm-9">
											<input type="password" name="password" id="password" placeholder="用户密码" class="col-xs-10 col-sm-5" value="" required>

										</div>
									</div>
									
									
             <div class="form-group">
              <label class="col-sm-1 control-label no-padding-right" for="form-field-6">昵称</label>
              <div class="col-sm-9">
               <input type="text" name="nickname" id="nickname"  required  placeholder="昵称" class="col-xs-10 col-sm-5"  value="<?php echo ($data['name']); ?>" >
               <span class="help-inline col-xs-12 col-sm-7">
                <span class="middle">请实名，很多地方要用到</span>
               </span>
              </div>
             </div>
             <!--<div class="form-group">-->
             <!-- <label class="col-sm-1 control-label no-padding-right" for="form-field-6">微信openid</label>-->
             <!-- <div class="col-sm-9">-->
             <!--  <input type="text" name="wx_id" id="wx_id"    placeholder="微信号" class="col-xs-10 col-sm-5"  value="<?php echo ($data['wx_openid']); ?>">-->

             <!-- </div>-->
             <!--</div>-->
             <div class="form-group">
              <label class="col-sm-1 control-label no-padding-right" for="form-field-6">手机号</label>
              <div class="col-sm-9">
               <input type="text" name="phone" id="phone"  required  placeholder="手机号" class="col-xs-10 col-sm-5"   value="<?php echo ($data['phone']); ?>">
                
               <span class="help-inline col-xs-12 col-sm-7">
                <span class="middle">验证码发送至手机，可能用手机邮箱发。（移动用户会有免费短信提醒）</span>
               </span>               
              </div>
             </div>
						
									<div class="space-4"></div>

             <div class="form-group">
              <label class="col-sm-1 control-label no-padding-right" for="form-field-6">短信验证码</label>
              <div class="col-sm-9">
               <input type="text" name="smscode" id="smscode"  required placeholder="短信验证码" class="col-xs-10 col-sm-5"  >
                <input  type="button" id="btn2" value="免费获取验证码" onclick="submitform(this)" />                
              </div>
             </div>							

             <div class="form-group">
              <label class="col-sm-1 control-label no-padding-right" for="form-field-6">QQ</label>
              <div class="col-sm-9">
               <input type="text" name="qq" id="qq"    placeholder="QQ" class="col-xs-10 col-sm-5" >
               <span class="help-inline col-xs-12 col-sm-7">
                <span class="middle">选填</span>
               </span>  
              </div>
             </div>
             <div class="form-group">
              <label class="col-sm-1 control-label no-padding-right" for="form-field-6">电子信箱</label>
              <div class="col-sm-9">
               <input type="text" name="email" id="email"    placeholder="电子信箱" class="col-xs-10 col-sm-5" >
                <span class="help-inline col-xs-12 col-sm-7">
                <span class="middle">选填</span>
               </span>               
              
              </div>
             </div>


             <!--<div class="form-group">-->
             <!-- <label class="col-sm-1 control-label no-padding-right" for="form-field-6">用户组</label>-->
             <!-- <div class="col-sm-9">-->
             <!--  <input type="text" name="group_id" id="group_id"   placeholder="用户组" class="col-xs-10 col-sm-5"  readonly value="教师">-->
             <!-- </div>-->
             <!--</div>	-->

									<div class="space-4"></div>
									
									<div class="col-md-offset-2 col-md-9">
										<button class="btn btn-info" type="submit">
											<i class="icon-ok bigger-110"></i>
											提交
										</button>

										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="icon-undo bigger-110"></i>
											重置
										</button>
									</div>
								</form>
								
			
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->

					
					
					
						</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
						<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							<small>Copyright  <a href="<?php echo (C("site")); ?>" target="_blank"><?php echo (C("footer")); ?></a> All Rights Reserved.</small>
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
			
		</div><!-- /.main-container -->

				<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/qwadmin/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/qwadmin/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/qwadmin/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/qwadmin/js/bootstrap.js"></script>



		<!-- page specific plugin scripts -->
    		<!--<script charset="utf-8" src="/Public/kindeditor/kindeditor-min.js"></script>-->
    		<!--<script charset="utf-8" src="/Public/kindeditor/lang/zh_CN.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/bootbox.js"></script>-->
<script src="http://cdn.bootcss.com/bootbox.js/4.4.0/bootbox.js"></script>    		
		<!-- ace scripts -->
    		<!--<script src="/Public/qwadmin/js/ace/elements.scroller.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/ace/elements.colorpicker.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/ace/elements.fileinput.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/ace/elements.typeahead.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/ace/elements.wysiwyg.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/ace/elements.spinner.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/ace/elements.treeview.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/ace/elements.wizard.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/ace/elements.aside.js"></script>-->
		<script src="/Public/qwadmin/js/ace/ace.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.ajax-content.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.touch-drag.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.sidebar.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.submenu-hover.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.widget-box.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.settings.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.settings-rtl.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.settings-skin.js"></script>
		<script src="/Public/qwadmin/js/ace/ace.widget-on-reload.js"></script>
    		<!--<script src="/Public/qwadmin/js/ace/ace.searchbox-autocomplete.js"></script>-->
    		<!--<script src="/Public/qwadmin/js/jquery.autosize.min.js"></script>-->

		<!-- inline scripts related to this page -->


<script type="text/javascript"> 

function submitform(obj){
    $.post("<?php echo U('Lilyreg/sms139send');?>",
    {
        phone:$("#phone").val(),
    });
    
    settime(obj);

};

var countdown=60; 
function settime(obj) { 
    if (countdown == 0) { 
        obj.removeAttribute("disabled");    
        obj.value="免费获取验证码"; 
        countdown = 60; 
        return;
    } else { 
        obj.setAttribute("disabled", true); 
        obj.value="重新发送(" + countdown + ")"; 
        countdown--; 
    } 
setTimeout(function() { 
    settime(obj) }
    ,1000) 
}
 
</script>	


	</body>
</html>