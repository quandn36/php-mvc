<!--page content -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<!--  -->
				<div class="col-9">
					<div class="card">
						<div class="card-body">
							<form action="<?=href('typeproduct','store')?>" method="POST">
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Tên<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="text" onchange="stralias('ten','tukhoa')" data-validate-words="2" id="ten" name="ten" required="required" />
									</div>
								</div>
								<div class="field item form-group">

									<label class="col-form-label col-md-2 label-align">Slug<span class="required">*</span></label>
									<div class="col-md-10">
										<span>https://dienthoaimoi.com/dien-thoai-moi</span>
										<input class="form-control" type="text" id="tukhoa" readonly="" name="tukhoa" value="" required="required"/>
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Mô tả<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="text" name="mota" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Danh mục<span class="required">*</span></label>
									<div class="col-md-10">
										<select name="manhom" class="form-control" class="c-select">
											<option selected value=""> Mặc định là danh mục gốc</option>
											<?php foreach($list_type_product as $value_type_product) { ?>
											<option value="<?=$value_type_product->id?>"> <?=ucfirst($value_type_product->ten)?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Tiêu đề<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="text" name="tieude" value="" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Mô tả tìm kiếm<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="text" name="motatimkiem" value="" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Tên rút gọn</label>
									<div class="col-md-10">
										<input class="form-control" type="text" data-validate-words="2" name="tenrutgon"  />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Trạng thái<span class="required">*</span></label>
									<div class="col-md-10">
										<select name="trangthai" class="form-control" class="c-select">
											<option selected value="1">Mở khoá</option>
											<option value="2">Khóa</option>
										</select>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
							<div class="card-body">
								<label for="">Icon</label>                    
								<img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%;" src="<?=asset('images/small/img-1.jpg')?>" data-holder-rendered="true">
								<input type="hidden" id="url_icon" name="url_icon">
								<button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_icon')" class="btn btn-outline-primary waves-effect waves-light">
									Chọn hình
								</button>
							</div>
						</div><br>
						<div class="card">
							<div class="card-body">
								<label for="">Hình chia sẻ</label>                    
								<img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%;" src="public/images/small/img-1.jpg" data-holder-rendered="true">
								<input type="hidden" id="url_hinhchiase" name="url_hinhchiase">
								<button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhchiase')" class="btn btn-outline-primary waves-effect waves-light">
									Chọn hình
								</button>
							</div>
						</div><br>
						<div class="card">
							<div class="card-body">
								<div class="col-12" style="padding:0;">
									<button type='submit' style="width: 100%;" class="btn btn-primary">Lưu</button>
									<button type='reset' style="width: 100%;" class="btn btn-success" onClick="window.location='index.php?controller=typeproduct&action=index';">Huỷ bỏ</button>
								</div>
							</div>
						</div><br>
						
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
</style>
<!-- /page content -->
<?=ck_replace('mo_ta_san_pham',300)?>
<?=ck_replace('mo_ta_chi_tiet',400)?>
<script>
	$(document).ready(function() {
		stralias('ten','slug');
	});
</script>