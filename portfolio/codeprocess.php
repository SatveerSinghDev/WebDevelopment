<?php
session_start();
$code = $_POST['code'];
$random = $_SESSION['random'];
$emailPhone = $_SESSION['emailPhone'];
$password = $_SESSION['password'];
$dob = $_SESSION['dob'];
$servername = "localhost";
$username = "root";
$pass = "";
$database = "assignment6";


//Connection creation
$conn = new mysqli($servername, $username, $pass, $database);
if ($conn->connect_error) {
  die("Not able to connect: " . $conn->connect_error);
}

if (isset($_POST['codeButton'])) {
  if ($code == $random) {
    $sql_insert = "INSERT INTO details (Email, Dob, Password)
            VALUES ('$emailPhone', '$dob', '$password')";
    if ($conn->query($sql_insert) === TRUE) {
      echo ("<h1>Thanks for Creating Account Please go back and login</h1>");
    } else {
      echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
  } else {
    echo ("<h1>Wrong Code!!!Go back and again JoinNow</h1>");
  }
}

$conn->close();
?>
<link rel="stylesheet" href="login.css">
<a class="link" href="login.html">Click for login button</a>