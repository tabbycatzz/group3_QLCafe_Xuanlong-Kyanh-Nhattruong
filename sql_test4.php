<!DOCTYPE html>
<?php
session_start();?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <scrispt src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></scrispt>
    <scrispt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></scrispt>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost','root','','cafe');
    $sql = "Select * from quanlysanpham";
    $result = mysqli_query($conn,$sql);
    if(isset($_POST["update-cart"])){
        if(isset($_SESSION["cart"])){
            foreach($_SESSION["cart"] as $value){
                if($_POST["soluong".$value["masp"]]<=0){
                    unset($_SESSION["cart"]["soluong".$value["masp"]]);
                }
                else{
                    $_SESSION["cart"][$value["masp"]]["soluong"] = $_POST["soluong".$value["masp"]];
                }
            }
        }
    }
?>
<form action="" method="post" enctype="multipart/form-data">
            <input type="submit" name="btn" class="btn btn-info" value="Tiếp tục thêm sản phẩm"></>
                <?php
                    if(isset($_POST['btn'])){
                        header('Location:http://localhost/final/Do-an/sql_test.php');
                    }
                ?>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>&nbsp</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($_SESSION["cart"])){
                        foreach ($_SESSION["cart"] as  $value){
                            $tong = 0;
                            $tong = $value["gia"] * $value["soluong"];
                            ?>
                            <tr>
                                <td><?php echo $value["masp"]; ?></td>
                                <td><?php echo $value["tensp"]; ?></td>
                                <td><?php echo $value["gia"]; ?></td>
                                <td><input type="number" min="1" name="soluong<?php echo $value["masp"]; ?>" value="<?php echo $value["soluong"]; ?>"></td>
                                <td><?php echo $tong; ?></td>
                                <td><a href="delete_giohang.php ?masp=<?php echo $value['masp']?>">Xóa Sản phẩm</a></td>
                            </tr><?php
                        }
                    }
                ?>
            </tbody>
        </table>
        <input type="submit" name="update-cart" class="btn btn-info" method="post" value="Cập nhật"></>
            <?php
                if(isset($_POST['update-cart'])){
                    header('Location:http://localhost/final/Do-an/sql_test4.php');
                }
            ?>                 
</form>


</body>
</html>