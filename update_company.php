<html>
    <head>
        <style>
            body{
            font-family: georgia;
                font-size: 16px;
                color: blue;}
        </style>
    </head>
    <h3 align="center">Updating Company information</h3>
     <hr width="90%">
    <body>
     <form method="post" action="" name="f1">
         <p align="center">
<?php
require_once 'connect.php';
$query = mysql_query("select cname from company;"); // Run your query

echo "Please Select a company to Update";echo '<select name="cname" OnChange="f1.submit()"> <option value="-1">Select</option>'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['cname'].'">'.$row['cname'].'</option>';
}
echo '</select>';// Close your drop down box

?></p>


<?php

error_reporting(E_ERROR | E_PARSE);

include 'connect_db.php';

$cname=$_POST['cname'];
$query="select cname,email_id,comp_description from company where cname='$cname'";
trim($query);
$query=stripcslashes($query);
$query_html=htmlspecialchars($query);
$result=mysql_query($query);
//print "<h2 align='center'>STUDENT EMAIL DETAILS</h2>";
while($row = mysql_fetch_array($result))
  {
?>
         <hr width="100%">
  Company Name
  <input name="cname" type="text" id="pagename" value="<?php echo $row['cname']; ?>">
  Company Email:
  <input name="cemail" type="text" id="pagekey" value="<?php echo $row['email_id']; ?>">
  <p>Description:</p>
  <textarea name="cdesc" cols="120" rows="12" id="pagecont"><?php echo $row['comp_description']; ?></textarea>
  <input type='Submit' name='sub' value='Update'>
  <hr width="100%">
<?php
  }
?>
</form>
<?php

if(isset($_POST['sub']))
{
 $cname=$_POST['cname'];
 $cemail=$_POST['cemail'];
 $cdesc=$_POST['cdesc'];
 echo"$cname $cemail $cdesc";
 //echo"<script>alert('$ename')</script> ";
  if($cname==''||$cdesc==''||$cemail=='')
    {
        echo "<script>
            alert('Please Fill all the details!!!');
           header('location:admin_home.php')
            </script> ";
    }
    else
        {
    include 'connect_db.php';
    $query="update company SET cname='$cname',email_id='$cemail',comp_description='$cdesc' where cname='$cname';";
    trim($query);
    $query=stripcslashes($query);
    $query_html=htmlspecialchars($query);
    $result=mysql_query($query);
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
        echo "alert('company information is successfully updated');
            header('location:admin_home.php')
            </script> ";
    }
}}
?>
</body>
</html>
