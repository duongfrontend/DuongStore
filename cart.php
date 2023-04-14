<?php
  require_once("backend/authWithCookie.php");
  require_once("backend/auth.php");
  require_once("repository/cartRepository.php");
  require_once("repository/shoeRepository.php");

  $cartRepository = new CartRepository();
  $shoeRepository = new ShoeRepository();
 
  $infoUser = Auth::loginWithCookie();
  $cartList = $cartList = $cartRepository->findByUserIdAndStatus($infoUser['id'],1);

?>
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
    <title>Sky - Cart</title>
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
                  <p>Đường láng - Láng thượng - Đống đa - Hà nội - Hotline: 085-835-8586</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">
                    <?php
                      require_once("backend/filterWithCookie.php");
                    ?>
                    <!-- <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Japanese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div> -->
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
                  <li class="menu-item menu-item-has-children dropdown"><a href="index.php">TRANG CHỦ</a>
                  </li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">SẢN PHẨM</a>
                    
                  </li>
                  <!-- <li class="menu-item"><a href="#">Women</a></li>
                  <li class="menu-item"><a href="#">Kids</a></li> -->
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">TIN TỨC</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">TIN TỨC MỚI</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.php">TIN TỨC MỚI 1</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">TIN TỨC MỚI 2</a></li>
                                </ul>
                          </li>
                          <li class="menu-item"><a href="blog-list.php">TIN TỨC</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">LIÊN HỆ</a>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Tìm kiếm sản phẩm…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>
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
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <form method="post">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                <th>TẤT CẢ SẢN PHẨM</th>
                  <th>GIÁ<th>
                  <th>GIẢM GIÁ <th>
                  <th>SIZE<th>
                  <th>MÀU SẮC<th>
                  <!-- <th>Quantity</th> -->
                  <th>TỔNG</th>
                </tr>
              </thead>
              <tbody>
                <input id="cartSize" style="display: none;" value="<?php echo $cartList->num_rows ?>" type="number">
                <?php
                  $count = 0;
                  foreach($cartList as $cart){
                    $shoe = $shoeRepository->getById($cart['shoe_id'])->fetch_assoc();
                    $arrLinkImage = $shoeRepository->getImage($shoe['shoe_id']);
                    if($arrLinkImage->num_rows > 0){
                        $shoe_image= $arrLinkImage->fetch_assoc()['link_image'];
                    }
                    else{
                        $shoe_image= "images/product/cart-preview/1.jpg";
                    }
                ?>
                <tr>
                  <td><a class="ps-product__preview" href="product-detail.php?id=<?php echo $cart['shoe_id'] ?>"><img width="100" class="mr-15" src="<?php echo $shoe_image ?>" alt=""> <?php echo $shoe['shoe_name'] ?></a></td>
                  <td><span><?php echo $shoe['price'] ?></span> VND</td>
                  <td> </td>
                  <td><span id="price<?php echo $count ?>"><?php echo $shoe['price'] - $shoe['price']*$shoe['sale']*0.01 ?></span> VND <span><?php echo "(-".$shoe['sale']."%) "; ?></span></td>
                  <td> </td>
                  <td><span><?php echo $cart['shoe_size'] ?></span></td>
                  <td> </td>
                  <td><span><?php echo $cart['shoe_color'] ?></span></td>
                  <td> </td>
                  <!-- <td>
                    <div class="form-group--number">
                      <button id="minus<?php echo $count ?>" class="minus"><span>-</span></button>
                      <input name="quantity[]" id="quantity<?php echo $count ?>" class="form-control" type="text" value="1">
                      <button id="plus<?php echo $count ?>" class="plus"><span>+</span></button>
                    </div>
                  </td> -->
                  <td><span id="total<?php echo $count ?>"><?php echo $shoe['price'] - $shoe['price']*$shoe['sale']*0.01 ?></span> VND</td>
                  <td>
                    <a href="deleteCart.php?userId=<?php echo $infoUser['id'] ?>&shoeId=<?php echo $shoe['shoe_id'] ?>"><div class="ps-remove"></div></a>
                  </td>
                </tr>
                <?php
                    $count++;
                  }
                ?>
              </tbody>
            </table>
            <div class="ps-cart__actions">
              <div class="ps-cart__promotion">
              </div>
              <div class="ps-cart__total">
                <h3>THÀNH TIỀN: <span id="totalPrice"></span></h3>
                <a href="checkout.php" class="ps-btn">THANH TOÁN<i class="ps-icon-next"></i></a>
              </div>
            </div>
          </form>
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
    <script>
      function eventMinus(i){
        var price = document.getElementById("price"+i.toString()).innerText;
        // var quantity = document.getElementById("quantity"+i.toString());
        if(parseInt(quantity.value)>1){
          quantity.value = parseInt(quantity.value)-1;
          // document.getElementById("total"+i.toString()).innerText = parseFloat(price)*parseInt(quantity.value);
          document.getElementById("total"+i.toString()).innerText = parseFloat(price);
          totalPrice();
        }
          
          
      }
      function plusMinus(i){
        var price = document.getElementById("price"+i.toString()).innerText;
        // var quantity = document.getElementById("quantity"+i.toString());
        if(parseInt(quantity.value)<100){
          quantity.value = parseInt(quantity.value)+1;
          // document.getElementById("total"+i.toString()).innerText = parseFloat(price)*parseInt(quantity.value);
          document.getElementById("total"+i.toString()).innerText = parseFloat(price);
          totalPrice();
        }
          
      }
      function totalPrice(){
        var cartSize = document.getElementById("cartSize").value;
        var sum = 0;
        for(var i=0;i<cartSize;i++){
          var price = document.getElementById("total"+i.toString()).innerText;
          sum+= parseInt(price);
        }
        document.getElementById("totalPrice").innerText = sum+" VND";
      }


      function calculator(i){
        document.getElementById("minus"+i.toString()).onclick = ()=>{
          eventMinus(i);
        }
        document.getElementById("plus"+i.toString()).onclick = ()=>{
          plusMinus(i);
        }
      }

      // var cartSize = document.getElementById("cartSize").value;
      // for(var i=0;i<cartSize;i++){
      //   calculator(i);
      // }

      totalPrice();
      
    </script>
  </body>
</html>