<?php
    if(isset($_GET['err'])){
        echo "Null username and password";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
    <div style="background-color:#87CEFA;">   
        <form action="Signup_check.php" method="post">
            <fieldset>
                <legend>Signup</legend>
                <table>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="firstName" value=""></td>
                    </tr>
                    <tr>
                        <td>LastName</td>
                        <td><input type="text"name="lastname" value=""></td>
                    </tr>
                    <tr>
                        <td>Phone No.</td>
                        <td><input type="phone" name="phone" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email"name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><input type="radio" name="gender" id="gender">Male 
                        <br><input type="radio" name="gender" id="gender">Female<br></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><Address><input type="address"></Address></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password"name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="confirm_password" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Register"></td>
                    </tr>
                    
                    




                </table>






            </fieldset>



        </form>
    </div>

    
</body>
</html>