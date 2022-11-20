<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Home</title>
</head>

<body>
    <form method="post" action="../controller/check_sutdent.php">
        <fieldset>
            <legend>Student Home</legend>
            <table cellpadding="7px">
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="first_name" value=""></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="last_name" value=""></td>
                </tr>
                <tr>
                    <td>Student Id</td>
                    <td><input type="text" name="student_id" value=""></td>
                </tr>
                <tr>
                    <td>Phone No</td>
                    <td><input type="text" name="phon_no" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="SAVE"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>

</html>