<?php 



session_start();

$name = $_POST['name'];
$buying_price = $_POST['buying_price'];
$selling_price = $_POST['selling_price'];


if($name == "" || $buying_price == "" || $selling_price == ""){
    //echo "null username/password/email";
    header('location: product.php?err=null');

}else { 
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql = "insert into products values('', '{$name}', '{$buying_price}', '{$selling_price}','')";
    $status = mysqli_query($con, $sql);

    if($status){
        header('location: display.php');
    }else{
        echo "DB insert error!";
    }
    
}
?>