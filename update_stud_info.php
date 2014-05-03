<html>
    <head>
        <style>
            body{
            font-family: georgia;
                font-size: 16px;
                color: blue;}
        </style>
    </head>
    <h3 align="center">Updating student information</h3>
    <hr width="90%">
    <body>
     <form method="post" action="" name="f1">
         <p align="center">
<?php
require_once 'connect.php';
$query = mysql_query("select usn from student;"); // Run your query

echo "Please Select a USN to Update";echo '<select name="usn" OnChange="f1.submit()"> <option value="-1">Select</option>'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['usn'].'">'.$row['usn'].'</option>';
}
echo '</select>';// Close your drop down box

?></p>
<?php

error_reporting(E_ERROR | E_PARSE);

include 'connect.php';

$usn=$_POST['usn'];
$query="select usn,sname,rec_status,rec_comp_name,package,rec_year from student where usn='$usn'";
trim($query);
$query=stripcslashes($query);
$query_html=htmlspecialchars($query);
$result=mysql_query($query);
//print "<h2 align='center'>STUDENT EMAIL DETAILS</h2>";
while($row = mysql_fetch_array($result))
  {
?>
         <hr width="60%">
 
   USN:
  <input name="usn1" type="text" id="pagename" value="<?php echo $row['usn']; ?>"><br>
  Recruited status:
  <input name="recstat" type="text" id="pagekey" value="<?php echo $row['rec_status']; ?>"><br>
  Company Name:
  <input name="cname" type="text" id="pagekey" value="<?php echo $row['rec_comp_name']; ?>"><br>
  Package:
  <input name="pkg" type="text" id="pagekey" value="<?php echo $row['package']; ?>"><br>
  Recruited year:
  <input name="recyear" type="text" id="pagekey" value="<?php echo $row['rec_year']; ?>"><br>
  <input type='Submit' name='sub' value='Update'>
  <hr width="60%">
<?php
  }
?>
</form>
<?php

if(isset($_POST['sub']))
{
 $usn=$_POST['usn1'];
 $recstat=$_POST['recstat'];
 $cname=$_POST['cname'];
 $pkg=$_POST['pkg'];
 $recyear=$_POST['recyear'];
 //echo"<script>alert('$usn')</script> ";

 //echo $usn." ".$pkg." ".$recyear." ".$recstat." ".$cname;

 if($cname==''||$recstat==''||$pkg==''||$recyear=='')
    {
        echo "<script>
            alert('Please Fill all the details!!!');
           header('location:admin_home.php')
            </script> ";
    }
    else
        {
    include 'connect.php';
    
    $query="update student SET rec_status='$recstat',rec_comp_name='$cname',package='$pkg',rec_year='$recyear' where usn='$usn';";
   //$query="updatge student SET rec_status='$recstat where usn="
    trim($query);
    $query=stripcslashes($query);
    $query_html=htmlspecialchars($query);
    $result=mysql_query($query);
    //echo 'hello';
    if(!$result)
        echo mysql_error();
    $row=mysql_affected_rows();
    if(!$row)
    {
        echo "<script>
            alert('Update failed try Again!!!');
            header('location:admin_home.php')
            </script> ";
    }
    else
        {
        echo "<script>";
        echo "alert('Student information is successfully updated');
            header('location:admin_home.php')
            </script> ";
    }
}}
?>
</body>
</html>
