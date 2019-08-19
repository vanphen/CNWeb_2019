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
				<?php echo $noidungchitiet; ?>
			








				
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

