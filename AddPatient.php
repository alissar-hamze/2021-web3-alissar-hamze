<?php

$UC = 'SENDFORM';
if (isset($_GET['add']))
    $UC = 'ADD';

if (isset($_GET['back']))
    $UC = 'BACK';

if ($UC == 'BACK') {
    header('Location:Form_SecretaryPage.html');
}
if ($UC == 'SENDFORM')
    include ('Form_AddPatient.php');


if ($UC == 'ADD') {
    if (isset($_GET['fname']))
        $fname = $_GET['fname'];

    if (isset($_GET['lname']))
        $lname = $_GET['lname'];

    if (isset($_GET['phone']))
        $phone = $_GET['phone'];

    if (isset($_GET['age'])) {
        $a = new DateTime($_GET['age']);
        $age = (string) $a->format('y-m-d');
    }

    if (isset($_GET['address']))
        $address = $_GET['address'];

    if (isset($_GET['doctor']))
        $iddoc = $_GET['doctor'];


    $con = mysqli_connect("localhost", "root", "", "covid-19");
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }

    $q = "SELECT * FROM patient WHERE phone=$phone";
    $res = mysqli_query($con, $q);
    if (mysqli_num_rows($res) > 0) {
        include ('Form_AddPatient.php');
        echo '<h4 style="color:red; margin-left: 350px;margin-top:-290px">Another Person with the same phone number' . ':'.$phone . '</h4>';
    } else {

        $query1 = "insert into patient(firstName,lastName,age,address,phone,doc_id)values('$fname','$lname','$age','$address','$phone','$iddoc')";
        $result1 = mysqli_query($con, $query1);
        if (!$result1)
            echo("Insert Failed ! " . $query1);

        include ('Form_AddPatient.php');
    }
}
?>
