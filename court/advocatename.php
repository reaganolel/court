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
             
         
 <form action="advocatename.php" method="POST">
       <div class="filter-block pull-right"> 
	   Select Advocate Name:
             <div class="form-group input-group">    
                       <select class="form-control" name="advocate_name" required>

<option value="">--------</option>
						<option value="Mr. Tanko Muhammed">Mr. Tanko Muhammed</option>
						<option value="Mr. Onoghen Kelvin">Mr. Onoghen Kelvin</option>
						<option value="Mr. Francis Ochoi">Mr. Francis Ochoi</option>
               
  </select>
   
<span class="input-group-btn ">  <button type="submit" name="submit1" class="btn btn-success" type="button"> <i class="fa fa-eye fa-lg"></i> View Case</button></span>
            
  </div>
               
             
   </div> 
		
</form>
		<div styles="height:50px;"></div>
           </header> 

         
		 

		 
		 
      <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b><?php if(isset($_POST['submit1'])){echo $_POST['advocate_name'];}?></b> <br>     
<div class="table-responsive">
<center>Case Pending</center> 

<?php 	
	
	


if(isset($_POST['submit1']))
{

include('serverconfig.php');
			
	$query_pending = "select * from cases where Advocate_name = '{$_POST['advocate_name']}' and case_status = 'pending' order by case_year ASC";
			
			$result_pending = mysqli_query($conn,$query_pending);
			
			$num_of_rows_pending = mysqli_num_rows($result_pending);
			
			//echo $query_pending;
			//echo "num_of_rows_pending  ".$num_of_rows_pending;
		
	
if($num_of_rows_pending>0){	

		while($row = mysqli_fetch_array($result_pending)){
			
			$temp_array[]=$row;
		}
	
}

else{

	$msg= "No Message Found";	
 }
}
	
?>
		<table class="table table-striped table-bordered table-hover">		
			<thead>
					<tr>
                                                <th><div class="label label-success">   S.No</div></th>
                                                <th> <div class="label label-success"> Case No</div></th>
												</tr>
			</thead>	
			<tbody>		                      
   <?php
   
if(isset($_POST['submit1']))
{
		$j=0;$sno=1;
		for($j=0;$j<$num_of_rows_pending;$j++){
			
			$row = $temp_array[$j];
		
			$case_num = $row['case_number'];	
}
?>
	<tr><td><?php echo $sno; ?></td>
			<td><?php if (!empty($case_num))echo $case_num;?></td>			
		</tr>
		<?php $sno++;
		}
		?> 
								</tbody>
		</table>
		
		
		
		
		
		
		
		
		<center>Case Disposed</center> 
		<table class="table table-striped table-bordered table-hover">
			<thead>
					<tr>
                                                <th><div class="label label-success">   S.No</div></th>
                                                <th> <div class="label label-success"> Case No</div></th>
												 <th><div class="label label-success">   Favour</div></th>
                                                <th> <div class="label label-success"> Decision Date</div></th>
												</tr>
			</thead>
			<tbody>		                      
   <?php
   
if(isset($_POST['submit1']))
{
		
			$query_disposed = "select * from cases where Advocate_name = '{$_POST['advocate_name']}' and case_status = 'disposed' order by case_year ASC";
			
			$result_disposed = mysqli_query($conn,$query_disposed);
			
			$num_of_rows_disposed = mysqli_num_rows($result_disposed);
			
	
if($num_of_rows_disposed>0){	

		while($row = mysqli_fetch_array($result_disposed)){
			
			$temp_array[]=$row;
		}
	
}

else{

	$msg= "No Data Found";	
}
	$j=0;$sno=1;
		for($j=0;$j<$num_of_rows_disposed;$j++){
			
			$row = $temp_array[$j];
					$case_num = $row['case_number'];
					$favour = $row['favour'];
					$Decision=$row['Decision_date'];
	
}
?>	
		<tr><td><?php echo $sno; ?></td>
			<td><?php if (!empty($case_num))echo $case_num;?></td>
		<td><?php if (!empty($case_num))echo $favour; ?></td>
			<td><?php if (!empty($case_num))echo $Decision;?></td>
			
		</tr>
		<?php $sno++;
		}
		?>
								</tbody>
		</table>
		
		
		
		
		
		
		<center>Overall Summary</center> 
		<table style="width:60" class="table table-striped table-bordered table-hover">	
			<thead>
					<tr>                                   
		     <th><div class="label label-success"> Category</div></th>
			<th ><div class="label label-success"> Total Cases Filed</div></th>
			<th><div class="label label-success"> Total Cases Pending</div></th>
			<th><div class="label label-success"> Total Cases Disposed</div></th>
			<th><div class="label label-success">  Favoured as For</div></th>
			<th> <div class="label label-success"> Favoured as Against</div></th>
												
												</tr>

			</thead>
			<tbody>		                      
   <?php
   
