<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ LOẠI HÀNG</h1>
                            <p>Cập nhật thông tin loại hàng :</p>

                            <!-- /. CODE XỬ LÝ PHP  -->
                            <?php

                                foreach($categorybyid as $cate){
                                    extract($cate);
                                
                            
                            ?>
                            <!-- /. CONTENT  -->
                            <form action="<?php echo BASE_URL ?>/category/update_category/<?php echo $id_category_product ?>" method="POST">
                                <div class="form-group">
                                <label>Mã loại:</label>
                                <input
                                    class="form-control"
                                    placeholder="Auto number ..."
                                    name="id_category_product"
                                    value='<?=$id_category_product?>'
                                    readonly
                                />
                                </div>
                                <div class="form-group">
                                <label for="">Tên loại:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nhập tên loại ..."
                                    value='<?=$title_category_product?>'
                                    name="title_category_product"
                                />
                                </div>
                                <label for="">Mô tả:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nhập mô tả ..."
                                    value='<?=$desc_category_product?>'
                                    name="desc_category_product"
                                />
                                </div>
                                <?php } ?>
                                <div class="form-group form-check"></div>
                            <button type="submit" name="add_category_product" class="btn btn-danger">Cập nhật</button>
                            </form>
                        </div>
		</div>
            </div>