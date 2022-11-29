 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Endycoal">

 <title> Court Case Management System</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="styles/roboto.css" rel="stylesheet" type="text/css">
        <link href="styles/open-sans.css" rel="stylesheet" type="text/css">
        <link href="styles/libs.css" rel="stylesheet">
        <link href="styles/style.css" rel="stylesheet">
       

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
    <body>
        
        <header style="background-color: #00990;">
    <div class="container">
        <div class="row">
            <h1 class="col-sm-4 hidden-xs">
                <a href="index.php" id="HeaderLogoDesktop"><img alt="Image" src="styles/big-logo.jpg"></a>

            </h1>
            <div class="col-sm-8 hidden-xs">
                <div class="container-fluid">
                    <div class="row">
                        <a href="login.php">
                            <div class="col-sm-4 hidden-xs icon-container" "="">
                                <img alt="Admin section" src="styles/top-user.png">
                                <h2>Admin Section</h2>
                                <p class="hidden-sm">Login </p>
                            </div>
                        </a>
                        <a href="court-list.php">
                            <div class="col-sm-4  hidden-xs icon-container" "="">
                                <img alt="Find Us" src="styles/contact-icon.png">
                                <h2>Court List</h2>
                                <p class="hidden-sm">All active courts</p>
                            </div>
                        </a>
                        
                        <div class="customer-type hidden-xs">
                            <ul class="nav nav-pills">
                               
                                <li class="social-tab-links">
                                 
                                </li>
                                <li class="search-top text-right">
                                                                   </li>
                                <li id="search_on_content" class="searchForm">
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default" style="background-color: #00990;">
    <div class="container relative">
        <a class="visible-xs mobile-logo-link" href="index.php">
            <img alt="Image" src="styles" class="pull-left mobile-logo">
            <img alt="Image" src="styles/extra-small-logo.jpg" class="pull-left mobile-logo-xxs" height="25">
        </a>
            
        <div class="navbar-header visible-xs-block">
            
 <a href="">
<span class="label label-success label-circle" style="font-size:15px;"></span>
         </a>
            <a href="dashboard.php">
                <img src="styles/top-user.png">
            </a>
            <a href="court-list.php">
                <img src="styles/contact-icon.png">
            </a>
            <button type="button" class="navbar-toggle collapsed pull-right" style="background-color: #00990;" data-toggle="collapse" data-target="#main-nav-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <div class="burger-bar">_____</div>
                <span class="collapsed">MENU</span>
                <span class="open">CLOSE</span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="main-nav-menu" style="background-color: #00990;">

            <div class="mobile-options visible-xs">
                <div class="options-general">
                    <a class="option-home" href="index.php">
                         <i class="fa fa-arrow-circle-left"></i>Home Page
                    </a>
                    <div class="clear"></div>
                </div>
                <div class="option-back hidde">
                    <span class="menu-header">Back</span>
                    <i class="fa fa-minus-circle"></i>
                </div>
            </div>

            <div class="nav-pages hidden-xs"><ul id="menu-primary" class="menu"><li id="menu-item-162" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-162"><a href="index.php">Home</a>
<ul class="sub-menu">
	
</ul>
<div class="arrow"></div></li>
<li id="menu-item-561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-561"><a href="#">Court list</a>
<ul class="sub-menu">
	
	<li id="menu-item-852" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-852"><a href="court-list.php">Registered Courts</a></li>

	
</ul>
<div class="arrow"></div></li>

<li id="menu-item-196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-196"><a href="about-us.php">About Us</a>
<ul class="sub-menu">

	<li id="menu-item-1100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1100"><a href="about-us.php">About</a></li>
	
	
	
	
	
</ul>
<div class="arrow"></div></li>

</ul></div>

<div class="nav-pages visible-xs">

<ul id="menu-mobile" class="menu">
<li id="menu-item-1297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1297"><a href="court-list.php">Courts list</a>
<ul class="sub-menu">
	
	
</ul>
<div class="arrow"></div></li>
<li id="menu-item-1292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1292"><a href="login.php">Admin Section</a>
<ul class="sub-menu">
	
	<li id="menu-item-1294" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1294"><a href="login.php">Login</a></li>
	
	<li id="menu-item-1294" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1294"><a href="register.php">Registration</a></li>
	
