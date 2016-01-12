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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
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
						
						</ul>
						
					</li>	
					<li><a href="internship_fair.html"> Internship Fair </a> </li>
					
                   <li> <a href="our_team.html">Our Team</a></li>         
                    <!--<li><a href="faq.html">FAQ</a></li>-->
                    <li><a href="contact-us.html">Contact Us</a></li>
					<li> <a href="https://vishwapreneur.wordpress.com/" > Blog </a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

   <section id="title" class=""  style="background-image: url(images/title_header.jpg); ">
		<div class="container">
			<div class="row">
				<div class="col-sm-6" style="color: #fff;" >
				<h1> <strong>Your Pass</strong></h1><br>
				<p> <strong> Download your pass here</strong></p>
				</div>
				<div class="col-sm-6 ">
					<ul class="breadcrumb pull-right">
					 <li href="index.html"> Home </li>
					 <li class="active">Pass</li>
				</div>
			
			</div>
		
		</div>
	
	
	</section><!--/#title-->  


<div style="height:700px">

<div style="height:350px; width:50%; float:left;">

<div class="download_pass">

<h2><center>Fill your details here</center></h2>

            <form style="margin: 0 auto;
    text-align: center;" method="post" action="trial.php">
                            <input type="text" name="id" placeholder="Your unique number" required><br>
                            <input type="text" name="email" placeholder="Your Email ID" required><br>
		
                <input type="submit" value="Download" name="submit" >
                
             </form>
</div>


</div>

<div style="height:700px; width:50%; float:right;">


<?php
	if(isset($_POST['submit']))
	{
               
    
              
		$id = $_POST['id'];
		$email = $_POST['email'];
                
                                
                
               $host = 'localhost';
	       $user = 'nyuvbmwh_vp16';
               $pass = 'Edcviit123';
               $db = 'nyuvbmwh_entries';
              
               $tableName = 'signup';
               $link = mysqli_connect($host,$user,$pass,$db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "select * from Participant_Table,signup where signup.email='$email' and signup.id=Participant_Table.P_id";
$results = mysqli_query($link, $query) or die ("Selection error");

   if(mysqli_num_rows($results)>0)
{
while($row = mysqli_fetch_array($results))
{
echo "<h1>";
echo "Your id: ";
echo $row['P_id'];
echo "<br/>";
echo "Your name: ";
echo $row['P_name'];
echo "<br/>";
echo "Your college: ";
echo $row['P_college'];
echo "<br/>";
echo "Your year: ";
echo $row['P_year'];
echo "<br/>";
echo "</h1>";
}
}else{
                    echo "<script>
alert('Please enter your correct id and email.');

</script>";              }

if ($stmt = mysqli_prepare($link, $query)) {

    /* execute statement */
    mysqli_stmt_execute($stmt);

    /* fetch values */
    while (mysqli_stmt_fetch($stmt)) {
    

        
    }
    
    	
    	
    /* close statement */
    mysqli_stmt_close($stmt);
}

/* close connection */
mysqli_close($link);


	

	  
	}
           

?>




</div>


<div style="height:350px; width:50%; float:left;">

<div class="instruction"">

<h4 align="justify" >
<strong>Instructions for VP16</strong><br>

1. Carry a soft copy or a hard copy of this pass along with your registration receipt.<br><br>
2. Only after showing this pass will the participant get entry for the event, merchandise and resource kit. <br><br>
3. Carry your identity proof on the day of the event. <br><br>
4. Participants are expected to report by 8-30am on 9th and 10th January 2016.<br>

</h4>
</div>


</div>

</div>










    <footer id="footer" class="black">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
					
					
					<div class="row">
					
						&copy; Vishwapreneur 2016.
					</div>
				</div>
				<!-- Add share button row to footer -> Formatting To be done
					dev			-->
			   <div class="col-sm-6">
			         
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




