<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/danh-sach-sp/products.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/products.css">
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/tin-tuc/tintuc.css"> -->

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
                    Session::init();
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


   


    