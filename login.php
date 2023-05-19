

<?php
 
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
 
 
 
 if(isset($_SESSION['Email'])){
   ?>
      <script>
          window.location = "/Ecommerce/"; 
      </script>
   <?php
 }
 
 
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
        <!-- =====Header-cart===== -->
        <header class="cart-header">
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
                        <a href=""><i class="fa-regular fa-user"></i></a>
                    </div>
                 
                    <div class="cart-counter counter">
                        <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                        <span class="count">1</span>
                    </div>
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
        <section>
            <div class="user-login">
                <div class="container-login">
                    <h1 class="tiltle-login">Đăng nhập</h1>
                    <div class=" login">
                       
                          <form class="form-login"  action="/mywebsite/loginImplement.php"  method="post">
                            <div class="review-login">
                              <label for="uname"><b>Tài khoản</b></label>
                              <input type="text" placeholder="Enter Username" name="Email" required>
                          
                              <label for="psw"><b>Mật khẩu</b></label>
                              <input type="password" placeholder="Enter Password" name="Password" required>
                                  
                              <div class="">
                                  <a style="color:red" href= "/mywebsite/register.php">Quên mật khẩu?</a></br>
                                  <button style="width:200px;height:45px;cursor:pointer;background-color:blue;color:white;outline:none;border:none;border-radius:5px" type="submit">Đăng nhập</button>
                                  <label>
                                    <input type="checkbox" checked="checked" name="remember"> Ghi nhớ tài khoản
                                  </label>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </section>
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
                            placeholder="Theo dõi tôi..."
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
