<?php
session_start();
$emailPhone = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['Dob'];
$servername = "localhost";
$username = "root";
$pass = "";
$database = "assignment6";
$inputFormat = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
//Connection creation

$conn = new mysqli($servername, $username, $pass, $database);
if ($conn->connect_error) {
    die("Not able to connect: " . $conn->connect_error);
}
$emailCheck = "SELECT `Email` FROM `details` WHERE `Email` = '" . $emailPhone . "'";
$result = $conn->query($emailCheck);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($emailPhone == $row["Email"]) {
        echo ("<h1>You are registered with us with this email id or Phone " . "<em>" . $row["Email"] . "</em>" . " Please go to back for login</h1>");
    }
} else if (preg_match($inputFormat, $emailPhone)) {
    $random = rand(1, 1000);
    $msg = "Your Code is " . $random;
    $msg = wordwrap($msg, 70);
    mail($emailPhone, "Verification for code account creating ", $msg);
    if (isset($_POST['submit'])) {
        $_SESSION['emailPhone'] = $emailPhone;
        $_SESSION['password'] = $password;
        $_SESSION['dob'] = $dob;
        $_SESSION['random'] = $random;
        header("Location: code.html");
    }
} else {
    $sql_insert = "INSERT INTO details (Email, Dob, Password)
            VALUES ('$emailPhone', '$dob', '$password')";
    if ($conn->query($sql_insert) === TRUE) {
        echo ("<h1>Thanks for Creating Account Please go back and login</h1>");
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
$conn->close();

?>
<link rel="stylesheet" href="login.css">
<a class="link" href="login.html">Click for login button</a>