
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<!--  -->
				<div class="col-9">
					<div class="card">
						<?php foreach ($order_edit as $value_edit): ?>
							<div class="card-body">
								<form action="<?=href('order','update',['order_id'=>$value_edit->id])?>" method="POST">
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">ID<span class="required">*</span></label>
										<div class="col-md-10">
											<input class="form-control" type="text" data-validate-words="2" disabled value="<?=$value_edit->id??''?>" required="required" />
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Mã đơn hàng<span class="required">*</span></label>
										<div class="col-md-10">
											<input class="form-control" type="text" data-validate-words="2" disabled value="<?=$value_edit->sodonhang??''?>" required="required" />
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Trạng thái đơn hàng<span class="required">*</span></label>
										<div class="col-md-10" > 
											<div class="" style="display: flex;">
												<select data-id="<?=$value_edit->id?>" <?=$value_edit->trangthaidonhang==1?'disabled':''?> class="form-control reset_status" name="select_order_status" id="change_status_order" >
													<option <?php if($value_edit->trangthaidonhang==3) echo 'selected'; echo ''; ?> value="3" >Đang chuẩn bị</option>
													<option <?php if($value_edit->trangthaidonhang==2) echo 'selected'; echo ''; ?> value="2" >Đã giao</option>
													<option <?php if($value_edit->trangthaidonhang==1) echo 'selected'; echo ''; ?> value="1" >Hoàn thành</option>
												</select>
												<button type="reset" class="reset_status" onclick="Reset();" style="height: 38px; margin-right: 0;">Reset</button>
											</div>
										</div>
									</div>

								</div>
							<?php endforeach ?>
						</div>
						<br>
						
						<!-- <div class="card card-body"> -->
							<ul class="list-group">
								<?php foreach ($order_detail as $value_order_detail): ?>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<img src="<?=asset($value_order_detail->hinhdaidien)?>" alt="" style="width: 30px; height: 30px;">
										<?=$value_order_detail->ten?> (MÃ: <?=$value_order_detail->masanpham?>)

										<span class="badge badge-primary badge-pill"><?=$value_order_detail->soluong?></span>
									</li>
								<?php endforeach ?>
							</ul>
							<!-- </div> -->
						</div>
						<div class="col-3">
							<div class="card"><div class="card-body">
								<div class="col-12" style="padding:0;">
									<button type='submit' style="width: 100%;" class="btn btn-primary">Lưu</button>
									<button type='reset' style="width: 100%;" onclick="window.location='index.php?controller=order&action=index';" class="btn btn-success">Huỷ bỏ</button>
								</div>
							</div></div><br>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	.required {
		color: red;
	}
	.reset_status {
		display: inline-block;
	}
</style>

<script>

	// set sau khi chon hoan thanh nhung cancel
	$('#change_status_order').ready(function(){
		var option_before = Number($('#change_status_order').val());
		$('#change_status_order').change(function(){
			var number_status = $(this).val();
			
			if(number_status==1){
				$.confirm({
					title: 'Notice!',
					content: 'Bạn sẽ không thể thay đổi khi chọn hoàn thành đơn hàng',
					buttons: {
						ok: function () {
						},
					
					}
				});
			}
		});
	});

	// nut reset select option
	$('#change_status_order').ready(function(){
		var option_before 			= $('#change_status_order').val();
		function Reset() {
			var dropDown 			= document.getElementById("change_status_order");
			dropDown.selectedIndex 	= option_before;
		}
	});
	
</script>