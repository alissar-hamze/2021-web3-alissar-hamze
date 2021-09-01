<?php

$UC = 'SENDFORMFIRST';
setcookie('admin', 'ADMINsystem', time() + 60 * 30);

if (isset($_GET['pass'])) {
    $password = $_GET['pass'];
    if ($password == $_COOKIE['admin']) {
        $UC = 'OK';
    } else {
        $UC = 'ERROR';
    }
}

if ($UC == 'SENDFORMFIRST') {
    include 'Form_AdminLogin.html';
}

if ($UC == 'OK') {
    header('Location:Form_AdminPage.php');
}
if ($UC == 'ERROR') {
    include 'Form_AdminLogin.html';
    echo '<br><br><br><br>';	
    echo '<div style="font-family:time romain;font-size:100%;margin-left:950px;margin-top:300px;color:red">PASSWORD INCORRECT !!</div>';
}
?>
