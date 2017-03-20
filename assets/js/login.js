/*
 * filename: login.js
 * last modified: 23/10/2011
*/ 

head.ready(function(){
	lga_loginTabs.init();
	lga_formFocus.init();
	lga_validation.init();
});

// login/register tabs
lga_loginTabs = {
	init: function() {
		$("ul.login_tabs").flowtabs("div.login_panes > div",
			{ onBeforeClick: function(event, tabIndex) {
				if(typeof validator != 'undefined') {
					validator.resetForm(); //reset validator when switching tabs
				}
			}}
		);
	}
}

// add class focus to active form element
lga_formFocus = {
	init: function() {
		$('input, textarea').bind('focus blur', function(){
			$(this).toggleClass('focus');
		})
	}
}

lga_validation = {
	init: function() {
		validator = $("#form_login").validate({
			rules: {
				lusername: "required",
				lpassword: "required"
			},
			messages: {
				lusername: "<strong>Username</strong> is required (type anything)",
				lpassword: "<strong>Password</strong> is required (type anything)"
			},
			errorLabelContainer: $("#allErrors")			
		});
	}
}