        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}


.modal {
  display: none; 
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto;
  background-color: #474e5d;
  padding-top: 50px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 100%;


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
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


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
h3:hover { 
  background-color: black;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
    <!--<div id="snackbar">Registrations are closed.</div>-->
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">

  <a class="navbar-brand " href="/josh" style="padding:10px! important;">
  <!-- Change url when upload the website -->
  <p style="height:100%;font-family: 'Edo';font-size:45px;padding:8px 0px 0px 0px;">Josh'19</p></a>


  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
  </div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav navbar-right navLink">
  <li><a href="index.php">HOME</a></li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">EVENTS
      <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
         <li><a href="sports.php" > SPORTS</a>
          </li>
      <li><a href="leagues.php">LEAGUES</a></li>
      <li><a href="semlong.php">Semester Long</a></li>
        </ul>
    </li>
  <li><a href="registration.php">REGISTRATION</a> </li>
    <li><a target="_blank" href="https://docs.google.com/spreadsheets/d/1-F2RNlXOhZip7nXLiZ1cHb6u3T7H-LvkU5YFY1lfTRc/edit?usp=sharing">SCHEDULE</a></li>
  <li><a target="_blank" href="https://drive.google.com/open?id=1NnK_NIwR3d8YbA3S6ceOQcuGcGcUJmez">RULEBOOK</a></li>
  <li><a href="gallery.php">GALLERY</a></li>
    <li><a href="contact.php">CONTACT US</a></li>
</ul>
</div>
  </div>
</div>
</nav>
