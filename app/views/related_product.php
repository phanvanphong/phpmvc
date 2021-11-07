
    <div class="container" style="margin-top: 5px;">
        <div class="row">
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><span>TRANG CHỦ </span> / SẢN PHẨM CÙNG LOẠI</p>
                </div>
            </div>
            
        </div>
    </div>



    <div class="container" style="margin-top: -20px;">
        <div class="row">
            <div class="col-md-3" style="padding-left: 0px;">

                <div class="row" style="
    margin-left: 0px;
">                  
                    <!-- Tìm kiếm theo tên sản phẩm -->
                   
                </div>

                
                <div class="row" style="
    margin-left: 0px;
">

                    <!-- CODE PHP DANH MỤC -->
                    <div class="row" style="margin-top: 35px;margin-left: 0px;">

                        <ul class="list-group" style="width: 270px;">
                            <li class="list-group-item active" style="background-color: black;">DANH MỤC</li>
                            <?php foreach($category as $cate){
                                extract($cate);
                                ?>
                            <a style ="text-decoration: none;color: black;" href="<?php echo BASE_URL ?>/product/related_product/<?=$id_category_product?>">
  <li class="list-group-item"><?=$title_category_product?></li></a> 
                            <?php } ?>
                        </ul>

                    </div>

                    <div class="row" style="margin-top: 35px;margin-left: 0px;">

                    <ul class="list-group" style="width: 270px;">
                            <!-- CODE PHP SẢN PHẨM BÁN CHẠY -->
                            <li  class="list-group-item active" style="background-color: black;">SẢN PHẨM SALE UP 10 - 50%</li>
                            <?php foreach($sale_product as $sale_pro){
                                extract($sale_pro);
                                ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-4"><a href="<?php echo BASE_URL ?>/product/detail_product/<?=$id_product?>"><img style="width:80px;" src="<?php echo BASE_URL ?>/public/uploads/product/<?=$image_product?>" alt=""></a></div>
                                    <div class="col-sm-8"><?=$title_product?><br><br><b><?=number_format($price_product-($price_product*$discount_product/100))?> VNĐ</b></div>
                                </div>
                            </li>



                            <?php } ?>
                        </ul>

                    </div>


                </div>


            </div>

           
            <!-- Sản phẩm nó nằm ở đây -->
            <div class="col-md-9">

            <!-- CODE PHP DANH SÁCH SẢN PHẨM -->
            <?php
                foreach($related_product as $detail){
                    extract($detail);

            ?>
               <div class="sanpham">
                <a href="<?php echo BASE_URL ?>/product/detail_product/<?=$id_product?>"><span class="chi-tiet">CHI TIẾT</span></a>
                   
                    <a href="<?php echo BASE_URL ?>/product/detail_product/<?=$id_product?>"><img  src="<?php echo BASE_URL ?>/public/uploads/product/<?=$image_product?>" alt=""><span class='hang-moi'>Mới nhất</span></a>
                    <div class="glow-wrap">
    <i class="glow"></i>
  </div>
                    <div class="text">
                        <div class="price" style="font-weight:bolder;margin-top:7px;">
                            <?=number_format($price_product - $price_product*($discount_product/100))?> VNĐ <span style = "color:grey;font-size:14px;margin-left:40px;"><strike><?=number_format($price_product)?> VNĐ</strike></span>
                        </div>
                        <div class="name" >
                          <h5><?=$title_product?></h5> 
                        </div>
                    </div>
                </div>
                <?php } ?>
            
            
                                                          
            </div>
        </div>

    </div>
    <div class="container" style="margin-top: 30px;">
        <div class="row">

            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h4>sản phẩm nỗi bật</h4>
                    <p></p>
                </div>

                <div class="owl-carousel owl-theme ">

                    <!-- CODE PHP SẢN PHẨM NỔI BẬT -->
                    <?php
                        foreach($hot_product as $hot_pro){
                            extract($hot_pro);
                    ?>
                    <div class="item">
                        <a href="<?php echo BASE_URL ?>/product/detail_product/<?=$id_product?>"><img style="width: 200px" src="<?php echo BASE_URL ?>/public/uploads/product/<?=$image_product?>" alt="ds"><span class='noi-bat'>HOT</span></a>
                    </div>
                        <?php } ?>



                </div>
            </div>
        </div>
    </div>

   