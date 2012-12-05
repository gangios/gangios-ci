<div class="title"> 
    <h2>添加用户组</h2> 
    <img src="<?php echo resource_url('gfx/title-hide.gif') ?>" class="toggle" alt="" /> 
</div> 
<div class="content forms"> 

    <div id="status"></div>

    <form action="<?php echo site_url('groupctl/addcheck') ?>" method="post" id="showform"> 
        <div class="row"> 
            <label>用户组名:</label> 
            <input type="text" value="" name="groupname" class="small" /> 
        </div> 
        
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