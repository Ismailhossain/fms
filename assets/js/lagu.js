/*
 * filename: lagu.js
 * last modified: 28/11/2011
*/ 

// execute these functions when all scripts are loaded
head.ready(function(){
	lga_bredcrumbs.init();
	lga_scrolltoTop.init();
	lga_messages.init();
	lga_toggleBox.init();
	lga_RemoveBox.init();
	lga_sidebar.lga_accordion();
	lga_sticky.sticky_bredcrumbs();
	lga_slidingPanel.init();
	lga_externalLink.init();
});

/* jQuery vertical align function
 * usage: $('selector').vAlign();
*/
(function ($) {
	$.fn.vAlign=function(){return this.each(function(){var a=$(this).height(),b=$(this).parent().height(),a=Math.ceil((b-a)/2);$(this).css("padding-top",a)})};
})(jQuery);

/* jQuery clear form
 * usage: $('selector').clearForm();
*/
$.fn.clearForm = function() {
	return this.each(function() {
		var type = this.type, tag = this.tagName.toLowerCase();
		if (tag == 'form'){
			return $(':input',this).clearForm();
		}
		if (type == 'text' || type == 'password' || tag == 'textarea'){
			this.value = '';
		}
		else if (type == 'checkbox' || type == 'radio'){
			this.checked = false;
		}
		else if (tag == 'select') {
			this.selectedIndex = -1;
		}
	}).trigger("liszt:updated");
};

/* TextAreaExpander plugin for jQuery
 * By Craig Buckler, Optimalworks.net
 * Assign a class of "expandMIN-MAX" to set the <textarea> minimum and maximum height
*/

(function(b){b.fn.TextAreaExpander=function(e,f){function c(a){var a=a.target||a,b=a.value.length,c=a.offsetWidth;if(b!=a.valLength||c!=a.boxWidth){if(g&&(b<a.valLength||c!=a.boxWidth))a.style.height="0px";var d=Math.max(a.expandMin,Math.min(a.scrollHeight,a.expandMax));a.style.overflow=a.scrollHeight>d?"auto":"hidden";a.style.height=d+"px";a.valLength=b;a.boxWidth=c}return!0}var g=!(b.browser.msie||b.browser.opera);this.each(function(){if(this.nodeName.toLowerCase()=="textarea"){var a=this.className.match(/expand(\d+)\-*(\d+)*/i); this.expandMin=e||(a?parseInt("0"+a[1],10):0);this.expandMax=f||(a?parseInt("0"+a[2],10):99999);c(this);if(!this.Initialized)this.Initialized=!0,b(this).css("padding-top",0).css("padding-bottom",0),b(this).bind("keyup",c).bind("focus",c)}});return this}})(jQuery);
jQuery(document).ready(function(){jQuery("textarea[class*=expand]").TextAreaExpander()});

//serialize form
(function($,a){$.fn.serializeObject=function(){var b={};$.each(this.serializeArray(),function(d,e){var f=e.name,c=e.value;b[f]=b[f]===a?c:$.isArray(b[f])?b[f].concat(c):[b[f],c]});return b}})(jQuery);
		

// clear form
lga_clearForm = {
	init: function() {
		$('.clear_form').click(function() {
			var clear_btn = $(this);
			$.fancybox(
				'<div class="tac"><p class="sepH_b">Are you sure you want to reset the form?</p><a href="javascript:void(0)" id="clear_yes" class="btn btn_d sepV_a">Yes</a><a href="javascript:void(0)" id="clear_no" class="btn btn_a">No</a></div>',
				{
					'transitionIn'		: 'elastic',
					'showCloseButton'	: false,
					'overlayOpacity'	: '0',
					'hideOnOverlayClick': false,
					'autoDimensions'	: false,
					'width'         	: 350,
					'height'        	: 'auto',
					'onComplete'	:	function() {
						$('#clear_yes').click(function(){
							clear_btn.closest('form').clearForm();
							tinyMCE.activeEditor.setContent(''); //clear tinyMCE content
							if(typeof form_a_validator != 'undefined') {
								form_a_validator.resetForm(); //reset validator when clearing form
								clear_btn.closest('form').find('div.error').removeClass('error');
							}
							if(typeof form_b_validator != 'undefined') {
								form_b_validator.resetForm(); //reset validator when clearing form
								clear_btn.closest('form').find('div.error').removeClass('error');
							}
							$.fancybox.close(); //close modal
							
						});
						$('#clear_no').click(function(){
							$.fancybox.close(); //close modal
						});
					}
				}
			);
			return false;
		});
	}
};

