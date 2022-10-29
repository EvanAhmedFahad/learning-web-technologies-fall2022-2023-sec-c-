<?php
    session_start();
    if(!isset($_SESSION['valid'])){
        header('location:Login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
</head>
<body>
    <h1 style="b">Wellcome to out portal <?php echo $_SESSION['userame'];?></h1>
    <a href="Logout.php">Logout</a>
    
</body>
</html>