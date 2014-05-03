<?php
//signout.php
include 'connect.php';
include 'header.php';

echo '<h2>Sign out</h2>';

//check if user if signed in
if($_SESSION['admin_signed_in'] == true)
{
	//unset all variables
	$_SESSION['admin_signed_in'] = NULL;
	$_SESSION['admin_user_name'] = NULL;


	echo 'Succesfully signed out, thank you.';
}
else
{
	echo 'You are not Logged in. <a href="index.php">Click Here</a>? to Sign in';
}

include 'footer.php';
?>