<!--page content -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<!--  -->
				<div class="col-9">
					<div class="card">
						<div class="card-body">
							<?php foreach ($itemNhacungcap as $nccvalue){ ?>
								<form action="<?=href('nhacungcap','update',['id'=>$nccvalue->id])?>" method="POST">

									

									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Tên<span class="required">*</span></label>
										<div class="col-md-10">
											<input class="form-control" value="<?=$nccvalue->ten?>" type="text" data-validate-words="2" name="ten" required="required" />
										</div>
									</div>
									<div class="field item form-group">
										<label class="col-form-label col-md-2 label-align">Chọn trạng thái<span class="required">*</span></label>
										<div class="col-md-10">
											<select name="trangthai" class="custom-select">
												<option style="color: green !important;" value="1" <?=$nccvalue->trangthai==1?'selected':''?>>Kích hoạt</option>
												<option style="color: red !important;" value="2" <?=$nccvalue->trangthai==2?'selected':''?> >Khoá</option>
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
									<img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%;" src="<?=asset($nccvalue->hinhdaidien?$nccvalue->hinhdaidien:'images/small/img-1.jpg')?>" data-holder-rendered="true">
									<input type="hidden" id="url_hinhdaidien" value="<?=$nccvalue->hinhdaidien?>" name="url_hinhdaidien">
									<button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhdaidien')" class="btn btn-outline-primary waves-effect waves-light">
										Chọn hình
									</button>
								</div>
							</div><br>
							<div class="card">
								<div class="card-body">
									<div class="col-12" style="padding:0;">
										<button type='submit' style="width: 100%;" class="btn btn-primary">Lưu</button>
										<button type='reset' style="width: 100%;" class="btn btn-success" onClick="window.location='index.php?controller=nhacungcap&action=index';">Huỷ bỏ</button>
									</div>
								</div>
							</div><br>

						</div>
					</form>
				<?php } ?>
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