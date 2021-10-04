<li><a href="<?=href('hethong','index')?>"><i class="fa fa-home"></i> Trang tổng quan </a></li>
<li><a><i class="fa fa-user" aria-hidden="true"></i> Quản lý quản trị <span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="<?=href('admin','index')?>">Danh sách quản trị</a></li>
    <li><a href="<?=href('admin','create')?>">Thêm quản trị</a></li>
  </ul>
</li>
<li><a><i class="fa fa-product-hunt"></i> Quản lý sản phẩm <span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="<?=href('sanpham','index')?>">Danh sách sản phẩm</a></li>
    <li><a href="<?=href('sanpham','create')?>">Thêm sản phẩm</a></li>
  </ul>
</li>
<li><a><i class="fa fa-truck" aria-hidden="true"></i> Quản lý nhà cung cấp <span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="<?=href('nhacungcap','index')?>">Danh sách nhà cung cấp</a></li>
    <li><a href="<?=href('nhacungcap','create')?>">Thêm nhà cung cấp</a></li>
  </ul>
</li>
<li><a><i class="fa fa-user" aria-hidden="true"></i> Quản lý khách hàng  <span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="<?=href('user','index')?>">Danh sách khách hàng</a></li>
    <li><a href="<?=href('user','create')?>">Thêm khách hàng</a></li>
  </ul>
</li>
<li><a><i class="fa fa-users" aria-hidden="true"></i> Quản lý nhóm quản trị <span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="<?=href('groupadmin','index')?>">Danh sách nhóm quản trị</a></li>
    <li><a href="<?=href('groupadmin','create')?>">Thêm nhóm quản trị</a></li>
  </ul>
</li>
<li><a><i class="fa fa-snapchat-square" aria-hidden="true"></i> Quản lý loại sản phẩm<span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="<?=href('typeproduct','index')?>">Danh sách loại sản phẩm</a></li>
    <li><a href="<?=href('typeproduct','create')?>">Thêm loại sản phẩm</a></li>
  </ul>
</li>
<li><a><i class="fa fa-snapchat-square" aria-hidden="true"></i>Phân quyền<span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="<?=href('role','index')?>">Danh sách quyền</a></li>
    <li><a href="<?=href('role','privilege')?>">Cấp quyền user</a></li>
  </ul>
</li>
<li><a><i class="fa fa-archive" aria-hidden="true"></i> Quản lý đơn hàng <span class="fa fa-chevron-down"></span></a>
  <ul class="nav child_menu">
    <li><a href="<?=href('order','index')?>">Danh sách đơn hàng</a></li>
    <!-- <li><a class="showAddModel" data-toggle="modal" data-target="#exampleModal">add</a></li> -->
  </ul>
</li>