<!--page content -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=href('role','setrole')?>" method="POST">
            <div class="row">

                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <section>

                                    <input name="user" value="<?=$user->id?>" type="hidden"/>
                                    <ul class="setrole" style="padding-left: 0;">
                                        <?php 
                                        foreach($functions as $func)
                                        {
                                            $childs = $this->role->get_functions($func->id);
                                            if($childs)
                                            {
                                                echo '<li style="list-style:none;"><label id="label-title" class="label-title"><input data-checkbox-name="checkbox'.$func->id.'" class="selectAll"  '.($this->role->checked($func->id,$user->id)?'checked':'').' name="funcs[]" value="'.$func->id.'" type="checkbox"/> '.$func->ten.'</label>
                                                <ul class="row-ul">';
                                                foreach($childs as $funcchild)
                                                {
                                                    echo '<li class="inline" style="list-style:none;"><label class="label-checkbox"><input class="checkbox'.$func->id.'" name="funcs[]" '.($this->role->checked($funcchild->id,$user->id)?'checked':'').' value="'.$funcchild->id.'" type="checkbox"/> '.$funcchild->ten.'</label></li>';
                                                }
                                                echo '</ul></li>';
                                            }else{
                                                ?>
                                                <li><label><input name="funcs[]" value="<?=$func->id?>" type="checkbox"/> <?=$func->ten?></label></li>
                                                <?php 
                                            }
                                        } ?>
                                    </ul>

                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <label for=""><?=$user->ten?></label>                    
                                <img class="rounded mr-2 mb-1"  alt="images product" style="width: 100%; height: 230px;" src="<?=asset($user->avt??'public/images/small/img-1.jpg')?>" data-holder-rendered="true">
                            </div>
                        </div><br>
                        <div class="card">
                            <div class="card-body">
                                <div class="btn-role" >
                                    <button type="submit" style="width: 100%;" class="btn btn-success">Save</button>
                                    <input type="button" style="width: 100%;" class="btn btn-danger" name="cancel" value="Cancel" onClick="window.location='index.php?controller=role&action=index';" />
                                </div>
                            </div>
                        </div><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .label-title {
        text-transform: uppercase;
        font-family: -webkit-body;
        text-decoration: underline;
    }

    li.inline {
        display: contents;
    }
    .label-checkbox {
        padding:5px 20px 20px 20px;
        color: #2a3f54;
    }
    .row-ul {
        background: #F7F5FF;
    }
</style>


<script type="text/javascript">
    // Select With Checkbox(Extra Feature)
    $(':checkbox.selectAll').on('click', function(){
        $(':checkbox[class='+ $(this).data('checkbox-name') + ']').prop("checked", $(this).prop("checked")).trigger("change");
    });
</script>