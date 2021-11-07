 <!-- ============================================
 ======================CHI-TIẾT====================================
 ============================================ -->
 <div class="container" style="margin-top: 5px;">
        <div class="row">
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><span>TRANG CHỦ </span> / SẢN PHẨM</p>
                </div>
            </div>
            
        </div>
    </div>



    
 
 <div class="container" style="margin-top: 20px;">
        <div class="row">
        <!-- CODE PHO THÔNG TIN SẢN PHẨM -->
        <?php
                    foreach($detail_product as $detail_pro){
                        extract($detail_pro);
                    ?>
            <!-- TẠO FORM ĐỂ TIẾN HÀNH THÊM VÀO GIỎ HÀNG -->

            <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
            <input type="hidden" value="<?php echo $id_product ?>" name = "id_product">
            <input type="hidden" value="<?php echo $title_product ?>" name = "title_product">
            <input type="hidden" value="<?php echo $image_product ?>" name = "image_product ">
            <input type="hidden" value="<?php echo $discount_product ?>" name = "discount_product">
            <input type="hidden" value="<?php echo $price_product ?>" name = "price_product">
            <input type="hidden" value="1" name ="number_product">

            <div class="col-md-4" style="padding-left: 0px">
                <div class="spchitiet">
                    <img src="<?php echo BASE_URL ?>/public/uploads/product/<?=$image_product?>" alt="" style="width:100%;">
                </div>
            </div>
            <div class="col-md-5">
                <div class="thongtinsp">
                    <ul>
                        <li>
                            <h5 style="font-size: 30px;"><?=$title_product?></h5>
                            <p> </p>
                        </li>
                        <li><del><?=number_format($price_product)?></del> VNĐ    ( - <?=$discount_product ?> %)</li>
                        <li style = "font-size:30px;"><?=number_format($price_product - $price_product*($discount_product/100))?> VNĐ</li>
                        <li style="margin-top: 15px;"><span style="line-height: 25px;text-align: justify;"><?=$desc_product?></span></li>
                        <li class="size" style="margin-top: 20px;">
                            <div class="soluong">
                               <h4>SIZE: 37, 38, 39, 40, 41, 42</h4>
                            </div>
                       
                        </li>
                        <li class="soluong1" style="margin-top: 27px;">

                            <input type="number" placeholder="1" readonly>

                        <!-- MÃ CODE PHP CHECK ĐĂNG NHẬP ĐỂ MUA HÀNG -->

                            <?php
                                if(!isset($_SESSION['username'])){
                            ?>
                            <a href="<?php echo BASE_URL ?>/login"><button style="margin-top:-5px;" class="btn btn-dark">ĐĂNG NHẬP ĐỂ MUA HÀNG</button></a>
                                <?php }else{ ?>
                          <button type="submit" style="margin-top:-5px;" class="btn btn-dark">THÊM VÀO GIỎ HÀNG</button>
                                <?php } ?>
                              
                        </li>
                        <li style="margin-top: 25px;">-----------------------------------------------------------------</li>
                        <li>Mã: #<?=$id_category_product?></li>
                        -----------------------------------------------------------------
                        <li>Tag: #Giày đẹp, #Giày năng động </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thanhtoan">
                   <div class="row">
                   <h4>HỖ TRỢ THANH TOÁN</h4>
                    <ul>
                        <li> <img src="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/img/l2.png" alt=""> </li>
                        <li> <img src="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/img/l1.png" alt=""> </li><br>
                        <li> <img src="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/img/l4.png" alt=""> </li>

                        <li> <img src="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/img/l3.png" alt=""> </li>
                    </ul>
                   </div>
                   <div class="row">
                     <a href="danh-sach-sp.php"><img src="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/img/SALE.png" alt="" style="width:90%"></a>  
                   </div>
                  
                    <!-- END FORM -->

                </div>
            </div>
        </div>
    </div>




    <!-- ============================================
 ==========================================================
 ============================================ -->

 <!-- BÌNH LUẬN -->
 <div class="container" style="margin-top: 30px;">

        <div class="row">
            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h4>CAM KẾT KHI MUA HÀNG TẠI BIGSHOES:</h4>
                    <p></p>
                </div>
            
           
            <div class="binh-luan">
            <img src="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/img/camketmuahang1.png" alt="" width=100%>

            
                   </div>
                

                </div>
            </div>
        </div>
    </div>




    <div class="container" style="margin-top: 30px;">
        <div class="row">

            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h4>SẢN PHẨM CÙNG LOẠI</h4>
                    <p></p>
                </div>

                <div class="owl-carousel owl-theme ">
                    <!-- CODE PHP SẢN PHẨM CÙNG LOẠI -->
                    <?php
                        foreach($related_product as $detail){
                            extract($detail);
                        
                    ?>
                    <div class="item">
                       <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="<?php echo BASE_URL ?>/public/uploads/product/<?=$image_product?>" alt="ds"><span class='cung-loai'><?=$title_product?></span></a>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>