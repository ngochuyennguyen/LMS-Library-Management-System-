<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		background-color: whitesmoke;
	}
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Phần mềm quản lý thư viện (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="admin/index.php">Đăng nhập Admin</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="signup.php"></span>Đăng ký</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">ĐĂng nhập</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>Chúc mọi người một ngày vui vẻ!!</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>THời gian hoạt động</h5>
			<ul>
				<li>Mở cửa: 8:00 AM</li>
				<li>Đóng cửa: 8:00 PM</li>
				<li>Hoạt động mọi ngày trong tuần</li>
			</ul>
			<h5>Dịch vụ</h5>
			<ul>
				<li>Trang thiết bị đầy đủ</li>
				<li>WiFi miễn phí</li>
				<li>Đa dạng đầu sách</li>
				<li>Nhiều phòng đọc chuyên ngành</li>
				<li>Mượn trả dễ dàng</li>
				<li>Không gian yên tĩnh</li>
			</ul>
		</div>
		<div class="col-md-8" id="main_content">
			<center><h3><u>Đăng nhập</u></h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="email">Email :</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Mật khẩu:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Đăng nhập</button> |
				<a href="signup.php"> Bạn chưa có tài khoản ?</a>	
			</form>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location: user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Tên đăng nhập hoặc mật khẩu không chính xác !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
