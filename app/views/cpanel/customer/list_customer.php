<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ KHÁCH HÀNG</h1>
                            <p>Dưới đây là danh sách các khách hàng đã được thêm vào: </p>

                            <!-- /. XỬ LÝ CODE PHP  -->
                            
                            <!-- /. CONTENT  -->
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>TÊN ĐĂNG NHẬP</th>
                                    <th>HỌ VÀ TÊN</th>
                                    <th>MẬT KHẨU</th>
                                    <th>EMAIL</th>
                                    <th>ĐỊA CHỈ</th>
                                    <th>VAI TRÒ</th>
                                    <th>HÀNH ĐỘNG</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($customer as $cus){
                                    extract($cus);
                                ?>
                                  <tr>
                                    <td><?=$username?></td>
                                    <td><?=$name?></td>
                                    <td><?=$password?></td>
                                    <td><?=$email?></td>
                                    <td><?=$address?></td>
                                    <td><?php if($role == 0){
                                        echo "Khách hàng";
                                    }else{
                                        echo "Admin";
                                    } ?></td>
                                    <td> 
                                        <a href="<?php echo BASE_URL ?>/customer/edit_customer/<?=$id_customer?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="<?php echo BASE_URL ?>/customer/delete_customer/<?=$id_customer?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                
                            <a href="<?php echo BASE_URL ?>/customer/add_customer"><button class="btn btn-danger">Thêm mới</button></a>
                        </div>
		</div>
            </div>