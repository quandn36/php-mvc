
<div class="row">
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
								<th scope="col">Mã nhóm</th>
								<th scope="col">Trạng thái </th>
								<th scope="col">Chỉnh sửa quyền</th>
							</tr>
						</thead>

						<tbody>
							<?php
							foreach($list as $value)
							{
								?>
								<tr >
									<td class=""><img src="<?=asset($value->avt?$value->avt:'public/images/no-image.png')?>" style="width: 42px; border-radius: 3px; height: 42px;" alt=""></td>
									<td class=""><?=$value->id?></td>
									<td class=""><?=$value->ten?></td>
									<td class=""><?=$value->tendangnhap?></td>
									<?php $groupadmin = (new groupadmin())->find($value->manhom); ?>
									<td class=""><?=$value->manhom==$groupadmin[0]->id?$groupadmin[0]->ten:''?></td>
									<td class="a-right a-right "><?=$value->trangthai==1?'<span class="badge badge-success">Kích hoạt</span>':'<span class="badge badge-danger">Khoá</span>'?></td>
									<td>
										<div class="btn-group" role="group" >
											<a type="button" href="<?=href('role','createrole',['id' => $value->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
										</div>
									</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
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
</script>