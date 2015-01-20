<h1><?php echo "Search Tools" ?></h1>



<form name="search" method="post" action="http://aasol.biz/AssetManagement/Tools/?page=search_tools"> 
	
	 	<input type="text" name="searching"  /> 
	 	<input type="submit" name="search" value="Search" />

</form>


<?php
$username = "aasolbiz_drilco";
$password = "ahsan123";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");



           //select a database to work with
$selected = mysql_select_db("aasolbiz_drilco_inspection",$dbhandle)
  or die("Could not select examples");

if(isset($_POST['search']))

{
	
	 $t_no = $_POST["searching"];
	 
$result = mysql_query("SELECT * FROM tools_count  WHERE  tool_no = '$t_no' ");

echo " <br></br><table border='1'  CELLPADDING='2' CELLSPACING='2'  WIDTH='750'>
<tr>
<th>Date Inspected</th>
<th>Inspected By</th>
<th>Job number</th>
<th>Run Time</th>
<th>Precise/Estimated</th>
<th>Download report</th>
<th>Comments</th>

</tr>";



while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['date_inspected'] . "</td>";
echo "<td>" . $row['inspected_by'] . "</td>";
echo "<td>" . $row['job_number'] . "</td>";
echo "<td>" . $row['run_time'] . "</td>";
echo "<td>" . $row['run_numb'] . "</td>";
$link = $row['links'];
echo "<td><a href='modules/$link'>$link</a></td>";
echo "<td>" . $row['comments'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo "<br>";
$result1 = mysql_query("SELECT SUM(DISTINCT run_time)  AS Total FROM tools_count  WHERE ( tool_no = '$t_no' AND run_numb='estimated') ");
//echo $result1;
while($row = mysql_fetch_array($result1))
{
  	if($row['Total'])
  	{
  echo "Total Estimated Run Time = "." ".$row['Total'];
  echo "<br>";
  	}
 
}

$result2 = mysql_query("SELECT SUM(DISTINCT run_time)  AS Total FROM tools_count  WHERE ( tool_no = '$t_no' AND run_numb='precise') ");
//echo $result1;
while($row = mysql_fetch_array($result2))
{
  		if($row['Total'])
  	{
  echo "Total Precise Run Time = "." ".$row['Total'];
	}
}


}
?>