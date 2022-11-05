<?php
 if(isset($_GET['err1'])){
    echo "First name is Emtpy ";
}
    if(isset($_GET['err'])){
        echo "Null username and password";
    }
    if(isset($_GET['err2'])){
        echo "Only letters and spaces allowed";
    }
    if(isset($_GET['err3'])){
        echo "Gender not selected ";
    }
    if(isset($_GET['err4'])){
        echo "Email is incorrect\n ";
    }
    if(isset($_GET['err5'])){
        echo "Mobile No is empty\n";
    }
     if(isset($_GET['err6'])){
        echo "Mobile No must only contain numbers\n";
    }
    if(isset($_GET['err7'])){
        echo "Mobile No must have 11 digits\n";
    } 
    if(isset($_GET['err8'])){
        echo "Address is empty\n";
    }
    if(isset($_GET['err9'])){
        echo "Password does not match try again\n";
    } 
    if(isset($_GET['err10'])){
        echo " Password must not be less than eight (8) characters
        try again\n";
    }
    if(isset($_GET['err11'])){
        echo "  Password must contain at least one of the special characters (@, #, $, %)
        try again\n";
    }
    if(isset($_GET['err12'])){
        echo "  User Name must contain at least two (2) characters
        try again\n";
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
                        <td><input type="text"name="lastName" value=""></td>
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
                        <td><Address><input type="address" name="address"></Address></td>
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
                        <td><input type="password" name="Confirm_password" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Register"></td>
                    </tr>
                    <tr>
                        <td><a href="login.php"> Login</a></td>
                    </tr>
                    
                    




                </table>






            </fieldset>



        </form>
    </div>

    
</body>
</html>