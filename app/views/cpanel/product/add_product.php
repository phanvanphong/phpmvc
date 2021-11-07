<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ HÀNG HÓA</h1>
                            <p>Điền đầy đủ thông tin để tiến hành thêm hàng hóa mới :</p>

                            <form action="<?php echo BASE_URL ?>/product/insert_product" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="">Tên hàng hóa:</label>
                            <input type="text" class="form-control"  name="title_product"
                                placeholder="Nhập tên hàng hóa ...">
                            </div>

                            <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input type="number" class="form-control"  name="price_product"
                                placeholder="Nhập đơn giá ...">
                            </div>

                            <div class="form-group">
                            <label for="">Giảm giá (%)</label>
                            <input type="number" class="form-control" name="discount_product" min="0" max="100"
                                placeholder="Nhập giảm giá">
                            </div>

                            <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control-file border" name="image_product">
                            </div>

                            <div class="form-group">
                            <label for="">Mô tả:</label>
                            <textarea class="form-control" rows="5" name="desc_product"
                                placeholder="Mô tả hàng hóa ..."></textarea>
                            </div>

                            <div class="form-group">
                            <label for="">Mã loại?</label>
                            <select name="id_category_product" class="form-control">
                            <?php
                                foreach($category as $cate){
                                    extract($cate);
                            ?>
                                <option value="<?=$id_category_product?>"><?=$title_category_product?></option>
                                    <?php } ?>
                            </select>
                            </div>
                            <button type="submit" name="btn_insert" class="btn btn-primary">Thêm mới</button>                    
                        </form>
                        </form>
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->