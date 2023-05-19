


<?php
ob_start(); 

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include './config/connectDB.php'; 
$sqlDiscount = "SELECT * FROM product Where CategoryID = 1"; 
$sqlCate1= "SELECT * FROM product Where CategoryID = 2"; 
$sqlCate2 = "SELECT * FROM product Where CategoryID = 3"; 
$resultDiscount = $conn->query($sqlDiscount); 
$resultCate1 = $conn->query($sqlCate1);
$resultCate2 = $conn->query($sqlCate2);
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,100;0,200;1,100;1,200;1,700&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://necolas.github.io/normalize.css/8.0.1/normalize.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="./main.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />

        <title>Document</title>
    </head>
    <body>
        <header>
            <div class="header-top">
                <div class="logo">
                    <a href="/mywebsite/">
                        <img src="./Image/Logo.webp" alt="" />
                    </a>
                </div>
                <form class="form-search">
                    <input
                        class="input-search"
                        type="text"
                        placeholder="Tìm kiếm..."
                    />
                    <button id="btn-search">Tìm kiếm</button>
                </form>
                <div class="header-icon">
                    <div class="user">
                        <a style="color:black" href="/mywebsite/login.php"><i class="fa-regular fa-user"></i>
                        <?php
               if(isset($_SESSION['Email'])){
                echo ($_SESSION['Email']);
            }else{
              
            }
              
              ?>
                    </a>
                    </div>
                   
                    <div class="cart-counter counter">
                        <a href="/mywebsite/cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                        <span class="count">
                        <?php
                            if(isset($_SESSION['Cart'])){
                                echo count($_SESSION['Cart']);
                            }else{
                                echo 0;
                            }
                        ?>
                        </span>
                    </div>
                    <li>
              <a style="color:black" href="/mywebsite/logout.php?id=0">
                <?php
                 if(isset($_SESSION['Email'])){
                  echo "Logout";
                }
                ?>
              </a>
            </li>
                </div>
            </div>
            <div class="header-bottom">
                <div class="header-main">
                    <ul class="list-category">
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Hàng Mới</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Sản Phẩm</a></li>
                        <li><a href="">Bộ sưu tập</a></li>
                        <li><a href="">Liên hệ</a></li>
                        <li><a href="">More</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- END HEADER -->
        <section>
            <div class="slider">
                <div class="image-slider">
                    <div class="image-item">
                        <div class="image-slide">
                            <img src="./Image/take.webp" alt="" />
                        </div>
                    </div>
                    <div class="image-item">
                        <div class="image-slide">
                            <img src="./Image/Sale.webp" alt="" />
                        </div>
                    </div>
                </div>

                <div class="arrow-left">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div class="arrow-right">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </section>
        <!-- END SLIDER TOP -->
        <section>
            <div class="satisfaction">
                <div class="container">
                    <div class="satisfaction-row">
                        <div class="satisfaction-col">
                            <div class="emoji">
                                <i class="fa-regular fa-face-smile"></i>
                            </div>
                            <div class="satisfaction-feel">
                                <h3>100% Sự hài lòng</h3>
                                <p>Đến từ khách hàng</p>
                            </div>
                        </div>
                        <div class="satisfaction-col">
                            <div class="emoji">
                                <i class="fa-regular fa-thumbs-up"></i>
                            </div>
                            <div class="satisfaction-feel">
                                <h3>Giảm 20% khi bạn</h3>
                                <p>Sử dụng thanh toán online</p>
                            </div>
                        </div>
                        <div class="satisfaction-col">
                            <div class="emoji">
                                <i class="fa-regular fa-paper-plane"></i>
                            </div>
                            <div class="satisfaction-feel">
                                <h3>Free ship toàn quốc</h3>
                                <p>Đối với đơn hàng từ 500k</p>
                            </div>
                        </div>
                        <div class="satisfaction-col">
                            <div class="emoji">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <div class="satisfaction-feel">
                                <h3>Hoàn tiền trong 14 ngày</h3>
                                <p>Nếu sản phẩm không chất lượng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END satisfaction -->
        <section>
            <div class="best-deal">
                <div class="container">
                    <h2 class="content-best-deal">Sản phẩm nổi bật</h2>

                    <div class="slider-product">
                        <div class="image-slider-product">
                        <?php
            if ($resultDiscount->num_rows > 0) 
            {
                while($row = $resultDiscount->fetch_assoc()) {
                ?>


<div class="items">
                                <a href="./deatail-product.php?id=<?php echo $row['ProductID'] ?>">
                                    <div class="image">
                                        <img  src="./assets/image/<?php echo $row['ProductImage'] ?>" alt="" />
                                    </div>
                                    <div class="discount">–30%</div>
                                    <div class="item-desc">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="item-name">
                                            <a href="">
                                             <?php echo $row['ProductName']?>
                                            </a>
                                        </p>
                                        <div class="price">
                                            <p class="price-new">$<?php echo $row['NewPrice']?>.00</p>
                                            <p class="price-old">$<?php echo $row['OldPrice']?>.00</p>
                                        </div>
                                        <a class="add-to-cart" href=""
                                            >Thêm vào giỏ hàng</a
                                        >
                                    </div>
                                </a>
                            </div>

                <?php
                }  
            } 
            ?>              
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Best-Deal -->
        <section>
            <div class="container">
                <div class="banner1">
                    <img src="./Image/summer.webp" alt="" />
                </div>
            </div>
        </section>
        <!-- End banner1 -->
        <section>
            <div class="accessories">
                <div class="container">
                    <div class="accessories-row">
                        <div class="accessories-left">
                            <h2 class="title-left">Danh mục</h2>
                            <ul class="list-cate">
                                <li><a href="">Túi cỡ nhỏ</a></li>
                                <li><a href="">Túi cỡ trung</a></li>
                                <li><a href="">Tú cỡ to</a></li>
                                <li><a href="">Ví</a></li>
                                <li><a href="">Balo</a></li>
                                <li><a href="">Giày</a></li>
                                <li><a href="">Phụ kiện</a></li>
                            </ul>
                            <a href="" class="link-cate">Tất cả sản phẩm</a>
                        </div>
                        <div class="accessories-right">
                            <div class="product-4">
                                <div class="slider-product-4">
                                <?php
            if ($resultCate1->num_rows > 0) 
            {
                while($row = $resultCate1->fetch_assoc()) {
                ?>


<div class="items-4">
                                <a href="./deatail-product.php?id=<?php echo $row['ProductID'] ?>">
                                    <div class="image">
                                        <img  src="./assets/image/<?php echo $row['ProductImage'] ?>" alt="" />
                                    </div>
                                    <div class="discount">–30%</div>
                                    <div class="item-desc">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="item-name">
                                            <a href="">
                                             <?php echo $row['ProductName']?>
                                            </a>
                                        </p>
                                        <div class="price">
                                            <p class="price-new">$<?php echo $row['NewPrice']?>.00</p>
                                            <p class="price-old">$<?php echo $row['OldPrice']?>.00</p>
                                        </div>
                                        <a class="add-to-cart" href=""
                                            >Thêm vào giỏ hàng</a
                                        >
                                    </div>
                                </a>
                            </div>

                <?php
                }  
            } 
            ?>              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End accessories -->
        <section>
            <div class="services">
                <div class="container">
                <h2 class="content-best-deal">Nhóm sản phẩm nổi bật</h2>

                    <div class="service-row">
                        <div class="service-col">
                            <img src="./Image/Túi.webp" alt="" />

                            <h3 class="title-footer">Túi xách</h3>
                        </div>
                        <div class="service-col">
                            <img src="./Image/Sandal.webp" alt="" />

                            <h3 class="title-footer">Giày</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END deals -->
       
        <!-- End blog -->
        <section>
            <div class="header-bottom">
                <div class="header-top">
                    <div class="logo-2">
                        <a href="main.html">
                            <img src="./Image/Logo.webp" alt="" />
                        </a>
                    </div>
                    <form class="form-search">
                        <input
                            class="input-search"
                            type="text"
                            placeholder="Theo dõi
                            .."
                        />
                        <button id="btn-search">Đăng ký</button>
                    </form>
                    <div class="header-icon-2">
                        <div class="user">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                        </div>
                        <div class="user">
                            <a href=""><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                        <div class="wishlist-counter counter">
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                        </div>
                        <div class="cart-counter counter">
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <div class="cart-counter counter">
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="cart-counter counter">
                            <a href=""
                                ><i class="fa-brands fa-instagram"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER Bottom -->
        <footer>
            <div class="container">
                <div class="footer-row">
                    <div class="footer-col">
                        <h3 class="title-footer">Get to Know Us</h3>
                        <ul class="list-footer">
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href=""> Careers</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Press Releases</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Creybit Cares</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Gift a Smile</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3 class="title-footer">Connect With US</h3>
                        <ul class="list-footer">
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="">Facebook</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href=""> Twitter</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Instagram</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Youtube</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href=""> Linkdin</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3 class="title-footer">Earning with Us</h3>
                        <ul class="list-footer">
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="">Sell on Creybit</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="">Become an Affiliate</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Fulfilment by Creybit</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Advertise Your Product</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Creybit On Merchants</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3 class="title-footer">Let Us Help You</h3>
                        <ul class="list-footer">
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href=""> Your Account</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href=""> Returns Centre</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">100% Purchase</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Creybit Cares</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Gift a Smile</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3 class="title-footer">Download Apps</h3>
                        <ul class="list-footer">
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i>
                                <a href=""> Careers</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Press Releases</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Creybit Cares</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right"></i
                                ><a href="">Gift a Smile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script
        type="text/javascript"
        src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
        type="text/javascript"
        src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="./main.js"></script>
</html>
