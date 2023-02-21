<?php 
include 'conn_feedback.php';
include 'feedback.html';


if (isset($_POST["submit"])) {

$Fname =  $_POST['name'];
$Lname =  $_POST['lname'];
$Email = $_POST['email'];
$Enrollment  =  $_POST['enrollment'];
$Q1 =  $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];
$Q4 = $_POST['Q4'];


    $sql="INSERT INTO `feedback`(`Fname`, `Lname`, `Email`, `Enrollment`, `Q1`, `Q2`, `Q3`, `Q4`) 
    VALUES ('[$Name]','[$Email]','[$Phone]','[$Enrollment]','[$Q1]','[$Q2]','[$Q3]','[$Q4]')";
    $result= mysqli_query($conn, $sql);
    echo "<script>alert('Your Feedback has been recorded Successfully')</script>";
}
mysqli_close($conn);
?>
