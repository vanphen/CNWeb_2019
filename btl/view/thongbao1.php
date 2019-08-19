<?php require_once "header.php";?>
<?php 

// connect php
include "../controller/connect.php";

$sql = "SELECT * FROM `chitiet_danhmuc` WHERE loaitin='thong bao' ";


$result = $connect -> query($sql);
// check ket qua


 ?>
<div class="location">
	<div class="container breadcrumb">
		<a href="#" title="" class="breadcrumblink"> 
			<span> Thông báo   >   </span>
		</a>
		<a href="thongbao1.php" title="" class="breadcrumblink">
			<span> Thông báo</span>
		</a>
	</div>
	<div class="container detaiduan">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-12">
				<a href="thongbao1.php"><h3 style="color: #003478">Thông báo</h3></a>

				<?php 

				if($result && $result->num_rows >0){
					
					while ($row =$result->fetch_assoc()) {
    // hien thi du lieu
					?>


				<div class="cardcongtrinh" >
				<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<img src="../public/uploadimage/<?php echo $row['image']; ?>" width="100%" class="img-congtrinhcongbo">	
							</div>
							<div class="col-lg-8">
								<a href="#"><h4><?php echo $row['tieude']; ?></h4></a>
							
							</div>
						</div>
					</div>
				<a  href="chitiet_thongbao.php?id=<?php echo $row['id']; ?>" class="d-flex justify-content-end trovedautrang"> > Xem chi tiết</a>
				</div>

					<?php  }

				}else{
					echo 'khong thanh cong '.$connect->error;
				}


				$connect->close();

				?>






				
			</div>
			<div class="col-lg-4 col-md-5 col-12">
				<h4><a href="thongbao.php" style="color: #0f14a1;">Thông báo</a></h4>

				<ul class="nckh" type="none">
					<li>
						<a href="thongbao1.php" title=""> > Thông báo</a>
					</li>
					<li> 
						<a href="TBdaotao.php" title=""> > TB Đào tạo</a>
					</li>
					<li>
						<a href="nghiencuu.php" title=""> > Nghiên cứu khoa học</a>
					</li>
					<li> 
						<a href="tuyendung.php" title=""> > Tuyển dụng</a>
					</li>
					<li> 
						<a href="hocbong.php" title=""> > Học bổng</a>
					</li>
					<li> 
						<a href="TBkhac.php" title=""> > Thông báo khác</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<style type="text/css">

	
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

