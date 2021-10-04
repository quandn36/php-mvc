<!--page content -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<!--  -->
				<div class="col-9">
					<div class="card">
						<div class="card-body">
							<form action="<?=href('groupadmin','store')?>" method="POST">
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Tên<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="text" data-validate-words="2" id="ten" name="ten" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2  label-align">Mô tả<span class="required">*</span></label>
									<div class="col-md-10">
										<textarea required="required" id="mo_ta_chi_tiet" name='mota'></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
							<div class="card-body">
								<label for="">Hình đại diện</label>                    
								<img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%;" src="<?=asset('images/small/img-1.jpg')?>" data-holder-rendered="true">
								<input type="hidden" id="url_hinhdaidien" name="url_hinhdaidien">
								<button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhdaidien')" class="btn btn-outline-primary waves-effect waves-light">
									Chọn hình
								</button>
							</div>
						</div><br>
						<div class="card">
							<div class="card-body">
								<div class="col-12" style="padding:0;">
									<button type='submit' style="width: 100%;" class="btn btn-primary">Lưu</button>
									<button type='reset' style="width: 100%;" class="btn btn-success" onClick="window.location='index.php?controller=groupadmin&action=index';">Huỷ bỏ</button>
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
<?=ck_replace('mo_ta_chi_tiet',200)?>