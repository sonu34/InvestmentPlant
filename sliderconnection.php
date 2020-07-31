<?php

$sname = $_POST['sname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$scity = $_POST['scity'];
$smessage = $_POST['smessage'];


if (!empty($sname) || !empty($email) || !empty($contact) || !empty($scity) || !empty($smessage)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "sliderdata";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From slidertable Where email = ? Limit 1";
     $INSERT = "INSERT Into slidertable (Name, Email, Contact, City, Message) values(?, ?, ?, ?, ?)";
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
      $stmt->bind_param("sssss", $sname, $email, $contact, $scity, $smessage);
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

