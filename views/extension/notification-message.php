<!-- session thong bao trong hàm chuyen trang -->
<?php 
if(isset($_SESSION['redirect_thongbao'])){ 

	?>
	<div class="alert alert-success">
		<div><?=$_SESSION['redirect_thongbao']??''?></div>
	</div>
	<?php 
	unset($_SESSION['redirect_thongbao']);
} elseif(isset($_SESSION['redirect_thatbai'])) {?>
	<div class="alert alert-danger">
		<div><?=$_SESSION['redirect_thatbai']??''?></div>
	</div>
	<?php 
	unset($_SESSION['redirect_thatbai']);
} ?>
<br />
<style>
	.alert.alert-danger {
		text-align:center;
		position: fixed;
		bottom: 3px;
		border-radius: 0px;
	}

	.alert.alert-success {
		text-align:center;
		position: fixed;
		left: 20px;
		border-radius: 0px;
	}
</style>