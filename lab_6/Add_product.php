<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Add product</title>
</head>
<body>
<form method="post" action="product_check.php">
            <fieldset>
                <legend>ADD PRODUCT</legend>
                <table cellpadding ="7px">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Buying Price</td>
                        <td><input type="text" name="buying_price" value=""></td>
                    </tr>
                    <tr>
                        <td>Selling Pirce</td>
                        <td><input type="text" name="selling_price" value=""></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"> Display</td>
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
