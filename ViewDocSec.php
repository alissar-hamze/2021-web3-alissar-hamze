<html>
    <head>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color:#6495ed ;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 10%;
            }

            button:hover {
                opacity: 0.8;
            }
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.c{
	margin-left:500px;
	margin-top:-59px;
}

        </style>
    <body style="background-image:url('p.jpg');background-size:100% 100%">
        <?php
        $id = $_GET['id'];
        $con = mysqli_connect("localhost", "root", "", "covid-19");
        if (mysqli_connect_errno()) {
            die(mysqli_connect_error());
        }
        $query = "SELECT * FROM doc_sec where idDocSec=$id ";
        $result = mysqli_query($con, $query);
        if (!$result)
            die("your query failed !!  " . $query);
        else {
            include 'Form_AdminPage.php';
            $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
            while ($line) {
                ?>
                <p><h3 style="margin-left: 200px ; font-family: times, serif;font-style:italic;margin-top:-250px">
                    FIRST NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $line['firstName'] ?> <br><p>
                    LAST NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $line['lastName'] ?> <br><p>
                    DATE OF BIRTH :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $line['age']; ?><br><p>
                    PHONE :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $line['phone']; ?><br><p>
                    SPECIALIZATION :&nbsp;&nbsp;<?php echo $line['specialization']; ?><br><p>
                    WORK DAYS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $line['dayWork']; ?></h3> <br>
                </p>             
                <button id="myBtn" style="margin-left: 600px;background-color:#6495ed;width:80px" 
                        onclick="document.location.href('EditDocSec.php?id=<?php echo $line['idDocSec']; ?>')" >Edit</button>
						<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php include'EditDocSec.php'?>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

                <form action="SearchDocSec.php">
                    <input type="hidden" name="search" value="<?php echo $line['firstName']; ?>"><div class="c">                   
                    <button onClick="document.location.href('Form_AdminPage.php')" style="background-color:#a1045a;width:80px" type="submit">Cancel</button>
                </form></div>
                <?php
                $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
            }
        }
        ?>
    </body>
</html>   
