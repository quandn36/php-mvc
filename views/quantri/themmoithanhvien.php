<div class="row" style="display: unset;">
	<!-- bat dau form -->
	<form action="<?=href('admin','store')?>" method="POST">
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Tên</label>
						<div class="col-md-9 col-sm-9 ">
							<input required type="text" name="ten" value="" class="form-control">
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Tên đăng nhập</label>
						<div class="col-md-9 col-sm-9 ">
							<input required  type="text" required name="tendangnhap"  value="" class="form-control" >
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Địa chỉ</label>
						<div class="col-md-9 col-sm-9 ">
							<input required type="text" name="dia_chi" required value="" class="form-control">
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Số điện thoại</label>
						<div class="col-md-9 col-sm-9 ">
							<input required type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" name="so_dien_thoai" required value="" class="form-control">
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Mật khẩu</label>
						<div class="col-md-9 col-sm-9 ">
							<input type="text" name="matkhau" required value="" class="form-control" >
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3 col-sm-3 ">Mã nhóm</label>
						<div class="col-md-9 col-sm-9 ">
							<select name="manhom" class="form-control" class="c-select" required>
								<?php foreach($nhomQuanTri as $nqt) {?>
									<option value="<?=$nqt->id??''?>">> <?=$nqt->ten??''?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 " required>Trạng thái</label>
						<div class="col-md-9 col-sm-9 ">
							<div class="radio">
								<label>
									<input type="radio" checked value="1" id="optionsRadios1" name="trangthai"> Kích hoạt
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" value="2" id="optionsRadios2" name="trangthai"> Khoá
								</label>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
					<label>Hình đại diện</label> 
					<img alt="images product" style="width: 100%;" src="<?=asset('images/small/img-1.jpg')?>" >
					<input type="hidden" id="url_hinhdaidien" value="" name="url_hinhdaidien">
					<input type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click me choose image" style="width: 100%;" id="choose-image-cover" onclick="openfile('url_hinhdaidien');" value="choose" >
				</div>

			</div><br>
			<div class="card">
				<div class="card-body">
					<div class="form-group">
						<input name="submitUpdate" type="submit" style="width: 100%;" value="Thêm mới" class="btn btn-success" />
						<button type="button" onClick="window.location='index.php?controller=admin&action=index';" style="width: 100%;" class="btn btn-secondary">Bỏ qua</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>