</ul>
<div class="arrow"></div></li>
<li id="menu-item-1288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1288"><a href="#">About Us</a>
<ul class="sub-menu">
	<li id="menu-item-1290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1290"><a href="#">How it works</a></li>
	
</ul>
<div class="arrow"></div></li>
</ul></div>


            <div class="social-media visible-xs">
                
            </div>

            <a href="login.php">
                <div id="btn-business" class="btn-business hidden-xs">
                    Admin Section               </div>
            </a>

        </div>
    </div>
</nav>
 <div class="page-content">

<section class="page-home cover-image">
    <div style="background-image: url(styles/Homepeg-image-mobile-1.jpg);" class="cover-image-container"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6  col-md-5 col-lg-4 order-section" id="green-mobile-panel" style="background-color: #00990;">
                    <div id="order_panel" class="order-module roboto chosen-county">
        <h3>Search Case</h3>
        <form id="case_step01" action="schedule.php" method="POST">
<div class="form-group">
							<label class="font-16 bold">Case No:</label>
				
							<div class="container-fluid"><!-- Row 1 -->
    <div class="col-lg-4" id="userFormColumn1">
 
 
        <div class="form-group">
            <label for="casetype"></label>
            <select class="form-control" style="width:100px;" name = "case_type" required>                    
               <option value="">Type</option>
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
           
        </div>  
 
 
    </div>
    <div class="col-lg-4" id="userFormColumn2">
 
 
        <div class="form-group">
            <label for="casenumber"></label>
            <input type="number" min="0" name="case_no" style="width:100px;" required placeholder="No" class="form-control input-normal">
            
        </div>
 
         
    </div>
    <div class="col-lg-4" id="userFormColumn2">
 
        <div class="form-group">
            <label for="caseyear"></label>
            <select class="form-control" style="width:100px;" name = "case_year"  required>
							<option value="">Year</option>
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
</div>
						
					</div>


						 <div class="form-group">
 <label class="font-16 bold">Case Status:</label>
<select class="form-control" name="status" required>
                      
   
<option value="pending">Pending</option>
					<option value="disposed">Disposed</option>
					<option value="closed">Closed</option>
                    <option value="closed">Solved</option>
 

</select> 
 
</div>
  
	
<div class="form-group">
       
    
<button type="submit" name="submit1" class="btn btn-success" type="button"> <i class="fa fa-arrow-circle-right"></i> Submit</button>
      
            </div>
 <!-endy-->
        </form>
    </div>
	                <div class="order-steps">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="roboto round-bullet">
                                    <span>1</span>
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <p class="bullet-title">Cases management made easy</p>
                            </div>
 
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="roboto round-bullet">
                                    <span>2</span>
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <p class="bullet-title">Fast case tracking</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="roboto round-bullet">
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <p class="bullet-title">Receive Updates on case status</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="call-to-action col-sm-6 col-md-6 col-lg-7 title-text">
                <div style="background-image: url(styles/Homepeg-image-mobile-1.jpg);" class="cover-image-container"></div>
                 <img class="cover-image-line" src="styles/cover-image-line.png">                 <h3 class="cover-image-title roboto">
                  Court Case Management System<br>
                                    </h3>
                <p class="cover-image-subtitle">View Case Schedules. It's quick and it's easy!<br></p>
                <!--<a href="#/how sit-up">
                    <button class="btn btn-transparent">See how it works</button>
                </a>-->
            </div>
        </div>
    </div>
</section>







    <section class="striped process-desc">
        <div class="container">
            <div class="row">
                <div class="col-md-4 step">
                    <div class="image" style="background-image: url(&#39;/styles/howItWorks_1.png&#39;); background-size: contain; background-repeat: no-repeat;"><div>1</div></div>
                    <div class="text">
                        <span class="title">View Case Schedule Online</span>
                        <br>
                        View and plan schedule online in less than 10 minutes. It's simple and secure
                    </div>
                </div>

                <div class="col-md-4 step">
                    <div class="image" style="background-image: url(&#39;/styles/howItWorks_2.png&#39;); background-size: contain; background-repeat: no-repeat;"><div>2</div></div>
                    <div class="text">
                        <span class="title">Processing</span>
                        <br>
                         Cases management are automated
                    </div>
                </div>

                <div class="col-md-4 step">
                    <div class="image" style="background-image: url(&#39;/images/howItWorks_3.png&#39;);  background-size: contain; background-repeat: no-repeat;"><div>3</div></div>
                    <div class="text">
                        <span class="title">Receive Updates</span>
                        <br>
                        Receive updates on case status online
                    </div>
                </div>
            </div>
        </div>
    </section>




