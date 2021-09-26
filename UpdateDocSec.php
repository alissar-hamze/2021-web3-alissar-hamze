<?php
$con = mysqli_connect("localhost", "root", "", "covid-19");
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
if (isset($_POST['id']))
        $id = $_POST['id'];

if (isset($_POST['fname']))
        $fname = $_POST['fname'];

    if (isset($_POST['lname']))
        $lname = $_POST['lname'];
  
    if (isset($_POST['phone']))
        $phone = $_POST['phone'];

    if (isset($_POST['age']))
        $age = $_POST['age'];

    if (isset($_POST['dayw']))
        $dayw = $_POST['dayw'];

$query = "update doc_sec set firstName='$fname' , lastName='$lname' , age='$age', phone='$phone',dayWork='$dayw'  where idDocSec=$id";
$result = mysqli_query($con, $query);
if (!$result)
    die("query failed !!  ".$query);
else $UC='success';

if($UC=='success'){
    header("Location:ViewDocSec.php?id=$id");
}
?>