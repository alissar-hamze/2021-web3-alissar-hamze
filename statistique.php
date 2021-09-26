

<?php



$con = mysqli_connect("localhost", "root", "", "covid-19");
$query1 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-01-01'and '2021-01-31'and PCR ='Positive'";
$query2 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-02-01'and '2021-02-28'and PCR ='Positive'";
$query3 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-03-01'and '2021-03-31'and PCR ='Positive'";
$query4 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-04-01'and '2021-04-30'and PCR ='Positive'";
$query5 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-05-01'and '2021-05-31'and PCR ='Positive'";
$query6 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-06-01'and '2021-06-30'and PCR ='Positive'";
$query7 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-07-01'and '2021-07-30'and PCR ='Positive'";
$query8 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-08-01'and '2021-08-31'and PCR ='Positive'";
$query9 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-08-01'and '2021-09-30'and PCR ='Positive'";
$query10 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-10-01'and '2021-10-31'and PCR ='Positive'";
$query11 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-11-01'and '2021-11-30'and PCR ='Positive'";
$query12 = "SELECT idPat FROM patient_medical WHERE dateOfVisite between '2021-12-01'and '2021-12-31'and PCR ='Positive'";

$result1 = mysqli_query($con, $query1);
$result2 = mysqli_query($con, $query2);
$result3 = mysqli_query($con, $query3);
$result4 = mysqli_query($con, $query4);
$result5 = mysqli_query($con, $query5);
$result6 = mysqli_query($con, $query6);
$result7 = mysqli_query($con, $query7);
$result8 = mysqli_query($con, $query8);
$result9 = mysqli_query($con, $query9);
$result10 = mysqli_query($con, $query10);
$result11 = mysqli_query($con, $query11);
$result12 = mysqli_query($con, $query12);

$a1=mysqli_num_rows($result1);
$a2=mysqli_num_rows($result2);
$a3=mysqli_num_rows($result3);
$a4=mysqli_num_rows($result4);
$a5=mysqli_num_rows($result5);
$a6=mysqli_num_rows($result6);
$a7=mysqli_num_rows($result7);
$a8=mysqli_num_rows($result8);
$a9=mysqli_num_rows($result9);
$a10=mysqli_num_rows($result10);
$a11=mysqli_num_rows($result11);
$a12=mysqli_num_rows($result12);
?>
<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


fieldset {
  background-color: #ffffff;
  border:2px solid Plum ;
 
    -moz-border-radius:8px;
    -webkit-border-radius:8px;	
    border-radius:8px;
   position: fixed;
   bottom: 150px ;
   right: 100px;
   height:410px;
   

}

body{
font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.btn {
  background-color:#1e90ff;
  color: white;
  padding: 14px 20px;
  margin-top:-80px;
  border: none;
  bottom:150px;
  cursor: pointer;
  width: 100px;
  opacity: 1;

}
.btn:hover {opacity: 0.}


.cancelbtn {
  background-color: #a1045a;
  color: white;
  padding: 14px 20px;
  text-align: center;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100px;
  opacity: 1;
  transition: 0.3s;
  position: fixed;
   bottom: 70px ;
   right: 440px;
}
.cancelbtn:hover {opacity: 0.5}




.avatar {
  width: 40%;
  border-radius: 50%;
}


</style>
</head>
<body style="background-image:url('loginback.jpeg');background-repeat: no-repeat;
	             background-size:1370px 700px;">


<form action="">
<br><br><br><br><br><br><br>


<fieldset style="width:40%; right:100px;top:80px ">
							<legend style="">
								<h4 style="color:#1e90ff">Statistique</h4>
                
							</legend>

                            <div id="myChart" style="width:100%; max-width:550px; height:350px;position: absolute;top :-20px;"></div>
    
 
    
        </fieldset>

<button  onClick="document.location.href('index.html')" type="button" class="cancelbtn" >Cancel</button>


    

</form>

<script>
    google.charts.load('current',{packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    
    function drawChart() {
    // Set Data
    var som1 = (<?php echo json_encode($a1);?>);
    var som2 = (<?php echo json_encode($a2);?>);
    var som3 = (<?php echo json_encode($a3);?>);
    var som4 = (<?php echo json_encode($a4);?>);
    var som5 = (<?php echo json_encode($a5);?>);
    var som6 = (<?php echo json_encode($a6);?>);
    var som7 = (<?php echo json_encode($a7);?>);
    var som8 = (<?php echo json_encode($a8);?>);
    var som9 = (<?php echo json_encode($a9);?>);
    var som10 = (<?php echo json_encode($a10);?>);
    var som11= (<?php echo json_encode($a11);?>);
    var som12 = (<?php echo json_encode($a12);?>);
    var data = google.visualization.arrayToDataTable([
      ['month', 'patient'],
      [1,som1],[2,som2],[3,som3],[4,som4],[5,som5],
      [6,som6],[7,som7],[8,som8],
      [9,som9],[10,som10],[11,som11],[12,som12]
    ]);
    // Set Options
    var options = {
      title: 'Patient count',
      hAxis: {title: 'Month '},
      vAxis: {title: 'Patient'},
      legend: 'none'
    };
    // Draw
    var chart = new google.visualization.LineChart(document.getElementById('myChart'));
    chart.draw(data, options);
    }
    </script>
    
</body>
</html>