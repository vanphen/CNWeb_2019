<?php require_once "header.php";?>
<?php 

// connect php
include "../controller/connect.php";

$sql = "SELECT * FROM `chitiet_danhmuc` WHERE loaitin='tin tuc' ";


$result = $connect -> query($sql);
// check ket qua


 ?>
<div class="location">
	<div class="container breadcrumb">
		<a href="tintuc.php" title="" class="breadcrumblink"> 
			<span> Tin tức-thông báo   >   </span>
		</a>
		<a href="logo.php" title="" class="breadcrumblink">
			<span>  tintuc</span>
		</a>
	
	</div>

	<div class="container detaiduan">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-12">
				<a href="#"><h3 style="color: #003478">Sự kiện</h3></a>

				<?php 

				if($result && $result->num_rows >0){
					$i =1;
					while ($row =$result->fetch_assoc()) {
    // hien thi du lieu

							$i++;?>
		
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
					<a  href="chitiet_tintuc.php?id=<?php echo $row['id']; ?>" class="d-flex justify-content-end trovedautrang"> > Xem chi tiết</a>
				</div>
					<?php  }

				}else{
					echo 'khong thanh cong '.$connect->error;
				}


				$connect->close();

				?>








			</div>
			<div class="col-lg-4 col-md-5 col-12">
				<h4><a href="#">Tin tức</a></h4>

				<ul class="nckh" type="none">
					<li>
						<a href="sukien.php" title=""> > Sự kiện </a>
					</li>
					<li> 
						<a href="CSEtrenbao.php" title=""> > CSE trên báo</a>
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

