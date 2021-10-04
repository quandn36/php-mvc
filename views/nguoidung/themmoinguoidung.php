<!--page content -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<!--  -->
				<div class="col-9">
					<div class="card">
						<div class="card-body">
							<form action="<?=href('user','store')?>" method="POST">
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Tên<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="text" data-validate-words="2" name="ten" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Tên đăng nhập<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="text" data-validate-words="2" name="tendangnhap" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Mật khẩu<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" id="password" type="password" data-validate-words="2" name="password" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Email<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="email" data-validate-words="2" name="email" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Số điện thoại<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="number" data-validate-words="2" name="tel" required="required" />
									</div>
								</div>
								<div class="field item form-group">
									<label class="col-form-label col-md-2 label-align">Địa chỉ<span class="required">*</span></label>
									<div class="col-md-10">
										<input class="form-control" type="text" data-validate-words="2" name="diachi" required="required" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card"><div class="card-body">
							<label for="">Hình đại diện</label>                    
							<img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%;" src="<?=asset('images/small/img-1.jpg')?>" data-holder-rendered="true">
							<input type="hidden" id="url_hinhdaidien" name="url_hinhdaidien">
							<button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhdaidien')" class="btn btn-outline-primary waves-effect waves-light">
								Chọn hình
							</button>
						</div></div><br>
						<div class="card"><div class="card-body">
							<div class="col-12"style="padding:0;">
								<button type='submit' style="width: 100%;" class="btn btn-primary">Lưu</button>
								<button type='reset' onClick="window.location='index.php?controller=user&action=index';" style="width: 100%;" class="btn btn-success">Huỷ bỏ</button>
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
	i#togglePassword {
		float: right;
		margin-top: -24px;
		margin-right: 15px;
	}
</style>
<!-- /page content -->

<script>
	$(document).ready(function(){
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#password');

		togglePassword.addEventListener('click', function (e) {
		    // toggle the type attribute
		    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
		    password.setAttribute('type', type);
		    // toggle the eye slash icon
		    this.classList.toggle('fa-eye-slash');
		});
	});
</script>