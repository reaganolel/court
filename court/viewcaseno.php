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
             
			 
 <form action="viewcaseno.php" method="POST">
       <div class="filter-block pull-right"> 
	   Select Case Number:
 
             <div class="form-group input-group"> 
			    <span class="input-group-btn ">
                       <select class="form-control" style="width:100px;" name = "case_type" required>
  					<option value="">Case Type</option>
                    <option value="AA">AA</option>
                    <option value="AC">AC</option>
                    <option value="AR">AR</option>
                    <option value="ARBA">ARBA</option>
                    <option value="ARBC">ARBC</option>
                    <option value="CEA">CEA</option>
                    <option value="CER">CER</option>
                    <option value="CESR">CESR</option>
                    <option value="COMA">COMA</option>
                    <option value="COMP">COMP</option>
                    <option value="COMPA">COMPA</option>
                    <option value="CONA">CONA</option>
                    <option value="CONC">CONC</option>
                    <option value="CONCR">CONCR</option>
                    <option value="CONT">CONT</option>
                    <option value="CONTR">CONTR</option>
                    <option value="CR">CR</option>
                    <option value="CRA">CRA</option>
                    <option value="CRR">CRR</option>
                    <option value="CRRE">CRRE</option>
                    <option value="CRRF">CRRF</option>
                    <option value="CRRFC">CRRFC</option>
                    <option value="CS">CS</option>
                    <option value="EP">EP</option>
                    <option value="FA">FA</option>
                    <option value="FEMA">FEMA</option>
                    <option value="ITA">ITA</option>
                    <option value="ITR">ITR</option>
                    <option value="LPA">LPA</option>
                    <option value="MA">MA</option>
                    <option value="MACE">MACE</option>
                    <option value="MACOM">MACOM</option>
                    <option value="MACTR">MACTR</option>
                    <option value="MAIT">MAIT</option>
                    <option value="MAVAT">MAVAT</option>
                    <option value="MCC">MCC</option>
                    <option value="MCOMA">MCOMA</option>
                    <option value="MCP">MCP</option>
                    <option value="MCRC">MCRC</option>
                    <option value="MCRP">MCRP</option>
                    <option value="MP">MP</option>
                    <option value="MWP">MWP</option>
                    <option value="OTA">OTA</option>
                    <option value="RP">RP</option>
                    <option value="SA">SA</option>
                    <option value="STR">STR</option>
                    <option value="TR">TR</option>
                    <option value="VATA">VATA</option>
                    <option value="WA">WA</option>
                    <option value="WP">WP</option>
                    <option value="WPS">WPS</option>
                    <option value="WTA">WTA</option>
                    <option value="WTR">WTR</option>
  				
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

         
		 
<?php 	
	
if(isset($_POST['submit1']))
{
   $case_number=$_POST['case_type']."/".$_POST['case_no']."/".$_POST['case_year'];
		$_SESSION['case_number'] = $case_number;
		
		include('serverconfig.php');
		
		$query ="select * from cases where case_number = '$case_number'";
		
		$result = mysqli_query($conn,$query);
		
		$num_of_rows = mysqli_num_rows($result);
		if($num_of_rows>0){
		//echo "data found";
			while($row = mysqli_fetch_array($result)){
				
				$temp_array[]=$row;
			}
		}
		else{
			//echo "no data found";
		}
		
		$j=0;
		for($j=0;$j<$num_of_rows;$j++){
			
			$row = $temp_array[$j];
			$Petitioner_name = $row['Petitioner_name'];
			$versus = $row['versus'];
			$advocate= $row['Advocate_name'];
			$Officer = $row['Officer_name'];
			$Chapter_from = $row['Chapter_from'];
			$latest_Chapter_date = $row['latest_Chapter_date'];
			$Liability_date = $row['Liability_date'];
			$Other_information = $row['Other_information'];
			$case_status=$row['case_status'];
			$Decision_date = $row['Decision_date'];
			$favour=$row['favour'];
			$compliance_period=$row['compliance_period'];
			$compliance_from_date=$row['compliance_from_date'];
			$compliance_against_dept=$row['compliance_against_dept'];
			$appeal=$row['appeal'];
		}
}	
?>
		 
		 
           
<div class="table-responsive">

 <div class="modal-dialog">
            <div class="modal-content">
			 <div class="modal-header">
                    
                    <center><h4 class="modal-title" id="myModalLabel">Case No</h4></center>
                </div>
			 
        <div class="modal-body">
			<form action="view_to_excel.php" method="POST">
			<div class="row">
			
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Petition Number / Case Number / Review / Appeal :</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="case_number" id="case_number" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $case_number;} ?>" required>
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Name of the petitioner:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Petitioner_name" id="versus" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $Petitioner_name;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Against:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="versus" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $versus;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Name of advocate appointed in the case:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Advocate_name" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $advocate;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Name of the officer in charge:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Officer_name" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $Officer;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Case Status:</label>
						</div>
						<div class="col-lg-10">
							<textarea name="history" rows="3" cols="40" class="form-control" readonly ><?php if(isset($_POST['submit1'])){echo $Chapter_from;} ?></textarea>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Reply Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="date" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $Liability_date;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Case Status:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="status" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $case_status;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Decision date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="date" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $Decision_date;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">In favour:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="favour" id="versus" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $favour;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Complaince Period (In Days):</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="days" id="versus" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $compliance_period;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Complaince against department:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="department" id="versus" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $compliance_against_dept;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Other Information:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="remarks" class="form-control" readonly value="<?php if(isset($_POST['submit1'])){echo $Other_information;} ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Appeal:</label>
						</div>
						<div class="col-lg-10">
							
							<input type="radio"disabled name="appeal" value="no" <?php if(isset($_POST['submit1'])){if($appeal == 'no'){echo "checked";}}?> />NO
				<input type="radio" disabled <?php if(isset($_POST['submit1'])){if($appeal == 'yes'){echo "checked";}}?> name="appeal" value="yes" />YES
							
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