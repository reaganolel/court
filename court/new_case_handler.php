<?php 	
//session_start();
		//if(!isset($_SESSION['username'])){
		//header("Location: index.php");
	//	}

		
//echo "this is new case handler";
$message="";

$case_num = $_POST['case_type']."/".$_POST['case_no']."/".$_POST['case_year'];



$Chapter_date=$_POST['dd2']."-".$_POST['mm2']."-".$_POST['yyyy2'];
$Chapter=$_POST['dd2']."-".$_POST['mm2']."-".$_POST['yyyy2']." ".$_POST['remarks'];
$Respondent_date=$_POST['dd1']."-".$_POST['mm1']."-".$_POST['yyyy1'];

include('serverconfig.php');

$query = "INSERT INTO cases VALUES ('{$_POST['case_year']}','{$_POST['case_type']}','$case_num','{$_POST['Petitioner_name']}','{$_POST['versus']}','{$_POST['Advocate_name']}','{$_POST['Officer_name']}','$Chapter','$Chapter_date','$Respondent_date','{$_POST['remarks']}','pending','','',0,'','','')";



$result=mysqli_query($conn,$query);

if($result>0){
	$message="Data Successfully Inserted";
	echo '<script language="javascript" type="text/javascript"> alert("Submission was successful ");</script>';
echo '<script language="javascript" type="text/javascript"> window.location="addcase.php";</script>';
exit;
	
}
else{
	$message="There is some error with the data(Data may already be presesnt) . Not Inserted";
}
?>
