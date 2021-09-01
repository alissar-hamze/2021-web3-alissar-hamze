<?php

$UC = 'SENDFORMFIRST';

if (isset($_GET['phone']) && isset($_GET['pass'])) {
    $phone = $_GET['phone'];
    $pass = $_GET['pass'];

    $con = mysqli_connect("localhost", "root", "", "covid-19");
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }

    $query = "SELECT idDocSec FROM doc_sec WHERE phone='$phone' and password='$pass' and specialization='Doctor'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result)>0){
        $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $id = $line['idDocSec'];
        $UC = 'SUCCESS';
    } else {
        $UC = 'ERROR';
    }
}

if ($UC == 'SENDFORMFIRST') {
    include 'Form_DoctorLogin.html';
}

if ($UC == 'SUCCESS') {
    header("Location:SearchPatientsDoc.php?id=$id");
}

if ($UC == 'ERROR') {
    include 'Form_DoctorLogin.html';
    echo '<br><br><br><br>';
    echo '<div style="font-family:time romain;font-size:100%;margin-left:950px;margin-top:300px;color:red">phone or password invalide !!<br></div>';
}
?>
