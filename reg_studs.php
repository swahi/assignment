

<html>
    <head>
        <style>body{
            font-family: georgia;
                font-size: 16px;
                color: blue;}
        </style>
    </head>
    <h3 align="center">Registering a New student</h3>
    <hr width="90%">
    <br>
    <body>
    <form name="regform" method="post" action="">
    <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">

    <tr>
      <th>USN<font color="#FF0000">*</font> </th>
      <td><input name="usn" type="text" class="textfield" placeholder="usn"/></td>
    </tr>
    <tr>
      <th>Password<font color="#FF0000">*</font></th>
      <td><input type="password" id="password" name="password"  class="textfield" placeholder="password"/></td>
    </tr>
    <tr>
      <th>Name<font color="#FF0000">*</font></th>
      <td><input name="sname" type="text" class="textfield" placeholder="name"/></td>
    </tr>
    <tr>
      <th>Admission date:<font color="#FF0000">*</font> </th>
      <td><input name="ad_date" type="text" class="textfield" placeholder="date"/></td>
    </tr>
    <tr>
      <th>Recruited status:<font color="#FF0000">*</font> </th>
      <td><select name="rec_stat"><option value="no">No</option>
              <option value="yes">Yes</option></select></td>
    </tr>
    <tr>
        <td align="center"><input type="submit" name="submit" value="Register"/></td>
      <td align="center"><input type="reset" name="reset" value="Clear" /></td>
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
	$password = clean($_POST['password']);
	$sname = clean($_POST['sname']);
        $adate = clean($_POST['ad_date']);
        $recstat = clean($_POST['rec_stat']);


	if(is_null($usn)==false) {
		$qry = "SELECT * FROM student WHERE usn='$usn'";
		$result = mysql_query($qry);
		if($result)
                {
			if(mysql_num_rows($result) > 0) {
				echo "<script> alert('USN is already in use'); </script>";
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}

	//If there are input validations, redirect back to the registration form
	if($errflag)
        {
		echo "<script> alert('Invalid inputs'); </script>";
		session_write_close();
		header("location:reg_studs.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO student(usn,spass,sname,admission_date,rec_status)VALUES('$usn','$password','$sname','$adate','$recstat')";
	$result = @mysql_query($qry);

	//Check whether the query was successful or not
	if($result) {
		echo "<script> alert('Student is added to Database'); </script>";
               header("location:reg_studs.php");
		exit();
	}else {
		echo "<script> alert('register failed'); </script>";

    }}
?>
    </body>
</html>