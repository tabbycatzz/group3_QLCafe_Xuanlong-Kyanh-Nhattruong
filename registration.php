<!doctype html>
<html>
	<head>
		
		<title>LOGIN | COFFEE TIME </title>
		
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--=============================================================================================
	<!-- favicon-->	
	
		<link rel="shortcut icon" type="image/png"  href="hinhanh/logoo.png">
		
		
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- favicon-->
  </style>
	</head>
	<body>
	
	<div class='mn'>
		<div class='mm'>
		<div id='topleff'> 
		<div id='topright'>
			<li><a href="http://localhost/trangweb/dk.php">  Đăng ký </a></li>
			<li><a href="http://localhost/trangweb/dangnhap.php"> Đăng Nhập </a><b>|</b></li>
			<li><i class="far fa-bell"></i> Thông Báo</li>
			<li><i class="far fa-question-circle"></i> Trợ Giúp</li>
		</div>
		
			<div id='title'><img href='#' src="./hinhanh/logoo.png" /></div>
            <div class="timkiem">
							
                <input type="text" name="" class="inputtimkiem" placeholder="Tìm Kiếm Trên Caffee Time..."/></input>
                <a class="nut">
                 <div class="tool">
                    <button class="search" ><i class="fas fa-search"></i> </button>													
               
                   
               <span class="tooltext tool-bottom">Tìm Kiếm</span>
               </div>
               </a>
               
           </div>
		   <div class="container">
			<div class="btn-group">
				<div class="btn-group">
					<button type="button" class="btn btn-warningg dropdown-toggle" data-toggle="dropdown">
					  Coffee <span class="caret"></span></button>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="listcf.html">Cà Phê Phin</a></li>
						<li><a href="#">PhinDi</a></li>
						<li><a href="#">Cà Phê Espresso	</a></li>
						<li><a href="#">Cà Phê Sữa	</a></li>
					  </ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-warningg dropdown-toggle" data-toggle="dropdown">
						  Cocktail <span class="caret"></span></button>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Short drink</a></li>
							<li><a href="#">Long Drink</a></li>
							<li><a href="#">Shooter</a></li>
							<li><a href="#">Cream Drink</a></li>
						  </ul>
						</div>
						<div class="btn-group">
							<button type="button" class="btn btn-warningg dropdown-toggle" data-toggle="dropdown">
							  Nước ép <span class="caret"></span></button>
							  <ul class="dropdown-menu" role="menu">
								<li><a href="#">Dưa Hấu</a></li>
								<li><a href="#">Cà Rốt</a></li>
								<li><a href="#">Cam</a></li>
								<li><a href="#">Bưởi</a></li>
							  </ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-warningg dropdown-toggle" data-toggle="dropdown">
								  Trà <span class="caret"></span></button>
								  <ul class="dropdown-menu">
									<li><a href="listtea.html">Trà Thạch</a></li>
									<li><a href="#">Freeze</a></li>
								  </ul>
								</div>
				
				<div class="btn-group">
				<button type="button" class="btn btn-warningg dropdown-toggle" data-toggle="dropdown">
				  Khác <span class="caret"></span></button>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Bánh Mì</a></li>
					<li><a href="#">Cà phê gói</a></li>
					<li><a href="#">Bông Lan</a></li>
				  </ul>
				</div>
			
			
		</div>
		</div>
	</div>
    </div>

</div>	

