<html>
    <head>

        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            h1{font-family: Georgia, serif;
                 font-size: 45px;
                color:#a1045a;}
                h3{text-decoration: underline solid rgb(68, 68, 68);
                     font-style: italic;}
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
            .content {
                max-width: 800px;
                margin:-19% 15.5%;
                float:10 ;
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
    <body style="background-image:url('p.jpg'); background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;">
        <br><br><br>
        <div class="vl"></div>
        <h1>Doctor</h1>
        <h3><?php 
        $con = mysqli_connect("localhost", "root", "", "covid-19");
        $id = $_GET['id'];
        $query = "SELECT * FROM doc_sec where idDocSec=$id ";
        $result = mysqli_query($con, $query);
            $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
               
                     echo  $line['firstName'] ;?><br>
                    <?php echo $line['lastName'] ;?><br>
                    
                    <?php
                   
           
                   
        echo $id; ?></h3>
        <br><br>
        <button onclick="askBack()">Logout</button>
        <div class="content">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <form class="example" action="">
                <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) echo $_GET['id']; ?>" >
                <input type="text" placeholder="Search.." name="search" style="width:500px;height:40px;margin-top:150px" required>
                <button type="submit" name="submit" value="sumbit"><i class="fa fa-search"></i></button>
            </form>  
			   
        </div>
    </body>
</html>
