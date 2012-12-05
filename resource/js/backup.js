$(document).ready(function() {
	$('#holder').fadeIn();
	$("#tooltip").remove();
	
	// PNG FIX
	$('img').pngFix();

	// SOME STYLE USER BOX
	$("ul.user li:first-child").css("padding", "0 0 12px").css("margin", "-3px 0 0");
	$("ul.user li:last-child").css("padding", "12px 0 0").css("background-image", "none");
	$("ul.user li:last-child").css("margin", "0 0 -5px")
	
	// HIDE BOXES
	$('.toggle').click(function() {
		$(this).parent().next('.content').slideToggle();
	});
	
	// SYSTEM MESSAGES
	$("div.message img").click(function () {
      $(this).parent().closest('div.message').fadeOut();
    });
	
	// TABS
	$('.tabs').tabs({ fx: { opacity: 'toggle' } });
	$(".tabs table tr td:first-child").css('border-left','none').css('padding-left','0');
	
	// THUMB HOVER
	$(function() {
		$("div.thumb").hover(
			function() {
				$(this).children("img").fadeTo(200, 0.85).end().children("div").show();
			},
			function() {
				$(this).children("img").fadeTo(200, 1).end().children("div").hide();
			});
	});
	
	// WYSISWYG
	$(function () {
		$('#wysiwyg').wysiwyg({
			css : "css/wysiwyg-editor.css",
			plugins: {
					rmFormat: { rmMsWordMarkup: true }
				}	
		});
		$('#wysiwyg').wysiwyg('clear');
	});
	
	// STYLE FILE BUTTON
	$("input[type=file]").filestyle({
	   imageheight : 24,
	   imagewidth : 89,
	   width : 250
	});
	
	$('input.datepicker').datePicker({clickInput:true});
	
	// TABEL STATICS
	$('table.statics').graphTable({series: 'columns', position : 'replace', height : '180px', colors: colors});	
	$('.flot-graph').before('<div class="space"></div>');

	function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y+5,
            left: x+5
        }).appendTo("body").fadeIn(200);
    }
 
    var previousPoint = null;
    $(".flot-graph").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x);
        $("#y").text(pos.y);
 
		if (item) {
			if (previousPoint != item.dataIndex) {
				previousPoint = item.dataIndex;
				
				$("#tooltip").remove();
				var x = item.datapoint[0],
					y = item.datapoint[1];
				
				showTooltip(item.pageX, item.pageY,
							"<b>" + item.series.label + "</b>: " + y);
			}
		}
		else {
			$("#tooltip").remove();
			previousPoint = null;            
		}
    });
});
