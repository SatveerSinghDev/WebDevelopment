<?php
$emailPhone = $_POST['email'];
$dob = $_POST['Dob'];
$servername = "localhost";
$username = "root";
$pass = "";
$database = "assignment6";
$conn = new mysqli($servername, $username, $pass, $database);
if ($conn->connect_error) {
    die("Not able to connect: " . $conn->connect_error);
}
$emailCheck = "SELECT * FROM `details` WHERE `Email` = '" . $emailPhone . "'";
$result = $conn->query($emailCheck);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($emailPhone == $row["Email"] && $dob == $row["Dob"]) {
        $msg = "Your password is " . $row["Password"];
        $msg = wordwrap($msg, 70);
        mail($emailPhone, "Forgot Password", $msg);
        echo ("<h1>Your password has been sent to your registered email address. Please click login button.</h1>");
    } else {
        echo ("<h1>You are registered with us but your Date Of Birth doesn't match with our records</h1>");
    }
} else {
    echo ("<h1>You are not registered with us please go back and click JoinNow for registeration</h1>");
}
$conn->close();
?>
<link rel="stylesheet" href="login.css">
<a class="link" href="joinNow.html">Click for JoinNow button</a>