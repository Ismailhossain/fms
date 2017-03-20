<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>elFinder 2.0</title>

		<!-- jQuery and jQuery UI (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/themes/smoothness/jquery-ui.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"></script>

		<!-- elFinder CSS (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.full.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">

		<!-- elFinder JS (REQUIRED) -->
		<script type="text/javascript" src="js/elfinder.min.js"></script>
		
		<!-- TinyMCE Popup class (REQUIRED) -->
		<script type="text/javascript" src="../tiny-mce/tiny_mce_popup.js"></script>
		
		<!-- elFinder initialization (REQUIRED) -->
		<script type="text/javascript">
		var FileBrowserDialogue = {
			init : function () {
				var elf = $('#elfinder').elfinder({
					url : 'php/connector.php?type=<?php echo $_GET['type']; ?>',  // connector URL (REQUIRED)
					getfile : {
						onlyURL : true,
						multiple : false,
						folders : false
					},
					getFileCallback : function(url) {
						path = url.path;
						FileBrowserDialogue.mySubmit(path);
					}                     
				}).elfinder('instance');
			},
			mySubmit : function (URL) {
				
				var win = tinyMCEPopup.getWindowArg("window");
		
				// insert information now
				win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value = URL;
		
				// are we an image browser
				if (typeof(win.ImageDialog) != "undefined") {
					// we are, so update image dimensions...
					if (win.ImageDialog.getImageData)
						win.ImageDialog.getImageData();
		
					// ... and preview if necessary
					if (win.ImageDialog.showPreviewImage)
						win.ImageDialog.showPreviewImage(URL);
				}
		
				// close popup window
				tinyMCEPopup.close();
			}
		}
		
		tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);

		</script>
		
	</head>
	<body>

		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>

	</body>
</html>
