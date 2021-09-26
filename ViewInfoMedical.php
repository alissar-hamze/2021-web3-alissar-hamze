<html>
    <head>
        <script>
            function askBack()
            {
                if (confirm("ARE YOU SURE ?"))
                    location.assign("index.html");
                else
                    location.reload(true);
            }
        </script>
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
            .content {
                max-width: 800px;
                margin:-9% 15.5%;
                float:10 ;
            }

            .con{
                margin-top:200px;
            }

        </style>
    </head>
    <body style="background-image:url('p.jpg'); background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;">
        <br><br><br>
        <div class="vl"></div>
        <h2>Doctor</h2>
        <br><br>
        <button onclick="askBack();document.location = 'index.html'">Logout</button>
        <div class="content">
            <?php
            $idpat = $_GET['idpat'];
            $con = mysqli_connect("localhost", "root", "", "covid-19");
            if (mysqli_connect_errno()) {
                die(mysqli_connect_error());
            }
            $query = "SELECT * FROM patient where idPatient=$idpat";
            $result = mysqli_query($con, $query);
            if (!$result)
                die("your query failed !!  " . $query);
            $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
            echo '<h1 style="font-family: times, serif;font-style:bold;color:blue;">Details of ' . $line['firstName'] . '</h1>';
            echo "<table border='0' cellpadding='10px'>";
            echo '<tr><td><h3 style="font-family: times, serif;font-style:italic;color:Black;">NAME :</td><td>' . $line['firstName'] . '&nbsp' . $line['lastName'] . '</td></tr></h3>';
            echo '<tr><td><h3 style="font-family: times, serif;font-style:italic;color:Black;">DATE OF BIRTH :</td><td>' . $line['age'] . '</td></tr></h3>';
            echo '</table>';
            ?></h3>
        <?php
        $query1 = "SELECT * FROM patient_medical where idPat=$idpat";
        $result1 = mysqli_query($con, $query1);
        if (!$result1)
            die("your query failed !!  " . $query1);
        $line1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        echo "<table border='1'  >";
        while ($line1) {
            echo '<tr><td>';
            echo 'Symtoms :' . $line1['symtoms'] . '<br>';
            echo 'PCR :' . $line1['PCR'] . '<br>';
            echo 'X-RayScan :' . $line1['X-RayScan'] . '<br>';
            echo 'CTscan :' . $line1['CTscan'] . '<br>';
            echo 'Medication :' . $line1['medication'] . '<br>';
            echo 'Date of visite :' . $line1['dateOfVisite'] . '<br>';
            echo '</td></tr>';
            $line1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        }
        echo '</table>';
        ?><div>
        <form action="AddPatientMedical.php" >
            <input type="hidden" name="idpat" value="<?php echo $idpat; ?>">
            <button type="submit" name="send" style="padding: 14px 20px;width:90px;cursor: pointer;">Add</button>

        </form>
        <form action="SearchPatientsDoc.php">
            <input type="hidden" name="search" value="<?php echo $line['firstName']; ?>">
            <input type="hidden" name="id" value="<?php echo $line['doc_id']; ?>">
            <button  name="submit" value="submit" style="background-color:#a1045a;padding: 14px 20px;cursor: pointer">Cancel</button>
        </form>
        </div>
    </div>
</body>
</html>