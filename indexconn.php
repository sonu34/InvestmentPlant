<?php

$uname = $_POST['uname'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];
$city = $_POST['city'];
$state = $_POST['state'];
$message = $_POST['message'];


if (!empty($uname) || !empty($email) || !empty($phonenum) || !empty($city) || !empty($state) || !empty($message)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "databasename";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From contactinfo Where email = ? Limit 1";
     $INSERT = "INSERT Into contactinfo (name, email, phonenum, city, state, message) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssisss", $uname, $email, $phonenum, $city, $state, $message);
      $stmt->execute();
      echo '<script>alert("Sucessfully Submitted")</script>';
     } else {
      echo '<script>alert("Someone already using this email")</script>';
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>

