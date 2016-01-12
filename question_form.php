<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vishwapreneur">
    <meta name="author" content="Entrepreneurship Development Cell">
    <title>Questions</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/VP.ico"
   <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <!--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">-->
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
					
					<li class="dropdown" > <a href="registration.php"> Register </a></li>
					<li> <a href="faq.html"> FAQ </a> </li>
					<li> <a href="question_form.php" class="active"> Ask your question </a> </li>
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
    
    
    <section id="title" class=""  style="background-image: url(images/title_header.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" style="color: #fff;">
                    <h1><strong>Speak Out</strong></h1>
                     <h4> Post your questions for the Vishwapreneur Guests, Here </h4>
                    
                </div>
               
            </div>
        </div>
    </section><!--/#title-->   
    
    
    
<section class="container">

<!--style="height:700px"-->

<div class="row">
<!--style="height:250px; width:50%; padding: 20px; float:left;"-->

<div class="download_pass col-sm-offset-2 col-sm-8">

<h2><center><strong>Ask your question here</strong></center></h2>

            <form  class="form-horizontal" style="margin: 0 auto;
    text-align: center;" method="post" action="question_form.php">
    		<div class="form-group">
                            <input type="text"  class="form-control" name="id" placeholder="Your unique number" required><br>
                            <input type="text"  class="form-control" name="email" placeholder="Your Email ID" required><br>
			  <textarea rows="4"  class="form-control" name="question"  placeholder="Go on, Ask!" required> 
			   </textarea> <br>.
                	   <input type="submit" class=" btn btn-primary" value="Submit" name="submit" >
                </div>
             </form>



</div>
</div>

<div class="row">

<!--style="height:250px; width:50%; padding: 20px; float:right;">-->
<div class="col-sm-offset-2 col-sm-8">



<?php
	if(isset($_POST['submit']))
	{
               
    
              
		$id = $_POST['id'];
		$email = $_POST['email'];
                $question = $_POST['question'];
                            
               
                
                
               $host = 'localhost';
	       $user = 'nyuvbmwh_vp16';
               $pass = 'Edcviit123';
               $db = 'nyuvbmwh_entries';
              
               $tableName = 'question';
               $link = mysqli_connect($host,$user,$pass,$db);

	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	// check if participant exists  firsts
	// prevent SQL injection 
	$email = mysqli_real_escape_string( $link , $email );

	
	
	$query = "select P_name from Participant_Table,signup where signup.email='$email' and signup.id=$id";
	
	$results = mysqli_query($link, $query) or die ("Selection error");
	
	if(mysqli_num_rows($results)>0)
	{
		while($row = mysqli_fetch_array($results))
		{
			// Now insert the question into table using the name
			// <--------->
		        
		       // Escape string to make it valid for use in SQL statement 
		       		      
		       $question = mysqli_real_escape_string( $link , $question );  
		               
		       $insertQuery = "insert into $tableName values( $id , '$email', '".$row['P_name']."', '$question') ";
		       
		       $results = mysqli_query( $link , $insertQuery ) or die("<div class='text-error'>Error description:".mysqli_error($link )."</div>");
		       
		       
		       
		       if(mysqli_affected_rows($link)==1)
		       {
		       
		         // success !
			  echo "<div  style='  ' >   
		               <div class='alert alert-success' role='alert'>
		               	  Your question has been saved! Thank you, ".$row['P_name']."
		               </div>
		      	      </div>";
		       }
		}
	
	}
	else
	
	{
	                    echo "<div  style=' ' >   
	              		 <div class='alert alert-danger' role='alert'>
	               		  Incorrect Id and e-mail <br>
	               			  Please re-enter your details.
	              		 </div> ";         
	
	}
	
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


</div>


</section>

    
    
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
				</div>-->
				
                <div class="col-sm-offset-6 col-sm-4">
                    <ul class="pull-right">
						 <li><a class="btn btn-social btn-facebook" href="https://www.facebook.com/Vishwapreneur/" target="_blank"><i class="icon-facebook"></i></a> 
					    
					    <li><a class="btn btn-social btn-twitter" href="https://twitter.com/vishwapreneur" target="_blank"><i class="icon-twitter"></i></a> 
					   <li><a class="btn btn-social btn-instagram" href="https://www.instagram.com/vishwapreneur/" target="_blank"><i class="icon-instagram"></i></a>
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