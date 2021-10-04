<div class="col-md-12 col-sm-12  ">
	<div class="x_panel">
		<div class="x_content">
			<div class="table-responsive">
				<table class="table table-hover" id="table-product-list">
					<thead>
						<tr class="thead-light">
							<th scope="col">Hình đại diện</th>
							<th scope="col">Mã</th>
							<th scope="col">Tên</th>
							<th scope="col">Số lượng</th>
							<th scope="col">Giá</th>
							<th scope="col">Giá khuyến mãi</th>
							<th scope="col">Hành động</th>
						</tr>
					</thead>

					<tbody>
						<?php
						foreach($list as $value)
						{
							?>
							<tr>
								<td><img style="width: 42px; border-radius: 3px; height: 42px;" src="<?=asset($value->hinhdaidien?$value->hinhdaidien:'images/no-image.png')?>" alt=""></td>
								<td><?=$value->id?></td>
								<td><?=$value->ten?></td>
								<td><?=$value->soluong?></td>
								<td><?=number_format($value->gia)?><sup>đ</sup></td>
								<td><?=number_format($value->gia_khuyen_mai)?><sup>đ</sup></td>
								<td>
									<div class="btn-group" role="group" >

										<a type="button" data-id="<?=$value->id??''?>" id="button_info" class="btn btn-info waves-effect waves-light button_info" data-toggle="modal" data-target="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
										<a type="button" href="<?=href('sanpham','edit',['id' => $value->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
										<a type="button" name="needDelete" href="<?=href('sanpham','delete',['id' => $value->id])?>" onclick="return confirm('Bạn muốn xoá `<?=$value->ten??''?>`?');" class="btn btn-danger waves-effect waves-light btn-delete" data-id="" data-title=""><i class="fa fa-trash" aria-hidden="true"></i></a>

									</div>
								</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		<a data-toggle="tooltip" title="Thùng rác"><i class="fa fa-trash" data-toggle="collapse" data-target="#collapseExample" aria-controls="collapseExample" aria-hidden="true" style="font-size: 35px; cursor: pointer;"></i>(<?=count($producttrash)?>)</a>
		<div class="collapse" id="collapseExample">
			<div class="card card-body">
				<?php if(count($producttrash)>0) { ?>
					<div class="table-responsive">
						<table class="table table-hover">
							<?php
							foreach($producttrash as $value_trash)
							{
								?>
								<tr >
									<td><img style="width: 42px; border-radius: 3px; height: 42px;" src="<?=asset($value_trash->hinhdaidien?$value_trash->hinhdaidien:'public/images/no-image.png')?>" alt=""></td>
									<td><?=$value_trash->id?></td>
									<td><?=$value_trash->ten?></td>
									<td><?=$value_trash->slug?></td>
									<td><?=$value_trash->soluong?></td>
									<td><?=number_format($value_trash->gia)?><sup>đ</sup></td>
									<td>
										<div class="btn-group" role="group" align="right">
											<a type="button" href="<?=href('sanpham','restore',['id' => $value_trash->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-exchange" data-toggle="tooltip" title="Khôi phục" aria-hidden="true"></i></a>
											<a type="button" name="needDelete" href="<?=href('sanpham','permanently',['id' => $value_trash->id])?>" class="btn btn-danger waves-effect waves-light btn-delete" data-id="" data-title=""><i class="fa fa-trash" data-toggle="tooltip" title="Xoá vĩnh viễn" aria-hidden="true"></i></a>
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

<script type="text/javascript" charset="utf8">
	$('#table-product-list').DataTable({
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