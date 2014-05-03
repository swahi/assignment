<?php
include 'studheader.php';
// Make a MySQL Connection
include 'connect.php';
// Get all the data from the "example" table
?>

<?php
echo '<form name="f1" action="" method="post">';
$query = mysql_query("select distinct rec_year from student order by rec_year;"); // Run your query

echo "Please select a year ";echo '<select name="year" OnChange="f1.submit()"> <option value="-1">Select</option>'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['rec_year'].'">'.$row['rec_year'].'</option>';
}
echo '</select>';// Close your drop down box
echo  '</form>';
?>

<?php

error_reporting(E_ERROR | E_PARSE);
$year=$_POST['year'];
//echo $year;//usn,sname,admission_date,rec_comp_name,package,rec_year
$sql="SELECT usn,sname,admission_date,rec_comp_name,package,rec_year FROM student where rec_year='$year' and rec_status='yes'";
$result = mysql_query($sql);
if(!$result)
{
	echo 'Sorry in this year No recruited students found, please try again later.';
}
else
{
	if(mysql_num_rows($result) == 0)
	{
		echo 'Oh No!! sorry this year No students recruited yet, Please select another year.';
	}
	else
	{
		//prepare the table
		echo '<table border="1">
			  <tr>
				<th>USN</th>
				<th>Student Name</th>
                                <th>Admission Year</th>
				<th>Company Name</th>
                                <th>Package</th>
				<th>Recruited Year</th>
                         </tr>';

		while($row = mysql_fetch_assoc($result))
		{
			echo '<tr>';
				echo '<td class="leftpart">';
					echo $row['usn'];
                                echo '</td>';
                                echo '<td class="leftpart">';
					echo $row["sname"];
                                echo '</td>';
                                echo '<td class="leftpart">';
					echo $row["admission_date"];
                                echo '</td>';
                                echo '<td class="leftpart">';
					echo $row["rec_comp_name"];
                                echo '</td>';
                                echo '<td class="leftpart">';
					echo $row["package"];
                                echo '</td>';
                                echo '<td class="leftpart">';
					echo $row["rec_year"];
                                echo '</td>';
                                echo '</tr>';
                }
        }
}
?>