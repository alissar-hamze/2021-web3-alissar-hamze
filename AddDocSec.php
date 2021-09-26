<?php

$UC = 'SENDFORM';

if (isset($_GET['add']))
    $UC = 'ADD';

if (isset($_GET['back']))
    $UC = 'BACK';

if ($UC == 'BACK') {
    header('Location:Form_AdminPage.html');
}

if ($UC == 'SENDFORM')
    include ('Form_AddDoc.php');

if ($UC == 'ADD') {
    $d = new DateTime();
    $id = (string) $d->format('Ydis');
    $r = (string) rand(0, 999);

    if (isset($_GET['fname']))
        $fname = $_GET['fname'];

    $pass = $fname . $r;

    if (isset($_GET['lname']))
        $lname = $_GET['lname'];

    if (isset($_GET['phone']))
        $phone = $_GET['phone'];

    if (isset($_GET['age'])) {
        $a = new DateTime($_GET['age']);
        $age = (string) $a->format('y-m-d');
    }

    if (isset($_GET['spec']))
        $spec = $_GET['spec'];

    for ($i = 0; $i < 7; $i++) {
        if (!empty($_GET[$i])) {
            $v[$i] = $_GET[$i];
            $dayw = implode(",", $v);
        }
    }

    $con = mysqli_connect("localhost", "root", "", "covid-19");
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }
    $q = "SELECT * FROM doc_sec WHERE phone=$phone";
    $res = mysqli_query($con, $q);
    if (mysqli_num_rows($res) > 0) {
        include ('Form_AddDoc.php');
        echo '<h4 style="color:red; margin-left: 350px;margin-top:-210px">Another Person with the same phone number' . ':'.$phone . '</h4>';
    } else {
        $query = "insert into doc_sec(idDocSec,firstName,lastName,age,phone,dayWork,specialization,password)"
                . "values('$id','$fname','$lname','$age','$phone','$dayw','$spec','$pass')";
        $result = mysqli_query($con, $query);
        if (!$result)
            echo("your query failed !!  : " . $query);
        $UC = 'PASS';
    }
}
if ($UC == 'PASS') {
   header("location:ShowIdPass.php?id=$id&pass=$pass");
}
?>