<div class="col-md-12 col-sm-12  ">
	<div class="x_panel">
		<div class="x_content">
			<div class="table-responsive">
				<div class="table-responsive">
					<table class="table table-hover" id="table-user-list">
						<thead class="thead-light">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Hình đại diện</th>
								<th scope="col">Tên</th>
								<th scope="col">Tên đăng nhập</th>
								<th scope="col">Email</th>
								<th scope="col">Địa chỉ</th>
								<th scope="col">Điện thoại</th>
								<th scope="col" >Trạng thái</th>
								<th scope="col">Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($nguoidung as $uservalue): ?>
								<tr>
									<td><?=$uservalue->id??''?></td>
									<td><img src="<?=asset($uservalue->hinhdaidien?$uservalue->hinhdaidien:'images/no-image.png')?>" style="width:40px; border-radius: 4px;" alt=""></td>
									<td><?=$uservalue->fullname??''?></td>
									<td><?=$uservalue->username??''?></td>
									<td><?=$uservalue->email??''?></td>
									<td><?=$uservalue->address??''?></td>
									<td><?=$uservalue->tel??''?></td>
									<td ><?=$uservalue->trangthai==1?'<span class="badge badge-success">Kích hoạt</span>':'<span class="badge badge-danger">Khoá</span>'?></td>
									<td>
										<div class="btn-group" role="group" >

											<a type="button" data-id="<?=$uservalue->id??''?>" id="" class="btn btn-info waves-effect waves-light button_info" title="Hello World!" data-toggle="modal" data-target="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
											<a type="button" href="<?=href('user','edit',['id' => $uservalue->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<a type="button" name="needDelete" href="<?=href('user','delete',['id' => $uservalue->id])?>" onclick="return confirm('Bạn muốn xoá `<?=$uservalue->username??''?>`?');" class="btn btn-danger waves-effect waves-light btn-delete" data-id="" data-title=""><i class="fa fa-trash" aria-hidden="true"></i></a>

										</div>	
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<a data-toggle="tooltip" title="Thùng rác"><i class="fa fa-trash" data-toggle="collapse" data-target="#collapseExample" aria-controls="collapseExample" aria-hidden="true" style="font-size: 35px; cursor: pointer;"></i>(<?=count($usertrash)?>)</a>
		<div class="collapse" id="collapseExample">
			<div class="card card-body">
				<?php if(count($usertrash)>0) { ?>
					<div class="table-responsive">
						<table class="table table-hover">
							<?php
							foreach($usertrash as $value_trash)
							{
								?>
								<tr >
									<td><?=$uservalue->id??''?></td>
									<td><img src="<?=asset($uservalue->hinhdaidien?$uservalue->hinhdaidien:'images/no-image.png')?>" style="width:40px; border-radius: 4px;" alt=""></td>
									<td><?=$uservalue->fullname??''?></td>
									<td><?=$uservalue->username??''?></td>
									<td><?=$uservalue->email??''?></td>
									<td><?=$uservalue->address??''?></td>
									<td><?=$uservalue->tel??''?></td>
									<td>
										<div class="btn-group" role="group" align="right">
											<a href="<?=href('user','restore',['id' => $value_trash->id])?>"><button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" title="Khôi phục"><i class="fa fa-exchange" aria-hidden="true" data-toggle="tooltip" title="Khôi phục"></i></button></a>
											<button type="button" name="needDelete" href="<?=href('user','permanently',['id' => $value_trash->id])?>" class="btn btn-danger waves-effect waves-light btn-delete" data-toggle="tooltip" title="Xoá vĩnh viễn"><i class="fa fa-trash"  aria-hidden="true" data-toggle="tooltip" title="Xoá vĩnh viễn"></i></button>
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
	$('#table-user-list').DataTable({

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