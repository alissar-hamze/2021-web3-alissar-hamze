<?php
$con = mysqli_connect("localhost", "root", "", "covid-19");
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$id = $_GET['idpat'];
$query = "SELECT * FROM patient WHERE idPatient = '$id'";
$result = mysqli_query($con, $query);
$line = mysqli_fetch_array($result);
?>
<html>
    <body>

        <form name="form1" method="post" action="UpdatePatient.php">
            <h3 style="color:#a1045a">Update Patient Details</h3> 

            <i><b style="color:blue">FIRST NAME:</b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="fname" type="text" style="width:200px;" value="<?php echo $line['firstName']; ?>"size= "15" required/>&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i><b style="color:blue">LAST NAME:</b></i>&nbsp;&nbsp;&nbsp;
            <input name="lname" type="text" style="width:200px;" value="<?php echo $line['lastName']; ?>" size="15" required/><p>

                <i><b style="color:blue">DATE OF BIRTH:</b></i>&nbsp;&nbsp;&nbsp;
                <input name="age" type="text" style="width:200px;" value="<?php echo $line['age']; ?>" size="15" required/>&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i><b style="color:blue">PHONE:</b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="phone" type="text" style="width:200px;" value="<?php echo $line['phone']; ?>" size="15" maxlength="8" required/><p>
                <i><b style="color:blue">ADDRESS:</b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <textarea name="address" rows="4" cols="20" style="background-color:#d3d3d3;width:200px;" value="<?php echo $line['address']; ?>"  required></textarea>
                <input name="id" type="hidden" value="<?php echo $line['idPatient']; ?>"/>
                <button type="submit" name="Submit" style="margin-left:800px" />Edit</button>
        </form>
    </body>
</html>
