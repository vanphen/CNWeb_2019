<?php 

include "../../connect.php";  

$sql ="INSERT INTO `users` ( `first_name`, `last_name`, `email`, `password`) VALUES (?,?,?,?)";
      if(isset($_POST['sub_mit'])){
        $first_name = $_POST['first_name'];

        $last_name = $_POST['last_name'];
        $user = $_POST['email'];
        $pass = sha1($_POST['password']);


    if ($stsm = $connect->prepare($sql)) {
      $stsm->bind_param('ssss',$first_name,$last_name,$user,$pass);
      
        //ecute 
      $stsm->execute();
        //get result 
      $result = $stsm->get_result();



      $stsm->free_result();
      $stsm->close();
    }

    $connect->close();


}




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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

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
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>trang chủ</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../table.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Bảng</span></a>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
          <div class="pagez" style="display: flex;">  <h2>Thêm mới user</h2>
          </div>

          <hr>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../index.php">trang chủ</a>
            </li>
            <li class="breadcrumb-item active">Bảng</li>
            <li class="breadcrumb-item active">Thêm mới</li>
          </ol>

          <!-- Page Content -->

          <hr>


          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"> 
              <form method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="inputEmail3"  class="col-sm-2 col-form-label">first_name :</label>
                  <div class="col-sm-10">
                    <input type="text"  name="first_name" class="form-control" id="inputEmail3" required placeholder="">
                  </div>
                </div>

                  <div class="form-group row">
                  <label for="inputEmail3"  class="col-sm-2 col-form-label">last_name :</label>
                  <div class="col-sm-10">
                    <input type="text"  name="last_name" class="form-control" id="inputEmail3" required placeholder="">
                  </div>
                </div>

                  <div class="form-group row">
                  <label for="inputEmail3"  class="col-sm-2 col-form-label">email :</label>
                  <div class="col-sm-10">
                    <input type="email"  name="email" class="form-control" id="inputEmail3" required placeholder="">
                  </div>
                </div>

                  <div class="form-group row">
                  <label for="inputEmail3"  class="col-sm-2 col-form-label">password :</label>
                  <div class="col-sm-10">
                    <input type="text"  name="password" class="form-control" id="inputEmail3" required placeholder="">
                  </div>
                </div>
             


                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" name="sub_mit" class="btn btn-primary">Thêm</button>
                  </div>
                </div>
              </form>

            </div>
            <div class="col-md-3"></div>
          </div>

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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
      <script src="../ckeditor/ckeditor.js"></script>


<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace( 'post_content' );// tham số là biến name của textarea
</script>


  </body>

  </html>
