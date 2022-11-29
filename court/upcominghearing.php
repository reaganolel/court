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
             
			 
 <center><h1>Upcoming Hearings</h1></center>




		<div styles="height:50px;"></div>
           </header> 

         
		 
<?php 	
	
  $msg="";
	
		include('serverconfig.php');
		
	
$date = date("d-m-Y");
$query1 = "select * from cases where latest_Chapter_date > $date";
$result1 = mysqli_query($conn,$query1);		
		
$num_of_rows = mysqli_num_rows($result1);

		
	
if($num_of_rows>0){	

		while($row = mysqli_fetch_array($result1)){
			
			$temp_array[]=$row;
		}
		
}

else{

	$msg= "No Message Found";	
}

?>
		 
		 
           
<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
					<tr>
                                                <th><div class="label label-success">  S.No</div></th>
                                                <th> 
<div class="label label-success"> Case No</div></th>
 <th><div class="label label-success">   Date</div></th>
                                   
                                                <th><div class="label label-success">  Versus</div></th>
												
												 <th><div class="label label-success"> Advocate</div></th>
            
                                               
			</thead>
			<tbody>
			                      
   
   
    <?php
 
	include('serverconfig.php');
		
			
		$j=0;$sno=1;
		for($j=0;$j<$num_of_rows;$j++){
			
			$row = $temp_array[$j];
					$case_num = $row['case_number'];
					$date1= $row['latest_Chapter_date'];
					$versus=$row['versus'];
					$advocate = $row['Advocate_name'];
	

?>	
	
		<tr><td><?php echo $sno; ?></td>
			<td><?php if (!empty($case_num))echo $case_num;?></td>
		<td><?php if (!empty($date1))echo $date1; ?></td>
			<td><?php if (!empty($versus))echo $versus;?></td>
			<td><?php if (!empty($advocate))echo $advocate;?></td>
			
		</tr>
		<?php $sno++; } ?>
		
								</tbody>
		</table>

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