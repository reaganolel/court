 <?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
		
		if(isset($_POST['submit1'])){
		$case_num = $_POST['case_type']."/".$_POST['case_no']."/".$_POST['case_year'];
		
	include('serverconfig.php');
	$query="select * from cases where case_number='{$case_num}'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
if(!$num>0){
	echo "<script>alert('Case Not Found!!');window.location='editcase.php';</script>";
}
}
?>
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Endycoal">

   <title> Case Management - Court Case Management System</title>    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
  <link href="css/endy-dashboard.css" rel="stylesheet">

    <link href="css/endy2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<style>

.modal-dialog {
    width: 900px; !important
	}
</style>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #00990;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
          <a class="navbar-brand" href="dashboard.php"><div id='white-it'>Court Proceedings Documentation System </div></a>
            </div>
           
             <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              
                

           <li class="dropdownx">
                    <a href="addcase.php"><span class="glyphicon glyphicon-plus" style="font-size:18px;"></span>Add New Case</a>
                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #00990;">

                <ul class="nav navbar-nav side-nav" style="background-color: #212121;">


                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
   

              
     
  
       <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#client"><i class="fa fa-fw fa-user"></i> View Cases <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="client" class="collapse">
                           
<li>
<a style="color:#FFFFFF;" href="viewcaseyear.php">Year</a>
                            </li>
<li>
<a style="color:#FFFFFF;" href="viewcaseno.php">Case Number</a>
                            </li>
<li>
<a style="color:#FFFFFF;" href="advocatename.php">Advocate Name</a>
                            </li>
							
							 <li>
                                <a style="color:#FFFFFF;" href="upcominghearing.php" style="color:#FF0000; ">Upcoming Hearing</a>
                            </li>
                            <li>
                           <a  style="color:#FFFFFF;" href="allcases.php" >All Cases</a>
                            </li>
                          

                        </ul>
                    </li>
          
 
<li>


<a href="editcase.php"><i class="fa fa-fw fa-list"></i><span> Update Cases</span></a>

</li>

 
                          
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>

</ul>
 </div>
            <!-- /.navbar-collapse -->
        </nav>

 <div id="page-wrapper">

            <div class="container-fluid">


                <!-- Page Heading -->
                

<div class="row"> 
         <div class="col-lg-12"> 
          <div class="main-box clearfix"> 
           <header class="main-box-header clearfix"> 
             
			 
 <form action="editcase.php" method="POST">
       <div class="filter-block pull-right"> 
	   Select Case Number:
 
             <div class="form-group input-group"> 
			    <span class="input-group-btn ">
                       <select class="form-control" style="width:100px;" name = "case_type" required>
					   <option value="AA">Pettie crime</option>
                    <option value="AC">Rape case</option>
                    <option value="AR">Murder</option>
                    <option value="ARBA">Defilement</option>
                    <option value="ARBC">Harrasment</option>
                    <option value="CEA">Car jackings</option>
                    <option value="CER">Violence</option>
                    <option value="CESR">Robbery</option>
                    <option value="COMA">Robbery with violence</option>
                    <option value="COMP">Smuggling</option>
                    <option value="COMPA">Piracy</option>
                    <option value="CONA">Trafficking</option>
                    <option value="CONC">False accusation</option>
                    <option value="CONCR">Land cases</option>
  				
  			</select>
  </span>
  <input class="form-control" style="width:100px;" type="number" name="case_no" placeholder="Case No" required>
   
  
  <select class="form-control" style="width:100px;" name = "case_year"  required>
							<option value="">Case Year</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2030">2030</option>
							<option value="2031">2031</option>
							<option value="2032">2032</option>
							<option value="2033">2033</option>
							<option value="2034">2034</option>
							<option value="2035">2035</option>
							<option value="2036">2036</option>
							<option value="2037">2037</option>
							</select>

   
<span class="input-group-btn ">  <button type="submit" name="submit1" class="btn btn-success" type="button"> <i class="fa fa-eye fa-lg"></i> View Case</button></span>
            
  </div>
               
             
   </div> 
		
</form>




		<div styles="height:50px;"></div>
           </header> 

         
		 

		 
           
