<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://i.ibb.co/RbVtcBW/oke-moi.png" rel="icon">
    <meta name="author" content="Dang Hoang Duong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Tin tức</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>Đường láng - Láng thượng - Đống đa - Hà nội  -  Hotline: 085-835-8586</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">
                    <?php
                      require_once("backend/filterWithCookie.php");
                    ?>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
          <div class="header__logo" style="margin-bottom: 14px;"><a class="ps-logo" href="index.php"><img src="https://i.ibb.co/RbVtcBW/oke-moi.png" alt="" style="height: 50px;width: 120px;"></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Trang chủ</a>
                  </li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Sản phẩm</a>
                  </li>
                  <!-- <li class="menu-item"><a href="#">Women</a></li>
                  <li class="menu-item"><a href="#">Kids</a></li> -->
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Tin tức</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Tin tức mới</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.php">Blog Grid 1</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">Blog Grid 2</a></li>
                                </ul>
                          </li>
                          <li class="menu-item"><a href="blog-list.php">Tin tức</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">Liên hệ</a>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Tìm kiếm sản phẩm…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><i class="ps-icon-shopping-cart"></i></a>
              <?php require_once("formCart.php") ?>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Miễn phí vận chuyển</strong>: Chính sách được áp dụng</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Miễn phí vận chuyển</strong>: Chính sách được áp dụng</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Miễn phí vận chuyển</strong>: Chính sách được áp dụng</p>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  <div class="ps-post--detail">
                    <div class="ps-post__thumbnail"><img src="images/blog/11.png" alt=""></div>
                    <div class="ps-post__header">
                      <h3 class="ps-post__title">Tiêu đề chi tiết bài viết</h3>
                      <p class="ps-post__meta">Đăng bởi <a href="blog-grid.php">Đặng Hoàng Dương</a> ngày 03 - 01 - 2023 <a href="blog-grid.php">Tin tức</a></p>
                    </div>
                    <div class="ps-post__content">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia autem at fugit officia nesciunt non nam et accusamus. Quis possimus accusantium nam asperiores neque sunt porro quasi ea, quia, aut commodi fugiat cum. A molestias quas fuga omnis vitae modi doloremque ex commodi, delectus earum nostrum placeat dolorum? Ipsa eum corporis laboriosam neque doloremque! Officia dolorem fugiat ipsum natus numquam officiis distinctio assumenda consectetur porro magnam corporis sapiente iste, saepe dolore quisquam qui ea mollitia maiores! Magnam tempore maxime modi officiis? Expedita assumenda iusto nihil accusantium, placeat, explicabo quos natus quia odio laboriosam consequuntur numquam eum aperiam tempora ut quaerat?.</p>
                      <blockquote>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione odit obcaecati sint repudiandae fuga molestias a perspiciatis velit ut deserunt. Alias quam nemo, voluptate odio, rem fugiat, ratione deleniti obcaecati possimus architecto delectus iure odit? Sed, reprehenderit. Accusamus ab sequi placeat itaque quo a officiis aliquam natus esse animi. Fugit..</p>
                        <p class="author">Dương <br> <span>Đặng Hoàng Dương</span></p>
                      </blockquote>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, eaque temporibus! Repellendus odit amet minima quo ex voluptates perferendis hic? Earum numquam amet nulla minus dolorem voluptas, repudiandae consequatur nam, delectus autem corporis corrupti! Laboriosam sapiente ipsa tempora architecto nemo aut neque asperiores ratione hic. Perspiciatis error voluptate nemo! Ut!.</p>
                    </div>
                    <div class="ps-post__footer">
                      <p class="ps-post__tags"><i class="fa fa-tags"></i><a href="blog-list.php">Dương Store</a>,<a href="blog-list.php"> Woman</a>,<a href="blog-list.php"> Nike</a></p>
                      <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Bình luận</span><span><i class="fa fa-heart"></i>  Thích</span>
                        <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Chia sẻ</a>
                          <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ps-author">
                    <div class="ps-author__thumbnail"><img src="images/user/1.jpg" alt=""></div>
                    <div class="ps-author__content">
                      <header>
                        <h4>Đặng Hoàng Dương</h4>
                        <p>WEB DESIGNER</p>
                      </header>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam sint rerum accusamus molestiae accusantium omnis rem dolorum deleniti sed beatae. continued operation of the Hubble space telescope probably.</p>
                    </div>
                  </div>
                  <div class="ps-comments">
                    <h3>Comment(4)</h3>
                    <div class="ps-comment">
                      <div class="ps-comment__thumbnail"><img src="images/user/2.jpg" alt=""></div>
                      <div class="ps-comment__content">
                        <header>
                          <h4>Đặng Hoàng Dương <span>(15 minutes ago)</span></h4><a href="#">Trả lời<i class="ps-icon-arrow-left"></i></a>
                        </header>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam sint rerum accusamus molestiae accusantium omnis rem dolorum deleniti sed beatae. continued operation of the Hubble space telescope probably.</p>
                      </div>
                    </div>
                    <div class="ps-comment ps-comment--reply">
                      <div class="ps-comment__thumbnail"><img src="images/user/3.jpg" alt=""></div>
                      <div class="ps-comment__content">
                        <header>
                          <h4>Đặng Hoàng Dương <span>(3 hours ago)</span></h4><a href="#">Trả lời<i class="ps-icon-arrow-left"></i></a>
                        </header>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam sint rerum accusamus molestiae accusantium omnis rem dolorum deleniti sed beatae..</p>
                      </div>
                    </div>
                    <div class="ps-comment">
                      <div class="ps-comment__thumbnail"><img src="images/user/4.jpg" alt=""></div>
                      <div class="ps-comment__content">
                        <header>
                          <h4>Đặng Hoàng Dương <span>(1 day ago)</span></h4><a href="#">Trả lời<i class="ps-icon-arrow-left"></i></a>
                        </header>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam sint rerum accusamus molestiae accusantium omnis rem dolorum deleniti sed beatae. continued operation of the Hubble space telescope probably.</p>
                      </div>
                    </div>
                  </div>
                  <form class="ps-form--comment" action="do_action" method="post">
                    <h3>Bình luận</h3>
                    <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Họ và tên">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <input class="form-control" type="email" placeholder="Email">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Chủ đề">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Điện thoại">
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-group">
                              <textarea class="form-control" rows="6" placeholder="Nội dung..."></textarea>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                      <button class="ps-btn ps-btn--sm ps-contact__submit">Gửi tin nhắn<i class="ps-icon-next"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <aside class="ps-widget--sidebar ps-widget--search">
                    <form class="ps-search--widget" action="do_action" method="post">
                      <input class="form-control" type="text" placeholder="Search posts...">
                      <button><i class="ps-icon-search"></i></button>
                    </form>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Archive</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-list--arrow">
                        <li class="current"><a href="product-listing.php">Tất cả(20)</a></li>
                        <li><a href="product-listing.php">Danh mục demo</a></li>
                        <li><a href="product-listing.php">Danh mục demo</a></li>
                        <li><a href="product-listing.php">Danh mục demo</a></li>
                        <li><a href="product-listing.php">Danh mục demo</a></li>
                        <li><a href="product-listing.php">Danh mục demo</a></li>
                        <li><a href="product-listing.php">Danh mục demo</a></li>
                      </ul>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Banner</h3>
                    </div>
                    <div class="ps-widget__content"><a href="product-listing"><img src="images/offer/sidebar.jpg" alt=""></a></div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Tin tức hot</h3>
                    </div>
                    <div class="ps-widget__content">
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/1.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Tiêu đề bài viết</a><span>07 - 12 - 1999</span></div>
                      </div>
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/2.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Tiêu đề bài viết</a><span>07 - 12 - 1999</span></div>
                      </div>
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/3.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Tiêu đề bài viết</a><span>07 - 12 - 1999</span></div>
                      </div>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Sản phẩm hot</h3>
                    </div>
                    <div class="ps-widget__content">
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/1.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Sản phẩm 1</a>
                          <p><del> 300.000 VND</del> 200.000 VND</p><a class="ps-btn" href="#">Mua ngay</a>
                        </div>
                      </div>
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/2.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Sản phẩm 2</a>
                          <p><del> 300.000 VND</del> 200.000 VND</p><a class="ps-btn" href="#">Mua ngay</a>
                        </div>
                      </div>
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/3.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Sản phẩm 3</a>
                          <p><del> 300.000 VND</del> 200.000 VND</p><a class="ps-btn" href="#">Mua ngay</a>
                        </div>
                      </div>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Thẻ</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-tags">
                        <li><a href="product-listing.php">Sản phẩm</a></li>
                        <li><a href="product-listing.php">Hot</a></li>
                        <li><a href="product-listing.php">Sản phẩm mới</a></li>
                        <li><a href="product-listing.php">Quần</a></li>
                        <li><a href="product-listing.php">Áo</a></li>
                        <li><a href="product-listing.php">Demo</a></li>
                        <li><a href="product-listing.php">Adidas</a></li>
                        <li><a href="product-listing.php">Diour</a></li>
                      </ul>
                    </div>
                  </aside>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Đăng Ký Mail</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Đăng ký ngay</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...để nhận  <span> 200.000 VND </span>  từ Dương Store.</p>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header><a class="ps-logo" href="index.php"><img src="https://i.ibb.co/RbVtcBW/oke-moi.png" alt=""></a>
                        <h3 class="ps-widget__title">Thông tin liên hệ</h3>
                      </header>
                      <footer>
                        <p><strong>Đường Láng - Láng Thượng - Đống Đa - Hà Nội</strong></p>
                        <p>Email: <a href='duong6749@gmail.com'>duong6749@gmail.com</a></p>
                        <p>Phone: 085-835-8586</p>
                      </footer>
                    </aside>
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">MENU</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li><a href="#">Menu Demo 1</a></li>
                          <li><a href="#">Menu Demo 2</a></li>
                          <li><a href="#">Menu Demo 3</a></li>
                          <li><a href="#">Menu Demo 4</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Trợ giúp</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Demo 1</a></li>
                          <li><a href="#">Demo 2</a></li>
                          <li><a href="#">Demo 3</a></li>
                          <li><a href="#">Demo 4</a></li>
                          <li><a href="#">Demo 5</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">SẢN PHẨM</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Sản phẩm Demo 1</a></li>
                          <li><a href="#">Sản phẩm Demo 2</a></li>
                          <li><a href="#">Sản phẩm Demo 3</a></li>
                          <li><a href="#">Sản phẩm Demo 4</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">DƯƠNG STORE</a>, Tất cả các quyên. Thiết kế bởi <a href="http://www.facebook.com/DangHoangDuong.19"> Đặng Hoàng Dương</a></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>