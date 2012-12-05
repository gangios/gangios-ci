<!--[if !IE]> START PAGES MESSAGES <![endif]--> 
<div class="box">
    <div class="title"> 
        <h2>用户管理</h2> 
        <img src="<?php echo resource_url('gfx/title-hide.gif') ?>" class="toggle" alt="" /> 
    </div> 
    <div class="content pages" id="view"></div> 
</div> 
<!--[if !IE]> END PAGES <![endif]-->

<div id="boxes">
	<?php
	include_once "user/add.php";
	include_once "user/edit.php";
	include_once "user/editmuti.php";
	?>	
</div>


<script type="text/javascript" src="<?php echo resource_url('js/in/content.js') ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
    // LOAD USER TABLE
	$('#boxes').hide();
	$('#view').hide().load('users/get/0');
	
	// STYLE SELECT BOXES
	$('.row select').sbCustomSelect();
	
	// PNG FIX
	$('img').pngFix();
	
	// SYSTEM MESSAGES
	$("div.message img").click(function () {
      $(this).parent().closest('div.message').fadeOut();
    });
});
</script>
