    <!--[if !IE]> START FOOTER <![endif]--> 
    <div class="footer"> 
        <div class="split">&#169; Copyright <a href="###">website.com</a></div> 
        <div class="split right">Powered by <a href="###">DreamAdmin</a></div> 
    </div> 
    <!--[if !IE]> END FOOTER <![endif]--> 
    
</div>
</div> 

<script type="text/javascript" src="<?php echo resource_url('js/jquery-ui.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.pngFix.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/hoverIntent.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/superfish.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/supersubs.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/date.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.sparkbox-select.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.datepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.filestyle.mini.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.flot.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.graphtable-0.2.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.wysiwyg.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.form.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.blockbox.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/jquery.ajaxlink.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/plugins/wysiwyg.rmFormat.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/controls/wysiwyg.link.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/controls/wysiwyg.table.js') ?>"></script>
<script type="text/javascript" src="<?php echo resource_url('js/controls/wysiwyg.image.js') ?>"></script>
<script type="text/javascript">
 $(document).ready(function(){ 
	// PNG FIX
	$('img').pngFix();
	
	// MENU
	$(".menu ul").supersubs({ 
		minWidth: 10,
		maxWidth: 20	
	})
	.superfish({
		animation: {opacity: 'show'},
		speed: 'fast',
        autoArrows: false, 
		delay: 500
	}); 
	
	//USE inline.css REPLACE
	// SOME STYLE MENU
	$menu = $(".menu > ul > li > ul");
	while ($menu.length > 0) {
		$menu.find("> li:last-child").css("border-bottom", "0");
		$menu = $menu.find("li > ul");
	}
	
	// AJAX LOAD CONTENT
    $('.menu a').ajaxlink({target: '#holder'}, function() {
        $('.menu li.current').removeClass('current');
        $('.menu a[href=' + url + ']').parent().addClass('current');
    });
	
	$('#holder').hide().load('main');
	$('.menu a[name=main]').parent().addClass('current');
});

</script> 
</body> 
 
</html> 