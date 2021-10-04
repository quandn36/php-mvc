 <div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?=href('hethong','index')?>" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?=asset($_SESSION['login_avt']??'images/no-image.png')?>" alt="..." style="height: 58px;" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Xin chào <h2><?=$_SESSION['login_name']??''?></h2></span>
        
      </div>
    </div>
    <!-- /menu profile quick info -->

    <?php include('views/extension/notification-message.php') ?>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Chung</h3>
        <ul class="nav side-menu">
          <!-- danh muc dung chung  -->
          <li><a href="<?=href('hethong','index')?>"><i class="fa fa-area-chart" aria-hidden="true"></i>Trang tổng quan</a></li>

          <!-- end danh muc dung chung -->
          <?php 
          if($this->parent_menu){
            foreach($this->parent_menu as $menu)
            {
              $submenus = (new Role())->get_functionsforuser($menu->id,$_SESSION['login_id']);
              ?>
              <!-- href="<?=$menu->lienket?>" -->
              <li><a disabled="disabled"><?=$menu->icon_menu??''?><?=$menu->ten?> <span class="fa fa-chevron-down"></span></a>
                <?php 
                if($submenus)
                {
                  ?>
                  <ul class="nav child_menu">
                    <?php 
                    foreach($submenus as $sub)
                    {
                      echo '<li><a href="'.$sub->lienket.'">'.$sub->ten.'</a></li>';
                    }
                    ?>
                  </ul>
                  <?php 
                }
                ?>
              </li>   
              <?php 
            }
          }
          else{
            echo  '<div class="navbar nav_title">
                    <a><i style="padding-left: 14px;" class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;&nbsp;Contact admin for support</a>
                  </div>';
          }
          ?> 
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Contact admin for support -->
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>