<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ LOẠI HÀNG</h1>
                            <p>Điền đầy đủ thông tin để tiến hành thêm loại hàng mới :</p>

                            <!-- /. CODE XỬ LÝ PHP  -->
                            
                            <!-- /. CONTENT  -->
                            <form action="<?php echo BASE_URL ?>/category/insert_category" method="POST">
                                <div class="form-group">
                                <label>Mã loại:</label>
                                <input
                                    class="form-control"
                                    placeholder="Auto number ..."
                                    name=""
                                    readonly
                                />
                                </div>
                                <div class="form-group">
                                <label for="">Tên loại:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nhập tên loại ..."
                                    name="title_category_product"
                                />
                                </div>
                                <label for="">Mô tả:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nhập mô tả ..."
                                    name="desc_category_product"
                                />
                                </div>
                                <div class="form-group form-check"></div>
                            <button type="submit" name="add_category_product" class="btn btn-danger">Thêm mới</button>
                            </form>
                        </div>
		</div>
            </div>