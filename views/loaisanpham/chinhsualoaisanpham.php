<!--page content -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<!--  -->
				<div class="col-9">
					<div class="card">
						<div class="card-body">
							<?php foreach ($type_product_edit as $type_product) { ?>
								<form action="<?=href('typeproduct','update',['id'=>$type_product->id])?>" method="POST">
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Tên<span class="required">*</span></label>
										<div class="col-md-10">
											<input class="form-control" type="text" onchange="stralias('ten','tukhoa')" value="<?=$type_product->ten??''?>" data-validate-words="2" id="ten" name="ten" required="required" />
										</div>
									</div>

									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Slug<span class="required">*</span></label>
										<div class="col-md-10">
											<span>https://dienthoaimoi.com/dien-thoai-moi</span>
											<input class="form-control" type="text" readonly id="tukhoa" name="tukhoa" value="<?=$type_product->tukhoa??''?>" required="required" />
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Mô tả<span class="required">*</span></label>
										<div class="col-md-10">
											<input class="form-control" type="text" value="<?=$type_product->mota??''?>" name="mota" required="required" />
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Danh mục<span class="required">*</span></label>
										<div class="col-md-10">
											<select name="manhom" class="form-control" class="c-select">
												<option selected="selected" value="">Danh mục gốc</option>
												<?php foreach ($list_of_type_product as $value_type_product) { ?>
													<option <?=$value_type_product->id==$type_product->macha?'selected':''?> value="<?=$value_type_product->id??''?>"><?=ucfirst($value_type_product->ten??'')?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Tiêu đề<span class="required">*</span></label>
										<div class="col-md-10">
											<input class="form-control" type="text" name="tieude" value="<?=$type_product->tieude??''?>" required="required" />
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Mô tả tìm kiếm<span class="required">*</span></label>
										<div class="col-md-10">
											<input class="form-control" type="text" name="motatimkiem" value="<?=$type_product->motatimkiem??''?>" required="required" />
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Tên rút gọn</label>
										<div class="col-md-10">
											<input class="form-control" type="text" data-validate-words="2" value="<?=$type_product->tenrutgon??''?>" name="tenrutgon"  />
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Trạng thái<span class="required">*</span></label>
										<div class="col-md-10">
											<select name="trangthai" class="form-control" class="c-select">
												<option <?=$type_product->trangthai==1??'selected'?> value="1">Mở khoá</option>
												<option <?=$type_product->trangthai==2??'selected'?> value="2">Khóa</option>
											</select>
										</div>
									</div>	
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
								<div class="card-body">
									<label for="">Hình đại diện</label>                    
									<img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%;" src="<?=asset($type_product->icon?$type_product->icon:'images/small/img-1.jpg')?>" data-holder-rendered="true">
									<input type="hidden" id="url_icon" name="url_icon" value="<?=$type_product->icon??''?>">:
		<button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_icon')" class="btn btn-outline-primary waves-effect waves-light">
										Chọn hình
									</button>
								</div>
							</div><br>
							<div class="card">
								<div class="card-body">
									<label for="">Hình chi tiết</label>                    
									<img class="rounded mr-2 mb-1" alt="images product" style="width: 100%;" src="<?=asset($type_product->hinhchiase?$type_product->hinhchiase:'images/small/img-1.jpg')?>" data-holder-rendered="true">
									<input type="hidden" id="url_hinhchiase" name="url_hinhchiase" value="<?=$type_product->hinhchiase??''?>">
									<button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhchiase')" class="btn btn-outline-primary waves-effect waves-light">
										Chọn hình
									</button>
								</div>
							</div><br>
							<div class="card">
								<div class="card-body">
									<div class="col-12" style="padding:0;">
										<button type='submit' style="width: 100%;" class="btn btn-primary">Cập nhật</button>
										<button type='reset' style="width: 100%;" class="btn btn-success" onClick="window.location='index.php?controller=typeproduct&action=index';">Huỷ bỏ</button>
									</div>
								</div>
							</div><br>
								<?php } ?> 
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
	<script>
		$(document).ready(function(){
        //
    });
</script>
<!-- /page content -->
<?=ck_replace('mo_ta_san_pham',300)?>
<?=ck_replace('mo_ta_chi_tiet',400)?>