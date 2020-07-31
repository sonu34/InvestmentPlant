<?php

$fname           = $_POST['fname'];
$lname           = $_POST['lname'];
$phonenumber     = $_POST['phonenumber'];
$email           = $_POST['email'];

$companyname     = $_POST['companyname'];
$carname         = $_POST['carname'];
$fueltype        = $_POST['fueltype'];
$carnumber       = $_POST['carnumber'];
$insurancetype   = $_POST['insurancetype'];
$regdate         = $_POST['regdate'];

$manumonth       = $_POST['manumonth'];
$manuyear        = $_POST['manuyear'];
$expirydate      = $_POST['expirydate'];
$precompany      = $_POST['precompany'];
$cpacover        = $_POST['cpacover'];
$prevclaim       = $_POST['prevclaim'];
$ncb             = $_POST['ncb'];

if (!empty($fname) || !empty($email) || !empty($phonenumber) ) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cardata";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From cardatatable Where email = ? Limit 1";
     $INSERT = "INSERT Into cardatatable (fname, lname, phonenumber, email, companyname, carname, fueltype, carnumber, insurancetype, regdate, manumonth, manuyear, expirydate, precompany, cpacover, prevclaim, ncb) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
      $stmt->bind_param("ssissssssssssssss", $fname, $lname, $phonenumber, $email, $companyname, $carname, $fueltype, $carnumber, $insurancetype, $regdate, $manumonth, $manuyear, $expirydate, $precompany, $cpacover, $prevclaim, $ncb);
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

