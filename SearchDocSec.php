<html>
<style>

select {
  font: 400 12px/1.3 sans-serif;
  -webkit-appearance: none;
  appearance: none;
  color: dimgray;
  border: 1px solid dimgray;
  line-height: 1;
  outline: 0;
  padding: 0.65em 2.5em 0.55em 0.75em;
  border-radius: 2px;
  background-color: white;
  background-image: linear-gradient(dimgray, dimgray),
    linear-gradient(-135deg, transparent 50%, #bae1ff 50%),
    linear-gradient(-225deg, transparent 50%, #bae1ff 50%),
    linear-gradient(#bae1ff 42%, #006fc2 42%);
  background-repeat: no-repeat, no-repeat, no-repeat, no-repeat;
  background-size: 1px 100%, 20px 22px, 20px 22px, 20px 100%;
  background-position: right 20px center, right bottom, right bottom, right bottom;   
}
select::-ms-expand {
    display: none;
}


</style>
<body>



<?php
$UC = 'SENDFORM';
if (isset($_GET['submit'])) {
    $UC = 'SEND';
}
if ($UC == 'SENDFORM') {
    include 'Form_Search.php';
}
if ($UC == 'SEND') {
    $search = $_GET['search'];
    $con = mysqli_connect("localhost", "root", "", "covid-19");
    if (mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }
    $query = "SELECT * FROM doc_sec where firstName='$search' order by lastName ASC";
    $result = mysqli_query($con, $query);
    include 'Form_Search.php';
    if (mysqli_num_rows($result) > 0) {
        $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo '<form action="ViewDocSec.php" style="margin-left: 200px ; margin-top:300px">';
        echo '<select name="id">';
		while($line) {
  echo'<option value="'.$line['idDocSec']. '">'. $line['firstName']. '&nbsp' . $line['lastName'] .'</a><br>';
  echo'</option>';
     $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
        echo '   <br> <input type="submit" style="background-color:#bae1ff;height:40px;margin-left:50px" value="Get Informations"/>
        </form>';
		} else {
        echo'<h4 style="color:red;margin-left: 200px;margin-top:300px">Name is not found!</h4>';
    }
}
?>
</body>
</html>