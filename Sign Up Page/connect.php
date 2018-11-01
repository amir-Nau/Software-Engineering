<?php

$firstname = filter_input(INPUT_POST, 'Firstname');
$lastname = filter_input(INPUT_POST, 'Lastname');
$username = filter_input(INPUT_POST, 'Username');

if (!empty($username)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mario";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
  $sql = "INSERT INTO player (Firstname, Lastname, UserName)
  values ('$firstname','$lastname','$username')";

  if ($conn->query($sql)) {
    echo "New Record is inserted succesfuly";
  }
  else {
    echo "Error: ".$sql."<br>".$conn->error;
  }

  $conn->close();

}
  }
?>
