<div class="row" style="display: inline-block;width: 100%;" >
  <div class="tile_count">

    <div class="col-md-3 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Tổng khách hàng</span>
      <div class="count"><?=number_format($total_user->total??0)?></div>
    </div>

    <div class="col-md-3 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Tổng sản phẩm</span>
      <div class="count"><?=number_format($total_product->total??0)?></div>
    </div>

    <div class="col-md-3 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Tổng đơn hàng</span>
      <div class="count green"><?=number_format($total_order->total??0)?></div>
    </div>

    <div class="col-md-3 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Tổng loại sản phẩm</span>
      <div class="count"><?=number_format($total_type_product->total??0)?></div>
    </div>
      
  </div>
</div>