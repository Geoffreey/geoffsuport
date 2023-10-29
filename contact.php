<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="Soluciones IT">
	    <meta name="keywords" content="Seguridad electronica, soporte IT, desarrollo de software">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Soporte GeoffDeep| Contacto</title>
		<link rel="shortcut icon" href="images/favicon.png">
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<script src="https://kit.fontawesome.com/45f2bb29fa.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
		<a href="index.html" style="font-size: 30px; color: white;">Soporte GeoffDeep</a> 
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Inicio</a></li>
					
						<li class="active"><a href="contact.php">Contacto</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Datos de contacto:</h2>
						 <p style="text-align:center"><i class="fa-solid fa-street-view" style="color: #fb8d0e;"></i> 6 avenida 5-84 zona 1, Colonia la Castellana, El Tejar</p>
						 <p>Chimaltengo, Guatemala</p>
				   		 <p><i class="fa-solid fa-phone" style="color: #fb8d0e;"></i>(+502)4841-0140</p>
						 <p><i class="fa-solid fa-envelope" style="color: #fb8d0e;"></i><span style="color: white"> info@geoffdeep.pw</span></p>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contacto usuario</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>Nombre</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>Telefono</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Descripsion</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
	</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <!--<div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Inicio</a></li>
						
						<li><a href="contact.php">Contacto</a></li>
					</ul>
		   	</div>-->
		  
		   	<div class="clear"> </div>
		   </div>
	</div>
		<!--end-wrap-->
	</body>
</html>

