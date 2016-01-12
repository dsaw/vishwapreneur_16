<?php
	ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Registration</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
   <link rel="stylesheet" href="css/TimeCircles.css">    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/VP.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">  <!--Logo in header-->
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top navbar-bgcolor" role="banner">
        <div class="container">
            <div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="images/header.png" height="30" width="310" alt="logo"></a>
                <button type="" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.html">Home</a></li>
                    
                    <li class="dropdown" >
							
						<a class="dropdown-toggle" id="dropdownMenu"   data-toggle="dropdown" href="#"   aria-haspopup="true" aria-expanded="false"> 
									Vishwapreneur  <span class="caret"> </span> 
						</a>
						<!-- Add VP dropdown here --> 
						
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu" >	
							<li> <a href="vp13.html"> Vishwapreneur 13 </a> </li>
							<li> <a href="vp14.html"> Vishwapreneur 14 </a> </li>
							<li> <a href="vp15.html"> Vishwapreneur 15 </a> </li>
							<li> <a href="index.html#why-vp"> Why Vishwapreneur  </a> </li>
							<li> <a href="https://vishwapreneur.wordpress.com/" > Blog </a></li>
						
						</ul>
						
					</li>	
					<li><a href="internship_fair.html"> Internship Fair </a> </li>
					
					<li class="active" > <a href="registration.php"> Register </a></li>
					
					<li > <a href="faq.html"> FAQ </a> </li>
					<li> <a href="question_form.php"> Ask your question </a> </li>
					<li class="dropdown" >
							
						<a class="dropdown-toggle" id="dropdownContact"   data-toggle="dropdown" href="#"   aria-haspopup="true" aria-expanded="false"> 
									About Us  <span class="caret"> </span> 
						</a>
						<!-- Add VP dropdown here --> 
						<!-- Changing nav bar links right now-->
						<ul class="dropdown-menu" aria-labelledby="dropdownContact" >	
							<li><a href="about-us.html">About Us</a></li>
							<li> <a href="our_team.html">Our Team</a></li>
							<li><a href="contact-us.html">Contact Us</a></li>
						
						</ul>
						
					</li>	
					
					
                            
                    <!--<li><a href="faq.html">FAQ</a></li>-->
                    
					
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class=""  style="background-image: url(images/title_header.jpg); ">
		<div class="container">
			<div class="row">
				<div class="col-sm-4" style="color: #fff;" >
				<h1> <strong>Registration</strong></h1><br>
				<p> <strong> Fill your details here</strong></p>
				</div>
				
				<div class="col-sm-3 col-sm-offset-1 " style="color: #fff;" >
				 <div class="row">
				    <div class="col-sm-12">
				    	<h3> Step 1</h3>
				    	Register  at your nearest desk or Register online after which a UNIQUE ID will be sent to you by mail. 
				    </div>	
				 </div>
				 
				 
				</div>
				
				
				<div class="col-sm-4 " style="color: #fff;">
					<div class="row">
				 	<div class="col-sm-12">
				 	 <h3> Step 2</h3>
				 	 After receiving the  UNIQUE ID, fill 'THE SOCIAL NETWORK' form to generate your pass.<br>
				 	 For queries, contact +91 9765994677. Internship Fair Participants don't need to generate the pass.
				 	</div>
				 </div>
				
				</div>
			
			</div>
		
		</div>
	
	
	</section><!--/#title-->     

	<section class="">
		
        <div class="up_form container" >
        
            <div class="center">
            	
            	<div >
            	<h1> STEP 1:</h1>
            	<h3>Haven't registered yet?</h3>
		Register at your nearest desk <br> OR <br> Register now and pay online
                
                
                
                <div class="gap" > </div>
                
                
             	</div>   
                <form method="post" class="form-horizontal" action="https://www.townscript.com/e/vp16/booking">
	                <div class="form-group" style="">
						<input type="submit" class="btn btn-info" value="Register!" name="submit" >
			</div>
	        </form>           
            
            </div>
             <div class="gap" > </div>
            <div class="divider"> </div>
            <div class="center">
            	<h1> STEP 2:</h1>
            	
            
            
            
            </div>
            <font size="5" ><center>
            The Social Network
            </center></font>

            <form method="post"  class="form-horizontal" action="registration.php">                     <!--Make php for registeration-->
                
				<div class="form-group">
				
					<div class="center"> <a href="trial.php" ><u><font color='red'>Already filled details? Click here to get your pass</u></font></a> </div> <br>
					<div class=" col-xs-12 "><input type="text" class="form-control " name="id" placeholder="Your unique number" required> </div>
					<div class=" col-xs-12 "><input type="text" class="form-control" name="email" placeholder="Email ID" required></div>
					<div class="col-xs-12 "><input type="text" class="form-control" name="City" placeholder="City" required></div>
                
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-11">
						<font size="4" >
						<center>
						Enter your field of interest
						</center>
						</font>
					</div>
					
				</div>
				
				<!--<div style="height: 450px;">-->
				<!--<div style="width:50%; float:left;">-->

			<div class="row">
				<div class="col-sm-6">
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="finance" value="finance">  Finance </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="sales" value="sales">  Sales </div></div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="tech" value="tech">  Tech </div></div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="managing" value="managing">  Managing People </div></div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="agriculture" value="agriculture"> Agriculture </div></div>        
											 
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="business" value="business"> Business Development </div></div>
					 
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="content" value="content"> Content Delivery</div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="design" value="design"> Designing </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="service" value="service"> Service Sector </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"> <input type="checkbox" name="civil" value="civil"> Civil </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="research" value="research"> Research </div> </div>
					
				</div>		
				</div>
				<!--<div style="width:50%;float:right;">-->
				<div class="col-sm-6">
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="ad" value="ad"> Advertising </div></div>
					
					   
					 
					
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="robo" value="robo"> Robotics </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="tele" value="tele"> Telecom </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="poli" value="poli"> Politics </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="manu" value="manu"> Manufacturing </div>  </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="auto" value="auto">Automobile </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="tour" value="tour"> Tourism </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="aero" value="aero">Aerospace </div>  </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="design" value="uti">Utilities and Energy </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="public" value="public"> Public Sector </div> </div>
					<div class="col-sm-offset-1 col-sm-11"> <div class="checkbox"><input type="checkbox" name="air" value="air"> Airline </div> </div>
					
				</div>
				</div>
				</div>
				<div class="form-group" style="">
				     <div class="center">
					<input type="submit" class="btn btn-primary" value="Get Your Pass" name="submit" >
				     </div>	
				</div>
				
				  
				
                <br>
				

                <br>
                
			</form>
        </div>
	
	</section>
	<!--End of registration form-->



    <footer id="footer" class="black">
        <div class="container">
            <div class="row">
              <div class="col-sm-2">
					
					
					<div class="row">
					
						&copy; Vishwapreneur 2016.
					</div>
				</div>
				<!-- Add share button row to footer -> Formatting To be done
					dev			
					
				<div class="col-sm-6">
				 <div class="row">
				<img src="images/sponsors.png" class="img" alt="Sponsors" > 
				  </div>
				</div>		
						-->	
			    
			   <div class="col-sm-offset-6 col-sm-4">
			         
                    <ul class="pull-right">
					    <li><a class="btn btn-large btn-social btn-facebook" href="https://www.facebook.com/Vishwapreneur/" target="_blank"><i class="icon-facebook"></i></a> 
					    
					    <li><a class="btn btn-large btn-social btn-twitter" href="https://twitter.com/vishwapreneur" target="_blank"><i class="icon-twitter"></i></a> 
					    <li><a class="btn btn-large btn-social btn-instagram" href="https://www.instagram.com/vishwapreneur/" target="_blank"><i class="icon-instagram"></i></a>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
               
    
              
		$id = $_POST['id'];
		$email = $_POST['email'];
                $city = $_POST['City'];
                
                                
                
                $host = 'localhost';
	       $user = 'nyuvbmwh_vp16';
               $pass = 'Edcviit123';
               $db = 'nyuvbmwh_entries';
               $P_number=123;
               $tableName = 'signup';
               $link = mysqli_connect($host,$user,$pass,$db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "select P_id,P_email from Participant_Table where P_id=$id";

if ($stmt = mysqli_prepare($link, $query)) {

    /* execute statement */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $P_id, $P_email);

    /* fetch values */
    while (mysqli_stmt_fetch($stmt)) {
        
    }
    
    
    /* close statement */
    mysqli_stmt_close($stmt);
}

