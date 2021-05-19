<?php
session_start();?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                $conn=mysqli_connect('localhost','root','','cafetest');
                $sql = 'select * from giohang';
                $kq=mysqli_query($conn,$sql);
            ?>
            <table class="table table-dark table-striped">
                <tr>
                    <th>Mã giỏ hàng</th>
                    <th>Mã sản phẩm</th></th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                    // while($row=mysqli_fetch_assoc($kq)){
                    //     echo '<tr><td>'.$row['Ma_SP'].'</td>'.
                    //     '<td>'.$row['Ten_SP'].'</td>'.
                    //     '<td>'.$row['SoLuong'].'</td>'.
                    //     '<td>'.$row['Gia'].'</td>'.
                    //     '<td>'.$row['HinhAnh'].'</td></tr>';
                       
                    // }
                    while($row=mysqli_fetch_assoc($kq)){
                        ?>
                        <tr>
                            <td><?php echo $row['magiohang']?></td>
                            <td><?php echo $row['masp']?></td>
                            <td><?php echo $row['tensp']?></td>
                            <td><img src='<?php echo $row['hinhanh']?> ' width=100 height=100 ></td>
                            <td><?php echo $row['soluong']?></td>
                            <td><?php echo $row['thanhtien']?></td>
                            <td><a href="delete.php ?Ma_SP=<?php echo $row['Ma_SP']?> && file=<?php echo $row['hinhanh']?>">Xóa Sản phẩm</a></td>
                            
                        </tr><?php
                    }
                ?>
            </table>
                <center><input type="submit" name="btn" class="btn btn-info" value="Tiếp tục thanh toán"></center>
                <?php
                    if(isset($_POST['btn'])){
                        header('Location:http://localhost:8080/kyanh/sql_form.php');
                    }
                ?>
        </form>
    </body>
       
     </html>