<?php
//signin.php
include 'connect.php';
include 'header.php';

echo '<h3>Student Login</h3><br />';
echo '<hr width="30%" align="left">';

//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
       echo 'You are already signed in, you can <a href="admin_logout.php">sign out</a> if you want.';
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		/*the form hasn't been posted yet, display it
		  note that the action="" will cause the form to post to the same page it is on */
		echo '<form method="post" action="">
                       <table><tr><td width="40">
			USN:</td><td><input type="text" name="user_name" /></td></tr>
			<tr><td>Password:</td><td><input type="password" name="user_pass"></td></tr>
			<td></td><td><input type="submit" value="Sign in" /></td></tr></table>
		 </form>';
                echo '<hr width="30%" align="left">';
	}
	else
	{
		/* so, the form has been posted, we'll process the data in three steps:
			1.	Check the data
			2.	Let the user refill the wrong fields (if necessary)
			3.	Varify if the data is correct and return the correct response
		*/
		$errors = array(); /* declare the array for later use */

		if(!isset($_POST['user_name']))
		{
			$errors[] = 'The username field must not be empty.';
		}

		if(!isset($_POST['user_pass']))
		{
			$errors[] = 'The password field must not be empty.';
		}

		if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
		{
			echo 'Some or more not filled in correctly..<br /><br />';
			echo '<ul>';
			foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
			{
				echo '<li>' . $value . '</li>'; /* this generates a nice error list */
			}
			echo '</ul>';
		}
		else
		{
			//the form has been posted without errors, so save it
			//notice the use of mysql_real_escape_string, keep everything safe!
			//also notice the sha1 function which hashes the password
			$sql = "SELECT *
					FROM
						student
					WHERE
						usn = '" . mysql_real_escape_string($_POST['user_name']) . "'
					AND
						spass = '" . mysql_real_escape_string($_POST['user_pass']) . "'";

			$result = mysql_query($sql);
			if(!$result)
			{
				//something went wrong, display the error
				echo 'Something went wrong while signing in. Please try again later.';
				//echo mysql_error(); //debugging purposes, uncomment when needed
			}
			else
			{
				//the query was successfully executed, there are 2 possibilities
				//1. the query returned data, the user can be signed in
				//2. the query returned an empty result set, the credentials were wrong
				if(mysql_num_rows($result) == 0)
				{
					echo 'You have supplied a wrong user/password combination. Please try again.';
				}
				else
				{
					//set the $_SESSION['signed_in'] variable to TRUE
					$_SESSION['signed_in'] = true;

					//we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
					while($row = mysql_fetch_assoc($result))
					{
						//$_SESSION['user_id'] 	= $row['user_id'];
						$_SESSION['user_name'] 	= $row['sname'];
						$_SESSION['user_usn'] = $row['usn'];
					}
					
                                        session_write_close();
                                        header("location:student_home.php");
				}
			}
		}
	}
}

include 'footer.php';
?>