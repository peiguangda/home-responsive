<!DOCTYPE html>
<html>
    <head>
        <title>Css</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="col header">
                <div class="row search">
                    <img src="/images/icons-8-like@2x.png" href="#">
                    <input type="text" placeholder="Nhập từ khóa để tìm kiếm"> 
                    <img src="/images/icons-8-shopping-cart@2x.png" href="#">
                </div>
                <div class="row menu">
                    <div class="menu1">Sản phẩm</div>
                    <div class="menu2">Khóa học</div>
                    <div class="menu3">Cẩm nang</div>
                </div>
            </div>

            <div class="carousel">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/banner@2x.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/banner@2x.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/banner@2x.jpg" alt="Third slide">
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="category bg-light col">
                <div class="row">
                    <div class="col">
                        <img class="category-icon" href="#" src="images/icon_5@2x.png" alt="">
                        <p>Mang thai</p>
                    </div>
                    <div class="col">
                        <img class="category-icon" href="#" src="images/icon_6@2x.png" alt="">
                        <p>Sau sinh</p>
                    </div>
                    <div class="col">
                        <img class="category-icon" href="#" src="images/icon_7@2x.png" alt="">
                        <p>Thời trang mẹ và bé</p>
                    </div>
                    <div class="col">
                        <img class="category-icon" href="#" src="images/icon_8@2x.png" alt="">
                        <p>Làm đẹp</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="category-icon" href="#" src="images/icon_9@2x.png" alt="">
                        <p>Dịch vụ mẹ và bé</p>
                    </div>
                    <div class="col">
                        <img class="category-icon" href="#" src="images/icon_10@2x.png" alt="">
                        <p>Cho bé</p>
                    </div>
                    <div class="col">
                        <img class="category-icon" href="#" src="images/icon_11@2x.png" alt="">
                        <p>Dinh dưỡng</p>
                    </div>
                    <div class="col">
                        <img class="category-icon" href="#" src="images/icon_12@2x.png" alt="">
                        <p>Sức khỏe</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="flash-sale row">
                    <h3 class="flash-title">Flash sale</h3>
                    <p class="time">01</p>
                    <p class="text">:</p>
                    <p class="time">28</p>
                    <p class="text">:</p>
                    <p class="time">20</p>
                    <div class="row">
                        <p class="text">Xem thêm</p>
                        <img src="images/arrow-right-1.svg" alt="">
                    </div>
                </div>

                <div class="advertise row">
                    <div class="col cart"><img src="images/xeday.jpg" alt=""></div>
                    <div class="col">
                        <div class="row discount"><p>-35%</p></div>
                        <div class="row price_discount"><p>500.000đ</p></div>
                        <div class="row price"><p>700.000d</p></div>
                    </div>
                    <div class="col show"><img src="images/icon_15.svg" alt=""></div>
                </div>
            </div>

            <div class="col category-ad">
                <div class="row">
                    <a class="selected" href="#">Nổi bật</a>
                    <a href="#">Bán chạy</a>
                    <a href="#">Mới nhất</a>
                </div>
                @for($i = 0; $i < 4; $i++)
                <div class="row">
                    @for($j = 0; $j < 2 ; $j++)
                    <div class="col">
                        <p class="discount1">-30%</p>
                        <img src="images/xeday.jpg" alt="">
                        <p>Sữa abbott Grow gold 3+ hương vani</p>
                        <p class="price_discount1">365.000đ</p>
                        <p class="price1">500.000đ</p>
                        <div class="row">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <p class="star-user">(50)</p>
                        </div>
                    </div>
                    @endfor
                </div>
                @endfor
            </div>

            <div class="col bottom">
                <div class="col about-us">
                    <h2 class="row">Mua hàng trên BIBABO</h2>
                    @for($i = 0 ; $i < 3 ; $i++)
                    <div class="row">
                        <div class="row">
                            <div class="col icon"><img  src="images/icon_6@2x.png" alt=""></div>
                            <div class="col text">
                                <p class="title1">Hàng chính hãng</p>
                                <p class="descript">Nhập trực tiếp từ nhà cung cấp uy tín. Có thể kiểm tra bằng các phần mềm quét mã vạch</p>
                            </div>
                        </div>
                    </div>
                    @endfor

                    <div class="row support-button">
                        <p class="support-icon">?</p>
                        <p class="support">Hỗ trợ</p>
                    </div>
                </div>

                <div class="row category-item">
                    <div class="col selected">
                        <a href="#"><img class="icon-menu-bottom " src="images/group-4@2x_v2.png" alt=""></a>
                    </div>
                    <div class="col">
                        <a href="#"><img class="icon-menu-bottom" src="images/group-5@2x_v2.png" alt=""></a>
                    </div>
                    <div class="col " style="">
                        <a href="#"><img class="icon-menu-bottom" src="images/group-4@2x_v2.png" alt=""  ></a>
                    </div>
                    <div class="col ">
                        <a href="#"><img class="icon-menu-bottom" src="images/group-7@2x.png" alt=""></a>
                    </div>
                    <div class="col ">
                        <a href="#"><img class="icon-menu-bottom" src="images/group-8@2x_v2.png" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
