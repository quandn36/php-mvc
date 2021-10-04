<div class="col-md-12 col-sm-12  ">
	<div class="x_panel">
		<div class="x_content">
			<div class="table-responsive">
				<div class="table-responsive-lg">
					<!--table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm-->
					<table class="table table-hover" id="table-group-admin-list">
						<thead class="thead-light">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Tên</th>
								<th scope="col">Mô tả</th>
								<th scope="col" >Trạng thái</th>
								<th scope="col">Ngày tạo</th>
								<th scope="col">Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($groupadmin as $groupvalue) { ?>
								<tr>
									<td><?=$groupvalue->id??''?></td>
									<td><?=$groupvalue->ten??''?></td>
									<td><?=$groupvalue->mota??''?></td>
									<td ><?=$groupvalue->trangthai==1?'<span class="badge badge-success">Kích hoạt</span>':'<span class="badge badge-danger">Khoá</span>'?></td>
									<td><?=$groupvalue->created_at??''?></td>
									<td>
										<div class="btn-group" role="group" >
											<a type="button" data-id="<?=$groupvalue->id??''?>" id="button_info" class="btn btn-info waves-effect waves-light button_info" data-toggle="modal" data-target="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
											<a type="button" href="<?=href('groupadmin','edit',['id' => $groupvalue->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<a type="button" name="needDelete" href="<?=href('groupadmin','delete',['id' => $groupvalue->id])?>" onclick="return confirm('Bạn muốn xoá `<?=$groupvalue->ten??''?>`?');" class="btn btn-danger waves-effect waves-light btn-delete" data-id="" data-title=""><i class="fa fa-trash" aria-hidden="true"></i></a>

										</div>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<a data-toggle="tooltip" title="Thùng rác"><i class="fa fa-trash" data-toggle="collapse" data-target="#collapseExample" aria-controls="collapseExample" aria-hidden="true" style="font-size: 35px; cursor: pointer;"></i>(<?=count($groupadmin_trash)?>)</a>
		<div class="collapse" id="collapseExample">
			<div class="card card-body">
				<?php if(count($groupadmin_trash)>0) { ?>
					<div class="table-responsive">
						<table class="table table-hover">
							<?php
							foreach($groupadmin_trash as $value_trash)
							{
								?>
								<tr >
									<td><?=$value_trash->id??''?></td>
									<td><?=$value_trash->ten??''?></td>
									<td><?=$value_trash->mota??''?></td>
									<td ><?=$value_trash->trangthai==1?'<span class="badge badge-success">Kích hoạt</span>':'<span class="badge badge-danger">Khoá</span>'?></td>
									<td><?=$value_trash->created_at??''?></td>
									<td>
										<div class="btn-group" role="group" align="right">
											<a type="button" href="<?=href('groupadmin','restore',['id' => $value_trash->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-exchange" data-toggle="tooltip" title="Khôi phục" aria-hidden="true"></i></a>
											<a type="button" name="needDelete" href="<?=href('groupadmin','permanently',['id' => $value_trash->id])?>" class="btn btn-danger waves-effect waves-light btn-delete" data-id="" data-title=""><i class="fa fa-trash" data-toggle="tooltip" title="Xoá vĩnh viễn" aria-hidden="true"></i></a>
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

<script>
	$("#table-group-admin-list").dataTable({
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