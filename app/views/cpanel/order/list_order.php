<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ ĐƠN HÀNG</h1>
                            <p>Dưới đây là danh sách các đơn hàng mà khách hàng đã đặt mua: </p>

                            <!-- /. XỬ LÝ CODE PHP  -->
                           
                            <!-- /. CONTENT  -->
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>MÃ HĐ</th>
                                    <th>MÃ KH</th>
                                    <th>NGÀY MUA</th>
                                    <th>GHI CHÚ</th>
                                    <th>TÌNH TRẠNG</th>
                                    <th>CHI TIẾT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                               foreach($order as $ord){
                                   extract($ord);
                            
                            ?>
                                  <tr>
                                    <td><?=$id_order?></td>
                                    <td><?=$id_customer?></td>
                                    <td><?=$date_order?></td>
                                    <td><?=$note_order?></td>
                                    <td> 
                                        <a href="<?php echo BASE_URL ?>/order/thanhtoan/<?=$id_order?>">
                                        <?php
                                            if($status_order == 0){
                                                echo '<button class="btn btn-danger name="status_order">';
                                                echo "Chưa thanh toán";
                                            }else{
                                                echo '<button class="btn btn-primary name ="status_order">';
                                                echo "Đã thanh toán";
                                            }
                                        ?>
                                        </button></a>
                                    </td>
                                    <td><a href="<?php echo BASE_URL ?>/order/list_order_detail/<?=$id_order?>"><button class="btn btn-success">Chi tiết</button></a></td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->