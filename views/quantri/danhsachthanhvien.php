
<div class="row" style="display: unset;">
	<div class="col-md-12 col-sm-12  ">
		<div class="x_panel">
			<div class="x_content">
				<!-- <div class="" style="text-align:right;">
                	<button type="button" href="#" class="showAddModel" data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i class="fa fa-plus-square"></i> Add</button>
                </div> -->
                <div class="table-responsive">
                	<table class="table table-hover" id="table-admin-list">
                		<thead>
                			<tr class="thead-light">
                				<th scope="col">Hình đại diện </th>
                				<th scope="col">Mã </th>
                				<th scope="col">Tên </th>
                				<th scope="col">Tên đăng nhập</th>
                        <th scope="col">Nhóm</th>
                        <th scope="col">Trạng thái </th>
                        <th scope="col">Hành động</th>
                      </tr>
                    </thead>

                    <tbody>
                     <?php
                     foreach($list as $value)
                     {
                      ?>
                      <tr >
                       <td class=""><img src="<?=asset($value->avt?$value->avt:'images/no-image.png')?>" style="width: 42px; border-radius: 3px; height: 42px;" alt=""></td>
                       <td class=""><?=$value->id?></td>
                       <td class=""><?=$value->ten?></td>
                       <td class=""><?=$value->tendangnhap?></td>
                       <?php $groupadmin = (new GroupAdmin())->find($value->manhom); ?>
                       <td class=""><?=$value->manhom==$groupadmin[0]->id?$groupadmin[0]->ten:''?></td>

                       <td class="a-right a-right "><?=$value->trangthai==2?'<span class="badge badge-danger">Khoá</span>':'<span class="badge badge-success">Kích hoạt</span>'?></td>
                       <td>
                        <div class="btn-group" role="group" >

                          <button type="button" data-id="<?=$value->id??''?>" id="reset_password_<?=$value->id?>" class="btn btn-info waves-effect waves-light reset_password" data-toggle="tooltip" title="Đặt lại mật khẩu"><i class="fa fa-cog" aria-hidden="true"></i></button>
                          <a type="button" href="<?=href('admin','edit',['id' => $value->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-pencil-square-o" aria-hidden="true" data-toggle="tooltip" title="Sửa"></i></a>
                          <a type="button" name="needDelete" href="<?=href('admin','delete',['id_delete' => $value->id])?>" onclick="return confirm('Bạn có muốn xoá ?');" class="btn btn-danger waves-effect waves-light btn-delete" ><i class="fa fa-trash" aria-hidden="true" data-toggle="tooltip" title="Xoá"></i></a>

                        </div>
                      </td>
                    </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>

          </div>

          <a data-toggle="tooltip" title="Thùng rác"><i class="fa fa-trash" data-toggle="collapse" data-target="#collapseExample" aria-controls="collapseExample" aria-hidden="true" style="font-size: 35px; cursor: pointer;"></i>(<?=count($userTrash)?>)</a>
          <div class="collapse" id="collapseExample">
           <div class="card card-body">
            <?php if(count($userTrash)>0) { ?>
             <div class="table-responsive">
              <table class="table table-hover">
               <?php
               foreach($userTrash as $value_trash)
               {
                ?>
                <tr >
                 <td class=""><img src="<?=asset($value_trash->avt?$value_trash->avt:'images/no-image.png')?>" style="width: 42px; border-radius: 3px; height: 42px;" alt=""></td>
                 <td class=""><?=$value_trash->id?></td>
                 <td class=""><?=$value_trash->ten?></td>
                 <td class=""><?=$value_trash->tendangnhap?></td>
                 <?php $groupadmin = (new GroupAdmin())->find($value_trash->manhom); ?>
                 <td class=""><?=$value_trash->manhom==$groupadmin[0]->id?$groupadmin[0]->ten:''?></td>
                 <td>
                  <div class="btn-group" role="group" align="right">
                   <a type="button" href="<?=href('admin','restore',['id' => $value_trash->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-exchange" data-toggle="tooltip" title="Khôi phục" aria-hidden="true"></i></a>
                   <a type="button" name="needDelete" href="<?=href('admin','permanently',['id' => $value_trash->id])?>" class="btn btn-danger waves-effect waves-light btn-delete" data-id="" data-title=""><i class="fa fa-trash" data-toggle="tooltip" title="Xoá vĩnh viễn" aria-hidden="true"></i></a>
                 </div>
               </td>
             </tr>
           <?php }?>
         </table>
       </div>
     <?php } else { ?>
       <div align="center"><p>Thùng rác rổng</p></div>
     <?php } ?>
   </div>
 </div>
</div>
</div>
</div>
<script type="text/javascript" charset="utf8">
	// load datatable
	$('#table-admin-list').DataTable({
		"language" : {
			"decimal":        "",
			"emptyTable":     "Không có sản phẩm nào trong database",
			"info":           "Hiển thị _START_ đến _END_ trong số _TOTAL_ bản ghi",
			"infoEmpty":      "Hiển thị 0 đến 0 trong số 0 bản ghi",
			"infoFiltered":   "(Lọc từ _MAX_ total bản ghi)",
			"infoPostFix":    "",
			"thousands":      ",",
			"lengthMenu":     "Hiển thị _MENU_ bản ghi",
			"loadingRecords": "Đang xử lý...",
			"processing":     "Processing...",
			"search":         "Tìm kiếm:",
			"zeroRecords":    "Không tìm thấy kết quả",
			"paginate": {
				"first":      "Đầu tiên",
				"last":       "Cuối cùng",
				"next":       "Tiếp",
				"previous":   "Quay lại"
			},
			"aria": {
				"sortAscending":  ": activate to sort column ascending",
				"sortDescending": ": activate to sort column descending"
			}
		}

	});

	$(document).ready(function(){
		$("#buttonSaveUser").click(function(){
			// set time delay when click button submit
			var that = $(this);
			that.attr('disabled', true);
			var timer = setTimeout(function() {
				that.attr('disabled', false);
			}, 3000);

			$.ajax({
				url    	: "index.php?controller=admin&action=ajax",
				method 	: "post",
				data   	: {},
				cache  	: false,
				success : function(response) {
					var user_reponse = JSON.parse(response);
					if(user_reponse.status == "success") {
						alertify.success(user_reponse.message);
					} else {
						alertify.error(user_reponse.message);
					}

				}
			})

		});
		
	});

  $('.reset_password').click(function(){
    var xacnhan = confirm('Chắc chắn bạn muốn đặt về mật khẩu mặc định (12345)');
    if(xacnhan){
      var _id = $(this).data('id');

      $.ajax({
        url     : "index.php?controller=admin&action=reset_password",
        method  : "POST",
        data    : {reset_password_id:_id},
        type    : "json",
        cache   : false,
        success : function(response) {
          var myJson = JSON.parse(response);
          if(myJson.status == 'success'){
            alertify.success(myJson.message);
            $('#reset_password_'+_id).prop("disabled", "disabled");
            $('#reset_password_'+_id).removeAttr("title");

          }else{
            alertify.danger(myJson.message);
          }
        }
      })
    }else{
      alertify.warning('Đã huỷ bỏ');
    }

  });
</script>