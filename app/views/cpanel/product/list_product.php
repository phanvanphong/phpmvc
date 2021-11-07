<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ HÀNG HÓA</h1>
                            <p>Dưới đây là danh sách các hàng hóa đã được thêm vào: </p>

                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>MÃ HH</th>
                                    <th>TÊN HH</th>
                                    <th>HÌNH ẢNH</th>
                                    <th>ĐƠN GIÁ</th>
                                    <th>GIẢM GIÁ</th>
                                    <th>HÀNH ĐỘNG</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($product as $pro){ 
                                     extract($pro);
                                    ?> 
                                  <tr>
                                    <td><?=$id_product?></td>
                                    <td><?=$title_product?></td>
                                    <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?=$image_product?>" alt="" style="width:80px;"></td>
                                    <td><?=number_format($price_product)?> <sup>đ</sup></td>
                                    <td><?=$discount_product?> <sup>%</sup></td>
                                    <td> 
                                        <a href="<?php echo BASE_URL ?>/product/edit_product/<?=$id_product?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="<?php echo BASE_URL ?>/product/delete_product/<?=$id_product?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                            <a href="<?php echo BASE_URL ?>/product/add_product"><button class="btn btn-danger">Thêm mới</button></a>
                        </div>
		</div>
            </div>