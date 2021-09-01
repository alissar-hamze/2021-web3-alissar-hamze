<html>
    <body>
	<?php include'Form_ForgotPass.php'?>
        <?php 
        $pass = $_GET['pass'];
        $spec = $_GET['spec'];
        if ($spec == 'Doctor') {
            ?>
            <form action="DoctorLogin.php" >
                <?php } else { ?>
                <form action="SecretaryLogin.php" >
                <?php } ?>
                <p><h3 style="font-family: times, serif;font-style:italic;color:Black;margin-left:550px">YOUR PASSWORD : <?php echo $pass; ?></p> </h3><br>
                <center><button type="submit" style="background-color: #6495ed;color: white;padding: 14px 20px;text-align: center;margin: 8px 0;border: none;cursor: pointer;
  width: 100px">OK</button></center>
            </form>
			</form>
    </body>
</html>