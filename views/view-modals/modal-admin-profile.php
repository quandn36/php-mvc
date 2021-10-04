<!--start Modal -->
<div id="withBackdrop" class="modal fade" data-backdrop="true">
  <div class="modal-dialog modal-sm admin_profile_modal" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="card card_admin_profile">
          <img class="card-img-top" src="public/images/no-image.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?=$_SESSION['login_name']??''?></h5>
            <div class="info_admin_profile">


            </div>
            <br>
            <p>
              <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Đổi mật khẩu
              </a>
            </p>
            <div class="collapse" id="collapseExample">
              <div class="form-group">
                <input type="password" class="form-control" id="old_password" placeholder="Nhập mật khẩu cũ" value="" aria-label="old password" aria-describedby="basic-addon1">
              </div>
            </div>
          </div>
          
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <!-- <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary">Confirm</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div> -->
        </div>
      </div>
    </div>
    <!-- end Modal -->

    <style>
      .admin_profile_modal {
        position: fixed;
        top: 8px;
        right: 65px;
        
      }
      .card_admin_profile {
        width: 100%;
        max-width: 300px;
      }
    </style>