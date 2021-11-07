<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/danh-sach-sp/products.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/danh-sach-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/danh-sach-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/ihover-gh-pages/src/ihover.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/ihover-gh-pages/src/ihover.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
       
    </style>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL ?>/public/css/danh-sach-sp/plugin/js/owl.carousel.min.js"></script>
    


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="login">


                  <!-- CODE CHECK ĐĂNG NHẬP -->
                  <?php
                  
                    if(!isset($_SESSION['username'])){
                  ?>
                  <a href="<?php echo BASE_URL ?>/login/"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                    <?php }else{ ?>
                  <a onclick = "return confirm('Bạn đang muốn đăng xuất ?')" href="<?php echo BASE_URL ?>/login/logout/"><p><strong>XIN CHÀO <?=$_SESSION['username']?></strong></p></a>
                
                  <?php } ?>
                </div>



            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="logo">
                <a href="<?php echo BASE_URL ?>/index"><img src="<?php echo BASE_URL ?>/public/css/danh-sach-sp/img/y.png" alt="anh"></a>
                </div>
            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">

                <!-- MÃ CODE PHP CHECK SỐ LƯỢNG SẢN PHẨM THÊM VÀO GIỎ HÀNG  -->

                <div class="giohang" style = "position: reletive;">
               
                    <?php
                            $sll = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $item){
                                    extract($item);
                                    $sll+= $number_product;
                                }
                            }
                        ?>
                    <span style = "position: absolute;padding:3px 8px;background-color:#fff;border-radius:50px;left:295px;top:25px;" ><?=$sll?></span>
                    <ul>
                        <li></li>
                        <li><p style="color: rgb(212, 212, 212);font-size: 14px;margin-left:-30px;">GIỎ HÀNG CỦA BẠN</p></li>
                       <a href="<?php echo BASE_URL ?>/giohang"><li><i class="fa fa-shopping-basket" style="font-size:28px;color:rgb(255, 255, 255)"></i></li></a> 
                    </ul>
                </div>
            </div>
        </div>
    </div>

                        


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                    <li><a href="<?php echo BASE_URL ?>/index">TRANG CHỦ</a></li>
                        <li><a href="<?php echo BASE_URL ?>/index">SẢN PHẨM</a></li>
                            <li><a href="<?php echo BASE_URL ?>/gioithieu">GIỚI THIỆU</a></li>
                            <li><a href="<?php echo BASE_URL ?>/tintuc">TIN TỨC</a></li>
                            <li><a href="<?php echo BASE_URL ?>/lienhe">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


   


    
<div class="container" style="margin-top: 80px;">
        <div class="row">
        
        <div class="col-sm-7">
            <table class="table">
                <thead>
                <tr>
                    <th>SẢN PHẨM</th>
                    <th>HÌNH ẢNH</th>
                    <th>GIÁ</th>
                    <th>SL</th>
                    <th>TỔNG</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <!-- CODE PHP DANH SÁCH GIỎ HÀNG -->
                <form action="<?php echo BASE_URL ?>/giohang/capnhatgiohang" method="post" enctype="multipart/form-data">
                <?php
                    $total = $i = 0;
                    if(!empty($_SESSION['cart'])){
                        $items = $_SESSION['cart'];
                        foreach($items as $item){
                            extract($item);
                            $i++;
                    ?>
                <tr>
                    
                    <td><?=$name ?></td>
                    <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?=$image_product?>" alt="" style = "width:80px;"></td>
                    <td><?=number_format($price_product - ($price_product*($discount_product/100))) ?> VNĐ</td>
                    <td><input class="form-control" type="number" name='number_product[<?=$id_product?>]' value="<?=$number_product ?>" style="width:50px;"></td>
                    <td><?=number_format(($price_product - ($price_product*($discount_product/100)))*$number_product);
                            $total += (($price_product - ($price_product*($discount_product/100)))*$number_product);
                    ?> VNĐ</td>
                    <td><a onclick="return confirm('Bạn muốn bỏ sản phẩm này khỏi giỏ hàng ?')" style = "color:black;" href="<?php echo BASE_URL ?>/giohang/xoagiohang/<?=$id_product?>"><i class="fa fa-times-circle" aria-hidden="true"></i></a></td>
                </tr>

                <!-- NẾU KHÔNG CÓ SẢN PHẨM NÀO SẼ XUẤT HIỆN THẺ P -->
                        <?php }}else{
                        echo '<p>Giỏ hàng của bạn chưa có sản phẩm nào !</p>';
                        }?>
                <?php
                
                ?>
                </tbody>
            </table>
            <button class = "btn btn-info"><a style = "color:#fff;text-decoration:none;" href="<?php echo BASE_URL ?>/index">Tiếp tục xem sản phẩm</a></button>  
            <button type="submit" class = "btn btn-secondary" name="btn_update_gio_hang" >Cập nhật giỏ hàng</button>

            </form>
        </div>


        


            <div class="col-sm-5">
            <table class="table">
                <thead>
                <tr>
                    <th>TỔNG SỐ LƯỢNG</th>
                    <th></th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tổng phụ</td>
                    <td style = "text-align:right;"><?=number_format($total)?> VNĐ</td>
                </tr>
                <tr>
                    <td>Giao hàng</td>
                    <td style = "text-align:right;">Giao hàng miễn phí <br>
                    Ứơc tính cho Việt Nam <br>
                    Đổi địa chỉ</td>
                </tr>
                <tr>
                    <td>Tổng</td>
                    <td style = "text-align:right;"><b><?= number_format($total)?> VNĐ</b></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="<?php echo BASE_URL ?>/giohang/thanhtoangiohang"><button class = "btn btn-danger" style = "width:100%;">TIẾN HÀNH THANH TOÁN</button></a></td>
                </tr>
                </tbody>
            </table>
            </div>
            </div>  
            </div>
     


   