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
		<a class="item" href="index.php">Home</a> -
		<a class="item" href="about.php">About</a> -
                <a class="item" href="achievements.php">Placement History</a> -
		<a class="item" href="company_login.php">Company Login</a> -
                <div id="userbar">
		<?php
		if($_SESSION['signed_in'])
		{
                    echo 'Hello <b>' . htmlentities($_SESSION['user_name']). '</b>. Not you? <a class="item" href="signout.php">Sign out</a>';
		}
		else
		{
			echo '<a class="item" href="admin_login.php">Admin Login</a>- <a class="item" href="student_login.php">Student Login</a>';
                        

                }
		?>
		</div>
	</div>
		<div id="content">