

<?php
include 'studheader.php';
// Make a MySQL Connection
include 'connect.php';
// Get all the data from the "example" table
?>

<?php
require_once 'connect.php';
echo '<form name="f1" action="" method="post">';
$query = mysql_query("select cname from company;"); // Run your query

echo "Please Select a company";echo '<select name="cname" OnChange="f1.submit()"> <option value="-1">Select</option>'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['cname'].'">'.$row['cname'].'</option>';
}
echo '</select>';// Close your drop down box
echo  '</form>';
?>
  
<?php

error_reporting(E_ERROR | E_PARSE);
$cname1=$_POST['cname'];
$result = mysql_query("SELECT cname,email_id,comp_description FROM company where cname='$cname1';") or die(mysql_error());
while($row = mysql_fetch_array($result))
  {
?>

  Company Name:
  <input name="pagename" onfocus="blur()" type="text" id="pagename" value="<?php echo $row['cname']; ?>">
  Company email:
  <input name="pagekey" onfocus="blur()" type="text" id="pagekey" value="<?php echo $row['email_id']; ?>">
  <p>About Company:</p>
  <textarea border="0" onfocus="blur()" name="pagecont" cols="120" rows="10" id="pagecont"><?php echo $row['comp_description']; ?></textarea>

<?php
  }
  include 'studfooter.php';
?>