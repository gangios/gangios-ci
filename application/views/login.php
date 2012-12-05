<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
    <title>分布式集群监控系统 - 登录</title>
    
    <style type="text/css">
        @import url("<?php echo resource_url('css/inlog.css') ?>");
        @import url("<?php echo resource_url('css/style_text.css') ?>");
        @import url("<?php echo resource_url('css/c-grey.css') ?>");
        @import url("<?php echo resource_url('css/form.css') ?>");
        @import url("<?php echo resource_url('css/messages.css') ?>");
    </style>
    
    <script type="text/javascript" src="<?php echo resource_url('js/jquery-1.6.1.min.js') ?>"></script>
    
</head>

<body>

<div class="wrapper">
    
    <div class="container">   
    
        <!--[if !IE]> START TOP <![endif]-->  
        <div class="top"> 
            <div class="split"><h1>分布式集群监控系统</h1></div> 
        </div> 
        <!--[if !IE]> END TOP <![endif]-->  
      
        <!--[if !IE]> START LOGIN <![endif]--> 
        <div class="box">
            <div class="title"><h2>登录</h2></div>
            <div class="content forms">
                
                <div id="status"></div>
                
                <form action="<?php echo site_url('users/login') ?>" method="post" id="login">
                    
                    <div class="row">
                        <div class="half-left">
                            <label>用户名:</label>
                            <input type="text" name="username" value="" />
                        </div>
                        
                        <div class="half">
                            <label>密码:</label>
                            <input type="password" name="password" value="" />
                        </div>
                    </div>
                    
                    <div class="row logged">                        
                        <div class="buttons">
                            <button type="submit"><span>登录</span></button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <!--[if !IE]> END LOGIN <![endif]-->  
        
    </div>
</div>

<script type="text/javascript" src="<?php echo resource_url('js/jquery.pngFix.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.form.js') ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
	// PNG FIX
	$('img').pngFix();

	// BIND FORM USING 'AJAXFORM'
	$status = $("#status");
	var options = {
		target : '#status',
		success : function() {
			$status.slideDown(callback = function() {
				if($("#success").length > 0) {
					location.href = "welcome"
				}
			});
		}
	};

	$login = $('#login').submit(function() {
		$status.slideUp(callback = function() {
			$login.ajaxSubmit(options);
		});
		return false;
	});
});
</script>

</body>

</html> 
