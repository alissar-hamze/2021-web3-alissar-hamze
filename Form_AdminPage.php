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
<h2>Admin</h2>
<br><br>
<form method="get" action="AddDocSec.php">
 <button type="submit">Add Doctor</button>
</form>

<form method="get" action="SearchDocSec.php">
 <button type="submit">Search Doctor</button>
</form>
<form method="get" action="index.html">
 <button onclick="askBack();document.location.href('Form_AdminPage.php')">Logout</button>
</form>

</body>
</html>

