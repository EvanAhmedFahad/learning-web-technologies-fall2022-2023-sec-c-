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
                        <td><a href="forget_password.php">Forget Password?</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="remember" value="">Remember Me</td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" name="submit"> <h3>If you are new please first<a href="Signup.php">Signup</a>  </h3></td>
                    </tr>
                    
                    
                </table>
            </fieldset>
        </form>
    </div>

    
</body>
</html>