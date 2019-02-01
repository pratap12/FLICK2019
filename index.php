<?php
session_start();

   
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to HBTU sports meet</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster|Righteous|Indie+Flower|Courgette" rel="stylesheet">
</head>
<style>


/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email] , input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
 
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 3px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

</style>	


<body style="background-image: url(https://media.giphy.com/media/TxVVB6PfWMjE4/giphy.gif);">
  
  		<!--<div id="snackbar">Registrations are closed.</div>-->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
	<div class="container-fluid">
	<div class="navbar-header">

	<a class="navbar-brand " href="index.php" style="padding:10px! important;">
	<!-- Change url when upload the website -->
	<p style="height:100%;font-family: 'Baloo Thambi';font-size:45px;padding:8px 0px 0px 0px;color: red;">FLICK'19</p></a>


	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
	</div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav navbar-right navLink">
	<li><a href="index.php"><b style="color: white;">HOME</b></a><li>
		<li><a href="events.php"><b style="color: white;">EVENTS</b></a> </li>
	
		<li><a href="schedule.php"><b style="color: white;">SCHEDULE</b></a></li>
	<li><a href="gallery.php"><b style="color: white;">GALLERY</b></a></li>
		<li><a href="contact.php"><b style="color: white;">CONTACT US</b></a></li>
</ul>
</div>
	</div>
</nav>

	
<br><br><br>
  <div class="row">
  	<div class="col-sm-6">
  <a onclick="document.getElementById('id02').style.display='block'" id="log" ><button class="btn btn-danger" style="border-width: 4px;border-color: red;color: white;border-radius: 50%">LOGIN</button></a></div>
  
  	<div class="col-sm-6">
  		<div align="right"><a onclick="document.getElementById('id01').style.display='block'" id="sign"><button class="btn btn-danger" style="border-width: 4px;border-color: red;color: white;border-radius: 50%">SIGNUP</button></a></div>
  		<div align="right" hidden="" id="out"><button class="btn btn-danger" style="border-width: 4px;border-color: red;color: white;border-radius: 50%;"><a style="color: white;" href="logout.php" >Log out</a></div>
  	</div>
  </div> 
	
	

  <center>< <h1 style="font-size: 6vw;color: white;font-family: 'Baloo Thambi';-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" onselectstart = "return false" >HBTU KANPUR</h1>
  	 <h2 style="color: white;font-family: 'Lobster';-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" onselectstart="return false">PRESENTS</h2>
  		<h2 style="font-size: 4.3vw;color: red;font-family: 'Baloo Thambi';-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" onselectstart ="return false ">FLICK 2019</h2>
  		<h2 style="color: white;font-family: 'Lobster';-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" onselectstart = "return false">1 MAR - 3 MAR</h2>
  	</center>
  	<br><br>
  <a href="events.php">	<center><button class="btn btn-link" style="border-width: 4px;border-color: white;color: white;font-family: 'Righteous'"><h3>REGISTER FOR EVENTS</h3></button></center></a><br><br><br>
  
   <hr>
   <center><h1 style="font-family: 'Baloo Thambi';font-size: 4vw;color: red;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"> FLICK HBTU 2019</h1></center>
   <hr>
   <center>
   	<h3 style="color: white;font-family: Courgette;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"><span style="color: red;">FLICK</span> is the annual sport meet of HBTU Kanpur . It is one of the most</h3>
   	<h3 style="color: white;font-family: Courgette;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">popular event in HBTU . Students from various college come and participate</h3>
   	<h3 style="color: white;font-family: Courgette;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">FLICK helps the sports person of various college to compete with each other.</h3>
   </center><br><br>
   <img src="1.png" width="100%" height="400vw">
<br><br><br>
	<div class="clearfix" style="background-image: url(7.jpg);">
	    <div class="text-center center">
	    <div class="page-footer info-color center-on-small-only"  data-aos="zoom-in" data-aos-duration="1000">
	<div class="container-fluid">
		<div class="row text-center">
			<p class="footerLinks">
			    <a href="index.php" style="color: white;">Home</a> |
			    <a href="events.php" style="color: white;">Events</a> |
					<a href="leagues.php" style="color: white;">Schedule</a> |
			    <a target="_blank" href="" style="color: white;">Gallery</a> |
			    <a href="contact.php" style="color: white;">Contact Us</a>
			 </p>
		</div>

		<div class="row text-center">
			<h4 class="footerLinks" style="color: white;">For any query and more detail, please contact here <a href="contactus.php" style="color: red;">Contact Us</a></h4>
		</div>
	</div>
	<div class="footer-copyright text-center">
			<div class="container-fluid" style="color: white;">&copy; 2019 Copyright <a href="index.php">FICK 2019, HBTU KANPUR</a>
			</div>
	</div>
</div>


  	<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="signup.php" method="POST">
    <div class="container">
  <h1 style="color: red;font-family: 'Baloo Thambi';">SIGNUP</h1><br>
  			<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control"  name="name" required="">
</div>
<div class="form-group">
  <label for="pwd">Email ID:</label>
  <input type="email" class="form-control"  name="email" required="">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd" name="pwd" required="">
</div>
<div class="form-group">
  <label for="pwd">College Name:</label>
  <input type="text" class="form-control" name="clg" required="">
</div>
<div class="form-group">
  <label for="pwd">City:</label>
  <input type="text" class="form-control" name="city" required="">
</div>
<div class="form-group">
  <label for="pwd">Phone number:</label>
  <input type="number" class="form-control" name="phone" required="">
</div>
<br><br>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel</b></button>
        <button type="submit" class="signupbtn"><b>Sign Up</b></button>
      </div>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="login_interm.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>

    <div class="container">
   	<h1 style="color: red;font-family: 'Baloo Thambi';">LOGIN</h1><br>
  			 	<div class="form-group">
      <label for="usr">Username:</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password">
    </div>
        
      <button type="submit" style="width: 100%"><h5><b>Login</b></h5></button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" style="width: 100%" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"><h5><b>Cancel</b></h5></button>
      
    </div>
  </form>
</div>

  	<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
   if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>
</body>
</html>
<?php
 if(isset($_SESSION["username1"]))
 {

 	?>
 	<script>
         
 	  $("#log").attr('hidden',true);
 	   $("#sign").attr('hidden',true);
 	   $('#out').attr('hidden',false);
 	  </script>
 	<?php
  
 }
 else
 {

 }
?>