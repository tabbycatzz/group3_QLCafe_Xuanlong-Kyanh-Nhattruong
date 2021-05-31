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
    if(isset($_GET["masp"])){
        $masp = $_GET["masp"];
    }
    $sql = "Select * from quanlysanpham where masp = '$masp'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $tensp = $row["tensp"];
        $sl = $row["soluong"];
        $gia = $row["gia"];
        $mota = $row["mota"];
        $hinh = 'hinhanh/'.$row["hinhanh"];
    }
?>
<form action="" method="post" enctype="multipart/form-data">
        <table class="table table-dark table-striped">
            <tbody>
            <tr> <?php
                    if(isset($_SESSION['taikhoan'])){
                        echo "welcome ".$_SESSION['taikhoan']." , mời bạn nhập dữ liệu";
                    } 
                ?></tr>
                <tr>
                    <td><label>Mã sản phẩm</label></td>
                    <td><?php echo $masp ?><br></td>
                </tr>
                <tr>
                <td><label>Tên sản phẩm</label></td>
                    <td><?php if(!empty($tensp)) echo $tensp ?><br></td>
                </tr>
                <tr>
                <td><label>Số lượng</label></td>
                    <td><?php  echo $sl ?><br></td>
                </tr>
                <tr>
                <td><label>Giá</label></td>
                    <td><?php echo $gia ?><br></td>
                </tr>
                <tr>
                <td><label>Mô tả</label></td>
                    <td><?php echo $mota ?><br></td>
                </tr>
                <tr>
                <td><label>Hình ảnh</label></td>
                    <td>
                    <?php
                        if($hinh != 'null'){
                            ?>
                            <img src="<?php echo $hinh?>" width=300 height=300>
                            <?php
                        }
                    ?>
                    </td>
                </tr>
                    <td rowspan="2"><form method="post" action="sql_test3.php ?masp=<?php echo $row['masp']?>"><button class="cta-add" type="submit" name ="btnn">Add to cart</button></form></td>
                    <td rowspan="2"><a method="POST" name="add" href="sql_test3.php?masp=<?php echo $row['masp'];?>">Add to cart</a></td>
    
                </tr>
            </tbody>
        </table>
        <form method="post" action="sql_test3.php ?masp=<?php echo $row['masp']?>"><button class="cta-add" type="submit" name ="btn">Add to cart</button></form>
</form>
<?php
    // if(isset($_POST['masp']))
    // $ma_sp = $_POST['masp'];
    // if(isset($_POST['tensp']))
    // $ten_sp = $_POST['tensp'];
    // if(isset($_POST['sl']))
    // $sl = $_POST['sl'];
    // if(isset($_POST['gia']))
    // $gia = $_POST['gia'];
    // if(isset($_POST['mota']))
    // $mota = $_POST['mota'];
    // if(isset($_FILES['hinh']))
    // $file = $_FILES['hinh'];
    // if(isset($_POST['btn'])){
        
    // }
?>
</body>
</html>