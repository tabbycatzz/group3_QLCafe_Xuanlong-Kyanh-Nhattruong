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
                $conn=mysqli_connect('localhost','root','','cafe');
                $sql = 'select * from quanlysanpham';
                $kq=mysqli_query($conn,$sql);
            ?>
            <table class="table table-dark table-striped">
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th></th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                </tr>
                <?php
                   
                    while($row=mysqli_fetch_assoc($kq)){
                        ?>
                        <tr>
                            <div class="ma"><td><?php echo $row['masp']?></td></div>
                            <div class="ten"><td><?php echo $row['tensp']?></td></div>
                            <div class="gia"><td><?php echo $row['gia']?></td></div>                           
                            <div class="image"><td><img src='<?php echo 'hinhanh/'.$row['hinhanh']?> ' width=100 height=100 ></td></div>
                            <div class="button"><td><form enctype="multipart/form-data" method="post" action="sql_test2.php ?masp=<?php echo $row['masp']?>"><input type="submit" name="add" class="btn btn-info" value="Add to cart"></form></td></div>
                            <td><a href="sql_test2.php ?masp=<?php echo $row['masp']?> && file=<?php echo 'hinhanh/'.$row['hinhanh']?>">Chi tiết sản phẩm</a></td>
                            
                        </tr><?php
                    }
                ?>
            </table>
                <center><input type="submit" name="btn" class="btn btn-info" value="Tiếp tục thêm sản phẩm"></center>
                <?php
                    if(isset($_POST['btn'])){
                        header('Location:http://localhost/final/Do-an/sql_test2.php');
                    }
                ?>
        </form>
    </body>
       
     </html>