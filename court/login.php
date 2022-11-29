 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Endycoal">

  <title>Login</title>
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
                        <a href="dashboard.php">
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

<li id="menu-item-196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-196"><a href="#">About Us</a>
<ul class="sub-menu">

	<li id="menu-item-1100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1100"><a href="#">About</a></li>
	
</ul>
<div class="arrow"></div></li>

</ul></div>

<div class="nav-pages visible-xs">

<ul id="menu-mobile" class="menu">
<li id="menu-item-1297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1297"><a href="court-list.php">Courts list</a>
<ul class="sub-menu">
	
	
</ul>
<div class="arrow"></div></li>
<li id="menu-item-1292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1292"><a href="dashboard.php">Member Area</a>
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

            <a href="dashboard.php">
                <div id="btn-business" class="btn-business hidden-xs">
                    Member area                </div>
            </a>

        </div>
    </div>
</nav>
 <div class="page-content">


   <section class="striped"> 
    <div class="container"> 
     <div class="row"> 
     
      <div class="mainArea-first col-xs-12 col-md-7 col-lg-8"> 

 
    

  <div>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Login to your account</h3>
                            </div>
                            
                            
                            <div class="panel-body">
                               
                          
        <form class="form-signin" method="post" action="attemptlogin.php">
                
    <div class="form-group">
       <label>Username</label>
        <input type="text" class="form-control" placeholder="Username" name="username" required />
   </div>

      <div class="form-group">
     <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password" required />
    
</div>
       
<input class="btn btn-large btn-success" type="submit"  name="submit" value="Login"> 
       

</form>
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
                                <div class="col-xs-6  col-sm-3 col-md-2 uppercase">
                                    <p class="margin-bottom-5 roboto medium-weight font-15">                        FAG   </p>
                                    <ul>
                                       
                                        <li><a href="about-us.php"> How it works</a></li>
                                        
                                      
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
                                        Terms &amp; conditions
                                    </a>
                                    <span class="hidden-xs">|</span>
                                    <a class="other-links" href="privacy-policy.php">
                                        Privacy policy
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 copy-right pull-right text-center-xs">
                                    &copy; Copyright  2019                                </div>
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