// external link ( <a rel="external">)
lga_externalLink = {
	init: function(){
		$("a[rel='external']").addClass("external").click(function() { window.open($(this).attr('href')); return false; });
	}
};

// sticky breadcrumb, content actions
lga_sticky = {
	sticky_bredcrumbs: function(){
		$("#breadcrumbs").stickyPanel({
			topPadding: 0,
			afterDetachCSSClass: "breadcrumbs_sticky",
			savePanelSpace: true
		});
	},
	sticky_contentActions: function() {
		$("#content_actions").stickyPanel({
			topPadding: 0,
			afterDetachCSSClass: "sticky_actions",
			savePanelSpace: false
		}); 
	}
};

// jQuery Tools tabs (.tabs changed to .flowtabs to avoid conflict with Jquery UI tabs)
lga_flowTabs = {
	tabs_b: function() {
		$(".tabsB").flowtabs("div.content_panes > div");
	}
};

// sidebar accordion
lga_sidebar = {
	lga_accordion: function(){
		
		$('#sidebar').children('div.micro').each(function (e) {
            $(this).attr('rel', e);
		});
		var act_id = $('#sidebar li.active').closest('div.micro').attr('rel');
		
		$('#sidebar').microAccordion({
		   openSingle: true,
		   closeFunction: function (obj) {
			  obj.slideUp('fast');
		   },
		   toggleFunction: function (obj) {
				 obj.slideToggle('fast');
		   },
		   defaultOpen: act_id
		});
	}
};

// jQuery charts (visualize)
lga_charts = {
	line_charts: function(){
		$('.line').visualize({
			type: 'line',
			colors: ['#00a0b0','#cc333f','#6a4a3c','#edc951','#eb6841','#a141eb','#446a3c','#f45a90','#e9e744'],
			lineDots: 'double',
			lineMargin: 0,
			interaction: true,
			tooltip: true
		}).trigger('visualizeRefresh');
	},
	bar_charts: function(){
		$('.bar').visualize({
			type: 'bar',
			colors: ['#00a0b0','#cc333f','#6a4a3c','#edc951','#eb6841','#a141eb','#446a3c','#f45a90','#e9e744']
		}).trigger('visualizeRefresh');
	},
	area_charts: function(){
		$('.area').visualize({
			type: 'area',
			colors: ['#00a0b0','#cc333f','#6a4a3c','#edc951','#eb6841','#a141eb','#446a3c','#f45a90','#e9e744']
		}).trigger('visualizeRefresh');
	},
	pie_charts: function(){
		$('.pie').visualize({
			type: 'pie',
			colors: ['#00a0b0','#cc333f','#6a4a3c','#edc951','#eb6841','#a141eb','#446a3c','#f45a90','#e9e744'],
			interaction: true,
			tooltip: true,
			height: '200'
		}).trigger('visualizeRefresh');
	},
	resize_charts:function() {
		$('.chart').map( function() {
			var chartWidth = $(this).parent().innerWidth();
			return $(this).css({
				'width':chartWidth - 60
			});
		});
	}
};

