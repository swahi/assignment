
<html>
     <head>
        <style>
             table
            {
                font-family: Georgia;
            }
            th
            {
                font-size: 16px;
                color: blue;
            }
            td
            {
                font-size: 12px;
            }
            body
            {
                font-family: georgia;
                font-size: 16px;
                color: blue;
            }
        </style>
    </head>
    <body>
        <form action="<?php ?>" method="post">
        <h3 align="center">Removing a company details</h3>
        <hr width="90%">
                 <p align="center">
<?php
require_once 'connect.php';
$query = mysql_query("select cname from company;"); // Run your query

echo "Please Select a company to delete:  ";echo '<select name="cname"> <option value="-1">Select</option>'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['cname'].'">'.$row['cname'].'</option>';
}
echo '</select>';// Close your drop down box

echo '<input type="submit" value="Delete" name="submit">';
?></p>
        </form>

<?php

if(isset($_POST['submit']))
{
    $cname=$_POST['cname'];

    if($cname=='')
    {
        echo "<script>
            alert('Please select company to delete!!!');
            </script> ";
      //window.location.href='remove_stud.php'

    }
    else {
    include 'connect.php';
    $query="delete from company where cname='$cname'";
    trim($query);
    $query=stripcslashes($query);
    $query_html=htmlspecialchars($query);

    $result=mysql_query($query);
    $row=mysql_affected_rows();
    if(!$row)
    {
        echo "<script>
            alert('Please enter a valid Company!!!');
            </script> ";
    }
    else
        {
        echo "<script>";
        echo "alert('Company info is successfully removed from database');
            </script> ";
    }
}
}
?>
</body>
</html>