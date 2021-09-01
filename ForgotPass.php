<?php
$UC = 'SENDFORMFIRST';

if (isset($_GET['phone']) && isset($_GET['id'])) {
    $phone = $_GET['phone'];
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "covid-19");
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }
    $q = "SELECT password , specialization FROM doc_sec WHERE phone=$phone and idDocSec=$id ";
    $res = mysqli_query($con, $q);
    if (mysqli_num_rows($res) > 0) {
        $UC = 'SUCCESS';
        $line = mysqli_fetch_array($res, MYSQLI_ASSOC);
        $pass = $line['password'];
        $spec = $line['specialization'];
    } else
        $UC = 'ERROR';
}

if ($UC == 'SENDFORMFIRST') {
    include 'Form_ForgotPass.php';
}
if ($UC == 'SUCCESS') {
    header("Location:ResetPass.php?pass=$pass&spec=$spec");
    
    }
    if ($UC == 'ERROR') {
        include 'Form_ForgotPass.php';
        echo '<div style="font-family:time romain;font-size:150% ;'
        . 'vertical-align:middle;height:25%;color:red">phone or id invalide !!<br></div>';
    }
    ?>