// FusionCharts
lga_fusionCharts = {
	chart_a: function(){
		var chart_a = new FusionCharts("lib/fusion-charts/charts/FCF_MSLine.swf", "chart_a", "660", "300");
		chart_a.setDataURL("lib/fusion-charts/data/daily_visits.xml");
		chart_a.setTransparent(true);
		chart_a.render("chart_a");
	},
	chart_b: function(){
		var chart_b = new FusionCharts("lib/fusion-charts/charts/FCF_Area2D.swf", "chart_b", "660", "300");
		chart_b.setDataURL("lib/fusion-charts/data/monthly_sale_summary.xml");
		chart_b.setTransparent(true);
		chart_b.render("chart_b");
	},
	chart_c: function() {
		var chart_c = new FusionCharts("lib/fusion-charts/charts/FCF_Pie2D.swf", "chart_c", "660", "300");
		chart_c.setDataURL("lib/fusion-charts/data/pie_chart.xml");
		chart_c.setTransparent(true);
		chart_c.render("chart_c");
	},
	chart_d: function() {
		var chart_d = new FusionCharts("lib/fusion-charts/charts/FCF_Bar2D.swf", "chart_d", "660", "300");
		chart_d.setDataURL("lib/fusion-charts/data/brand_winners.xml");
		chart_d.setTransparent(true);
		chart_d.render("chart_d");
	},
	chart_e: function() {
		var chart_e = new FusionCharts("lib/fusion-charts/charts/FCF_Line.swf", "chart_e", "660", "300");
		chart_e.setDataURL("lib/fusion-charts/data/monthly_unit_sales.xml");
		chart_e.setTransparent(true);
		chart_e.render("chart_e");

	},
	chart_f: function() {
		var chart_f = new FusionCharts("lib/fusion-charts/charts/FCF_StackedArea2D.swf", "chart_f", "660", "300");
		chart_f.setDataURL("lib/fusion-charts/data/site_hits.xml");
		chart_f.setTransparent(true);
		chart_f.render("chart_f");
	},
	chart_g: function() {
		var chart_g = new FusionCharts("lib/fusion-charts/charts/FCF_Gantt.swf", "chart_g", "660", "300");
		chart_g.setDataURL("lib/fusion-charts/data/sales_territory.xml");
		chart_g.setTransparent(true);
		chart_g.render("chart_g");
	},
	chart_h: function() {
		var chart_h = new FusionCharts("lib/fusion-charts/charts/FCF_MSColumn2DLineDY.swf", "chart_h", "660", "300");
		chart_h.setDataURL("lib/fusion-charts/data/web_statistics.xml");
		chart_h.setTransparent(true);
		chart_h.render("chart_h");
	},
	chart_i: function() {
		var chart_i = new FusionCharts("lib/fusion-charts/charts/FCF_Column2D.swf", "chart_i", "280", "200");
		chart_i.setDataURL("lib/fusion-charts/data/ItemsSold.xml");
		chart_i.setTransparent(true);
		chart_i.render("chart_i");
	},
	chart_j: function() {
		var chart_j = new FusionCharts("lib/fusion-charts/charts/FCF_Pie2D.swf", "chart_j", "280", "200");
		chart_j.setDataURL("lib/fusion-charts/data/Top5SP.xml");
		chart_j.setTransparent(true);
		chart_j.render("chart_j");
	},
	chart_k: function() {
		var chart_k = new FusionCharts("lib/fusion-charts/charts/FCF_Pie2D.swf", "chart_k", "210", "210");
		chart_k.setDataURL("lib/fusion-charts/data/Top5SP.xml");
		chart_k.setTransparent(true);
		chart_k.render("chart_k");
	}
};
 
// Data tables
lga_dataTables = {
	lga_contentTable: function(){
		$('#content_table').dataTable({
			"sPaginationType": "full_numbers",
			"aaSorting": [[ 0, "asc" ]],
			"aoColumns": [
				{ "sType": "natural" },
				{ "sType": "string" },
				{ "bSortable": false },
				{ "sType": "eu_date" },
				{ "bSortable": false }
			]
		});
	}
};

// jQuery UI sortable
lga_sortable = {
	init: function(){
		$( ".sortable" ).sortable({
			connectWith: ".sortable",
			helper: 'original',
			handle: 'h3',
			cancel: ".sort-disabled",
			forceHelperSize: true,
			distance: 5,
			tolerance: 'pointer',
			start: function(event, ui) {
				$('.sortable').css({
					'min-height':'50px',
					'background':'#f5f5f7',
					'padding':'10px 0',
					'margin-bottom':'5px',
					'z-index': '10000'
				})
			},
			stop: function(event, ui) {
				$('.sortable').attr('style','')
			}
		});
	}
};

// Elfinder file manager
lga_fileManager = {
	init: function(){
		$('#elfinder').elfinder({
			url : 'lib/elfinder/php/connector.php',
			lang : 'en'
		});
	}
};

