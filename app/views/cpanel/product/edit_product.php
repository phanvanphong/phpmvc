<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ HÀNG HÓA</h1>
                            <p>Điền đầy đủ thông tin để tiến hành thêm hàng hóa mới :</p>

                            <?php
                                foreach($productbyid as $pro){
                                    extract($pro);
                        
                            ?>

                            <form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $id_product ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="">Tên hàng hóa:</label>
                            <input type="text" class="form-control"  name="title_product" value = '<?=$title_product?>'
                                placeholder="Nhập tên hàng hóa ...">
                            </div>

                            <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input type="number" class="form-control"  name="price_product" value = '<?=$price_product?>'
                                placeholder="Nhập đơn giá ...">
                            </div>

                            <div class="form-group">
                            <label for="">Giảm giá (%)</label>
                            <input type="number" class="form-control" name="discount_product" min="0" max="100" value = '<?=$discount_product?>'
                                placeholder="Nhập giảm giá">
                            </div>

                            <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input name="image_product" type="hidden" value="<?=$image_product?>"><br>
                            <img src="<?php echo BASE_URL ?>/public/uploads/product/<?=$image_product?>" alt="" style="width:80px"><br>
                            (<?=$image_product?>)


                            <input type="file" class="form-control-file border" name="image_product" value="<?=$image_product?>">
                            </div>

                            <div class="form-group">
                            <label for="">Mô tả:</label>
                            <textarea class="form-control" rows="5" name="desc_product"
                                placeholder="Mô tả hàng hóa ..."><?=$desc_product?></textarea>
                            </div>

                            <div class="form-group">
                            <label for="">Mã loại?</label>
                            <select name="id_category_product" class="form-control">
                            <?php
                                                foreach ($category as $cate) {
                                                    if($cate['id_category_product'] == $id_category_product){
                                                        echo '<option selected value="'.$cate['id_category_product'].'">'.$cate['title_category_product'].'</option>';
                                                    }
                                                    else{
                                                        echo '<option value="'.$cate['id_category_product'].'">'.$cate['title_category_product'].'</option>';
                                                    }
                                                }
                                            ?>
                            </select>
                            </div>
                            <?php } ?>
                            <button type="submit" name="btn_insert" class="btn btn-primary">Cập nhật</button>                    
                        </form>
                        </form>
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->