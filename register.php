<?php 
session_start();
$sport_name = $_POST['name'];
//$x = $_SESSION["username1"];
if(!isset($_SESSION["username1"]))
{
   echo "Login First Then register";
}
else{
	$x = $_SESSION["username1"];
    $conn = new mysqli("localhost","root","","flick");
  //  echo $_SESSION["username1"].$sport_name;
   $sql = "SELECT * FROM  event WHERE username = '$x' AND  event = '$sport_name'";

  $result = $conn->query($sql);
 
   $rowcount=mysqli_num_rows($result);
   //echo $rowcount;
  if($rowcount==1)
  {
  	echo "You are already registered for this event";
  }
  else{
  	 $sql1 = "INSERT INTO event (username,event)
  VALUES ('$x', '$sport_name')";
  $conn->query($sql1);
  echo "CONGRATS YOU ARE REGISTERED FOR ".$sport_name;
  }
}
?>