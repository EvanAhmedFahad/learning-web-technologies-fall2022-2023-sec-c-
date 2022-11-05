
<?php 

if(isset($_GET['err'])){
    echo "null username/password";
}
else if(isset($_GET['err1']))
{
    echo"First name empty";
}
?>
<html>
<head>
    <title>Login</title>
</head>
<body style="background-color:#87CEFA;">
    <div>
        <form action="Login_check.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password"name="password" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="Change_password.php">Forget Password?</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="remember" value="">Remember Me</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>

                    <fieldset>
                        <div>
                        Select you type:
                        
                        <select name="role" id="">
                        <option selected value="student" name="student">Student</option><br>
                        <option value="faculty" name="faculty">Faculty</option><br>
                        <option value="admin">Admin</option><br>
                        <option value="accounts">Accounts</option>
                     </select>
                        </div>
                    </fieldset>
                    </td>
                    </tr>

                    
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" name="submit"> <h3>If you are new please first<a href="Signup.php">Signup</a>  </h3></td>
                        
                    </tr>  
                    <!-- <tr><td> I'm a :</td></tr> -->
                    <!-- <tr>
                        
                   
                        <td> <input type="radio" name="Rule" value="Student" id="rule" required> Student | </td><td> <input type="radio" name="Rule" value="Facutly" id="rule" required> Facutly | </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="Rule" value="Teacher" id="rule" required> Teacher | </td><td> <input type="radio" name="Accounts" value="Rule" id="rule"required> Accounts | </td>
                    </tr> -->
                    </tr>
                   
                </table>
            </fieldset>
        </form>
    </div>

    
</body>
</html>