<section class="striped social-media-opinions-list">
    <div class="container">
        <h1>What people are saying about us</h1>
      
        <div class="row">
                            <div class="col-md-4 col-xs-12">
                    <div class="container-fluid">
                        <div class="row social-media-opinion">
                            <div class="social-media-icon col-sm-2 hidden-xs">
                                <img src="styles/top-user.png">                            </div>
                            <div class="text col-sm-9 col-sm-offset-1 col-xs-12">
                                <div class="social-arrow-div"></div>
                                <div class="comment">
                                    <span class="author">

                                       Lawyer Tuju from Kenya                                   </span>
                                    Your website is very easy to use.                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            <div class="col-md-4 col-xs-12">
                    <div class="container-fluid">
                        <div class="row social-media-opinion">
                            <div class="social-media-icon col-sm-2 hidden-xs">
                                <img src="styles/top-user.png">                            </div>
                            <div class="text col-sm-9 col-sm-offset-1 col-xs-12">
                                <div class="social-arrow-div"></div>
                                <div class="comment">
                                    <span class="author">
                                        Barr. Olel from Kenya                                  </span>
                                    Perfect service,  highly recommended.                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            <div class="col-md-4 col-xs-12">
                    <div class="container-fluid">
                        <div class="row social-media-opinion">
                            <div class="social-media-icon col-sm-2 hidden-xs">
                                <img src="styles/top-user.png">                            </div>
                            <div class="text col-sm-9 col-sm-offset-1 col-xs-12">
                                <div class="social-arrow-div"></div>
                                <div class="comment">
                                    <span class="author">
                                        Koffi Anan                               </span>
                                 Easy, efficient, helpful and extremely friendly.       Thank you                   </div>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>
    </div>
</section>



   

        
        </div>

        <footer class="" style="background-color: #00990;">
            <div class="center footer-swoosh hidden-xs hidden-sm container">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="footer-logo"></div>
                    </div>
                   
                </div>
            </div>
            <div class="container padding-top-20">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-2 text-center-small">
                                    
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 uppercase">
                                    <p class="margin-bottom-5 roboto medium-weight font-15">                        Contact          </p>
                                    <ul>
                                        
                                        <li><a href="mailto:admin@yoursite.com"> Contact Us       </a></li>
                                        
                                    </ul>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 uppercase">
                                    <p class="margin-bottom-5 roboto medium-weight font-15">                        Court   </p>
                                    <ul>
                                        
                                       
                                        
                                       <li><a href="court-list.php">       Active Court list          </a></li>

                               </ul>
                                </div>
                                
                                <div class="clearfix hidden"></div>
                                <div class="col-xs-6  col-sm-3 col-md-2 uppercase">
                                    <p class="margin-bottom-5 roboto medium-weight font-15">                        About            </p>
                                    <ul>
                                        <li><a href="about-us.php">             About Us         </a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="row visible-xs mobile-footer-icons">
                                <div class="col-xs-12 text-center">
                                 
                                </div>
                            </div>
                            <div class="row font-12 padding-top-20">
                                <div class="col-xs-12 col-sm-6 text-right text-center-xs pull-right">
                                    <a class="other-links" href="terms.php">
                                       
                                    </a>
                                    <span class="hidden-xs"></span>
                                    <a class="other-links" href="privacy-policy.php">
                                        
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 copy-right pull-right text-center-xs">
                                    &copy; Copyright  <?php echo date("Y") ?>                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container relative">
                <a href="/##" class="fa fa-arrow-circle-up scroll-top"></a>
            </div>
        </footer>
        
        <script src="styles/libs.js"></script>
        <script src="styles/script.js"></script>
                          <script src="js/endy2.js"></script>
          


             
        
   
        

</div></div></body></html>