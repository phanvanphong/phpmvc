<div id="page-wrapper">
		  <div class="header"> 
                                <!-- /. XỬ LÝ CODE PHP  -->
                               
                        <div class="page-header">
                            <!-- /. CONTENT  -->
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>TÊN HÀNG HÓA</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>ĐƠN GIÁ/SP</th>
                                    <th>THÀNH TIỀN</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                $Total = 0;
                                foreach($orderdetail as $order_det){
                                    extract($order_det);
                            
                            ?>
                                  <tr>
                                    <td><?=$title_product?></td>
                                    <td><?=$number_product?></td>
                                    <td><?=number_format($price_order_detail)?> VNĐ</td>     
                                    <td><?=number_format($price_order_detail * $number_product); $Total +=($price_order_detail * $number_product)?> VNĐ</td>                               
                                  </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="3" style = "text-align:center;"><b>TỔNG TIỀN</b></td>
                                    <td><b><?=number_format($Total) ?> VNĐ</b></td>
                                </tr>
                                </tbody>
                              </table>
                        </div>
                        <a href="<?php echo BASE_URL ?>/order"><button class="btn btn-danger">Danh sách đơn hàng</button></a>
		</div>
            </div>