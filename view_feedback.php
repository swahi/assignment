<html>
    <head>
        <style>
            body{
            font-family: georgia;
                font-size: 16px;
                color: blue;}
            .d1
            {
                position: absolute;
                margin-left: 100px;
                margin-top: -20px;
}
        </style>

    </head>
    <h3 align="center">View Company Feedback</h3>
     <hr width="90%">
    <body>
     <form method="post" action="" name="f1">
         <p align="center">
<?php
require_once 'connect.php';
include'studheader.php';
$query = mysql_query("select cname from company;"); // Run your query

echo "Select company to view feedback:-";echo '<select name="cname" OnChange="f1.submit()"> <option value="-1">Select</option>'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['cname'].'">'.$row['cname'].'</option>';
}
echo '</select>';// Close your drop down box

?></p>


<?php

error_reporting(E_ERROR | E_PARSE);

include 'connect.php';


$cname=$_POST['cname'];
$query="select cid from company where cname='$cname'";
trim($query);
$query=stripcslashes($query);
$query_html=htmlspecialchars($query);
$result=mysql_query($query);
while($row1=mysql_fetch_array($result))
    {
    $cid=$row1[0];
   
}

$q="Select 1option,2option,3option,4option from comp_feedback where cid='$cid';";
$r=mysql_query($q);

//print "<h2 align='center'>STUDENT EMAIL DETAILS</h2>";
while($row=mysql_fetch_array($r))
  {
?>

         <hr width="100%">
    
         <h6>Degree of technical knowlegde in students</h6>
  <input name="1" type="text" onfocus="blur()"  value="<?php echo $row['1option']; ?>">
  <br>
  
    <h6>Degree of communication skills in students</h6>
  <input name="2" type="text" onfocus="blur()"  value="<?php echo $row['2option']; ?>">
  <br>
  <h6>Confidence level in students</h6>
 
  <input name="3" type="text" onfocus="blur()"  value="<?php echo $row['3option']; ?>">
  <br>
  <h6>How did you feel about the system in the college</h6>
  
  <input name="4" type="text" onfocus="blur()"  value="<?php echo $row['4option']; ?>">
  <br>
  <br>
  <br>
  <h6 class="d1"><input type='Submit' name='sub' value='OK'></h6>
  <hr width="100%">
<?php
  }
?>
</form>
<?php
include 'connect.php';
if(isset($_POST['sub']))
{
 header("location:disp_comp_info.php");
}
?>
</body>
</html>
