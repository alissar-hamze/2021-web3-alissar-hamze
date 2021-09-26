<html>
    <body>
        <form action="AddDocSec.php">
            <?php include'AddDocSec.php'?>
			<?php
            $id = $_GET['id'];
            $pass = $_GET['pass'];
            ?>
            <p> <h3 style="font-family: times, serif;font-style:bold;color:purple"> THE ID : <?php echo $id; ?> <br>
                THE PASSWORD : <?php echo $pass; ?></p> <br></h3>
				<form method="get" action="AddDocSec.php">
            <button style="margin-top:-20px;font-size: 16px;padding: 15px 38px">OK</button>
        </form>
		</form>
    </body>
</html>