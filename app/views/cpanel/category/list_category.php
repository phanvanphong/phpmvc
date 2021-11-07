<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ LOẠI HÀNG</h1>
                            <p>Dưới đây là danh sách các loại hàng đã được thêm vào:</p>

                            <!-- /. CONTENT  -->
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>TÊN LOẠI</th>
                                    <th>MÔ TẢ</th>
                                    <th>HÀNH ĐỘNG</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($category as $cate){ 
                                     extract($cate);
                                    ?> 
                                  <tr>
                                    <td><?=$title_category_product?></td>
                                    <td><?=$desc_category_product?></td>
                                    <td> 
                                        <a href="<?php echo BASE_URL ?>/category/edit_category/<?=$id_category_product?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="<?php echo BASE_URL ?>/category/delete_category/<?=$id_category_product?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                            <a href="<?php echo BASE_URL ?>/category/add_category"><button class="btn btn-danger">Thêm mới</button></a>
                        </div>
		</div>
            </div>