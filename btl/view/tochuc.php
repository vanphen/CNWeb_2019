<?php require_once "header.php";?>
<?php 

// connect php
include "../controller/connect.php";

$querry2 = "SELECT * FROM chitiet_danhmuc where id=?";

if(isset($_GET['id'])){
	$id=$_GET['id'];

	if($stmt = $connect->prepare($querry2)){
		$stmt -> bind_param('i',$id);
	//ecute
		$stmt->execute();
	//get result
		$result = $stmt->get_result();
	// get number of rows

		
		if($result->num_rows ==0){
				// header('location: /CNWeb_2019/btl/view/error.php');
					echo "<script>location.href='/CNWeb_2019/btl/view/error.php'</script>";
		}else {
		
		
			while ($row = $result->fetch_assoc()) {
				$tieude = $row['tieude'];
				$image = $row['image'];
				$noidung = $row['noidung'];
				$loaitin = $row['loaitin'];
				$noidungchitiet = $row['noidungchitiet'];
			}	
		}

		$stmt ->free_result();
		$stmt ->close();
	}
 }else{

 }



$connect->close();
 ?>


	<div class="location">
		<div class="container breadcrumb">
			<a href="gioithieu.php" title="" class="breadcrumblink"> 
				<span> Giới thiệu   >   </span>
			</a>
			<a href="loichao.php" title="" class="breadcrumblink">
				<span> Tổ chức</span>
			</a>
		</div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  	<ol class="carousel-indicators">
			    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
			 	</ol>
				<div class="carousel-inner">
				    <div class="carousel-item active">
				    	<img class="d-block w-100" src="../public/img/sanh-t54.jpg">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="../public/img/rivf-gala.jpg">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="../public/img/khai-truong.jpg">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="../public/img/banner.jpg">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="../public/img/bannertq4.jpg">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="../public/img/hoi-thao.jpg">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="../public/img/cse-tlu-nara.jpg">
				    </div>
				</div>
			  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
		<div class="inner-page">
			<main class="main">
				<div class="container">
					<div class="maincontainer-inner">
						<div class="row">
							<div id="dnn_ContentPane" class="col-md-12">
								<div class="row row-white">
									<div class="col-md-9 anh ">
										<h2 class="title"><?php echo $tieude; ?></h2>
										<div class="description">
											<?php echo $noidungchitiet; ?>
										</div>
										<div class="unitily clearfix">
											<a href="tochuc.php?id=<?php echo $id; ?>" title="" style="d-flex.justify-content-end.trovedautrang 	">
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