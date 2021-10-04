<!DOCTYPE html>
<html lang="vi">
<head>
  <title>Login Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"> -->


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="public/favicon.ico" type="image/ico" sizes="16x16" />
  <link rel="stylesheet" href="public/css/css/style.css">

</head>
<body class="nav-md" style="overflow: hidden;">
  <div class="container">
    <section class="ftco-section" style="padding-top: 15px !important;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section"><i class="fa fa-paw"></i> LOGIN TO DASHBOARD</h2>
            
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
              <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                <div class="text w-100">
                  <h2>Chào mừng tới trang quản lý</h2>
                </div>
              </div>
              <div class="login-wrap p-4 p-lg-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Đăng nhập</h3>
                  </div>
                  <div class="w-100">
                    <p class="social-media d-flex justify-content-end">
                      <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                      <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                    </p>
                  </div>
                </div>
                <form action="" class="signin-form" method="POST">
                  <div class="form-group mb-3">
                    <label class="label" required for="tendangnhap">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="tendangnhap" name="tendangnhap" placeholder="Username" required>
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="matkhau">Mật khẩu</label>
                    <input type="password" required name="matkhau" id="matkhau" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Đăng nhập</button>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                      <label class="checkbox-wrap checkbox-primary mb-0">Nhớ đăng nhập
                        <input type="checkbox" value="1" checked>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
        <br />

        <!-- thong bao cho nguoi dung thanh cong khi dang xuat -->
        <?=$thongbao??''?>

        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <p style="padding-top: 50px; }">© Developed by <i class="fa fa-heart" style="color: red;"></i> Ngọc Quân</p>
          </div>
        </div>
      </div>

    </section>

  </div>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/popper.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/main.js"></script>
  <script src="public/js/custom-noti.js"></script>

</body>
</html>
<!-- session thong bao trong hàm chuyen trang -->
<?php 
if(isset($_SESSION['redirect_thongbao'])){ 

  ?>
  <div class="alert alert-success">
    <div><?=$_SESSION['redirect_thongbao']??''?></div>
  </div>
  <?php 
  unset($_SESSION['redirect_thongbao']);
} elseif(isset($_SESSION['redirect_thatbai'])) {?>
  <div class="alert alert-danger">
    <div><?=$_SESSION['redirect_thatbai']??''?></div>
  </div>
  <?php 
  unset($_SESSION['redirect_thatbai']);
} ?>
<br />
<style>
  .alert.alert-danger {
    text-align:center;
    position: fixed;
    bottom: 3px;
    left: 20px;
    border-radius: 0px;
  }

  .alert.alert-success {
    text-align:center;
    position: fixed;
    bottom: 3px;
    left: 20px;
    border-radius: 0px;
  }
</style>