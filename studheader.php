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
		<a class="item" href="retrive_questions.php">Take Quiz</a> -
                <a class="item" href="disp_comp_info.php">View Company Info</a> -
                <a class="item" href="view_recruited_students.php">View recruited students</a> -
                <a class="item" href="view_feedback.php">View Feedback</a>
                <a class="item" href="student_change_pass.php">change password</a>
                <div id="userbar">
		<?php
		if($_SESSION['signed_in'])
		{
                    echo 'Hello <b>' . htmlentities($_SESSION['user_name']) . '</b>. Not you? <a class="item" href="stud_logout.php">Sign out</a>';
		}
		
                //echo '<a class="item" href="stud_signout.php">Sign out</a>';
		//{
		//	echo '<a class="item" href="Webtechboard_signin.php">Sign in</a> or <a class="item" href="Webtechboard_signup.php">Create new account</a>';
		//}
		?>
		</div>
	</div>
		<div id="content">