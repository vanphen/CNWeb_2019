<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of predefined classes.">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<meta http-equiv="content-language" itemprop="inLanguage" content="vi">
		<meta name="keywords" itemprop="keywords" content="">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/style1.css">

		<script  src="../public/js/script.js" type="text/javascript"></script>
		<title> Khoa công nghệ thông tin đại học Thủy Lợi </title>

</head>
<body>
	<div class="wrapper">
		<header id="header" class="header">
			<div id="topHeader">
				<div class="globalnav">
					<div class="container">
						<div class="header_top">
							<div class="lable">
								<a href="#" class="ui-link-white"> Trường Đại học Thủy Lợi - TLU</a>
							</div>
							<!-- class lable -->
							<ul class="list-top">
								<li>(+) | </li>
								<li> <a href="../controller/login.php" >Login</a></li>
								<li>|</li>
								<li> <a href="#" > Register</a></li>
								<li>|</li>
								
							</ul>
							
						</div>
						<!-- class header_top -->
					</div>
					<!-- class container -->
				</div>
				<!-- class globalnav -->
			</div>
			<div class="container">
				<div class="header_logo">
					<h1>
						<a href="logo.php">
							<img src="../public/img/logo.jpg" width="547px"; height="82px" alt="">
						</a>
					</h1>
				</div>
				<div class="btn-toggle">
					<a href="#" class="toggle-nav" title="Toggle-nav">
						<span> Toggle Nav</span>
					</a>
				</div>
			</div>
		</header><!-- /header -->
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-dark">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
			        		<a class="nav-link" href="trangchu.php" title="Trang chủ">TRANG CHỦ<span class="sr-only">(current)</span></a>
			      		</li>
			      		<li class="nav-item dropdown">
        					<a class="nav-link" href="gioithieu.php?id_danhmuc=1" id="navbarDropdown" role="button" >
        					  	GIỚI THIỆU
        					</a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						        <a class="dropdown-item" href="logo.php?id_danhmuc=2">Logo khoa CNTT</a>
					          	<a class="dropdown-item" href="loichao.php?id_danhmuc=3">Lời chào mừng</a>
					          	<a class="dropdown-item" href="tochuc.php?id_danhmuc=4">Tổ chức</a>
					          	<a class="dropdown-item" href="hoptac.php?id_danhmuc=5">Hợp tác liên kết</a>
					        </div>
      					</li>
			      		<li class="nav-item dropdown">

        					<a class="nav-link" href="nckh.php?id_danhmuc=6" id="navbarDropdown" role="button" >
        					 	NGIÊN CỨU KHOA HỌC
        					</a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						        <a class="dropdown-item" href="nckhcacdetaiduan.php?id_danhmuc=7">Các đề tài, dự án</a>
					          	<a class="dropdown-item" href="thongtincenima.php?id_danhmuc=8">Thông tin seminar</a>
					          	<a class="dropdown-item" href="congtrinhcongbo.php?id_danhmuc=9">Công trình công bố</a>
					          	<a class="dropdown-item" href="cacphongthinghiem.php?id_danhmuc=10">Các phòng thí nghiệm</a>
					        </div>
      					</li>
			      		<li class="nav-item dropdown">
        					<a class="nav-link" href="daotao.php?id_danhmuc=11" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
        					  	ĐÀO TẠO
        					</a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						        <a class="dropdown-item" href="dtdh.php?id_danhmuc=12">Đào tạo đại học</a>
					          	<a class="dropdown-item" href="dtsdh.php?id_danhmuc=13">Đào tạo sau đại học</a>
					          	<a class="dropdown-item" href="daura.php?id_danhmuc=14">Chuẩn đầu ra</a>
					          	<a class="dropdown-item" href="dinhhuong.php?id_danhmuc=15">Định hướng ngành nghề</a>
					          	<a class="dropdown-item" href="mohinh.php?id_danhmuc=16">Mô hình đào tạo</a>
					          	<a class="dropdown-item" href="decuong.php?id_danhmuc=17">Đề cương môn học</a>
					        </div>
      					</li>
			     		<li class="nav-item dropdown">
        					<a class="nav-link" href="#" id="navbarDropdown" role="button" >
        					  	BỘ MÔN - TRUNG TÂM
        					</a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						        <a class="dropdown-item" href="congnghephanmem.php?id_danhmuc=19">CN phần mềm</a>
					          	<a class="dropdown-item" href="hethongthongtin.php?id_danhmuc=20">Hệ thống thông tin</a>
					          	<a class="dropdown-item" href="khoahocmaytinh.php?id_danhmuc=21">Khoa học máy tính</a>
					          	<a class="dropdown-item" href="kythuatmaytinh.php?id_danhmuc=22">Kỹ thuật máy tính và mạng</a>
					          	<a class="dropdown-item" href="toanhoc.php?id_danhmuc=23">Toán học</a>
					          	<a class="dropdown-item" href="tinhocvakythuat.php?id_danhmuc=24">Tin học và kỹ thuật tính toán</a>
					          	<a class="dropdown-item" href="trungtamtinhoc.php?id_danhmuc=25">Trung tâm tin học</a>
					        </div>
      					</li>
			     		<li class="nav-item dropdown">
        					<a class="nav-link" href="sinhvien.php?id_danhmuc=26" id="navbarDropdown" role="button" >
        					  	SINH VIÊN
        					</a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						        <a class="dropdown-item" href="tailieu.php?id_danhmuc=27">Tài liệu sinh viên</a>
					          	<a class="dropdown-item" href="tuvan.php?id_danhmuc=28">Tổ tư vấn học tập</a>
					          	<a class="dropdown-item" href="bieumau.php?id_danhmuc=29">Biểu mẫu DATN</a>
					          	<a class="dropdown-item" href="luanvan.php?id_danhmuc=30">Luận văn tốt nghiệp</a>
					        </div>
      					</li>
			     		<li class="nav-item dropdown">
        					<a class="nav-link" href="tintuc.php?id_danhmuc=31" id="navbarDropdown" role="button">
        					  	TIN TỨC
        					</a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						        <a class="dropdown-item" href="sukien.php?id_danhmuc=32">Sự kiện</a>
					          	<a class="dropdown-item" href="CSEtrenbao.php?id_danhmuc=33">CSE trên báo</a>
					        </div>
      					</li>
			     		<li class="nav-item dropdown">
        					<a class="nav-link" href="thongbao.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
        					  	THÔNG BÁO
        					</a>
					        <div class="dropdown-menu">
						        <a class="dropdown-item" href="thongbao1.php?id_danhmuc=34">Thông báo</a>
					          	<a class="dropdown-item" href="TBdaotao.php?id_danhmuc=35">TB Đào tạo</a>
					          	<a class="dropdown-item" href="nghiencuu.php?id_danhmuc=36">Nghiên cứu khoa học</a>
					          	<a class="dropdown-item" href="tuyendung.php?id_danhmuc=37">Tuyển dụng</a>
					          	<a class="dropdown-item" href="hocbong.php?id_danhmuc=38">Học bổng</a>
					          	<a class="dropdown-item" href="TBkhac.php?id_danhmuc=39">Thông báo khác</a>
					        </div>
      					</li>
			     		<li class="nav-item">
			        		<a class="nav-link disabled" href="lienhe.php?id_danhmuc=40" title="Liên hệ">LIÊN HỆ</a>
			     		</li>
			    	</ul>
			 	</div>
			</nav>
				
								

