<html>
    <head>
       <style>
.content {
  max-width: 800px;
  margin: -19% 15.5%;
  float:10 ;
}

</style>
    </head>
    <body>
	<?php include'Form_AdminPage.php'?>
       <div class="content">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <form class="example"  action="">
            <input type="text" style="width:500px;height:40px" placeholder="Search.." name="search" required>
          <button type="submit" name="submit"><i class="fa fa-search"></i></button>
</form>
<form method="get" action="Form_AdminPage.php">
 <button type="submit" style="background-color:#a1045a">Cancel</button>
        </form>    
		</div>
		</body>
</html>
