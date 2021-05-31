<?php
session_start();?>

<?php
    $conn = mysqli_connect('localhost','root','','cafe');
    if(isset($_GET["masp"])){
        $masp = $_GET["masp"];
    }
    $sql = "Select * from quanlysanpham where masp = '$masp'";
    $result = mysqli_query($conn,$sql);
    $product_cart = array();
    foreach($result as $value){
        $product_cart[$value["masp"]] = $value;
    }
    if(isset($_POST["btn"])){
        
        if(!isset($_SESSION["cart"]) || $_SESSION["cart"] == null){
            $product_cart[$masp]["soluong"] = 1;
            $_SESSION["cart"][$masp] = $product_cart[$masp];          
        }
        else{
            if(array_key_exists($masp, $_SESSION["cart"])){
                $_SESSION["cart"][$masp]["soluong"] +=1;
            }
            else{
                 $product_cart[$masp]["soluong"] = 1;
                 $_SESSION["cart"][$masp] = $product_cart[$masp];  
            }
        }
        //      print_r($_SESSION["cart"]);
        header("location:sql_test4.php");
    }
?>

