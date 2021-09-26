<?php

$UC = 'SENDFORM';
if (isset($_GET['add'])) {
    $UC = 'ADD';
}

if (isset($_GET['back'])) {
    $UC = 'BACK';
}
if ($UC == 'BACK' ) {
    header('Location:ViewInfoMedical.php?idpat=' . $_GET['idpat'] . '');
}

if ($UC == 'SENDFORM') {
    include 'Form_AddPatientMedical.php';
}

if ($UC == 'ADD') {
    $d = new DateTime();
    $date = (string) $d->format('y/m/d');
    
    $idpat = $_GET['idpat'];

    if (isset($_GET['pcr']))
        $pcr = $_GET['pcr'];

    if (isset($_GET['xray']))
        $xray = $_GET['xray'];
    if(empty($xray)) $xray="---------" ;

    if (isset($_GET['ct']))
        $ct = $_GET['ct'];
    if(empty($ct)) $ct="---------" ;

    for ($i = 1; $i <= 7; $i++) {
        if (!empty($_GET['sym'.$i])) {
            $s[$i] = $_GET['sym'.$i];
            $sym = implode(",", $s);
        }
    }
    if(empty($sym)) $sym="---------" ;
    
    for ($i = 1; $i <=4; $i++) {
        if (!empty($_GET['med'.$i])) {
            $m[$i] = $_GET['med'.$i];
            $med = implode(",", $m);           
        } 
    }
        if(empty($med)) $med="---------" ;

    $con = mysqli_connect("localhost", "root", "", "covid-19");
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }
    $query = "insert into patient_medical values('$idpat','$sym','$pcr','$xray','$ct','$med','$date')";
    $result = mysqli_query($con, $query);
    if (!$result)
        echo("your query failed !!" . $query);
    $UC = 'success';
//    include 'Form_AddPatientMedical.php';
}
if ($UC == 'success') {
    header('Location:ViewInfoMedical.php?idpat=' . $_GET['idpat'] . '');
}
?>
