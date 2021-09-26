<?php

$UC = 'SENDFORMFIRST';

if (isset($_GET['phone']) && isset($_GET['pass'])) {
    $phone = $_GET['phone'];
    $pass = $_GET['pass'];

    $con = mysqli_connect("localhost", "root", "", "covid-19");
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }
    $q = "SELECT * FROM doc_sec WHERE phone='$phone' and password='$pass' and specialization='Secretary'";
    $res = mysqli_query($con, $q);
    if (mysqli_num_rows($res)>0)
        $UC = 'SUCCESS';
    else {
        $UC = 'ERROR';
    }
}

if ($UC == 'SENDFORMFIRST') {
    include 'Form_SecretaryLogin.html';
}
if ($UC == 'SUCCESS') {
    header("Location:Form_SecretaryPage.php");
}
if ($UC == 'ERROR') {
    include 'Form_SecretaryLogin.html';
    echo '<br><br><br><br>';
    echo '<div style="font-family:time romain;font-size:100%;margin-left:950px;margin-top:300px;color:red">phone or password invalide !!<br></div>';
}
?>