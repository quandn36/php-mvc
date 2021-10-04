<!--page content -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <!--  -->
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?=href('sanpham','store')?>" method="POST">
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-2 label-align">Tên<span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" onchange="stralias('ten','slug')" data-validate-words="2" id="ten" name="ten" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">

                                    <label class="col-form-label col-md-2 label-align">Slug<span class="required">*</span></label>
                                    
                                    <div class="col-md-10">
                                        <small id="" class="form-text text-muted">
                                            <?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']. '/day-la-slug-san-pham-mau/';   ?>
                                        </small>
                                        <input class="form-control" type="text" readonly data-validate-words="2" id='slug' name="slug" required="required" />
                                    </div>
                                </div>

                                <div class="field item form-group">
                                    <label class="col-form-label col-md-2 label-align">Giá<span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="gia_goc" type="text" maxlength="15" id="currency-field" value="" data-type="currency" placeholder="" name="gia" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-2 label-align">Giá khuyến mãi<span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="gia_khuyen_mai" type="text" maxlength="15" id="currency-field" value="" data-type="currency" placeholder="" name="gia_khuyen_mai" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-2 label-align">Số lượng<span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" pattern="/^(0|[1-9][0-9]*)$/gm" maxlength="3" name="soluong" data-type="qty" value="1" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-2 label-align">Nhà cung cấp<span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <select name="manhacungcap" class="custom-select custom-select-sm">
                                          <?php foreach ($ncc as $nccvalue) { ?>
                                              <option value="<?=$nccvalue->id?>"><?=$nccvalue->ten?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="field item form-group">
                                <label class="col-form-label col-md-2 label-align">Loại<span class="required">*</span></label>
                                <div class="col-md-10">
                                    <select name="maloai" class="custom-select custom-select-sm">
                                      <?php foreach ($maloai as $maloaivalue) {?>
                                          <option value="<?=$maloaivalue->id?>"><?=ucfirst($maloaivalue->ten)?></option>
                                      <?php } ?>

                                  </select>
                              </div>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-2  label-align">Mô tả ngắn<span class="required">*</span></label>
                            <div class="col-md-10">
                                <textarea required="required" id="mo_ta_san_pham" name='motangan'></textarea>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-2  label-align">Mô tả chi tiết<span class="required">*</span></label>
                            <div class="col-md-10">
                                <textarea required="required" id="mo_ta_chi_tiet" name='motachitiet'></textarea>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-2 label-align">Tiêu đề</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" data-validate-words="2" name="tieude"  />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-2 label-align">Từ khoá</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" data-validate-words="2" name="tukhoa" placeholder="" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-2 label-align">Mô tả tìm kiếm</label>
                            <div class="col-md-10">
                                <textarea name="motatimkiem" class="form-control" id="" cols="30" rows="10"></textarea>
                                <!-- <input class="form-control" type="text" data-validate-words="2" name="motatimkiem"  /> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <label >Hình đại diện</label>                    
                        <img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%;" src="<?=asset('images/small/img-1.jpg')?>" data-holder-rendered="true">
                        <input type="hidden" id="url_hinhdaidien" name="url_hinhdaidien">
                        <button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhdaidien')" class="btn btn-outline-primary waves-effect waves-light">
                            Chọn hình
                        </button>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <label for="">Hình chi tiết</label>  
                        <img class="rounded mr-2 mb-1" alt="images product" style="width: 100%;" src="<?=asset('images/small/img-1.jpg')?>" data-holder-rendered="true">
                        <input type="hidden" id="url_hinhchitiet" name="url_hinhchitiet">
                        <button type="button" id="choose-image-cover" style="width: 100%;" onclick="openfile('url_hinhchitiet')" class="btn btn-outline-primary waves-effect waves-light">
                            Chọn hình
                        </button>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="col-12" style="padding:0;">
                            <button type='submit' style="width: 100%;" class="btn btn-primary">Lưu sản phẩm</button>
                            <button type='reset' style="width: 100%;" onClick="window.location='index.php?controller=sanpham&action=index';" class="btn btn-success">Huỷ bỏ</button>
                        </div>
                    </div>
                </div>
                
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


    // Jquery Dependency

    $("input[data-type='currency']").on({
        keyup: function() {
            formatCurrency($(this));
        },
        blur: function() {
            formatCurrency($(this), "blur");
        }
    });

    $("input[data-type='qty']").on({
        keyup: function() {
            formatCurrency($(this));
        }
    });

    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }

    $('#gia_khuyen_mai').change(function(){
        var _gia = $('#gia_goc').val();
        var _gia_khuyen_mai = $('#gia_khuyen_mai').val();

        if(_gia_khuyen_mai > _gia) {
            alert('Giá khuyến mãi không thể lớn hơn giá gốc');
            $('#gia_khuyen_mai').val('');
        }
    });

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