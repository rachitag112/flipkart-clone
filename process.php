<?php
include_once 'database.php';
if(isset($_POST['save'])){
    $fn=$_POST['F_N'];
    $ln=$_POST['L_N'];
    $ct=$_POST['city'];
    $em=$_POST['email'];
}
$sql="insert into signup(First_Name, Last_Name, City, Email) values('$fn','$ln','$ct','$em')";
if(mysqli_query($conn,$sql)){
    echo "New record created";
}
else{
    echo "Error";
}
mysqli_close($conn);
?>