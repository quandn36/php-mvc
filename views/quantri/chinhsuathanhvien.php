<div class="row" style="display: unset;">
	<div class="col-md-12 col-sm-12  ">
		<div class="table-responsive" style="overflow-x: unset;">

			<form action='index.php?controller=admin&action=update&id_update=<?=$_GET["id"]?>' enctype="multipart/form-data" method="POST" class="form-horizontal form-label-left">
				<?php foreach($userUpdate as $value) { ?>
					<div class="row">

						<div class="col-9">
							<div class="card">
								<div class="card-body">
									<div class="form-group row ">
										<label class="control-label col-md-3 col-sm-3 ">Mã</label>
										<div class="col-md-9 col-sm-9 ">
											<input type="text" disabled value="<?=$value->id??''?>" class="form-control">
										</div>
									</div>
									<div class="form-group row ">
										<label class="control-label col-md-3 col-sm-3 ">Tên đăng nhập</label>
										<div class="col-md-9 col-sm-9 ">
											<input required  type="text" readonly  value="<?=$value->tendangnhap??''?>" class="form-control" >
										</div>
									</div>
									<div class="form-group row ">
										<label class="control-label col-md-3 col-sm-3 ">Tên</label>
										<div class="col-md-9 col-sm-9 ">
											<input required type="text" name="ten" required value="<?=$value->ten??''?>" class="form-control">
										</div>
									</div>
									<div class="form-group row ">
										<label class="control-label col-md-3 col-sm-3 ">Địa chỉ</label>
										<div class="col-md-9 col-sm-9 ">
											<input required type="text" name="dia_chi" required value="<?=$value->dia_chi??''?>" class="form-control">
										</div>
									</div>
									<div class="form-group row ">
										<label class="control-label col-md-3 col-sm-3 ">Số điện thoại</label>
										<div class="col-md-9 col-sm-9 ">
											<input required type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" name="so_dien_thoai" required value="<?=$value->so_dien_thoai??''?>" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3 col-sm-3 ">Mã nhóm</label>
										<div class="col-md-9 col-sm-9 ">
											<select name="manhom" class="form-control" required class="c-select">
												<?php foreach($nhomQuanTri as $nqt) {?>
													<option <?=$value->manhom==$nqt->id?'selected':''?> value="<?=$nqt->id??''?>">> <?=$nqt->ten??''?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3 col-sm-3 ">Trạng thái</label>
										<div class="col-md-9 col-sm-9 ">
											<select name="trangthai" class="form-control" required>
												<option <?=$value->trangthai==1?'selected':''?> value="1">Kích hoạt</option>
												<option <?=$value->trangthai==2?'selected':''?> value="2">Khoá</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
								<div class="card-body">
									<div class="form-group row " >
										<label>Hình đại diện</label>
										<div class="">
											<img alt="images product" style="width: 100%;" src="<?=asset($value->avt?$value->avt:'images/small/img-1.jpg')?>" data-holder-rendered="true">
											<input type="hidden" id="url_hinhdaidien" name="url_hinhdaidien" value="<?=$value->avt?>">
											<button type="button" style="width: 100%;" id="choose-image-cover" onclick="openfile('url_hinhdaidien')" class="btn btn-outline-primary waves-effect waves-light">
												Chọn hình
											</button>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="card">
								<div class="card-body">
									<div class="btn-submit-canel">
										<div class="btnChinhSuaThanhVien" >
											<button name="submitUpdate" type="submit" value="" style="width: 100%;" class="btn btn-success">Cập nhật</button>
											<button type="button" style="width: 100%;" onClick="window.location='index.php?controller=admin&action=index';" class="btn btn-secondary">Huỷ</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</form>
		</div>
	</div>
</div>

