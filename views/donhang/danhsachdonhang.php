<div class="col-md-12 col-sm-12  ">
	<div class="x_panel">
		<div class="x_content">
			<div class="table-responsive">
				<div class="table-responsive-lg">
					<!--table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm-->
					<table class="table table-hover" id="table-order-list">
						<thead class="thead-light">
							<tr>
								<th scope="col">ID</th>
								<th scope="col" >Ngày đặt</th>
								<th scope="col" >Số đơn hàng</th>
								<th scope="col" >Mã khách hàng</th>
								<th scope="col" >Tổng tiền</th>
								<th scope="col" >Phí ship</th>
								<th scope="col" >Trạng thái đơn hàng</th>
								<th scope="col">Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($orderlist as $order): ?>
								<tr>
									<td class="id_order_status" data-id="<?=$order->id?>"><?=$order->id??''?></td>
									
									<td><?=$order->ngaydat??''?></td>
									<td><?=$order->sodonhang??''?></td>
									<td><?=$order->makhachhang??''?></td>
									<td><?=$order->tongtien??''?></td>
									<td><?=$order->phiship??''?></td>
									<td>
										<?php
										if($order->trangthaidonhang==3){
											echo '<span class="badge badge-danger">Đang chuẩn bị</span>';
										}elseif($order->trangthaidonhang==2){
											echo '<span class="badge badge-warning">Đang giao</span>';
										}else{
											echo '<span class="badge badge-primary">Hoàn thành</span>';
										}
										?>
									</td>
									<td>
										<div class="btn-group" role="group" >

											<a type="button" data-value="<?=$order->order_note?>" data-id="<?=$order->id??''?>" id="button_info" class="btn btn-info waves-effect waves-light button_info" data-toggle="modal" data-target="#modal_information"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
											<a type="button" href="<?=href('order','edit',['id' => $order->id])?>" class="btn btn-success waves-effect waves-light" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<a type="button" name="needDelete" href="<?=href('order','delete',['id' => $order->id])?>" onclick="return confirm('Bạn muốn xoá đơn hàng `<?=$order->sodonhang??''?>`?');" class="btn btn-danger waves-effect waves-light btn-delete" data-id="" data-title=""><i class="fa fa-trash" aria-hidden="true"></i></a>

										</div>
									</td>

								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div>
		<h2>Đơn hàng đã hoàn thành</h2>
	</div>
	<div class="x_panel">
		<div class="x_content">
			<div class="table-responsive">
				<div class="table-responsive-lg">
					<!--table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm-->
					<table class="table table-hover" id="table-order-complete">
						<thead class="thead-light">
							<tr>
								<th scope="col">ID</th>
								<th scope="col" >Ngày đặt</th>
								<th scope="col" >Số đơn hàng</th>
								<th scope="col" >Mã khách hàng</th>
								<th scope="col" >Tổng tiền</th>
								<th scope="col" >Phí ship</th>
								<th scope="col" >Trạng thái đơn hàng</th>
								<th scope="col">Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($don_hang_da_hoan_thanh as $value_don_hang_da_hoan_thanh): ?>
								<tr>
									<td class="id_order_status" data-id="<?=$value_don_hang_da_hoan_thanh->id?>"><?=$value_don_hang_da_hoan_thanh->id??''?></td>
									
									<td><?=$value_don_hang_da_hoan_thanh->ngaydat??''?></td>
									<td><?=$value_don_hang_da_hoan_thanh->sodonhang??''?></td>
									<td><?=$value_don_hang_da_hoan_thanh->makhachhang??''?></td>
									<td><?=$value_don_hang_da_hoan_thanh->tongtien??''?></td>
									<td><?=$value_don_hang_da_hoan_thanh->phiship??''?></td>
									<td>
										<?php
										if($value_don_hang_da_hoan_thanh->trangthaidonhang==3){
											echo '<span class="badge badge-danger">Đang chuẩn bị</span>';
										}elseif($value_don_hang_da_hoan_thanh->trangthaidonhang==2){
											echo '<span class="badge badge-warning">Đang giao</span>';
										}else{
											echo '<span class="badge badge-primary">Hoàn thành</span>';
										}
										?>
									</td>
									<td>
										<div class="btn-group" role="group" >

											<a type="button" data-value="<?=$value_don_hang_da_hoan_thanh->order_note?>" data-id="<?=$value_don_hang_da_hoan_thanh->id??''?>" id="button_info" class="btn btn-info waves-effect waves-light button_info" data-toggle="modal" data-target="#modal_information"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
											

										</div>

									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script language="javascript"> 
	// load datable
	$('#table-order-complete').DataTable({
		"language" : {
			"decimal":        "",
			"emptyTable":     "Chưa có đơn hàng nào",
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
	$('#table-order-list').DataTable({
		"language" : {
			"decimal":        "",
			"emptyTable":     "Chưa có đơn hàng nào",
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


	$(document).ready(function(){
	    //do some think
	});

	// lay thong tin chi tiet don hang
	$('.button_info').on('click',function() {

		$('#FormModalInvoice').children().remove();
		var _url 		= "index.php?controller=orderdetail&action=index";
		var _id 	    = $(this).data('id');
		var _order_note = $(this).data('value');
		var _data 	    = {'id':_id,url:_url};
		// console.log(_id);

		$.ajax({
			url      : _url,
			method   : "post",
			data     : _data,
			cache	 : false,
			success  : function(response){

				var len = response.length;
				// alert();
				var myJSON = JSON.parse(response);
				

				var trProduct = '';
				var _total_price = 0;
				for (var i = 0; i < myJSON.length; i++) {
					_total_price += Number(myJSON[i].gia);
					trProduct += 	'<tr>'+
					'<td><img style="width:40px;" src="public/'+myJSON[i].hinhdaidien+'"></td>'+
					'<td>'+myJSON[i].soluong+'</td>'+
					'<td>'+myJSON[i].ten+'</td>'+
					'<td>'+myJSON[i].masanpham+'</td>'+
					'<td>'+new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'VND' }).format(myJSON[i].gia)+'</td>'+
					'</tr>';


					var html = 	'<section class="content invoice">' +
					'<div class="row invoice-info">' +
					'<div class="col-sm-6 invoice-col">' +
					'To' +
					'<address>' +
					'<strong>John Doe</strong>' +
					'<br>795 Freedom Ave, Suite 600'+
					'<br>New York, CA 94107'+
					'<br>Phone: 1 (804) 123-9876'+
					'<br>Email: jon@ironadmin.com'+
					'</address>'+
					'</div>'+
					'<!-- /.col -->'+
					'<div class="col-sm-6 invoice-col">'+
					'<b>Invoice #007612</b>'+
					'<br>'+
					'<br>'+
					'<b>Order ID:</b> '+ _id +
					'<br>'+
					'<b>Payment Due:</b> 2/22/2014'+
					'<br>'+
					'<b>Account:</b> 968-34567'+
					'</div>'+
					'</div>'+
					'<div class="row">'+
					'<div class="  table">'+
					'<table class="table table-striped">'+
					'<thead>'+
					'<tr>'+
					'<th>Hình</th>'+
					'<th>Số lượng</th>'+
					'<th>Sản phẩm</th>'+
					'<th>Mã sản phẩm #</th>'+
					'<th>tạm tính</th>'+
					'</tr>'+
					'</thead>'+
					'<tbody>'+ trProduct +

					'</tbody>'+
					'</table>'+
					'</div>'+
					'</div>'+

					'<div class="row">'+
					'<div class="col-md-6">'+
					'<p class="lead">Payment Methods:</p>'+
					'<img src="public/production/images/visa.png" alt="Visa">'+
					'<img src="public/production/images/mastercard.png" alt="Mastercard">'+
					'<img src="public/production/images/american-express.png" alt="American Express">'+
					'<img src="public/production/images/paypal.png" alt="Paypal">'+
					'<div class="row">'+
					'<div class="col-md-12">'+
					'<p style="padding:10px 0px;" class="lead">Order Note:</p>'+
					' <textarea style="height:auto;min-height:100px;width:100%">'+
					_order_note +
					'</textarea>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'<div class="col-md-6">'+
					'<p class="lead">Amount Due 2/22/2014</p>'+
					'<div class="table-responsive">'+
					'<table class="table">'+
					'<tbody>'+
					'<tr>'+
					'<th style="width:50%">Total:</th>'+
					'<td>'+new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'VND' }).format(_total_price)+'</td>'+
					'</tr>'+
					'</tbody>'+
					'</table>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</section>';
				// console.log(html);
			}
			$('#FormModalInvoice').append(html);

		},
	});

	});


	// chuyen trang thai thong tin don hang
	var status_before = $('.select_order_status').val();
	$('.select_order_status').change(function(){
		var _order_status = $(this).val();
		var _id_change_status = $(this).data('id');
		var _data = {
			id            :  _id_change_status,
			order_status  : _order_status,
		};
		if(_order_status == 1){
			confirm = confirm('Bạn sẽ không thể thay đổi sau thao tác này');
			if(confirm) {
				$(this).prop('disabled',true);
				$.ajax({
					url     : "index.php?controller=order&action=update",
					method  : "POST",
					data    : _data,
					success : function(response) {
						var myData = JSON.parse(response);

						if(myData.status == 'success') {
							alertify.success(myData.message);
						} else {
							alertify.success(myData.message);
						}


					}
				});
			}else{
				$(this).prop('disabled',false);
			}
			
		}else{
			$.ajax({
				url     : "index.php?controller=order&action=update",
				method  : "POST",
				data    : _data,
				success : function(response) {
					var myData = JSON.parse(response);

					if(myData.status == 'success') {
						alertify.success(myData.message);
					} else {
						alertify.success(myData.message);
					}


				}
			});
		}
	});


</script>