// Tiny MCE with integrated Elfinder
lga_editor = {
	init: function() {
		$('textarea.tinymce').tinymce({
			script_url : 'lib/tiny-mce/tiny_mce.js',
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,table,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,advlist",
			theme_advanced_buttons1 : "print,|,cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,cleanup,|,fullscreen,help,code",
			theme_advanced_buttons2 : ",formatselect,fontselect,fontsizeselect,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,forecolor,backcolor",
			theme_advanced_buttons3 : ",sub,sup,|link,unlink,anchor,charmap,emotions,iespell,media,image,|,hr,insertdate,inserttime,|,removeformat,visualaid,|,visualchars,nonbreaking,template,blockquote,pagebreak",
			theme_advanced_buttons4 : "tablecontrols,|,cite,abbr,acronym,del,ins,attribs",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing: true,
			width : "340",
			height: "300",
			mode : "textareas",
			// file browser - https://github.com/Studio-42/elFinder/wiki/Integration-with-TinyMCE-3.x
			file_browser_callback: function elFinderBrowser(field_name, url, type, win) {
				var cmsURL = 'lib/elfinder/elfinder.php';
                if (cmsURL.indexOf("?") < 0) {
                    cmsURL = cmsURL + "?type=" + type;
                }
                else {
                    cmsURL = cmsURL + "&type=" + type;
                }
                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'elFinder 2.0',
                    width : 900,  
                    height : 450,
                    resizable : "yes",
                    inline : "yes",  
                    popup_css : false,
                    close_previous : "no"
                }, {
                    window : win,
                    input : field_name
                });
                return false;
			}
		});
	}
};

// Tiny MCE with integrated Elfinder (default)
lga_editor_default = {
	init: function() {
		$('textarea.tinymce').tinymce({
			script_url : 'lib/tiny-mce/tiny_mce.js',
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,table,advimage,advlink,emotions,inlinepopups,preview,media,print,contextmenu,paste,advlist",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing: true,
			width : "340",
			height: "300",
			mode : "textareas",
			// file browser - https://github.com/Studio-42/elFinder/wiki/Integration-with-TinyMCE-3.x
			file_browser_callback: function elFinderBrowser(field_name, url, type, win) {
				var cmsURL = 'lib/elfinder/elfinder.php';
                if (cmsURL.indexOf("?") < 0) {
                    cmsURL = cmsURL + "?type=" + type;
                }
                else {
                    cmsURL = cmsURL + "&type=" + type;
                }
                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'elFinder 2.0',
                    width : 900,  
                    height : 450,
                    resizable : "yes",
                    inline : "yes",  
                    popup_css : false,
                    close_previous : "no"
                }, {
                    window : win,
                    input : field_name
                });
                return false;
			}
		});
	}
};

// jQuery UI datepicker
lga_datepicker = {
	init: function() {
		$( "input.datepicker" ).datepicker();
	}
};

// jQuery UI inline datepicker
lga_datepicker_inline = {
	init: function() {
		$( ".datepicker_inline" ).datepicker({
			inline: true
		});
	}
};

// alert messages close
lga_messages = {
	init: function() {
		$('.msg_close').click(function(){
			$(this).parent().fadeOut('slow');  
		})	
	}
};

// widget toggle content
lga_toggleBox = {
	init: function() {
		$('.box_c_heading .wToogle').click(function(){
			$(this).parent().next().slideToggle('fast')
		});	
	}
};

// widget hide/remove
lga_RemoveBox = {
	init: function() {
		$('.box_c_heading .wRemove').click(function(){
			$(this).closest('.box_c').fadeOut('slow');
		});	
	}
};

// xBreadcrumbs plugin
lga_bredcrumbs = {
	init: function(){
		$('#breadcrumbs').xBreadcrumbs();
	}
};

// jQuery text truncate
lga_textTruncate = {
	init: function() {
		$('.truncate').textOverflow('...', true);
	}
};

// footer scroll to top
lga_scrolltoTop = {
   init: function(){
	  $(".toTop").click(function(){
		 $('html, body').animate({ scrollTop: 0 }, 'slow');
		 return false;
	  })
   }
};

// select box enhance
lga_selectBox = {
	init: function() {
		$(".chzn-select").chosen();
	}
};

// sliding panel
lga_slidingPanel = {
	init: function() {
		$("#slide_open").click(function(){
			$("#slide_content").slideDown("fast");
		});	
		
		$("#slide_close").click(function(){
			$("#slide_content").slideUp("fast");
		});
		
		$("#slide_close img").bind('mouseenter mouseleave', function(){
			$(this).toggleClass('round_x16_a round_x16_b');
		});
	}
};

