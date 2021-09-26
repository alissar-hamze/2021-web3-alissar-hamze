<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <style>
            .contenu{
                margin-top:-300px;
                margin-left:200px;
            }
            .button {
                background-color:#6495ed; 
                border: none;
                color: white;
                padding: 15px 32px;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
            }


        </style>

    </head>
    <?php include'Form_AdminPage.php'; ?>
    <body style="background-image:url('p.jpg');background-size:1370px 700px;background-repeat: no-repeat;">
        
        <br>
        <form action="" >
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
                        <td> <input type="Date" name="age" required> </td>
                    </tr>
                    <tr>
                        <td> <b> Phone :</b> </td>
                        <td> <input type="text" name="phone" maxlength="8" required> </td>
                    </tr>
                </table>
                <br>
                <b>Specialization :</b>
                <label> <input type="radio"  name="spec" value="Secretary" checked />Secretary </label>
                <label> <input type="radio"  name="spec" value="Doctor" />Doctor </label>

                <br><br>

                <b>Work's Days :</b>
                <?php
                $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

                for ($i = 0; $i < 7; $i++) {
                    if ($i == 0) {
                        echo ' <label> <input type="checkbox" name="' . $i . '" value="' . $days[$i] . '" checked>' . $days[$i] . '</label>';
                        echo '&nbsp;&nbsp;&nbsp;';
                    } else {
                        echo ' <label> <input type="checkbox" name="' . $i . '" value="' . $days[$i] . '">' . $days[$i] . '</label>';
                        echo '&nbsp;&nbsp;&nbsp;';
                    }
                }
                ?>
                <br><br><br>


                <button style="font-size: 16px;padding: 15px 32px" type="submit" name="add" >Add</button>
                <button onClick="document.location.href('Form_AdminPage.php')" style="margin-left:130px;margin-top:-55px; font-size: 16px;padding: 15px 32px; background-color:#a1045a">Cancel</button>
        </form>
    </body>
</html>