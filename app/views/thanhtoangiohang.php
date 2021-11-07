<!-- CODE PHP THANH TOÁN GIỎ HÀNG -->
<?php

        
        foreach($customer as $cus){
            extract($cus);
        
    ?>



    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <div class="col-sm-7">
        <form action="<?php echo BASE_URL ?>/giohang/dathang" method="post">
        <h4>THÔNG TIN THANH TOÁN</h4>
        <br>
        <table class="table table-borderless" border = "0">
        <input type="text" class="form-control" id="" name="id_customer" value="<?=$id_customer?>" hidden>
            <tr>
                <div class="form-group">
                <label for=""> <b>Họ và tên:</b> </label>
                <input type="text" class="form-control" id="" name="name" value="<?=$name?>">
                </div>
                
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>Email:</b></label>
                <input type="text" class="form-control" id="" name="email" value = "<?=$email?>">
                </div>
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>Địa chỉ:</b></label>
                <input type="text" class="form-control" id="" name="dia_chi" value = "<?=$address?>">
                </div>
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>Ghi chú:</b></label>
                <textarea class="form-control" rows="5" id="" name = "note_order"></textarea>
                </div>
            </tr>
        </table>
        <?php } ?>
        </div>
            <div class="col-sm-5">
            <h4>ĐƠN HÀNG CỦA BẠN</h4>
            <br>         
            <table class="table" style = "border:3px solid #c30005;">
            <thead>
                <tr>
                    <th>SẢN PHẨM</th>
                    <th  style = "text-align:right;">TỔNG</th>
                </tr>
                </thead>
                <tbody>
                <!-- CODE PHP HIỂN THỊ LẠI DANH SÁCH SẢN PHẨM ĐÃ MUA -->
                <?php
                $total = $i = 0;
                if(!empty($_SESSION['cart'])){
                            $items = $_SESSION['cart'];
                            foreach($items as $item){
                                extract($item);
                                $i++;
                ?>
                <tr>

                    <td><?=$name?> x <?=$number_product ;?></td>
                    <td style = "text-align:right;"><?=number_format(($price_product - ($price_product*($discount_product/100)))*$number_product);
                            $total += (($price_product - ($price_product*($discount_product/100)))*$number_product);
                            
                    ?> VNĐ</td>
                </tr>
                <?php }} ?>
                <tr>
                    <td><b>Tổng phụ</b></td>
                    <td style = "text-align:right;"><b><?=number_format($total)?> VNĐ</b></td>
                </tr>
                <tr>
                    <td><b>Giao hàng</b></td>
                    <td style = "text-align:right;">Giao hàng miễn phí <br>
                    Ứơc tính cho Việt Nam <br>
                    Đổi địa chỉ</td>
                </tr>
                <tr>
                    <td><b>TỔNG</b></td>
                    <td style = "text-align:right;"><b><?=number_format($total)?> VNĐ</b></td>
                </tr>
                <tr>
                    <td colspan="2"><i>Quý khách vui lòng kiểm tra lại thông tin giao hàng và thông tin đơn hàng để tiến hành đặt hàng. Quý khách có thể tra cứu tình trạng đơn hàng tại BIGSHOES.com. Chúc quý khách ngày mới tốt lành !</i></td>
                </tr>
                <tr>
                        <td><button type="submit" name="dathang" class="btn btn-danger"><b>ĐẶT HÀNG</b></button></td>
                        <td></td>
                </tr>
                </tbody>
            </table>        
            
            </form>
            </div>
        </div>
        </div>