<?php

	if(isset($_SESSION['message']))
	{   session_start();
		$message = $_SESSION['message'];
		unset($_SESSION['message']);
	  // session_destroy();
?>
	<div id="messageBox"><?=$message?></div>
<?php
	}
	if(isset($_SESSION['exception']))
	{   session_start();
		$exception = $_SESSION['exception'];
		unset($_SESSION['exception']);
//        $timeout = 60;
//
//        $_SESSION['timeout'] = time() + $timeout;
       // destroy($_SESSION['exception']);
?>
	<div id="exceptionBox"><?=$exception?></div>
<?php
	}

	if(isset($_SESSION['notification']))
	{   session_start();
		$notification = $_SESSION['notification'];
		unset($_SESSION['notification']);
?>
	<div class="notificationBox"><?=$notification?></div>
<?php
	}
?>