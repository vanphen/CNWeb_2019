<?php require_once "header.php";?>
<?php
	$con=mysqli_connect('localhost','root','','cse_tlu');
	if($_GET['idanhmuc'])
	{
		$idanhmuc =$_GET['idanhmuc'];

// sql
			// 
		$sql ="SELECT * FROM `users` ";
// thuc thi
			$data = mysqli_query($con,$sql);
// luutao mot mang 
			// $row=mysqli_fetch_assoc($data);
			while ($row=mysqli_fetch_assoc($data)) {
			    echo $row['email']."<br>";
			}
			
			// echo $row['tendanhmuc'];
		// echo $idanhmuc;
	}
	else{
			echo 'khong get duoc du lieu';
		}
	

?>
	<div class="location">
		<div class="inner-page">
			<main class="main">
				<div class="container">
					<div class="maincontainer-inner">
						<div class="row">
							<div id="dnn_ContentPane" class="col-md-12">
								<div class="row row-white">
									<div class="col-md-9 anh ">
										<div style="padding-top: 40px;">
											<img src="../public/img/004.jpg" alt="">
										</div>
										<h2 class="title"> </h2>
										<div class="description">
											<p>
												<strong>
													Trưởng khoa: Tiến sỹ <a href="#" title=""> Nguyễn Thanh Tùng</a>
												</strong>
											</p>
											<p> Phòng làm việc: P202 Tầng 2 nhà C1 </p>
											<p> Điện thoại: +84-4-38521442 </p>
											<p style="padding-bottom: 15px;"> Email: tungnt@tlu.edu.vn </p>

											<p> <strong> Phó trưởng khoa: Thạc sỹ Phạm Xuân Đồng</strong> </p>
											<p> Phòng làm việc: P203 Tầng 2 nhà C1 </p>
											<p><strong> Phó trưởng khoa: Tiến sỹ Đặng Thị Thu Hiền</strong></p>
											<p> Phòng làm việc: P201 Tầng 2 nhà C1 </p>
											<p><strong> Trợ lý khoa: ThS. Nguyễn Thị Thu Hương</strong></p>
											<p> Phòng làm việc: P204 Tầng 2 nhà C1 </p>
										</div>
										<div class="unitily clearfix">
											<a href="gioithieu.php" title="" class="d-flex justify-content-end trovedautrang">
												<span class="toppage">
													<u> Trở về đầu trang</u>
												</span>
											</a>
										</div> 
									</div>
									<div class="protlet-colum col-md-3">
										<div class="tlu-menu">
											<p class="tlu-title">
												<a href="gioithieu.php" title=""> Giới thiệu</a> 
											</p>
											<div class="column-2">
												<ul class="nckh">
													<li>
													 <a href="logo.php" title=""> > Logo khoa CNTT</a>
													</li>
													<li> 
														<a href="loichao.php" title=""> > Lời chào mừng</a>
													</li>
													<li>
													 <a href="tochuc.php" title=""> > Tổ chức</a>
													</li>
													<li> 
														<a href="hoptac.php" title=""> > Hợp tác liên kết</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<style type="text/css">

		a.trove{
			color: #0f14a1;
		}
		a.d-flex.justify-content-end.trovedautrang {
			margin-top: 25px;
			margin-bottom: 20px;
			color: #0f14a1;
		}
		ul.nckh li a {border-bottom: 1px solid #ccc;display: block;text-decoration: none;padding: 10px 7px;line-height: 2;}

		ul.nckh li :hover {
			background: #ececec;
			color: #11497a;
		}
		.container.detaiduan {
			margin-top: 50px;
		}
		ul.nckhcntt li {
			font-size: 16px;
			color: black;
			list-style-type: none;
		}
	</style>
	</div>
</div>
<?php require_once "footer.php";?>