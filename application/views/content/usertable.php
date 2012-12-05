<div id="mainstatus"></div>

<table> 
    <thead> 
        <tr> 
            <td><input type="checkbox" class="checkall" /></td>
            <?php foreach($titles as $t): ?>
            <td><?php echo $t ?></td>
            <?php endforeach ?>
            <td></td> 
        </tr>   
    </thead>
    
    <tbody id="userlist">
        <?php foreach($infos as $info): ?>
        <tr>
            <td><input type="checkbox" /></td>
            <?php foreach($info as $i): ?>
            <td><?php echo $i ?></td>
            <?php endforeach ?>
            <td> 
                <a class="inline" href="#edit"><img src="<?php echo base_url()?>resource/gfx/icon-edit.png" /></a>
                <!--
                <a href="###"><img src="<?php echo base_url()?>resource/gfx/icon-check.png" /></a> 
                <a href="###"><img src="<?php echo base_url()?>resource/gfx/icon-minus.png" /></a>
                -->
                <a href="###" onclick="del('<?php echo $info['name'] ?>')"><img src="<?php echo base_url()?>resource/gfx/icon-delete.png" /></a> 
            </td>
        </tr> 
        <?php endforeach ?>
    </tbody> 
</table> 

<div class="pages-bottom"> 
    <div class="actionbox"> 
        <a class="inline" href="#add"><img src="<?php echo base_url()?>resource/gfx/icon-add.png" />添加</a>
        <a class="inline" href="#editmuti"><img src="<?php echo base_url()?>resource/gfx/icon-edit.png" />编辑</a>
        <a href="###" class="disabled"><img src="<?php echo base_url()?>resource/gfx/icon-check.png" />启用</a> 
        <a href="###" class="disabled"><img src="<?php echo base_url()?>resource/gfx/icon-minus.png" />禁用</a>
        <a href="###" onclick="delmuti()"><img src="<?php echo base_url()?>resource/gfx/icon-delete.png" />删除</a> 
    </div> 
    
	<?php if($n > 1): ?>
    <div class="pagination"> 
        <a href="###" class="left"></a>
		<a href="###" class="active">1</a> 
		<?php for($i = 2; $i <= $n; $i++): ?>
        <a href="###"><?php echo $i ?></a> 
		<?php endfor ?>
        <a href="###" class="right"></a> 
    </div>
	<?php endif ?>
</div> 

<script type="text/javascript">
$(document).ready(function() {
	$('#view').slideDown();
    
    // SOME STYLE PAGE TABLE
	$(".pages table td:first-child").css("padding", "0 8px 0 6px").css("width", "13px");
	$(".pages table td:last-child").css("border-right", "none").css("text-align", "center").css("padding", "4px 20px 0");
	$(".pages table tr:odd").css("background-color", "#f8f8f8");
    
    // CHECK ALL PAGES
	$('.pages .checkall').click(function () {
		$(this).parents('.pages table').find(':checkbox').attr('checked', this.checked);
	});
	
	$('.inline').blockbox();
});

</script> 