<div class="king">
	<div class='long'>
			
		<h1>
            <img href='#' src="./hinhanh/logoo.png" width="100px" height="100px"/>
            COFFEE TIME REGISTRATION
        </h1>
        <div class="limiter">
            <div class="login">
			<div class="wrap-login100 p-t-30 p-b-50">
				
				<form action="" method="post" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name" value=<?php  if(isset($_POST['username'])) echo $_POST['username']?>>
						<a class="focus-input100"><i class="far fa-user"></i></a>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<a class="focus-input100"><i class="fas fa-lock"></i></a>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="re-pass" placeholder="Re-Password">
						<a class="focus-input100"><i class="fas fa-lock"></i></a>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<input type="submit" name="btn" class="login100-form-btn" data-toggle="modal" data-target="#myModal" value="Đăng Ký">
					</div>
				</form>
			</div>
		</div>
	</div>
		<?php
			if(isset($_POST['username']))
			$user = $_POST['username'];
			if(isset($_POST['pass']))
			$pass = $_POST['pass'];
			if(isset($_POST['re-pass']))
			$re_pass = $_POST['re-pass'];
			if(isset($_POST['btn'])){
				$conn=mysqli_connect('localhost','root','','cafe');
				$sql = "select * from users where username = '$user'";
				$kq=mysqli_query($conn,$sql);
                if(!$kq){
                    echo "lỗi câu truy vấn";
                }
				else{
					$dem=mysqli_num_rows($kq);
					if($dem>=1){
						echo "tài khoản này đã tồn tại";
					}
					else{
						if($pass!=$re_pass){
							echo "mật khẩu không khớp nhau, nhập lại";
						}
						else{
							$sql = "INSERT INTO `users` (`username`, `password`, `level`) 
							VALUES ('$user', '$pass', '') ";
							if(mysqli_query($conn, $sql)){
								?><div class="alert alert-success">
                        			<strong>Success!</strong> Đăng ký thành công! <a href="http://localhost:8080/kyanh/sql_login2.php" class="alert-link">chuyển đến trang đăng nhập</a>.
                    			</div><?php
								//echo "đăng ký thành công!";
							}
							else{
								echo "đăng ký không thành công";
							}
						}
					}
				}
			}
		?>

		</div>
	</div>
	



	
	<div class='footer'>	
		<div id='footer'>
		<div id='foot1'>
		<table class='one'>
			
				<tr><td><b>HỖ TRỢ KHÁCH HÀNG</b><br><br></th>
				 <b><a>Hotline chăm sóc khách hàng: 1900-6035</a></b><br>
					<li>(1000đ/phút, 8-21h Hằng Ngày)<br>
				<p><li>Các câu hỏi thường gặp<br>
				<li>Gửi yêu cầu hổ trợ<br>
				<li>Hướng dẫn dặt hàng<br>
				<li>Phương thức vận chuyển<br>
				<li>Chính sách đổi trả <br>
				<li>Hướng dẫn mua trả góp <br>
				<li>Hổ trợ khách hàng: hotro@store.vn<br>
				<li>Báo lỗi bảo mật: security@store.vn</p></td>
			
		</table>	
			
		<table class='two'>	
				<td ><b>Về STORE</b><br>
				<p><li>Giới Thiệu Về Store<br>
				<li>Tuyển Dụng<br>
				<li>Chính sách bảo mật thanh toán<br>
				<li>Chính sách bảo mật thông tin cá nhân<br>
				<li>Chính sách giải quyết khiếu nại <br>
				<li>Điều khoản sử dụng<br>
				<li>Hội sách online<br>
				<li>Giới thiệu về Store xu<br>
				<li>Bán hàng doanh nghiệp <br>
				<li>Store tư vấn</p></td>
		</table>	
		<table class='three'>		
			
		
				<td><b>HỢP TÁC VÀ LIÊN KẾT</b><br>
				<p>Quy chế hoạt động sàn<br><br>
				Bán hàng cùng Store</p></td>
			
			
				<td><b>Phương thức thanh toán</b><br><br>
				<li id='visa'><i class="fab fa-cc-visa"></i>
				<li id='jcb' ><i class="fab fa-cc-jcb"></i>
				<li id='mas'><i class="fab fa-cc-mastercard"></i></td>
			
			
				<td><b>Kết nối với chúng tôi</b><br><br>
				<li id='fb'><a  href='https://www.facebook.com/long.ga.75098364/'><i class="fab fa-facebook-f"></i></a>
				<li id='jcb'><i class="fab fa-youtube"></i>
				<li id='fb'><i class="fab fa-twitter"></i></td></tr>
				
		</table>
	</div>	
		<hr/>
		<div class='licen'>
				
				<a> Công ty TNHH Store<br><br><br>
				Địa chỉ: k332/h202 Trường Chinh phường Hòa An quận Cẩm Lệ TP Đà Nẵng. Tổng đài hổ trợ 19001223 - Email:Long@hotro.store.vn<br><br>
				Mã số doanh nghiệp: 0328946750 do Sở Kế Hoạch & Đầu Tư TP Đà Nẵng cấp lần đầu ngày 01/06/2016<br><br>
				<i class="far fa-copyright"></i> 2016 - Bản quyền thuộc về Công Ty TNHH Store</a>
		</div>
		
		</div>
			
	</div>	
    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="main.js"></script>
	</body>
</html>