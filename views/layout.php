<!DOCTYPE html>
<html lang="vi">
<head>
  <?php include("views/widgets/head.php"); ?>


</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <?php include("views/widgets/menufooter.php"); ?>
      <?php include("views/widgets/top.php"); ?>

      <!-- them vao thong bao bang toart js -->
      <div id="toast"></div>
      
      <!-- page content -->
      <div class="right_col" role="main">

        <!-- top tiles -->
        <!-- <?php include("views/widgets/toptitle.php"); ?> -->

        <!-- them title tung trang -->
        <div class="container-fluid">
          <?php include("views/extension/includes-title.php"); ?>
        </div>

        <!-- /top tiles -->
        <?php include $views.".php" ?>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php include("views/widgets/footer.php"); ?>
      <!-- /footer content -->
    </div>
  </div>

  <!-- tat ca mac model can su dung  -->
  <?php 
  include('views/view-modals/modal-order-detail.php'); 
  ?>
  
  <?php include("views/widgets/js.php"); ?>
</body>
</html>
