<?php
require "../Model/db.php"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Student Update</title>
</head>

<body>
    <form method="post" action="update.php">
        <fieldset>
            <legend>EDIT Student</legend>
            <?php

            if (mysqli_num_rows($status) > 0) {
                while ($row = mysqli_fetch_assoc($status)) {
            ?>
            <table cellpadding="7px">
                <tr>
                    <td> First_Name</td>
                    <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
                    <td><input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Last_Name</td>
                    <td><input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Phone_No</td>
                    <td><input type="text" name="phone_number" value="<?php echo $row['phone_no']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="UPDATE"></td>
                </tr>
                <?php

                }
            }
                ?>
            </table>
        </fieldset>
    </form>

</body>

</html>