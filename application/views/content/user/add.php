<div class="box medium" id="add">
	<div class="title"> 
		<h2>添加用户</h2> 
		<img src="<?php echo resource_url('gfx/title-hide.gif') ?>" class="close" alt=""/> 
	</div> 
	<div class="content forms"> 
	
		<div id="status"></div>
	
		<form action="<?php echo site_url('users/add') ?>" method="post" id="form"> 
			<div class="row"> 
				<label>用户名:</label> 
				<input type="text" value="" name="username" class="small" /> 
			</div> 
			
			<div class="row">
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

<script type="text/javascript">
$(document).ready(function() {
	// BIND FORM USING 'AJAXFORM'
	$form = $('#add #form').submit(function() {
		$status = $("#add #status").slideUp(callback = function() {
			var options = {
				target : $status,
				success : function() {
					$status.slideDown();
					if($("#success").length > 0) {				
						$('#view').slideUp(callback = function() {
							$(this).load($('#show').attr('name') + '/get/0');
						});
					}
				}
			};
			
			$form.ajaxSubmit(options);
		});
		return false;
	});
});
</script>