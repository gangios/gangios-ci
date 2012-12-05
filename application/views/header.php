<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
    
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
    <title>分布式集群监控系统</title> 
    
    <style type="text/css">
        @import url("<?php echo resource_url('css/inline.css') ?>");
        @import url("<?php echo resource_url('css/style.css') ?>");
        @import url("<?php echo resource_url('css/style_text.css') ?>");
        @import url("<?php echo resource_url('css/c-grey.css') ?>"); /* COLOR FILE CAN CHANGE TO c-blue.ccs, c-grey.ccs, c-orange.ccs, c-purple.ccs or c-red.ccs */ 
        @import url("<?php echo resource_url('css/datepicker.css') ?>");
        @import url("<?php echo resource_url('css/form.css') ?>");
        @import url("<?php echo resource_url('css/menu.css') ?>");
        @import url("<?php echo resource_url('css/messages.css') ?>");
        @import url("<?php echo resource_url('css/statics.css') ?>");
        @import url("<?php echo resource_url('css/tabs.css') ?>");
        @import url("<?php echo resource_url('css/blockbox.css') ?>");
        @import url("<?php echo resource_url('css/wysiwyg.css') ?>");
        @import url("<?php echo resource_url('css/wysiwyg.modal.css') ?>");
        @import url("<?php echo resource_url('css/wysiwyg-editor.css') ?>");
    </style> 
    
    <script type="text/javascript" src="<?php echo resource_url('js/jquery-1.6.1.min.js') ?>"></script> 
 
    <!--[if lte IE 8]>
        <script type="text/javascript" src="<?php echo resource_url('js/excanvas.min.js') ?>"></script>
    <![endif]--> 
    
</head> 
 
<body> 
<div class="wrapper">
<div class="container"> 

    <!--[if !IE]> START TOP <![endif]-->  
    <div class="top"> 
        <div class="split"><h1>分布式集群监控系统</h1></div> 
        <div class="split"> 
            <div class="logout"><img src="<?php echo resource_url('gfx/icon-logout.gif') ?>" align="left" alt="Logout" /><?php echo anchor('/userctl/logout', '登出') ?></div> 
            <div><img src="<?php echo resource_url('gfx/icon-welcome.gif') ?>" align="left" alt="Welcome" /> <?php echo $username ?>，您好</div> 
        </div> 
    </div> 
    <!--[if !IE]> END TOP <![endif]-->  
    
    <!--[if !IE]> START MENU <![endif]-->  
    <div class="menu"><?php echo menu($menulist, 3) ?>
        <div class="search"> 
            <form action="<?php echo site_url('search') ?>" method="post"> 
                <input type="text" value="" /> 
                <button type="submit"><span>搜索</span></button> 
            </form> 
        </div> 
    </div> 
    <!--[if !IE]> END MENU <![endif]-->  