if(isset($_POST['submit1']))
{
		$query1 = "select distinct case_type from cases where Advocate_name = '{$_POST['advocate_name']}'";

$result1 = mysqli_query($conn,$query1);		
		
$num_of_rows = mysqli_num_rows($result1);

	//echo $num_of_rows;	
	
if($num_of_rows>0){	

		while($row = mysqli_fetch_array($result1)){
			
			$temp_array[]=$row;
		}
		
}

else{

	$msg= "No Message Found";	
}
		
$j=0;
		for($j=0;$j<$num_of_rows;$j++){
			
			$row = $temp_array[$j];
			
			$var = $row['case_type'];
			
			$query_total_case = "select * from cases where case_type = '$var' and Advocate_name = '{$_POST['advocate_name']}'";
			//echo $query_total_case."<br>";
			$result_total_case=mysqli_query($conn,$query_total_case);
			
			$num_of_rows_total = mysqli_num_rows($result_total_case);	
			$query_pending_case = "select * from cases where case_type = '$var' and case_status='pending' and Advocate_name = '{$_POST['advocate_name']}'";
			//echo $query_pending_case."<br>";
			$query_pending_case;
			
			$result_pending_case=mysqli_query($conn,$query_pending_case);
			
			$num_of_rows_pending = mysqli_num_rows($result_pending_case);
		$query_disposed_case = "select * from cases where case_type = '$var' and case_status='disposed' and Advocate_name = '{$_POST['advocate_name']}'";
			
		//	echo $query_disposed_case."<br>";
			
			
			$result_disposed_case=mysqli_query($conn,$query_disposed_case);
			
			$num_of_rows_disposed = mysqli_num_rows($result_disposed_case);
			
			
			$query_for = "select * from cases where case_type = '$var' and favour='for' and Advocate_name = '{$_POST['advocate_name']}'";
			
			$result_for=mysqli_query($conn,$query_for);
			
			$num_of_rows_for = mysqli_num_rows($result_for);
		$query_against = "select * from cases where case_type = '$var' and favour='against' and Advocate_name = '{$_POST['advocate_name']}'";
			
	$result_against=mysqli_query($conn,$query_against);
			
			$num_of_rows_against = mysqli_num_rows($result_against);
		
		
}
?>		
		<tr>
		<td><?php echo $var;?></td>
			<td><?php if(!empty($case_num))echo $num_of_rows_total;?></td>
			<td><?php if(!empty($case_num))echo $num_of_rows_pending;?></td>
			<td><?php if(!empty($case_num))echo $num_of_rows_disposed?></td>
			<td><?php if(!empty($case_num))echo $num_of_rows_for;?></td>
			<td><?php if(!empty($case_num))echo $num_of_rows_against;?></td>		
		</tr>
		<?php }		
		if(isset($_POST['submit1']))
{
		$query_sum_total = "select * from cases where Advocate_name = '{$_POST['advocate_name']}'";
		//echo $query_sum_total;
		$result_sum_total=mysqli_query($conn,$query_sum_total);
		$num_of_rows_sum_total=mysqli_num_rows($result_sum_total);
		
		$query_sum_pending = "select * from cases where Advocate_name = '{$_POST['advocate_name']}' and case_status='pending'";
		//echo $query_sum_pending;
		$result_sum_pending=mysqli_query($conn,$query_sum_pending);
		$num_of_rows_sum_pending=mysqli_num_rows($result_sum_pending);
		
		$query_sum_disposed = "select * from cases where Advocate_name = '{$_POST['advocate_name']}' and case_status='disposed'";
		//echo $query_sum_disposed;
		$result_sum_disposed=mysqli_query($conn,$query_sum_disposed);
		$num_of_rows_sum_disposed=mysqli_num_rows($result_sum_disposed);
		
		
		$query_sum_for = "select * from cases where Advocate_name = '{$_POST['advocate_name']}' and favour='for'";
	//	echo $query_sum_for;
		$result_sum_for=mysqli_query($conn,$query_sum_for);
		$num_of_rows_sum_for=mysqli_num_rows($result_sum_for);
		
		$query_sum_against = "select * from cases where Advocate_name = '{$_POST['advocate_name']}' and favour='against'";
	//	echo $query_sum_against;
		$result_sum_against=mysqli_query($conn,$query_sum_against);
		$num_of_rows_sum_against=mysqli_num_rows($result_sum_against);
	}	
		?>
		
		<tr><td>Sum</td>
			<td><?php if(isset($_POST['submit1'])){echo $num_of_rows_sum_total;}?></td>
			<td><?php if(isset($_POST['submit1'])){echo $num_of_rows_sum_pending;} ?></td>
			<td><?php if(isset($_POST['submit1'])){echo $num_of_rows_sum_disposed;}?></td>
			<td><?php if(isset($_POST['submit1'])){echo $num_of_rows_sum_for;}?></td>
			<td><?php if(isset($_POST['submit1'])){echo $num_of_rows_sum_against;}?></td>
		</tr>
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