/* close connection */
mysqli_close($link);
	  if($email==$P_email && $id==$P_id)
        {
        if( isset( $_POST['finance'] ) ) 
        {
         $finance = 'YES';
    }
    else {
         $finance = 'NO';
    }
    
if( isset( $_POST['sales'] ) ) 
        {
         $sales = 'YES';
    }
    else {
         $sales = 'NO';
    }

if( isset( $_POST['tech'] ) ) 
        {
         $tech = 'YES';
    }
    else {
         $tech = 'NO';
    }

if( isset( $_POST['managing'] ) ) 
        {
         $managing = 'YES';
    }
    else {
         $managing = 'NO';
    }
if( isset( $_POST['agriculture'] ) ) 
        {
         $agriculture = 'YES';
    }
    else {
         $agriculture = 'NO';
    }
if( isset( $_POST['business'] ) ) 
        {
         $business = 'YES';
    }
    else {
         $business = 'NO';
    }
if( isset( $_POST['content'] ) ) 
        {
         $content = 'YES';
    }
    else {
         $content = 'NO';
    }
if( isset( $_POST['ad'] ) ) 
        {
         $ad = 'YES';
    }
    else {
         $ad = 'NO';
    }
if( isset( $_POST['design'] ) ) 
        {
         $design = 'YES';
    }
    else {
         $design = 'NO';
    }
if( isset( $_POST['service'] ) ) 
        {
         $service = 'YES';
    }
    else {
         $service = 'NO';
    }
if( isset( $_POST['civil'] ) ) 
        {
         $civil = 'YES';
    }
    else {
         $civil = 'NO';
    }
if( isset( $_POST['research'] ) ) 
        {
         $research = 'YES';
    }
    else {
         $research = 'NO';
    }
if( isset( $_POST['robo'] ) ) 
        {
         $robo = 'YES';
    }
    else {
         $robo = 'NO';
    }
if( isset( $_POST['tele'] ) ) 
        {
         $tele = 'YES';
    }
    else {
         $tele = 'NO';
    }
if( isset( $_POST['poli'] ) ) 
        {
         $poli = 'YES';
    }
    else {
         $poli = 'NO';
    }
if( isset( $_POST['manu'] ) ) 
        {
         $manu = 'YES';
    }
    else {
         $manu = 'NO';
    }
if( isset( $_POST['auto'] ) ) 
        {
         $auto = 'YES';
    }
    else {
         $auto = 'NO';
    }
if( isset( $_POST['tour'] ) ) 
        {
         $tour = 'YES';
    }
    else {
         $tour = 'NO';
    }
if( isset( $_POST['aero'] ) ) 
        {
         $aero = 'YES';
    }
    else {
         $aero = 'NO';
    }
if( isset( $_POST['uti'] ) ) 
        {
         $uti = 'YES';
    }
    else {
         $uti = 'NO';
    }
if( isset( $_POST['public'] ) ) 
        {
         $public = 'YES';
    }
    else {
         $public = 'NO';
    }
if( isset( $_POST['air'] ) ) 
        {
         $air = 'YES';
    }
    else {
         $air = 'NO';
    }
        $con = mysqli_connect($host, $user, $pass, $db) or die("Database Connection Failed" . mysqli_error($con));
	$query = "insert into signup values ('$id',  '$email','$city','$finance','$sales','$tech','$managing','$agriculture','$business','$content','$ad','$design','$service','$civil','$research','$robo','$tele','$poli','$manu','$auto','$tour','$aero','$uti','$public','$air')";
	mysqli_query($con, $query) or die("You have already filled the form go to download your pass" ); 
        
	echo "<script>
        window.location.href='trial.php';
        </script>";
	
		
        } 
else
{
echo "<script>
alert('The unique key does not match the mentioned email id.');
window.location.href='registration.php';
</script>";
}
	}
           

?>