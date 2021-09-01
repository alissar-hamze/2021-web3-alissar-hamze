<html>
    <head>
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

    <body >
        <?php
        $UC = 'SENDFORM';

        if (isset($_GET['submit'])) {
            $UC = 'SEND';
        }
           
        if ($UC == 'SENDFORM') {
            include 'Form_SearchD.php';
        }

        if ($UC == 'SEND') {
            $con = mysqli_connect("localhost", "root", "", "covid-19");
            if (mysqli_connect_errno()) {
                die(mysqli_connect_error());
            }
            if (isset($_GET['id'])) {
                if (!isset($_GET['search']))
                    die("please enter name of paient !");
                else
                    $search = $_GET['search'];
                $id = $_GET['id'];
                $query = "SELECT idPatient, firstName , lastName FROM patient where doc_id =$id and firstName='$search' order by lastName ASC";
                $result = mysqli_query($con, $query);
                include 'Form_searchD.php';
                if (mysqli_num_rows($result) > 0) {
                    $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo '<form action="ViewInfoMedical.php" style="margin-left: 200px ; margin-top:300px">';
                    echo '<select name="idpat">';
                    while ($line) {
                        echo '<option value ="' . $line['idPatient'] . '">' . $line['firstName'] . '&nbsp' . $line['lastName'] . '</a><br>';
                        echo '</option>';
                        $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    }
                    echo '   <br> <input type="submit" style="background-color:#bae1ff;height:40px;margin-left:50px" value="Get Informations"></form>';
                } else {
                    echo'<h4 style="color:red;margin-left: 200px;margin-top:300px">Name is not found!</h4>';
                }
            }
        }
        ?>

    </body>
</html>