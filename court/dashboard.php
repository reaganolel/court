 <?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
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

   <title> Dashboard - Court Case Management System</title>    <!-- Bootstrap Core CSS -->
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
                <a class="navbar-brand" href="dashboard.php"><div id='white-it'>Court Case Management System </div></a>
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
                    
   
                        <ol class="breadcrumb">
                           <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard Overview
                            </li>
                            
                        </ol>
                    </div>
                </div>
      <!-- /.row -->
   


   <div class="row"> 
         <div class="col-lg-3 col-sm-6 col-xs-12"> 
         <a >
      <div class="main-box infographic-box colored green-bg"> 
           <i class="fa fa-envelope"></i> 
           <span class="headline">Cases</span> 
		   <?php 	
	include('serverconfig.php');
	$query="select COUNT(*) as total from cases";
	$result=mysqli_query($conn,$query);
	$data=mysqli_fetch_assoc($result);

	

?>
           <span class="value"><?php echo $data['total'];?></span> 
          </div> 
</a>
         </div> 
   <div class="col-lg-3 col-sm-6 col-xs-12"> 
          <div class="main-box infographic-box colored gray-bg"> 
           <i class="fa fa-envelope"></i> 
           <span class="headline">Pending cases</span>     		
			<?php 	
	include('serverconfig.php');
	$query1="select count(case_status) as total from cases where case_status='pending'";
	$result1=mysqli_query($conn,$query1);
	$data1=mysqli_fetch_assoc($result1);
	

?>
		   
           <span class="value"><?php echo $data1['total'];?></span> 		
          </div> 
         </div> 
         <div class="col-lg-3 col-sm-6 col-xs-12"> 
          <div class="main-box infographic-box colored emerald-bg"> 
           <i class="fa fa-envelope"></i> 
           <span class="headline">Disposed cases</span>
		   
		 
		 <?php 	
	include('serverconfig.php');
	$query2="select count(case_status) as total from cases where case_status='disposed'";
	$result2=mysqli_query($conn,$query2);
	$data2=mysqli_fetch_assoc($result2);
	

?>
		   
           <span class="value"><?php echo $data2['total'];?></span> 
		 
		 
          </div> 
         </div> 
 
<div class="col-lg-3 col-sm-6 col-xs-12"> 
         <a > 

<div class="main-box infographic-box colored red-bg"> 
           <i class="fa fa-envelope"></i> 
           <span class="headline">Closed Cases</span> 
           
		   
		   <?php 	
	include('serverconfig.php');
	$query3="select count(case_status) as total from cases where case_status='closed'";
	$result3=mysqli_query($conn,$query3);
	$data3=mysqli_fetch_assoc($result3);
	

?>
		   
           <span class="value"><?php echo $data3['total'];?></span> 
		   
          </div> 
</a>
         </div> 


 <div class="col-lg-3 col-sm-6 col-xs-12"> 
          <div class="main-box infographic-box colored purple-bg"> 
           <i class="fa fa-envelope"></i> 
           <span class="headline">Courts</span> 
           <span class="value">5</span> 
          </div> 
         </div> 

   <div class="col-lg-3 col-sm-6 col-xs-12"> 
          <div class="main-box infographic-box colored yellow-bg"> 
           <i class="fa fa-envelope"></i> 
           <span class="headline">Upcoming Hearing</span> 
           <?php 	
	include('serverconfig.php');
	$date = date("d-m-Y");
	$query5="select count(*) as total from cases where latest_Chapter_date > $date";
	$result5=mysqli_query($conn,$query5);
	$data5=mysqli_fetch_assoc($result5);
	

?>
		   
           <span class="value"><?php echo $data5['total'];?></span> 
          </div> 
         </div> 




    </div> 





</div>
            <!-- /.container-fluid -->



        </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<!-- Endy notice JavaScript-->

<script src="js/endy2.js"></script>



</body>
