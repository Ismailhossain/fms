// Plugin created by Daenu Probst http://codebrewery.blogspot.com/
(function ($) {
    $.fn.microAccordion = function (options) {
        var opts = $.extend({}, $.fn.microAccordion.defaults, options);
        return this.each(function () {
            var obj = $(this);
            var e = 0;
            var c = opts.cssClassClosed;
            var o = opts.cssClassOpen;
			var hc = opts.cssClassHoverClosed;
			var oc = opts.cssClassHoverOpen;
			obj.children('div.micro').children('h4').hover(function() {
				($(this).hasClass(c)) ? $(this).addClass(hc).removeClass(oc) : $(this).addClass(oc).removeClass(hc);
			}, function() {
				$(this).removeClass(hc).removeClass(oc);
			});
            obj.children('div.micro').each(function () {
                $(this).attr('id', 'micro-' + e);
				$(this).children('.sub_section').addClass(opts.cssClassContent);
                $(this).children('h4').click(function () {
                    var a = $(this);
                    if (opts.openSingle) {
                        obj.children('div.micro').each(function () {
                            if ($(this).attr('id') != a.parent().attr('id')) {
                                opts.closeFunction($(this).children('.sub_section'));
                                $(this).children('h4').removeClass(o).addClass(c);
                            }
                        });
                    }
                    opts.toggleFunction(a.siblings('.sub_section'));
                    (a.hasClass(c)) ? a.addClass(o).removeClass(c) : a.addClass(c).removeClass(o);
                    return false;
                }).each(function () {
                    (e == opts.defaultOpen) ? $(this).addClass(o).siblings('.sub_section').slideDown('fast') : $(this).addClass(c).siblings('.sub_section').css('display', 'none');
                });
                e++;
            });
        });
    };
    $.fn.microAccordion.defaults = {
        cssClassOpen: 'micro-open',
        cssClassClosed: 'micro-closed',
		cssClassHoverOpen: 'micro-hover-open',
		cssClassHoverClosed: 'micro-hover-closed',
		cssClassContent: 'micro-content',
        openSingle: false,
        toggleFunction: function (obj) {
            obj.slideToggle();
        },
        closeFunction: function (obj) {
            obj.slideUp();
        },
        defaultOpen: 0
    };
})(jQuery);