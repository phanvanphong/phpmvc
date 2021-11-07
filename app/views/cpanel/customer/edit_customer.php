<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ KHÁCH HÀNG</h1>
                            <p>Điền đầy đủ thông tin để tiến hành đăng ký khách hàng mới :</p>

                            <!-- /. CODE XỬ LÝ PHP  -->
                            <?php
                                foreach($customerbyid as $cus){
                                    extract($cus);
                                
                            ?>
                            <!-- /. CONTENT  -->
                            <form action="<?php echo BASE_URL ?>/customer/update_customer/<?=$id_customer?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_customer" value="<?=$id_customer?>">
                            <div class="form-group">
                            <label for="">Tên đăng nhập:</label>
                            <input type="text" class="form-control" name="username" value="<?=$username?>"
                                placeholder="Nhập tên đăng nhập ...">
                            </div>

                            <div class="form-group">
                            <label for="">Họ và tên:</label>
                            <input type="text" class="form-control" name="name" value="<?=$name?>"
                                placeholder="Nhập họ và tên ...">
                            </div>

                            <div class="form-group">
                            <label for="">Mật khẩu:</label>
                            <input type="text" class="form-control" name="password" value="<?=$password?>"
                                placeholder="Nhập mật khẩu ...">
                            </div>
                            
                            <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" class="form-control" name="email" value="<?=$email?>"
                                placeholder="Nhập email ...">
                            </div>

                            <div class="form-group">
                            <label for="">Địa chỉ:</label>
                            <input type="text" class="form-control" name="address" value="<?=$address?>"
                                placeholder="Nhập địa chỉ ...">
                            </div>

                            <div class="form-group">
                            <label for="">Vai trò:</label>
                            <input type="text" class="form-control"
                                placeholder="Khách hàng ..." readonly>
                            </div>

                            <?php } ?>

                            <button type="submit" name="btn_insert" class="btn btn-primary">Cập nhật</button>
                        </form>
                        </div>
		</div>
            </div>