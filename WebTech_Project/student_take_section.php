<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="background-color:#87CEFA;">
        <table align="center" border="1px">
            <tr>
                <td>
                    <?php
                        require 'student_home_logout.php';
                    ?>
                </td>
                <tr>
                    <td>
                        <?php
                        require 'student_menu.php';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <h3> Please select which section you want to take</h3> 
                    Select section
                       <select style="padding:2px;" name="select" id="">
                           <option value="1">A</option><br>
                           <option value="2">B</option><br>
                           <option value="3">C</option><br>
                           <option value="4">D</option>
                       </select>

                        
                    </td>
                </tr>
            </tr>
       
        </table>
       


    </div>
    
</body>
</html>