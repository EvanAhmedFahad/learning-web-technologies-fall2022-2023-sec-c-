<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>

</head>

<body>
    <div>
        <form action="PasschangeCheck.php" method="post">
            <div>
                <fieldset>
                    <legend>CHANGE pASSWORD</legend>
                    <table>

                        <tr>
                            <td>Current Password</td>
                            <td><input type="text" id="password" name="currentpassword" value="">
                        </tr>
                        <br>

                        <td>New Password</td>
                        <td><input type="password" id="txtConfirmPassword" name="newconfirmpassword" value=""></td>
                        </tr>
                        <br>
                        <td>Retype New Password</td>
                        <td><input type="password" id="txtConfirmPassword" name="retypeconfirmpassword" value=""></td>
                        </tr>
                        <br>


                        <tr>

                            <td><input id="btnSubmit" type="submit" name="Change" value="Change">
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td><a href="userHome.php"> Home</a></td>

                        </tr>

                    </table>
                </fieldset>
            </div>
        </form>
    </div>
    </div>


</body>

</html>