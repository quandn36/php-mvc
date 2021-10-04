<!--page content -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <!--  -->
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($listproduct as $Provalue) { ?>
                                <form action="<?=href('sanpham','update',['id'=>$Provalue->id])?>" method="POST">

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 label-align">Tên<span class="required">*</span></label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="ten" name="ten" required onchange="stralias('ten','slug')" value="<?=$Provalue->ten??''?>" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">

                                        <label class="col-form-label col-md-2 label-align">Slug<span class="required">*</span></label>
                                        <div class="col-md-10">
                                            <small id="" class="form-text text-muted">
                                                <?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']. '/day-la-slug-san-pham-mau'; ?>
                                            </small>
                                            <input class="form-control" type="text" name="slug" id='slug' value="<?=$Provalue->slug??''?>" required readonly  />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 label-align">Giá<span class="required">*</span></label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="gia_goc" id="currency-field" data-type="currency" type="text" name="gia" value="<?=number_format($Provalue->gia?$Provalue->gia:'')?>" required="required" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 label-align">Giá khuyến mãi<span class="required">*</span></label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="gia_khuyen_mai" type="text" maxlength="15" id="currency-field" value="<?=$Provalue->gia_khuyen_mai==''?$Provalue->gia_khuyen_mai:number_format($Provalue->gia_khuyen_mai)?>" data-type="currency" placeholder="" name="gia_khuyen_mai" required="required" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 label-align">Số lượng<span class="required">*</span></label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="<?=$Provalue->soluong??''?>" name="soluong" value="1" required="required" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 label-align">Nhà cung cấp<span class="required">*</span></label>
                                        <div class="col-md-10">
                                            <select name="manhacungcap" class="custom-select custom-select-sm">
                                              <option selected>Chọn nhà cung cấp</option>
                                              <?php foreach ($ncc as $nccvalue) { ?>
                                                  <option <?=$nccvalue->id == $Provalue->manhacungcap?'selected':'' ?> value="<?=$nccvalue->id?>"><?=$nccvalue->ten?></option>
                                              <?php } ?>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="field item form-group">
                                    <label class="col-form-label col-md-2 label-align">Mã loại<span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <select name="maloai" class="custom-select custom-select-sm">
                                          <option selected>Chọn mã loại</option>
                                          <?php foreach ($maloai as $maloaivalue) {?>
                                            <option <?=$maloaivalue->id == $Provalue->maloai?'selected':'' ?> value="<?=$maloaivalue->id?>"><?=$maloaivalue->ten?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-2  label-align">Mô tả ngắn<span class="required">*</span></label>
                                <div class="col-md-10">
                                    <textarea required="required" id="mo_ta_san_pham" value="" name='motangan'><?=$Provalue->mota??''?></textarea>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-2  label-align">Mô tả chi tiết<span class="required">*</span></label>
                                <div class="col-md-10">
                                    <textarea required="required" id="mo_ta_chi_tiet" value="" name='motachitiet'><?=$Provalue->motachitiet??''?></textarea>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-2 label-align">Tiêu đề</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" data-validate-words="2" value="<?=$Provalue->tieude??''?>" name="tieude"  />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-2 label-align">Từ khoá</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" data-validate-words="2" value="<?=$Provalue->tukhoa??''?>" name="tukhoa" placeholder="" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-2 label-align">Mô tả tìm kiếm</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" data-validate-words="2" value="<?=$Provalue->motatimkiem??''?>" name="motatimkiem"  />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <label  for="">Hình đại diện</label>                    
                            <img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%;" src="<?=asset($Provalue->hinhdaidien?$Provalue->hinhdaidien:'images/small/img-1.jpg')?>" data-holder-rendered="true">
                            <input type="hidden" id="url_hinhdaidien" name="url_hinhdaidien" value="<?=$Provalue->hinhdaidien??''?>">
                            <button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhdaidien')" class="btn btn-outline-primary waves-effect waves-light">
                                Chọn hình
                            </button>
                        </div>
                    </div>
                    <br>

                    <div class="card">
                        <div class="card-body">
                            <label for="">Hình chi tiết</label>                    
                            <img class="rounded mr-2 mb-1" alt="images product" style="width: 100%;" src="<?=asset($Provalue->hinhchitiet?$Provalue->hinhchitiet:'images/small/img-1.jpg')?>" data-holder-rendered="true">
                            <input type="hidden" id="url_hinhchitiet" name="url_hinhchitiet" value="<?=$Provalue->hinhchitiet??''?>">
                            <button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhchitiet')" class="btn btn-outline-primary waves-effect waves-light">
                                Chọn hình
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12" style="padding:0;">
                                <button type='submit' style="width: 100%;" class="btn btn-primary">Cập nhật</button>
                                <button type='reset' style="width: 100%;" onClick="window.location='index.php?controller=sanpham&action=index';" class="btn btn-success">Huỷ bỏ</button>
                            </div>
                        </div>
                    </div>
                    <br>

                <?php } ?> 
            </div>
        </form>

    </div>

</div>
</div>
</div>
</div>
<!-- /page content -->
<?=ck_replace('mo_ta_san_pham',300)?>
<?=ck_replace('mo_ta_chi_tiet',400)?>
<style>
    .required {
        color: red;
    }
</style>

<script>
    $(document).ready(function(){

        // $(this).val(format_gia);


    });
    $("input[data-type='currency']").on({
        keyup: function() {
            formatCurrency($(this));
        },
        blur: function() {
            formatCurrency($(this), "blur");
        }
    });

    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }
    $('#gia_khuyen_mai').ready(function(){
        // gia ban dau
        const  _gia_first = $('#gia_goc').val();
        const  _gia_ban_dau = $('#gia_khuyen_mai').val();
        $('#gia_khuyen_mai').change(function(){
            var _gia            = $('#gia_goc').val();
            var _gia_khuyen_mai = $('#gia_khuyen_mai').val();

            // alert(_gia_first);
            if(_gia_khuyen_mai > _gia_first) {
                alert('Giá khuyến mãi không được lớn hơn giá gốc!');
                if(_gia_ban_dau == '') {
                    $('#gia_goc').val();
                    $('#gia_khuyen_mai').val('');
                }else{
                    alert(_gia_first);
                    $('#gia_goc').val(_gia_first);
                    $('#gia_khuyen_mai').val(_gia_ban_dau);
                }
            }
        });
    });
    // $('#gia_goc').ready(function(){
    //     // gia ban dau
    //     const  _gia_first   = $('#gia_goc').val();
    //     const  _gia_ban_dau = $('#gia_khuyen_mai').val();

    //     $('#gia_goc').change(function(){
    //         var _gia            = $('#gia_goc').val();
    //         var _gia_khuyen_mai = $('#gia_khuyen_mai').val();

    //         // alert(_gia_ban_dau +'>'+ _gia);
    //         if(_gia_ban_dau < _gia) {

    //             alert('Giá khuyến mãi không được lớn hơn giá gốc!');
    //             // if(_gia_ban_dau == '') {
    //             //     $('#gia_goc').val(_gia_first);
    //             //     $('#gia_khuyen_mai').val('');
    //             // }else{
    //             //     alert(_gia_first);
    //             //     $('#gia_goc').val(_gia_first);
    //             //     $('#gia_khuyen_mai').val(_gia_ban_dau);
    //             // }
    //         }
    //     });
    // });

    function formatCurrency(input, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.

        // get input value
        var input_val = input.val();

        // don't validate empty input
        if (input_val === "") {
            return;
        }

        // original length
        var original_len = input_val.length;

        // initial caret position 
        var caret_pos = input.prop("selectionStart");

        // check for decimal
        if (input_val.indexOf(".") >= 0) {

            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");

            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);

            // add commas to left side of number
            left_side = formatNumber(left_side);

            // validate right side
            right_side = formatNumber(right_side);

            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
                right_side += "";
            }

            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);

            // join number by .
            input_val = left_side + "." + right_side;

        } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            input_val = input_val;

            // final formatting
            if (blur === "blur") {
                input_val += "";
            }
        }

        // send updated string to input
        input.val(input_val);

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }
</script>
