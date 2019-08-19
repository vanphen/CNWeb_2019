<?php require_once "header.php";?>
<?php 

// connect php
include "../controller/connect.php";

$querry2 = "SELECT * FROM chitiet_danhmuc where id=?";



if($stmt = $connect->prepare($querry2)){
	$id=$_GET['id'];

	$stmt -> bind_param('i',$id);
	//ecute
	$stmt->execute();
	//get result
	$result = $stmt->get_result();
	// get number of rows



	while ($row = $result->fetch_assoc()) {
	    $tieude = $row['tieude'];
	    $image = $row['image'];
	    $noidung = $row['noidung'];
	    $loaitin = $row['loaitin'];
	    $date = $row['date'];
	    $noidungchitiet = $row['noidungchitiet'];
	    $id=['id'];
	}



	    
	


	$stmt ->free_result();
	$stmt ->close();
}

$connect->close();
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
											<img src="../public/img/<?php echo $image; ?>" alt="">
										</div>
										<h2 class="title"> </h2>
										<div class="description">
											<?php echo $noidungchitiet ?>
										</div>
										<div class="unitily clearfix">
											<a href="gioithieu.php?id=<?php echo $id; ?>" title="" class="d-flex justify-content-end trovedautrang">
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