<?php
$con = mysqli_connect("localhost", "root", "", "covid-19");
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$id = $_GET['id'];
$query = "SELECT * FROM doc_sec WHERE idDocSec = '$id'";
$result = mysqli_query($con, $query);
$line = mysqli_fetch_array($result);
?>
<html>
    <body>

        <form name="form1" method="post" action="UpdateDocSec.php">
            
                       
                        <h3 style="color:#a1045a">Update Doctor/Secretary Details</h3> 
                    
						<i><b style="color:blue">FIRST NAME:</b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input name="fname" type="text" style="width:200px;" id="fname" value="<?php echo $line['firstName']; ?>"size= "15" required/>&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <i><b style="color:blue">LAST NAME:</b></i>&nbsp;&nbsp;&nbsp;
                            <input name="lname" type="text" style="width:200px" id="lname" value="<?php echo $line['lastName']; ?>" size="15" required/><p>
                       
						<i><b style="color:blue">DATE OF BIRTH:</b></i>&nbsp;&nbsp;&nbsp;
                            <input name="age" type="text" style="width:200px" id="age" value="<?php echo $line['age']; ?>" size="15" required/>&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<i><b style="color:blue">PHONE:</b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name="phone" type="text" style="width:200px" id="phone" value="<?php echo $line['phone']; ?>" size="15" required/><p>
                       <i><b style="color:blue">WORK DAYS:</b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name="dayw" type="text" style="width:200px" id="dayw" value="<?php echo $line['dayWork']; ?>" size="15" required/>
                       
                <input name="id" type="hidden" id="id" value="<?php echo $line['idDocSec']; ?>"/>
                <button type="submit" name="Submit" style="margin-left:800px" />Edit</button>
        </form>
    </body>
</html>
