<?php 


$username = filter_input(INPUT_POST, 'username');
 $firstName = filter_input(INPUT_POST, 'firstName');
 $lastName = filter_input(INPUT_POST, 'lastName');
 if (!empty($username)){
if (!empty($lastName))
if (!empty($firstName)){
$host = "shareddb-j.hosting.stackcp.net";
$dbusername = "MarioRangers-3935ddfa";
$dbpassword = "160411581Ab";
$dbname = "MarioRangers-3935ddfa";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO users (username, firstName, lastName)
  values ('$username','$firstName','$lastName')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Password should not be empty";
  die();
}
 }
 else{
  echo "Username should not be empty";
  die();
 }
  
  if (isset($_REQUEST["submit"])) {
  		$username = $_REQUEST["username"]

  		$rowcount = mysql_query("select * from users where username = '$username'")
  }

  if ($rowcount == true) {
 		echo "Yaya"
  }
  else{
  	echo "Nay"
  }
?>





