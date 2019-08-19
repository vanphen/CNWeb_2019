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
	<div class="container breadcrumb">
		<a href="nckh.php" title="" class="breadcrumblink"> 
			<span> Nghiên Cứu   >   </span>
		</a>
		<a href="logo.php" title="" class="breadcrumblink">
			<span> Thông tin senimar </span>
		</a>
	
	</div>

	<div class="container detaiduan">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-12">
		
				<?php echo $noidungchitiet;	 ?>
					<a  href="" class="d-flex justify-content-end trovedautrang"> > Trở về đầu trang</a>
		



			</div>
			<div class="col-lg-4 col-md-5 col-12">
				<h4><a href="#">Nghiên cứu khoa học</a></h4>

				<ul class="nckh" type="none">
					<li>
						<a href="#" title=""> > Các đề tài,dự án</a>
					</li>
					<li> 
						<a href="#" title=""> > Thông tin seminar</a>
					</li>
					<li>
						<a href="#" title=""> > Công trình công bố</a>
					</li>
					<li> 
						<a href="#" title=""> > Các đề tài thí nghiệm</a>
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

