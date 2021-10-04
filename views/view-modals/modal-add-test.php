
<!--start Modal -->
<div class="modal fade" id="aaaexampleModal" tabindex="1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="yyexampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="yyexampleModalLabel">Thêm user</h5>

      </div>
      <div class="modal-body">
       <!--start content-->
       <div class="row">

        <!--start col-9-->
        <div class="col-lg-9">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <div class="form-label">
                  <label>asdasdsad<span class="required">*</span></label>
                </div>
                <input  type="text" class="form-control" name="" placeholder="nhập tên" />
              </div>

              <div class="form-group">
                <div class="form-label">
                  <label>jsdsajd<span class="required">*</span></label>
                </div>
                <input type="text" class="form-control" name="" placeholder="nhập tên" />
              </div>
              
              <div class="form-group">
                <div class="form-label">
                  <label>sdasdsdasd<span class="required">*</span></label>
                </div>
                <input type="text" class="form-control" name="" placeholder="nhập tên" />
              </div>

              <div class="input-group">
                <div class="form-label">
                  <label>asdsadsdsad<span class="required">*</span></label>
                </div>
                <textarea name="" id="nhap_vao_day"></textarea>
              </div>
            </div>
          </div>
        </div>
        <!--end col-9-->

        <!--start col-3-->    
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <label>Hình đại diện</label> 
              <img alt="images product" style="width: 100%;" src="public/images/small/img-1.jpg" >
              <input type="hidden" id="url_hinhdaidien" name="url_hinhdaidien">
              <input type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click me choose image" style="width: 100%;" id="choose-image-cover" onclick="openfile('url_hinhdaidien');" value="choose" >
            </div>
          </div><br>


          <!--button submit-->
          <div class="card">
            <div class="card-body btn-group" role="group">
              <button type="button" data-bs-toggle="tooltip" id="buttonSaveUser" data-bs-placement="bottom" title="Save user" class="btn btn-success">lưu</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">đóng</button>
            </div>
          </div>
          <!--button submit-->
        </div>
        <!--end col-3-->

      </div>
      <!--end content-->
    </div>
  </div>
</div>
</div>
<!-- end Modal -->

<?=ck_replace('nhap_vao_day',300)?>
