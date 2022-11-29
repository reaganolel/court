<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
if(isset($_POST['dd3'])&&isset($_POST['mm3'])&&isset($_POST['yyyy3'])){
	$Decision_date=$_POST['dd3']."-".$_POST['mm3']."-".$_POST['yyyy3'];
}else{
	$Decision_date='';
}
if(isset($_POST['dd4'])&&isset($_POST['mm4'])&&isset($_POST['yyyy4'])){
	$compliance_from_date=$_POST['dd4']."-".$_POST['mm4']."-".$_POST['yyyy4'];
}else{
	$compliance_from_date='';
}
if(isset($_POST['dd2'])&&isset($_POST['mm2'])&&isset($_POST['yyyy2'])){	
	$Chapter_date=$_POST['dd2']."-".$_POST['mm2']."-".$_POST['yyyy2'];		
	}else{
		$Chapter_date='';	
	}
if(!isset($_POST['favour'])){
	$_POST['favour']='';
}
if($_POST['days']==''){
	$_POST['days']=0;
}
if(!isset($_POST['department'])){
	$_POST['department']='';
}
if(!isset($_POST['appeal'])){
	$_POST['appeal']='';
}

if(isset($_POST['dd1'])&&isset($_POST['mm1'])&&isset($_POST['yyyy1'])){
	$Respondent_date=$_POST['dd1']."-".$_POST['mm1']."-".$_POST['yyyy1'];
}else{
	$Respondent_date='';
}
		
//echo "this is new case handler";
$message="";

$case_num = $_POST['case'];




include('serverconfig.php');

$query = "update cases set Officer_name='{$_POST['Officer_name']}',latest_Chapter_date='{$Chapter_date}',Liability_date='{$Respondent_date}',Other_information='{$_POST['remarks']}',case_status='{$_POST['status']}', Decision_date='{$Decision_date}',favour='{$_POST['favour']}',compliance_period={$_POST['days']},compliance_from_date='{$compliance_from_date}',compliance_against_dept='{$_POST['department']}',appeal='{$_POST['appeal']}' where case_number='{$case_num}'";


$result=mysqli_query($conn,$query);

if($result>0){
	$message="Data Successfully Inserted";
	echo '<script language="javascript" type="text/javascript"> alert("Update was successful ");</script>';
echo '<script language="javascript" type="text/javascript"> window.location="viewcases.php";</script>';
exit;
	
}
else{
	$message="There is some error with the data(Data may already be presesnt) . Not Inserted";
}
?>
