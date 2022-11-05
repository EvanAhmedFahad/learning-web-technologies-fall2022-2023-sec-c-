<?php
if(isset($_GET['abc'])){
    echo "Password is empty ";
}
if(isset($_GET['abc1'])){
    echo "Confirm Password is empty ";
}
if(isset($_GET['abc2'])){
    echo " New Password should not be same as the Current Password ";
}
if(isset($_GET['abc3'])){
    echo " New password and confirm password not same ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
<div  style="background-color:#87CEFA;">
        <form action="Check_forgate_password.php" method="post">
            <fieldset>
                <legend>Change Password</legend>
                <table>
                    <tr>
                        <td>Current Password</td>
                        <td><input type="password" name="oldpassword" value=""></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td><input type="password"name="newpassword" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password"name="confirmpassword" value=""></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" name="submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
      
    </div>
    
</body>
</html>