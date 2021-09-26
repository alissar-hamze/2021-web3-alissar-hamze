<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        
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
                margin:-13% 15.5%;
                float:10 ;
            }

        </style>
        <script>
            function askBack()
            {
                if (confirm("ARE YOU SURE ?"))
                    location.assign("Form_AdminPage.html");
                else
                    location.reload();
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
        <button onclick="askBack();document.location = 'index.html'">Logout</button>
        <div class="content">
        <form action="">

            <table border="0" cellpadding="10px"  >
                <tr>
                    <td><b>Symptomes:</b></td>
                    <td>
                        <table border="0">
                            <tr>
                            <label><input type="checkbox" name="sym1" value="temperature equal to or greater than 38">Temperature equal to or greater than 38</label><br/>
                </tr>
                <tr>
                    <td> <label><input type="checkbox" name="sym2" value="difficulty breathing">Difficulty Breathing</label> </td>
                    <td> <label><input type="checkbox" name="sym3" value="muscle pain">Muscle Pain</label> </td>
                </tr>
                <tr>
                    <td> <label><input type="checkbox" name="sym4" value="loss of smell or taste">Loss of smell or taste</label> </td>
                    <td> <label><input type="checkbox" name="sym5" value="feverish feeling">Feverish Feeling</label> </td>
                </tr>
                <tr>
                    <td> <label><input type="checkbox" name="sym6" value="intense discomfort">Intense Discomfort</label></td>
                    <td> <label><input type="checkbox" name="sym7" value="chills">Chills</label></td>
                </tr>

            </table>
        </td>
    </tr>

    <tr>
        <td> <b>PCR:</b></td>
        <td><label> <input type="radio"  name="pcr" value="Positive" />Positive </label>
            <label> <input type="radio"  name="pcr" value="Negative" checked />Negative </label></td>
    </tr>
    <tr>
        <td> <b>ScanxRay:</b></td>
        <td><textarea  name="xray" rows="4" cols="20" style="background-color:#d3d3d3;"></textarea></td>
    </tr>
    <tr>
        <td><b>ScanCT:</b></td>
        <td><textarea  name="ct" rows="4" cols="20" style="background-color:#d3d3d3;"></textarea></td>
    </tr>
    <tr>
        <td><b>Medicament:</b></td>
        <td>
            <table border="0" >
                <tr>
                    <td> <label><input type="checkbox" name="med1" value="cortancyl">Cortancyl</label> </td>
                    <td> <label><input type="checkbox" name="med2" value="advil">Advil</label> </td>
                </tr>
                <tr><td> <label><input type="checkbox" name="med3" value="upfen">Upfen</label> </td>
                    <td> <label><input type="checkbox" name="med4" value="spedifen">Spedifen</label> </td>
                </tr>
            </table>
        </td></tr>
</table>       
            <button onClick="document.location.href('Form_DoctorPage.php')" type="submit" name="submit" value="submit" style="background-color:#a1045a;padding: 14px 20px;cursor: pointer">Cancel</button>
&nbsp;&nbsp;&nbsp;
<input type="hidden" name="idpat" value="<?php if (isset($_GET['idpat'])) echo $_GET['idpat']; ?>" >
<button type="submit" name="add">Add</button>
</form>
        </div>
</body>
</html>
