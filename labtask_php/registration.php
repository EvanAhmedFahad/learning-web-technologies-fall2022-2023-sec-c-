<?php

?>
<html>
<html lang="en">
<head>
    
    <title>registration page</title>
</head>
<body>
    <div>
        <form action="checklogin.php" method="">
            <fieldset>
                <legend>REGISTRATION</legend>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Passwrod</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Passwrod</td>
                        <td><input type="password" name="confirm_password" value=""></td>
                    </tr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender">Male
                        <input type="radio" name="gender">Female
                        <input type="radio" name="gender">Other

                    </fieldset>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date">
                    </fieldset>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                        <td><input type="reset" name="reset" value="Reset"></td>
                    </tr>
                    





                </table>






            </fieldset>




        </form>


    </div>
    
</body>
</html>