<?php 
include 'conn_complaint.php';
include 'complaint.html';


if (isset($_POST["submit"])) {
  
  $Fname =  $_POST['fname'];
  $Lname =  $_POST['lname'];
  $Email = $_POST['email'];
  $Enrollment  =  $_POST['enrollment'];
  $Person=  $_POST['person'];
  $Date = $_POST['date'];
  $Regarding = $_POST['regarding'];
  $Place = $_POST['place'];
  $Briefly = $_POST['briefly'];
  
  

    $sql="INSERT INTO `complaint`(`Fname`, `Lname`, `Email`, `Enrollment`, `Person`, `Date`, `Regarding`, `Place`, `Briefly`)
    VALUES ('[$Fname]','[$Lname]','[$Email]','[$Enrollment]','[$Person]','[$Date]','[$Regarding]','[$Place]','[$Briefly]')";
    $result= mysqli_query($conn, $sql);
    echo "<script>alert('Your Complaint has been recorded Successfully')</script>";
}
mysqli_close($conn);
?>