// jQuery tools tooltips 
lga_tips = {
	init: function() {
		//bottom
		var tipBconf = {    
			layout:	'<div><span class="tipB_arrow"></span></div>',
			position: 'bottom center',
			offset: [10,0],
			delay: 100,
			predelay: 100
		};	
		//top
		var tipTconf = {    
			layout:	'<div><span class="tipT_arrow"></span></div>',
			position: 'top center',
			offset: [-10,0],
			delay: 100,
			predelay: 100
		};
		//right
		var tipRconf = {    
			layout		: '<div><span class="tipR_arrow"></span></div>',
			position	: 'center right',
			offset		: [0,10],
			delay		: 100,
			predelay	: 100
		};
		//left
		var tipLconf = {    
			layout		: '<div><span class="tipL_arrow"></span></div>',
			position	: 'center left',
			offset		: [0,-10],
			delay		: 100,
			predelay	: 100
		};
		
		//bottom position
		$('.lgutipB').tooltip(tipBconf);
		//top position
		$('.lgutipT').tooltip(tipTconf);
		//left position
		$('.lgutipL').tooltip(tipLconf);
		//right position
		$('.lgutipR').tooltip(tipRconf);
	}
};

// file uploader
lga_fileUpload = {
	init: function() {
		function createUploader(){
            var uploader = new qq.FileUploader({
                element: document.getElementById('file_uploader'),
                action: 'lib/file-uploader/server/php.php',
                debug: true
            });           
        }
		createUploader();
	}
};

