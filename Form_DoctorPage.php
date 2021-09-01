<?php 
$id=$_GET['id'];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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

.vl {
  border-left: 6px solid #4682b4;
  height: 650px;
  position: absolute;
  left: 13%;
  margin-left: -3px;
  top: 0;
}
</style>
 <script>
            function askBack()
            {
                if (confirm("ARE YOU SURE ?"))
                    location.assign("index.html");
                else
                    location.reload(true);
            }
        </script>
</head>

<body style="background-image:url('p.jpg'); background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;">
<br><br><br>
<div class="vl"></div>
<h2>Doctor</h2>
<br><br>

<form method="get" action="index.html">
 <button type="submit" onclick="askBack()">Logout</button>
</form>
</body>
</html>

