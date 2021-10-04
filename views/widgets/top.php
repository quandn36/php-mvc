<div class="top_nav">
  <div class="nav_menu">
    <div class="nav toggle">
      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">
      <ul class=" navbar-right">
        <li class="nav-item dropdown open" style="padding-left: 15px;">
          <a class="user-profile dropdown-toggle" aria-haspopup="true" id="admin_profile_modal" data-toggle="dropdown" style="cursor: pointer;" aria-expanded="false">
            <img src="<?=asset($_SESSION['login_avt']??'images/no-image.png')?>" alt=""><?=$_SESSION['login_name']??''?>
          </a>
          <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" data-toggle="modal" data-target="#withBackdrop" > Đổi mật khẩu</a>
            <a class="dropdown-item"  href="<?=href('admin','logout')?>"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>


<!--==================================================================================-->


<!--start Modal -->
<div id="withBackdrop" class="modal fade" data-backdrop="true">
  <div class="modal-dialog modal-sm admin_profile_modal" role="document">
    <form action="" id="registration">
      <div class="modal-content">
        <div class="modal-header">
          <div class=" card_admin_profile">
            <label>Mật khẩu hiện tại</label>
            <div class="form-group pass_show"> 
              <input type="password" id="old_password" name="old_password" value="" required class="form-control" placeholder=""> 
              <span class="error_message_form" id="show_error_password"></span>
            </div> 
            <label>Mật khẩu mới</label>
            <div class="form-group pass_show"> 
              <input type="password" id="new_password" name="new_password" value="" required class="form-control" placeholder="">
              <span class="error_message_form" id="show_error_new_password"></span>
            </div> 
            <label>Nhập lại mật khẩu mới</label>
            <div class="form-group pass_show"> 
              <input type="password" id="confirm_new_password" name="confirm_new_password" value="" required class="form-control" placeholder=" ">
              <span class="error_message_form" id="show_error_confirm_new_password"></span> 
            </div> 
          </div>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span  aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" id="change_password_key" data-id="<?=$_SESSION['login_id']?>" data-url="<?=href('admin','change_password')?>" class="btn btn-primary">Đổi mật khẩu</button>
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button> -->
        </div>
      </div>
    </form>
  </div>
</div>
<!-- end Modal -->
<style>
  .error_message_form {
    color: red;
  }
</style>
<script>




  /*xu ly doi mat khau*/ 
  $("#change_password_key").click(function(){
    var old_password_          = $('#old_password').val();
    var new_password_          = $('#new_password').val();
    var confirm_new_password_  = $('#confirm_new_password').val();

    $('.error_message_form').html('');
    // Kiểm tra dữ liệu có null hay không
    if ($.trim(old_password_) == ''){
      var html = 'Bạn chưa nhập mật khẩu cũ';
      $('#show_error_password').append(html);
      
      return false;
    }

    if ($.trim(new_password_) == ''){
      var html = 'Bạn chưa nhập mật khẩu mới';
      $('#show_error_new_password').append(html);
      return false;
    }
    if ($.trim(confirm_new_password_) == ''){
      var html = 'Bạn chưa nhập xác nhận mật khẩu mới';
      $('#show_error_confirm_new_password').append(html);
      return false;
    }

    if($.trim(confirm_new_password_) != $.trim(new_password_)){
      var html = 'Mật khẩu xác nhận không đúng';
      $('#show_error_confirm_new_password').append(html);
      return false;
    }

    /*lay du lieu*/
    var url_    = $("#change_password_key").data('url');
    var id_     = $("#change_password_key").data('id');

    var data_   = {
      id:id_,
      old_password: old_password_,
      new_password: new_password_,
      confirm_new_password: confirm_new_password_,
    };
    $.ajax({
      url:url_,
      data:data_,
      method:"POST",
      type:'json',
      cache:false,
      success:function(response){
        var myJson = JSON.parse(response);

        if(myJson.status == 'success') {
          alertify.success(myJson.message);
          $("#withBackdrop").modal('hide');
          $('#registration input[type="password"]').val(''); 
        }else{
          alertify.error(myJson.message);
          $('#registration input[type="password"]').val(''); 
        }
      },
    });
  });


  // remove error when change data input
  $('#old_password').keyup(function(){
    $('#show_error_password').html("");
  });
  $('#new_password').keyup(function(){
    $('#show_error_new_password').html("");
  });
  $('#confirm_new_password').keyup(function(){
    $('#show_error_confirm_new_password').html("");
  });

  


</script>