<div class="table-responsive">

 <div class="modal-dialog">
            <div class="modal-content">
			 <div class="modal-header">
                    
                    <center><h1>Update Case</h1></center>
                </div>
			 
        <div class="modal-body">
			<form action="edit_case_handler.php" method="POST">
			<div class="row">
			
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Petition Number / Case Number / Review / Appeal :</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="case" id="case_number" class="form-control"  value="<?php if(isset($_POST['submit1'])){echo $case_num;} ?>" required>
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Name of the petitioner:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Petitioner_name" id="versus" class="form-control"  value="<?php if(isset($_POST['submit1'])){echo $row['Petitioner_name'];} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Against:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="versus" class="form-control"  value="<?php if(isset($_POST['submit1'])){echo $row['versus'];} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Name of advocate appointed in the case:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Advocate_name" class="form-control"  value="<?php if(isset($_POST['submit1'])){echo $row['Advocate_name'];} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Name of the officer in charge:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Officer_name" class="form-control"  value="<?php if(isset($_POST['submit1'])){echo $row['Officer_name'];} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Case Content:</label>
						</div>
						<div class="col-lg-10">
							<textarea name="history" rows="3" cols="40" class="form-control"  ><?php if(isset($_POST['submit1'])){echo $row['Chapter_from'];} ?></textarea>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Add next date:</label>
						</div>
						<div class="col-lg-10">
						<?php 
						if(isset($_POST['submit1'])){
						$chap_date = $row['latest_Chapter_date'];					
								$arrc=explode('-',$chap_date);						
						}
						  ?>
							<select  name="dd2" id="dd2" required>
							<option value="<?php if(isset($_POST['submit1'])){echo "$arrc[0]";} ?>"><?php if(isset($_POST['submit1'])){echo "$arrc[0]"; }?></option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							
						</select>
						
						<select  name="mm2" id="mm2"required >
						<option value="<?php if(isset($_POST['submit1'])){echo "$arrc[1]";} ?>"><?php if(isset($_POST['submit1'])){echo "$arrc[1]"; }?></option>
							<option value="01">January</option>
							<option value="02">Februrary</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option value="05">May</option>
							<option value="06">June</option>
							<option value="07">July</option>
							<option value="08">August</option>
							<option value="09">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
						
						<select  name="yyyy2" id="yyyy2" required>
						<option value="<?php if(isset($_POST['submit1'])){echo "$arrc[2]";} ?>"><?php if(isset($_POST['submit1'])){echo "$arrc[2]"; }?></option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2030">2030</option>
							<option value="2031">2031</option>
							<option value="2032">2032</option>
							<option value="2033">2033</option>
							<option value="2034">2034</option>
							<option value="2035">2035</option>
							<option value="2036">2036</option>
							<option value="2037">2037</option>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Reply Date:</label>
						</div>
						<div class="col-lg-10">
						
						<?php 
						if(isset($_POST['submit1'])){
						$javab_date = $row['Liability_date'];					
								$arr=explode('-',$javab_date);						
						}
						  ?>
						
							<select  name="dd1" id="dd1" required>
						<option value="<?php if(isset($_POST['submit1'])){echo "$arr[0]";} ?>"><?php if(isset($_POST['submit1'])){echo "$arr[0]"; }?></option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
					&nbsp;&nbsp;
						
							<select  name="mm1" id="mm1" required>
						<option value="<?php if(isset($_POST['submit1'])){ echo "$arr[1]";} ?>"><?php if(isset($_POST['submit1'])){echo "$arr[1]";} ?></option>
						<option value="01">January</option>
						<option value="02">Februrary</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>&nbsp;&nbsp;
						
						<select  name="yyyy1" id="yyyy1" required>
						<option value="<?php if(isset($_POST['submit1'])){echo "$arr[2]";} ?>"><?php if(isset($_POST['submit1'])){echo "$arr[2]";} ?></option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2030">2030</option>
						<option value="2031">2031</option>
						<option value="2032">2032</option>
						<option value="2033">2033</option>
						<option value="2034">2034</option>
						<option value="2035">2035</option>
						<option value="2036">2036</option>
						<option value="2037">2037</option>
						</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Case status:</label>
						</div>
						<div class="col-lg-10">
						
							<select name="status" onChange="alterstatus()" id="status" required>
							<option value="<?php if(isset($_POST['submit1'])){echo $row['case_status'];} ?>"><?php if(isset($_POST['submit1'])){echo $row['case_status'];}?></option>	
					<option value="pending">Pending</option>
					<option value="disposed">Disposed</option>
					<option value="closed">Closed</option>
					</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">In favour:</label>
						</div>
						<div class="col-lg-10">
							
							<select id="favour" name="favour">
				<option value="<?php if(isset($_POST['submit1'])){echo $row['favour'];} ?>"><?php if(isset($_POST['submit1'])){echo $row['favour'];}?></option>
				<option value="for">for</option>
				<option value="against">against</option>
							</select>
						</div>
					</div>
					
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Other Information:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="remarks" class="form-control"  value="<?php if(isset($_POST['submit1'])){echo $row['Other_information'];} ?>" required>
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Compliance Period:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="days" class="form-control"  value="<?php if(isset($_POST['submit1'])){echo $row['compliance_period'];} ?>" required>
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Appeal:</label>
						</div>
						<div class="col-lg-10">
							
							<input type="radio" name="appeal" value="no" <?php if(isset($_POST['submit1'])){if($row['appeal'] == 'no'){echo "checked";}}?> />NO
				<input type="radio" <?php if(isset($_POST['submit1'])){if($row['appeal'] == 'yes'){echo "checked";}}?> name="appeal" value="yes" />YES
							
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"></label>
						</div>
						<div class="col-lg-10">
							
							<button type="submit" class="btn btn-primary" name="btn-addcase"><span class="glyphicon glyphicon-money"></span> Update Case</a>
							
						</div>
					</div>
					
					

</form>
</div>
</div>
</div>


	</div>
 </div>
</div>
</div>

</div>
</div>
</div>
	

</div>
  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/endy.js"></script>

</body>
</html> 