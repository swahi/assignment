<?php
//session_start();
include 'studheader.php';
?>
<html>
    <head>
        <style>
            
        </style>
    <h2 align="center">Change Password</h2>
    <hr width="80%">
    <br><br>
    </head>
    <body onload="reset_passForm.usn.value='<?php echo $_SESSION['user_usn'];?>'">
   <form id="reset_passForm" name="reset_passForm" method="post" action="<?php ?>">
       <table width="300" border="0" align="center" cellpadding="2" cellspacing="0" class="qqq">
    <tr>
      <th>USN</th>
      <td><input name="usn" type="text" onfocus="this.blur" readonly="true"/></td>
    </tr>
    <tr>
      <th>Enter Current Password<font color="#FF0000">*</font></th>
      <td><input name="currpass" type="password" id="currpass" placeholder="current password"/></td>
    </tr>
    <tr>
      <th>New Password<font color="#FF0000">*</font></th>
      <td><input type="password" id="pwd" name="pwd" placeholder="new password"/></td>
    </tr>
    <tr>
      <th>Re-enter New Password<font color="#FF0000">*</font></th>
      <td><input name="cpassword" type="password" id="cpassword" placeholder="confirm password"/></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Update"/></td>
    </tr>
  </table>
</form>

<?php
$errflag=false;
if(isset($_POST['submit']))
{
        $usn =$_POST['usn'];
	$currpass =$_POST['currpass'];
	$pass1= $_POST['pwd'];
        $cpass=$_POST['cpassword'];
 
        if($usn==''||$pass1==''||$cpass==''||$currpass=='')//||$currpass=='')
        {
            echo "<script>
            alert('Please Fill all the details!!!');";
            //window.location.href='reset_stud_pass.php'
            echo "</script> ";
            $errflag = true;

        }
        if($name!='')
        {
            include 'connect.php';
            $sql="select * from student where usn='$usn' and PASSWORD='".($currpass)."'";
            $result=mysql_query($sql);
            $row=mysql_num_rows($result);

            echo "<script>kkkkkkkkkkkkkk+$row</script>";
            if($row!=1)
            {
                echo "<script>
                alert('Invalid Current password');";
               // window.location.href='reset_stud_pass.php'
               echo "</script> ";
                $errflag = true;
            }
            
        }
        if(strcmp($pass1, $cpass) != 0 )
            {
		echo "<script>
                alert('password Does't match!!!');";
                //window.location.href='stud_pass_reset.php'
                echo "</script>";
                $errflag = true;
	    }
        
        
        if($errflag==false)
            {
                include 'connect.php';
            //    $query="update users SET PASSWORD='$pass1' where USERNAME='$name'";
                $query="update student SET spass='".($pass1)."' WHERE usn='$usn'";
                trim($query);
                $query=stripcslashes($query);
                $query_html=htmlspecialchars($query);
                $result=mysql_query($query);
                $row=mysql_affected_rows();
                if(!$row)
                {
                    echo "<script>
                    alert('Update failed try Again!!!');
                    window.location.href='student_change_pass.php'
                    </script> ";
                }
                else
                {
                    echo "<script>";
                    echo "alert('Password is successfully updated');
                    window.location.href='add_company.php'
                    </script> ";
                }
           }
}


include 'studfooter.php';
?>
</body>
</html>