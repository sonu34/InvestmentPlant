<?php

$fname           = $_POST['fname'];
$lname           = $_POST['lname'];
$gender          = $_POST['gender'];
$dob             = $_POST['dob'];
$phonenumber     = $_POST['phonenumber'];
$email           = $_POST['email'];
$city            = $_POST['city'];
$state           = $_POST['state'];

$pincode         = $_POST['pincode'];
$newmember       = $_POST['newmember'];

$spouse          = $_POST['spouse'];
$spouseage       = $_POST['spouseage'];

$son          = $_POST['son'];
$sonage       = $_POST['sonage'];

$daughter          = $_POST['daughter'];
$daughterage       = $_POST['daughterage'];

$son2          = $_POST['son2'];
$son2age       = $_POST['son2age'];

$daughter2          = $_POST['daughter2'];
$daughter2age       = $_POST['daughter2age'];

$mother          = $_POST['mother'];
$motherage       = $_POST['motherage'];

$father          = $_POST['father'];
$fatherage       = $_POST['fatherage'];

$motherinlaw          = $_POST['motherinlaw'];
$motherinlawage       = $_POST['motherinlawage'];

$fatherinlaw          = $_POST['fatherinlaw'];
$fatherinlawage       = $_POST['fatherinlawage'];

$grandmother          = $_POST['grandmother'];
$grandmotherage       = $_POST['grandmotherage'];

$grandfather         = $_POST['grandfather'];
$grandfatherage         = $_POST['grandfatherage'];


if (!empty($fname) || !empty($email) || !empty($phonenumber) || !empty($city) || !empty($state) ) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "healthdata";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From healthdatatable Where email = ? Limit 1";
     $INSERT = "INSERT Into healthdatatable (fname, lname, gender, dob, phonenumber, email, city, state, pincode, newmember, spouse ,spouseage,son, sonage, daughter, daughterage, son2, son2age, daughter2, daughter2age, mother, motherage, father, fatherage, motherinlaw, motherinlawage, fatherinlaw, fatherinlawage, grandmother, grandmotherage, grandfather, grandfatherage) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
      $stmt->bind_param("ssssisssissisisisisisisisisisisi", $fname, $lname, $gender, $dob, $phonenumber, $email, $city, $state, $pincode, $newmember, $spouse ,$spouseage,$son, $sonage, $daughter, $daughterage, $son2, $son2age, $daughter2, $daughter2age, $mother, $motherage, $father, $fatherage, $motherinlaw, $motherinlawage, $fatherinlaw, $fatherinlawage, $grandmother, $grandmotherage, $grandfather, $grandfatherage);
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

