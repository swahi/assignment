<?php
//signout.php
include 'connect.php';
include 'header.php';

echo '<h2>Sign out</h2>';

//check if user if signed in
if($_SESSION['signed_in'] == true)
{
	//unset all variables
	$_SESSION['user_name'] = NULL;
	$_SESSION['user_usn'] = NULL;
        $_SESSION['signed_in'] = false;

	echo 'Succesfully signed out, thank you.';
}
else
{
	echo 'You are not Logged in. <a href="index.php">Click Here</a>? to Sign in';
}

include 'footer.php';
?>