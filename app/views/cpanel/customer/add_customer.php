<div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ KHÁCH HÀNG</h1>
                            <p>Điền đầy đủ thông tin để tiến hành đăng ký khách hàng mới :</p>

                            <!-- /. CODE XỬ LÝ PHP  -->
    
                            <!-- /. CONTENT  -->
                            <form action="<?php echo BASE_URL ?>/customer/insert_customer" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="">Tên đăng nhập:</label>
                            <input type="text" class="form-control" name="username"
                                placeholder="Nhập tên đăng nhập ...">
                            </div>

                            <div class="form-group">
                            <label for="">Họ và tên:</label>
                            <input type="text" class="form-control" name="name"
                                placeholder="Nhập họ và tên ...">
                            </div>

                            <div class="form-group">
                            <label for="">Mật khẩu:</label>
                            <input type="text" class="form-control" name="password"
                                placeholder="Nhập mật khẩu ...">
                            </div>
                            
                            <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" class="form-control" name="email"
                                placeholder="Nhập email ...">
                            </div>

                            <div class="form-group">
                            <label for="">Địa chỉ:</label>
                            <input type="text" class="form-control" name="address"
                                placeholder="Nhập địa chỉ ...">
                            </div>

                            <div class="form-group">
                            <label for="">Vai trò:</label>
                            <input type="text" class="form-control"
                                placeholder="Khách hàng ..." readonly>
                            </div>

                            <button type="submit" name="btn_insert" class="btn btn-primary">Thêm mới</button>
                        </form>
                        </div>
		</div>
            </div>