// Content slider
lga_contentSlider = {
	init: function() {
		$('#contact_slider').sliderNav({items: ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p"]});
	}
};

// jQ form_a validation
lga_form_a_validation = {
	init: function() {
		form_a_validator = $("#form_a").validate({
			highlight: function(element) {
				$(element).closest('div').addClass("error");
			},
			unhighlight: function(element) {
				$(element).closest('div').removeClass("error");
			},
			rules: {
				title: "required",
				password: {
					required: true,
					minlength: 5
				},
				email: {
					required: true,
					email: true
				},
				description: "required"
			},
			messages: {
				title: "<strong>Title</strong>: This field is required",
				password: {
					required: "<strong>Password</strong>: Please provide a password",
					minlength: "<strong>Password</strong>: Your password must be at least 5 characters long"
				},
				email: "<strong>Email</strong>: This field is required",
				description: "<strong>Description</strong>: This field is required"
			},
			errorLabelContainer: $("#form_a_errors"),
			invalidHandler: function(form, validator) {
				$('html,body').animate({ scrollTop: $('#form_a').offset().top }, 'slow'); //scrool to top to show errors
			},
			submitHandler: function(form) {
				var post = $("#form_a").serializeObject();
				$.post('helper_serialize.php', post, function(data) {
					alert(data);
				});
			}
		});
	}
};

//jQ form_b validation
lga_form_b_validation = {
	init: function() {
		form_b_validator = $("#form_b").validate({
			highlight: function(element) {
				$(element).closest('div').addClass("error");
			},
			unhighlight: function(element) {
				$(element).closest('div').removeClass("error");
			},
			submitHandler: function(form) {
				var post = $("#form_b").serializeObject();
				$.post('helper_serialize.php', post, function(data) {
					alert(data);
				});
			}
		});
	}
};

// form serialize and submit
lga_formSubmit = {
	init: function() {
		$('form.js_submit').each(function(){
			$(this).submit(function() {
				var post = $(this).serializeObject();
				$.post('helper_serialize.php', post, function(data) {
					alert(data);
				});
				return false;
			});
		})
	}
};

// iphone like checkboxes
lga_styledCheckboxes = {
	init: function() {
		$('.disabled_checkbox').iphoneStyle();
		$('.on_off_checkbox').iphoneStyle();
		$('.agree_disagree_checkbox').iphoneStyle({
			checkedLabel	: 'Agree',
			uncheckedLabel	: 'Disagree',
			onChange: function(elem, value) { 
				$(this).val(value.toString());
			}
		});
	}
};

// jQuery UI sliders
lga_uiSliders = {
	init: function() {
		
		//default slider
		$( ".ui_slider1" ).slider({
			value:100,
			min: 0,
			max: 500,
			step: 50,
			slide: function( event, ui ) {
				$( ".ui_slider1_val" ).text( "$" + ui.value );
				$( "#ui_slider_default_val" ).val( "$" + ui.value );
			}
		});
		
		$( ".ui_slider1_val" ).text( "$" + $( ".ui_slider1" ).slider( "value" ) );
		$( "#ui_slider_default_val" ).val( "$" + $( ".ui_slider1" ).slider( "value" ) );
		
		//range slider
		$( ".ui_slider2" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ],
			slide: function( event, ui ) {
				$( ".ui_slider2_val" ).text( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				$( "#ui_slider_min_val" ).val( "$" + ui.values[ 0 ] );
				$( "#ui_slider_max_val" ).val( "$" + ui.values[ 1 ] );
			}
		});
		$( ".ui_slider2_val" ).text( "$" + $( ".ui_slider2" ).slider( "values", 0 ) +
			" - $" + $( ".ui_slider2" ).slider( "values", 1 ) );
		$( "#ui_slider_min_val" ).val( "$" + $( ".ui_slider2" ).slider( "values", 0 ) );
		$( "#ui_slider_max_val" ).val( "$" + $( ".ui_slider2" ).slider( "values", 1 ) );
		
	}
};

// jQuery UI progresbar
lga_uiProgressBar = {
	init: function() {
		$( "#progressbar" ).progressbar({
			value: 10
		});
		
		// increase/decrease Progressbar value (for demo purposes)
		$( ".ui_slider_progress" ).slider({
			value:100,
			min: 0,
			value: 10,
			max: 100,
			step: 10,
			slide: function( event, ui ) {
				$( ".ui-progressbar-value" ).text( ui.value + "%");
				var progressBar = $('#progressbar');
				progressBar.progressbar({value: ui.value});
				$( "#progress_val" ).val( ui.value + "%" );
			}
		});
		
		// show progressbar value
		$( ".ui-progressbar-value" ).text( $("#progressbar").progressbar( "value" ) + "%" );
		$( "#progress_val" ).val( $("#progressbar").progressbar( "value" ) + "%" );
		
	}
};

//rating
lga_rating = {
	init: function() {
		
		$('#rating_def').raty({ path: "lib/jquery-raty/img/", start: 4 });
		
		$('#rating_half').raty({
			half:  true,
			path: "lib/jquery-raty/img/",
			start: 2
		});
		
		$('#rating_cancel').raty({
			cancel: true,
			path: "lib/jquery-raty/img/",
			start: 1,
			cancelHint: 'none',
			target:     '#raty_hint'
		});
		
		$('#rating_custom').raty({
			path: "lib/jquery-raty/img/",
			iconRange: [['face-a.png', 2], ['face-b.png', 3], ['face-c.png', 4], ['face-d.png', 5]],
			starOff:   'face-off.png',
			start: 3
		});
	}
};

//timepicker
lga_timepicker = {
	init: function() {
		$('#timepicker').datetimepicker();
	}
};

//faq page
lga_faq = {
	init: function() {
		$('.help_nav').find('a').click(function(){
			var nameScroll = $(this).attr("href");
			$.scrollTo(nameScroll, {duration: 500, offset: -30, onAfter:function(){
				$(nameScroll).next('p').highlightFade({color:'rgb(222, 244, 255)', speed: 1000, iterator:'sinusoidal'});
			} });
			return false;
		});
		$('.help_content').find('h4').prepend('<a href="#" class="to_topFaq">to top</a>');
		$('.to_topFaq').click(function(){
			$.scrollTo('#faq_top', {duration: 500, offset: -30});
			return false
		});
	}
};

//style switcher
lga_style_switcher = {
	init: function() {
		var site_bg = $.cookie('site_bg');
		var site_sidebar = $.cookie('site_sidebar');
		var site_width = $.cookie('site_width');
		var site_color = $.cookie('site_color');
		
		if(site_bg != null) {
			$('body').removeClass('bg_a bg_b bg_c bg_d bg_e bg_f').addClass(site_bg);
		}
		
		if(site_color != null) {
			$('body').removeClass('stA stB stC stD stE').addClass(site_color);
		}
		
		if(site_width != null) {
			$('body').removeClass('fixed fluid').addClass(site_width);
		}
		
		if(site_sidebar != null) {
			$('body').removeClass('sidebar nosidebar').addClass(site_sidebar);
		}
		
		
		$('.open_helper').bind('click', function(){
			$('.lagu_helper').animate({left: '0'}, 100 )
			$(this).hide().next().show();
		});
		
		$('.close_helper').bind('click', function(){
			$('.lagu_helper').animate({left: '-176px'}, 100 )
			$(this).hide().prev().show();
		});
		
		$('#toggleSidebar').click(function(){
			$('body').toggleClass('sidebar');
			if($('body').hasClass('sidebar')){ var lSidebar = "sidebar" }else{ var lSidebar = "nosidebar" };
			$.cookie('site_sidebar', lSidebar);
			//info message about body classes
			$('.msg_box').fadeIn('slow').children('span').text('Classes aplied to body: <body class="'+ $('body').attr('class') +'">');
			return false;
		});
		
		$('#toggleWidth').click(function(){
			$('body').toggleClass('fixed fluid');
			if($('body').hasClass('fixed')){ var lWidth = "fixed"}else{ var lWidth = "fluid"};
			$.cookie('site_width', lWidth);
			//info message about body classes
			$('.msg_box').fadeIn('slow').children('span').text('Classes aplied to body: <body class="'+ $('body').attr('class') +'">');
			return false;
		});
		
		$('.bg_change').click(function(){
			$('body').removeClass('bg_a bg_b bg_c bg_d bg_e bg_f').addClass($(this).attr('value'));
			$.cookie('site_bg', $(this).attr('value'));
			//info message about body classes
			$('.msg_box').fadeIn('slow').children('span').text('Classes aplied to body: <body class="'+ $('body').attr('class') +'">');
		});
		
		$('.color_change').click(function(){
			$('body').removeClass('stA stB stC stD stE').addClass($(this).attr('value'));
			$.cookie('site_color', $(this).attr('value'));
			//info message about body classes
			$('.msg_box').fadeIn('slow').children('span').text('Classes aplied to body: <body class="'+ $('body').attr('class') +'">');
		});
		
		$('#removeAll').click(function(){
			var site_bg = $.cookie('site_bg',null);
			var site_sidebar = $.cookie('site_sidebar',null);
			var site_width = $.cookie('site_width',null);
			var site_color = $.cookie('site_color',null);
			location.reload();
			return false;
		})
	}
};

//step-by-step wizard
lga_wizard = {
	init: function(){
		//wizard form submit
		$('#wizard_form').submit(function() {
			var post = $(this).serializeObject();
			$.post('helper_serialize.php', post, function(data) {
				$('#form_summary').html(data);
			});
			return false;
		});

		//set page width for steps
		pageW = $('#status').outerWidth();
		$('.page').css('width',pageW - 10);
		
		//initialize wizard
		var root = $("#wizard").fancyscrollable();
		var api = root.fancyscrollable();
		api.onBeforeSeek(function(event, i) {
			if (api.getIndex() < i) {
				var page = root.find(".page").eq(api.getIndex());
				notValid = false;
				//class="validate" needs to be added to elements that needs to be validated
				page.find('.validate').each(function(){
					//assign validator to single element
					validator = $("#wizard_form").validate({
						highlight: function(element) {
							$(element).closest('div').addClass("error");
						},
						unhighlight: function(element) {
							$(element).closest('div').removeClass("error");
						},
                        rules: {
                            username: "required",
                            password: {
                                required: true,
                                minlength: 5
                            },
                            email: {
                                required: true,
                                email: true
                            },
                            street: "required",
                            zip: "required"
                        },
                        messages: {
                            username: "This field is required",
                            password: {
                                required: "This field is required",
                                minlength: "Your password must be at least 5 characters long"
                            },
                            email: "This field is required",
							street: "This field is required",
                            zip: "This field is required"
                        }
					}).element($(this));
					if(validator == false){	notValid = true	}
				})
				if(notValid == true){ return false }
			}
			$("#status li").removeClass("active").eq(i).addClass("active filed");
			$("#status li.active").prev("li").addClass("filed");
		});

		// if tab is pressed on the next button seek to next page
		root.find("a.next,button.next").keydown(function(e) {
			if (e.keyCode == 9) {
				// seeks to next tab by executing our validation routine
				api.next();
				e.preventDefault();
			}
		});
		
		//disable enter key for wizard
			//Bind this keypress function to all of the input tags
			root.find("input").keypress(function (evt) {
			//Deterime where our character code is coming from within the event
				var charCode = evt.charCode || evt.keyCode;
				if (charCode  == 13) { //Enter key's keycode
					return false;
				}
			});
	}
};