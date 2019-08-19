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
		<a href="nckh.php" title="" class="breadcrumblink"> 
			<span> Tin tức-thông báo   >   </span>
		</a>
		<a href="logo.php" title="" class="breadcrumblink">
			<span>  Sự kiện</span>
		</a>
	
	</div>

	<div class="container detaiduan">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-12">

				
			<?php echo $noidungchitiet; ?>

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

