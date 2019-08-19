<?php 

// connect php
include "../connect.php";

$sql = "SELECT * FROM chitiet_danhmuc ";


$result = $connect -> query($sql);
// check ket qua

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Quản lý</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

    
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>trang chủ</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="table.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Bảng</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        <div class="pagez" style="display: flex;">  <h2>Danh sách danh mục</h2>
      <a style="margin-left: 10px;height: 100%;"  href="danhmuc/add.php" class="btn btn-primary  btnadd">Thêm mới</a></div>
    
               <hr>
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">trang chủ</a>
          </li>
          <li class="breadcrumb-item active">Bảng</li>
        </ol>

        <!-- Page Content -->
     
        <hr>
        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 15px;">STT</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">Tiêu đề</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 118px;">Ảnh</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 54px;">Nội dung</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 100px;">Loại tin</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 92px;">Ngày</th>
            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 92px;">Hành Động</th>
        </tr>
    </thead>

    <tbody>
  <?php 

if($result && $result->num_rows >0){
  $i =1;
  while ($row =$result->fetch_assoc()) {
    // hien thi du lieu

 
    $i++;?>
     <tr role="row" class="odd">
            <td class="sorting_1"><?php echo $i ?></td>
            <td><?php echo $row['tieude'] ;?></td>
            <td><img src="<?php echo '../../public/uploadimage/'.$row['image']; ?>" width="150px" height="100px"></td>
            <td><?php echo $row['noidung'] ;?></td>
            <td><?php echo $row['loaitin'] ;?></td>
            <td><?php echo $row['date'] ;?></td>
            <td style="display: flex;">
              <a    type="button"  class="btn btn-xs btn-info btnsua" href="danhmuc/edit.php?id=<?php echo $row['id']; ?>" style="    margin-right: 15px;"  >Sửa</a>
              <a  type="button"  class="btn btn-xs btn-info btnxoa"  href="danhmuc/delete.php?id=<?php echo $row['id']; ?>">Xóa</a>
            </td>
    </tr>
      
<?php  }





}else{
  echo 'khong thanh cong '.$connect->error;
}






$connect->close();

   ?>
       
  

    </tbody>
</table>
<ul class="pagination justify-content-end">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">4 </a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>

      </div>
      <!-- /.container-fluid -->
  
    <!--       main-->






      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Design by VĂN PHỄN</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bạn Chắc chắn muốn đăng xuất !</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Đăng xuất khỏi tài khoản.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">hủy</button>
          <a class="btn btn-primary" href="../../view/trangchu.php">Đăng xuất </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>


</body>

</html>
