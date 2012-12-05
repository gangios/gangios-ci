// 创建一个闭包    
(function($) {    
    // 插件的定义    
    $.fn.ajaxlink = function(options, callback) {    
        var opts = $.extend({}, $.fn.ajaxlink.defaults, options);
        return $(this).each(function() {
            $(this).click(function() {
                var url = $(this).attr('href');
                if (url) {
                    $(opts.target).fadeOut(callback = function() {
                        $(this).empty().load(url);
                    });
                    if (callback) {
                        callback();
                    }
                }
                return false;
            });
        });
    };
    
    // 插件的defaults    
    $.fn.ajaxlink.defaults = {    
        target: ''
    };    
// 闭包结束    
})(jQuery);     