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
	<div class="container detaiduan">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-12">
				
				<div style="padding-top: 40px;">
					
				</div>
				<div class="main w-100">
						<?php 
						echo $noidungchitiet;

							 ?>
				</div>
					
				<a  href="" class="d-flex justify-content-end trovedautrang"> > tro ve dau trang</a>
				

			</div>


















			
			<div class="col-lg-4 col-md-5 col-12">
				<h4><a href="daotao.php">Đào tạo</a></h4>

				<ul class="nckh" type="none">
					<li>
						<a href="dtdh.php" title=""> > Đào tạo đại học</a>
					</li>
					<li> 
						<a href="dtsdh.php" title=""> > Đào tạo sau đại học</a>
					</li>
					<li>
						<a href="daura.php" title=""> > Chuẩn đầu ra</a>
					</li>
					<li> 
						<a href="dinhhuong.php" title=""> > Định hướng ngành nghề</a>
					</li>
					<li> 
						<a href="mohinh.php" title=""> > Mô hình đào tạo</a>
					</li>
					<li> 
						<a href="decuong.php" title=""> > Đề cương môn học</a>
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

