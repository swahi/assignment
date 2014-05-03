<html>
    <head>
        <title>Reset password</title>
        <style>
            body
            {
                font-family: georgia;
                font-size: 16px;
                color: blue;
            }
        </style>
    </head>

    <h3 align="center">Password Reset</h3>
    <hr width="90%">
    <br>
    <body>
    <form name="regform" method="post" action="">
    <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">

    <tr>
      <th>USN<font color="#FF0000">*</font> </th>
      <td><input name="usn" type="text" class="textfield" placeholder="usn"/></td>
    </tr><!--
    <tr>
      <th>Phone No<font color="#FF0000">*</font></th>
      <td><input name="phone" type="text" class="textfield" placeholder="phone"/></td>
    </tr>-->
    <tr>
        <td align="center"><br></td>
        <td align="center"><br></td></tr>
    <tr>
        <td align="center"><br></td>
        <td align="left"><input type="submit" name="submit" value="Reset Password"/>&nbsp;</td>
    </tr>
  </table>
        <br>
</form>
<?php

if(isset($_POST['submit']))
    {

	require_once('connect.php');
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}


	$usn = clean($_POST['usn']);
	//$phone = clean($_POST['phone']);
        if(empty ($usn))
         {
            echo "<script> alert('Fields cannot be left blank'); </script>";
        }
	else if(is_null($usn)==false) {
		$qry = "SELECT * FROM student WHERE usn='$usn'";
		$result = mysql_query($qry);
		if(mysql_num_rows($result) == 1)
                {
			if(mysql_num_rows($result) == 1)
                        {

                            $password1 = substr(hash('sha512',rand()),0,12);    
                            echo "<script> alert('Your new password is: $password1'); </script>";
                            $qry = "update student SET spass='".($password1)."' WHERE usn='$usn'";
                            $result = mysql_query($qry);
                        }
                        else
                        {
                            echo "<script> alert('Invalid USN'); </script>";
                        }
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
    }
?>
</body>
</html>