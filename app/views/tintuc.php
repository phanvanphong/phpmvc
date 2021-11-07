<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/danh-sach-sp/products.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/chi-tiet-sp/products.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/tin-tuc/tintuc.css">

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

  
  <div class="container" style="margin-top: 30px;padding-left:0px;">
        <div class="row">
            <div class="col-md-4">
                <!-- ---------------------
                --------------------------- -->
                <div class="row">
                    <div class="serch">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>

                <!-- ---------------------
                --------------------------- -->

                <div class="row" style="margin-top: 15px;">
                    <div class="baiviet">
                        <h4>BÀI VIẾT MỚI</h4>
                    </div>
                </div>


                <div class="row">
                    <div class="out">

                        <table>
                            <tr>
                                <td>
                                    <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/1.jpg" alt="">
                                </td>
                                <td>
                                    <p>Nike Air Max làm từ tảo biển tuy xấu nhưng vẫn rất bán sạch </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/2.jpg" alt="">
                                </td>
                                <td>
                                    <p>Ai đăng ký trước mới mua được giày Pegasus Or Bike Console</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/3.jpg" alt="">
                                </td>
                                <td>
                                    <p>10 phụ kiện mà tín đồ mê giày nên am hiểu và vận dụng tốt </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/5.jpg" alt="">
                                </td>
                                <td>
                                    <p>Top giày Jordan ấn tượng sắp ra mắt vào mùa xuân 2021 </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/7.jpg" alt="">
                                </td>
                                <td>
                                    <p>Hệ thống giày BIGSHOES - Uy tín làm nên thương hiệu </p>
                                </td>
                            </tr>


                        </table>



                    </div>
                </div>

            </div>


            <div class="col-md-8">
                <div class="row">



                    <div class="card" style="width: 25rem;">
                        <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/6.jpg" style="width: 100%;
  height: 20rem;" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 10px;
                        padding-right: 10px;
                        padding-bottom: 10px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Top 10 những đôi giày nổi bật tại BIGSHOES</p>
                            <p class="gach"></p>
                            <p class="nho">Với hệ thống giày lớn đầy đủ mẫu mã đa dạng thỳ ...</p>
                            <p class="ngay"> <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/h.png" alt="" > </p>

                        </div>
                    </div>

                    <div class="card" style="width: 25rem;">
                        <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/5.jpg" style="width: 100%;
  height: 20rem;" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 10px;
                        padding-right: 10px;
                        padding-bottom: 10px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Chương trình khuyến mãi tri ân khách hàng thành viên</p>
                            <p class="gach"></p>
                            <p class="nho">Tới đây sẽ có những ưu đãi cho những khách hàng thành viên ...</p>
                            <p class="ngay"> <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 25rem;">
                        <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/7.jpg" style="width: 100%;
  height: 20rem;" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 10px;
                        padding-right: 10px;
                        padding-bottom: 10px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Neymar sẽ lựa chọn giày nào để dự tiệc đám cưới Messi ?</p>
                            <p class="gach"></p>
                            <p class="nho">Sắp tới đây sẽ có 1 sự kiện quan trọng cho bóng đá ...</p>
                            <p class="ngay"> <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 25rem;">
                        <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/8.jpg" style="width: 100%;
  height: 20rem;" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 10px;
                        padding-right: 10px;
                        padding-bottom: 10px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Nike Air One - giá rẻ nhưng chất lượng không rẻ</p>
                            <p class="gach"></p>
                            <p class="nho">Nike đã cho ra đời dòng sản phẩm Nike Air One trên ...</p>
                            <p class="ngay"> <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 25rem;">
                        <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/2.jpg" style="width: 100%;
  height: 20rem;" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 10px;
                        padding-right: 10px;
                        padding-bottom: 10px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Top 5 đôi giày được các bạn nữ yêu thích nhất</p>
                            <p class="gach"></p>
                            <p class="nho">Dựa trên 1 cuộc khảo sát tại BIGSHOES đôi giày mà ...</p>
                            <p class="ngay"> <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 25rem;">
                        <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/1.jpg" style="width: 100%;
  height: 20rem;" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 10px;
                        padding-right: 10px;
                        padding-bottom: 10px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Adidas First One - sự lựa chọn hoàn hảo</p>
                            <p class="gach"></p>
                            <p class="nho">Adidas Fist One hiện đang làm mưa làm gió trên ...</p>
                            <p class="ngay"> <img src="<?php echo BASE_URL ?>/public/css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>