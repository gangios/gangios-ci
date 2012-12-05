<div class="box medium" id="edit">
	<div class="title"> 
		<h2>编辑用户</h2> 
		<img src="<?php echo resource_url('gfx/title-hide.gif') ?>" class="close" alt="" /> 
	</div> 
	<div class="content forms"> 
	
		<div id="editstatus">
			<div class="message blue">
				不需更改的字段请留空
				<img src="<?php echo resource_url('gfx/icon-close.gif') ?>" alt="Close this item" />
			</div>
		</div>
	
		<form action="<?php echo site_url('user/edit') ?>" method="post" id="editform"> 			
			<div class="row">
				<input type="hidden" name="id" value="" />
				<input type="hidden" name="username" value=""  />
				<div class="half-left">
					<label>密码:</label>
					<input type="password" name="password" value="" class="small" />
				</div>
				<div class="half">
					<label>重复密码:</label>
					<input type="password" name="confirm_password" value="" class="small" />
				</div>
			</div> 
			
			<div class="row"> 
				<label>详细描述:</label> 
				<input type="text" name="description" value="" class="medium" /> 
			</div>
			
			<div class="row"> 
				<label>隶属用户组:</label> 
				<select name='groupid'>
					<option value="0">保留原用户组</option> 
					<?php foreach($groups as $g): ?>
					<option value="<?php echo $g['id'] ?>"><?php echo $g['groupname'] ?></option> 
					<?php endforeach ?>
				</select> 
			</div>
			
			<div class="row buttons"> 
				<button type="submit"><span>提交</span></button> 
				<button type="reset"><span>清空</span></button> 
			</div>
		</form> 
	</div>
</div>