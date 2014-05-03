<?php session_start();?>
<html>
<head>
 	<title>PLACEMENT INFO</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="top">
<h1>DEPARTMENT PLACEMENT INFORMATION SYSTEM</h1>
    </div>
	<div id="wrapper">
	<div id="menu">
		<a class="item" href="comp_feedback.php">Give Feedback</a> -
                <a class="item" href="achievements.php">Placement history</a> -
                <div id="userbar">
		<?php
		if($_SESSION['signed_in'])
		{
                    echo 'Hello <b>' . htmlentities($_SESSION['comp_name']) . '</b>. Not you? <a class="item" href="signout.php">Sign out</a>';
		}

                //echo '<a class="item" href="stud_signout.php">Sign out</a>';
		//{
		//	echo '<a class="item" href="Webtechboard_signin.php">Sign in</a> or <a class="item" href="Webtechboard_signup.php">Create new account</a>';
		//}
		?>
		</div>
	</div>
		<div id="content">