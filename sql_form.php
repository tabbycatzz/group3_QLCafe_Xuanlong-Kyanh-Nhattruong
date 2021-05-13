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
<style>
    .content {
    max-width: 500px;
    margin: auto;
}
</style>
<body class="content">
<form action="" method="post" enctype="multipart/form-data">
        <table>
            <tbody>
            <tr> <?php
                    if(isset($_SESSION['taikhoan'])){?>
                        <div class="alert alert-info">
                            <Strong>Welcome </Strong><?php echo $_SESSION['taikhoan']." , mời bạn nhập dữ liệu"; ?>
                        </div><?php
                        //echo "welcome ".$_SESSION['taikhoan']." , mời bạn nhập dữ liệu";
                    } 
                ?></tr>
                <tr>
                    <td><label>Mã sản phẩm</label></td>
                    <td><input type="text" class="form-control" name="masp" value=<?php  if(isset($_POST['masp'])) echo $_POST['masp']?>><br></td>
                </tr>
                <tr>
                <td><label>Tên sản phẩm</label></td>
                    <td><input type="text" class="form-control" name="tensp" value=<?php  if(isset($_POST['tensp'])) echo $_POST['tensp']?>><br></td>
                </tr>
                <tr>
                <td><label>Số lượng</label></td>
                    <td><input type="text" class="form-control" name="sl" value=<?php  if(isset($_POST['sl'])) echo $_POST['sl']?>><br></td>
                </tr>
                <tr>
                <td><label>Giá</label></td>
                    <td><input type="text" class="form-control" name="gia" value=<?php  if(isset($_POST['gia'])) echo $_POST['gia']?>><br></td>
                </tr>
                <tr>
                <td><label>Mô tả</label></td>
                    <td><input type="text" class="form-control" name="mota" value=<?php  if(isset($_POST['mota'])) echo $_POST['mota']?>><br></td>
                </tr>
                <tr>
                <td><label>Hình ảnh</label></td>
                    <td><input id="fileToUpload" type="file" name="hinh" ><br></td>
                </tr>
                <tr>
                    <td rowspan="2"><input type="submit" name ="btn" class="btn btn-success" value="Xác Nhận"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
            if(isset($_POST['masp']))
            $ma_sp = $_POST['masp'];
            if(isset($_POST['tensp']))
            $ten_sp = $_POST['tensp'];
            if(isset($_POST['sl']))
            $sl = $_POST['sl'];
            if(isset($_POST['gia']))
            $gia = $_POST['gia'];
            if(isset($_POST['mota']))
            $mota = $_POST['mota'];
            if(isset($_FILES['hinh']))
            $file = $_FILES['hinh'];
            if(isset($_POST['btn'])){
                $conn=mysqli_connect('localhost','root','','cafe');
                $sql = "select * from quanlysanpham where masp = '$ma_sp'";
                $kq=mysqli_query($conn,$sql);
                if(!$kq){
                    echo "lỗi câu truy vấn";
                }
                else{
                    $dem=mysqli_num_rows($kq);
                    if($dem>=1){
                        ?><div class="alert alert-warning">
                            <strong>Warning! </strong>Mã sản phẩm này đã tồn tại</a>
                        </div><?php
                        //echo "Mã sản phẩm này đã tồn tại";
                    }
                    else{
                        if($file['name']!=''){
                            $image = $file['name'];
                            $sql = "INSERT INTO `quanlysanpham` (`masp`, `tensp`, `soluong`, `gia`, `hinhanh`, `mota`) 
                            VALUES ('$ma_sp','$ten_sp','$sl','$gia','$image','$mota');";
                        }
                        else{
                            $sql = "INSERT INTO `quanlysanpham` (`masp`, `tensp`, `soluong`, `gia`, `hinhanh`, `mota`) 
                            VALUES ('$ma_sp','$ten_sp','$sl','$gia','','$mota');";
                        }
                    if(mysqli_query($conn,$sql)){
                        if($file['name']!=''){
                            move_uploaded_file($file['tmp_name'],$file['name']);
                            ?><div class="alert alert-success">
                                <strong>Success! </strong>Thêm thành công! Chuyển đến trang xem <a href="http://localhost:8080/kyanh/sql.php" class="alert-link">sản phẩm</a>.
                            </div><?php
                            //echo  "Thêm thành công! Chuyển đến trang xem <a href = http://localhost:8080/kyanh/sql.php>Sản phẩm</a>";
                        }
                        elseif($file['name']==''){
                            ?><div class="alert alert-success">
                                <strong>Success! </strong>Thêm thành công! Chuyển đến trang xem <a href="http://localhost:8080/kyanh/sql.php" class="alert-link">sản phẩm</a>.
                            </div><?php
                        }
                    }
                    else{
                        echo "Thêm thất bại";
                    }
                }    
            }
        }
    ?>
</body>
</html>