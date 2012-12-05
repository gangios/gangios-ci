<div class="title"> 
    <h2>编辑用户组 <?php echo $groups ?></h2> 
    <img src="<?php echo resource_url('gfx/title-hide.gif') ?>" class="toggle" alt="" /> 
</div> 
<div class="content forms"> 

    <div id="status">
		<div class="message blue">
			不需更改的字段请留空
			<img src="<?php echo resource_url('gfx/icon-close.gif') ?>" alt="Close this item" />
		</div>
	</div>
	
	<script type="text/javascript" src="<?php echo resource_url('js/instatus.js') ?>"></script>

    <form action="<?php echo site_url('groupctl/editcheck') ?>" method="post" id="showform"> 
		<input type="hidden" name="groupname" value="<?php echo $groups ?>" />
        
        <div class="row">
			<label>权限:</label>
			<input type="text" value="" name="permission" class="small" /> 
        </div> 
        
        <div class="row"> 
            <label>详细描述:</label> 
            <input type="text" name="description" value="" class="medium" /> 
        </div>
		
		<div class="row buttons"> 
			<button type="submit"><span>提交</span></button> 
			<button type="reset"><span>清空</span></button> 
		</div>
    </form> 
</div> 

<script type="text/javascript" src="<?php echo resource_url('js/content/inshow.js') ?>"></script>