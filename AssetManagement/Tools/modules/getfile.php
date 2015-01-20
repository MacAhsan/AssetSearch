<?php session_start(); ?>

<?php
require_once 'Excel/reader.php';



  {
  if ($_FILES["file"]["error"] > 0)
    {
  
    }
  else
    {


    

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
     							echo"Report Already Uploaded";
     						echo"<script>window.location='http://aasol.biz/AssetManagement/Tools/?page=upload_report';</script> ";
	 
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
     
	   $stored = $_FILES["file"]["name"];
	   $neww= "upload/" . $_FILES["file"]["name"];

	   $_SESSION['myurls']= $neww;

if (empty($_POST["Job_Number"])) {
     $job_number = "";
   } else {
     $job_number = $_POST["Job_Number"];
   }
   
   if (empty($_POST["Run_Time"])) {
     $run_time = "";
   } else {
     $run_time = $_POST["Run_Time"];
   }



if (empty($_POST["run_numb"])) {
     $run_numb = "";
   } else {
      $run_numb = $_POST["run_numb"];
   }


 if (empty($_POST["Tool_Number"])) {
     $tool_no = "";
   } else {
     $tool_no = $_POST["Tool_Number"];
   }
   
   if (empty($_POST["Inspectecd_By"])) {
     $inspected_by = "";
   } else {
     $inspected_by = $_POST["Inspectecd_By"];
   }
   
   
   if (empty($_POST["Date"])) {
     $date_inspected = "";
   } else {
     $date_inspected = $_POST["Date"];
   }
   
   
   if (empty($_POST["Comments"])) {
     $comments = "";
   } else {
     $comments = $_POST["Comments"];
   }
   
   
   
   
   
$username = "aasolbiz_drilco";
$password = "ahsan123";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");



           //select a database to work with
$selected = mysql_select_db("aasolbiz_drilco_inspection",$dbhandle)
  or die("Could not select examples");

// 
              // $Fname = $_POST["Fname"];
              // $assetID = $_POST["assetID"];
  // //execute the SQL query and return records
// $result = mysql_query("UPDATE `asset_logs` SET `filename`='$neww' WHERE added_on = '$Fname' ");
                       // echo $result;




$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->read($_SESSION['myurls']);


// print number of rows, columns and sheets
echo "Number of sheets: " . sizeof($data->sheets) . "\n";

for($s=0; $s <= sizeof($data->sheets); $s++)

{

echo $s;

 for ($x = 1; $x <= count($data->sheets[$s]["cells"]); $x++)
 
   { 	
		if(empty($data->sheets[$s]["cells"][$x][2]))
		{
				
			
			$com_no = "value";
			
		}
		
		else
			
			 {
			
			 $com_no = $data->sheets[$s]["cells"][$x][2]; 
				
		}
	
	if(empty($data->sheets[$s]["cells"][$x][3])){
		
		 $eqp_tpe = "value";
		
	}
	
	
	else {
		 
		  $eqp_tpe = $data->sheets[$s]["cells"][$x][3]; 
		  
		  
	}
	
    
 
  	 // echo $prd ;// meta desc
    // echo "<br></br>" ;// meta desc
    // echo $name;
//    



  //execute the SQL query and return records
$result = mysql_query("INSERT INTO `tools` (`tool_no`,`job_number`,`run_time`,`run_numb`,`component_no`, `equip_type`,`inspected_by`,`date_inspected`,`comments`,`links` ) VALUES('$tool_no','$job_number','$run_time','$run_numb','$com_no','$eqp_tpe' ,'$inspected_by','$date_inspected','$comments','$neww') ");
					   

}

}
$result1 = mysql_query("INSERT INTO `tools_count` (`tool_no`,`job_number`,`run_time`,`run_numb`,`inspected_by`,`date_inspected`,`comments`,`links` ) VALUES('$tool_no','$job_number','$run_time','$run_numb','$inspected_by','$date_inspected','$comments','$neww') ");

if($result1 == 1)
					   {
					   	echo '<h1>Success</h1>';
						
					   }
if($result == 1)
					   {
					   	echo '<h1>Success</h1>';
						
						echo"<script>window.location='http://aasol.biz/AssetManagement/Tools/?page=upload_report';</script> ";
						
					   }

else{
	
	echo '<h1>Go Back and please upload it again</h1>';
	echo '<h4>Check if file format is xls not xsls (It should be excel 97 to excel 2003 format)</h4>';
	
}













	  

	   // end the File value to database


      }
    }
  }



?>
