<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: "Lato", sans-serif;
            }

            .contenu{
                margin-top:-300px;
                margin-left:200px;
            }
            .button{
                margin-top:40px;
                margin-left:100px;
            }

        </style>
        <script>
            function askBack()
            {
                if (confirm("ARE YOU SURE ?"))
                    location.assign("Form_SecretaryPage.html")
                else
                    location.reload();
            }
        </script>
    </head>


    <body>

        <?php include'Form_SecretaryPage.php'; ?>
        <form action="">
            <div class="contenu">


                <table border="0" cellpadding="10px" >
                    <tr>
                        <td> <b>First Name :</b> </td>
                        <td> <input type="text" name="fname" required> </td>
                    </tr>
                    <tr>
                        <td> <b>Last Name :</b> </td>
                        <td> <input type="text" name="lname" required> </td>
                    </tr>
                    <tr>
                        <td> <b> Date of birth :</b> </td>
                        <td> <input type="date" name="age" placeholder="mm /dd /yyyy" required> </td>
                    </tr>
                    <tr>
                        <td> <b> Phone :</b> </td>
                        <td> <input type="text" name="phone" maxlength="8" required > </td>
                    </tr>
                    <tr>
                        <td> <b> Address :</b> </td>
                        <td> <textarea name="address" rows="4" cols="20" style="background-color:#d3d3d3;" required> </textarea> </td>
                    </tr>
                    <tr>
                        <td> <b> Doctor :</b> </td>
                        <td> <select name="doctor" >
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "covid-19");
                                if (mysqli_connect_errno()) {
                                    die(mysqli_connect_error());
                                }
                                $query = "SELECT idDocSec, firstName , lastName FROM doc_sec WHERE specialization='Doctor' order by firstName ASC";
                                $result = mysqli_query($con, $query);
                                if (!$result)
                                    die("your query failed !!  " . $query);
                                $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                while ($line) {
                                    echo '<option value="' . $line['idDocSec'] . '">';
                                    echo $line['firstName'] . ' ' . $line['lastName'];
                                    echo '</option>';
                                    $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                }
                                ?>
                            </select></td>
                    </tr>
                </table>


                <div class="button">
                    <button type="submit" name="add" style="font-size: 16px;padding: 15px 32px">Add</button>

                    <button onClick="document.location.href('Form_SecretaryPage.php')" style="margin-left:50px; font-size: 16px;padding: 15px 32px; background-color:#a1045a" type="submit">Cancel</button>
                    </form>
                    </form>
                </div>
                </body>
                </html>