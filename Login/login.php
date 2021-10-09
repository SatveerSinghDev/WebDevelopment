<?php
$emailPhone = $_POST['email'];
$password = $_POST['password'];
$servername = "localhost";
$username = "root";
$pass = "";
$database = "assignment6";

//Connection creation
$conn = new mysqli($servername, $username, $pass, $database);
if ($conn->connect_error) {
  die("Not able to connect: " . $conn->connect_error);
}
$emailCheck = "SELECT * FROM `details` WHERE `Email` = '" . $emailPhone . "'";
$result = $conn->query($emailCheck);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  if ($password == $row["Password"]) {
    echo ("<h1>You are registered with us with this email id or Phone " . "<em>" . $row["Email"] . "</em>" . " Your Password is correct Thanks for login</h1>");
  } else {
    echo ("<h1>You are registered with us with this email id or Phone " . "<em>" . $row["Email"] . "</em>" . " but Your Password is incorrect!!! Please Go back and login again with the correct password</h1>");
  }
} else {
  echo ("<h1>You are not registered!!!! Please Go back and Click Join Now</h1>");
}
$conn->close();
?>
<link rel="stylesheet" href="login.css">
<a class="link" href="joinNow.html">Click for joinNow button</a><br>
<a class="link" href="login.html">Click for login button</a>