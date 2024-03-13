
<?php 
require_once ('scssphp/scss.inc.php');
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
$themeCssName='';  
$ColorScheme = '#ff5e00';
$themeColor = strtolower($ColorScheme);

$scss = new Compiler();
$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
$scss->addImportPath('sass');
$scss->setVariables(array(
  '$linkColor' => $themeColor,
  '$dir' => 'ltr',
));

$string_css     = $scss->compile('@import "theme.scss"');
$header1_css    = $scss->compile('@import "header/header1.scss"');
$footer1_css    = $scss->compile('@import "footer/footer1.scss"');
$responsive_css     = $scss->compile('@import "responsive.scss"');

file_put_contents('css/theme.css', $string_css);
file_put_contents('css/header/header1.css', $header1_css);
file_put_contents('css/footer/footer1.css', $footer1_css);
file_put_contents('css/responsive.css', $responsive_css);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs
  ============================================ -->
  <title>Furnicom - Responsive Furniture & Interior HTML Template</title>
  <meta charset="utf-8">
  <meta name="keywords" content="html template, furniture html template, interior html template, furniture & interior html template, best html template, best furniture template, best furniture theme, furniture theme, theme for furniture" />
  <meta name="description" content="Furnicom is an awesome premium HTML template for any kind of online store, especially for furniture, interior, decoration, design studio and more. Quickly & easily build your website just by some clicks." />
  <meta name="author" content="Smartaddons">
  <meta name="robots" content="index, follow" />
<!-- Mobile specific metas
  ============================================ -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicon
  ============================================ -->
  <link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
<!-- Libs CSS
  ============================================ -->
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="js/lightslider/lightslider.css" rel="stylesheet">
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="js/owl-carousel/owl.theme.default.min.css"> -->
  <link href="css/themecss/lib.css" rel="stylesheet">
  <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <link href="js/minicolors/miniColors.css" rel="stylesheet">
  <link href="js/slick-slider/slick.css" rel="stylesheet">

<!-- Theme CSS
  ============================================ -->
  <link href="css/themecss/so_sociallogin.css" rel="stylesheet">
  <link href="css/themecss/so_searchpro.css" rel="stylesheet">
  <link href="css/themecss/so_megamenu.css" rel="stylesheet">
  <link href="css/themecss/so-categories.css" rel="stylesheet">
  <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
  <link href="css/themecss/so-category-slider.css" rel="stylesheet">
  <link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
  <link href="css/footer/footer1.css" rel="stylesheet">
  <link href="css/header/header1.css" rel="stylesheet">
  <link id="color_scheme" href="css/theme.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/quickview/quickview.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="js/quickview/magnific-popup.css">

<!-- Google web fonts
  ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <style type="text/css">
  body{
    font-family: 'Poppins', sans-serif;
  }
</style>
</head>
<body class="common-here res layout-1">

  <div id="wrapper" class="wrapper-fluid banner-effect-3">
    <!-- HEADER CONTAINER -->
    <header class="typeheader-1">
      <!-- HEADER TOP -->
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-9">
              <div class="header-user"> 
                <ul>
                  <li>
                    <a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title="">USD
                      <i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#" class="smooth" title="">USD</a>
                      </li>
                      <li>
                        <a href="#" class="smooth" title="">UER</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <img src="image/catalog/england.png" class="lang-img" alt="">
                    <a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title=""><span class="hidden-md hidden-sm hidden-xs">English</span>
                      <i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#" class="smooth" title="">
                          <span><img src="image/catalog/england.png" alt="" class="lang-img"></span>
                        English</a>
                      </li>
                      <li>
                        <a href="#" class="smooth" title="">
                          <span><img src="image/catalog/ar-ar.png" alt="" class="lang-img"></span>
                        Arabic</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="my-account.php" class="smooth" title="">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    My Account</a>
                  </li>
                  <li>
                    <a href="wishlist.php" class="smooth" title="">
                      <i class="fa fa-heart"></i>
                    My Wishlist</a>
                  </li>
                  <li>
                    <a href="checkout.php" class="smooth" title="">
                      <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    Checkout</a>
                  </li>

                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-3">
              <div class="header-hotline">
                <div class="item">
                  <p>
                    <a href="#" class="smooth" title="">
                      Start 
                      <span>LIVE CHAT</span>
                    </a>
                  </p>
                </div>
                <div class="item">
                  <p>
                    <span class="hidden-md">Call our customer service at:</span> <a href="tel:096-999-8386" class="smooth" title=""><span>096-999-8386</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //HEADER TOP -->

      <!-- HEADER CENTER -->
      <div class="header-center">
        <div class="container">
          <div class="logo">
            <a href="index.php" class="" title="">
              <img src="image/catalog/demo/logo/logo.png" alt="">
            </a>
          </div>
          <div class="search-form">
            <button type="button" class="smooth search-form-btn"><i class="fa fa-search"></i></button>
            <form action="#" method="post">
              <div class="icon">
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>
              <input type="text" name="keyword" placeholder="Enter your keyword...">
              <button type="submit">Search</button>
            </form>
          </div>
          <div class="shipping">
            <img src="image/catalog/demo/header/shipping-bg.png" alt="">
            <div class="shipping-info">
              <h6 class="shipping-title">Everyday Free Shipping</h6>
              <p class="shipping-desc">& No Sales Tax</p>
            </div>
          </div>
          <div class="cart">
            <a href="cart.php" class="smooth cart-box dropdown-toggle" title="" data-toggle="dropdown">
              <img src="image/catalog/demo/header/cart.png" class="cart-image" alt="">
              <p class="quantity">0 item(s) - $0.00</p>
              <p class="cart-title">MY CART</p>
            </a>
            <ul class="dropdown-menu shopping-cart">
              <li class="shopping-cart-title clearfix">
                <label>Your Product</label>
                <label>Price</label>
              </li>
              <li class="product-item">
                <table class="table cart-table">
                  <tbody>
                    <tr>
                      <td class="product-item-image">
                        <a href="detail.php" class="" title="">
                          <img src="image/catalog/demo/products/cart-product1.png" alt="" class="img-responsive">
                        </a>
                        <button class="remove-product-cart smooth">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                      <td class="product-item-name">
                        <h4 class="product-name">
                          <a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
                        </h4>
                        <span class="product-item-quantity">Quantity: 01</span>
                      </td>
                      <td class="product-item-price">
                        <span class="shopping-price">$320.00</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="product-item-image">
                        <a href="detail.php" class="" title="">
                          <img src="image/catalog/demo/products/cart-product2.png" alt="" class="img-responsive">
                        </a>
                        <button class="remove-product-cart smooth">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                      <td class="product-item-name">
                        <h4 class="product-name">
                          <a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
                        </h4>
                        <span class="product-item-quantity">Quantity: 01</span>
                      </td>
                      <td class="product-item-price">
                        <span class="shopping-price">$450.00</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="product-item-image">
                        <a href="detail.php" class="" title="">
                          <img src="image/catalog/demo/products/cart-product3.png" alt="" class="img-responsive">
                        </a>
                        <button class="remove-product-cart smooth">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                      <td class="product-item-name">
                        <h4 class="product-name">
                          <a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
                        </h4>
                        <span class="product-item-quantity">Quantity: 01</span>
                      </td>
                      <td class="product-item-price">
                        <span class="shopping-price">$250.00</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="total-price clearfix">
                <label class="total-title">TOTAL:</label>
                <label class="float-right">$1030.00</label>
              </li>
              <li class="shopping-cart-checkout">
                <a href="cart.php" class="smooth" title="">GO TO CART</a>
                <a href="checkout.php" class="smooth" title="">CHECKOUT</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- //HEADER CENTER -->

      <!-- HEADER BOTTOM -->
      <div class="header-bottom">
        <div class="container">
          <div class="header-bottom-left">
            <div class="header-menu">
              <div class="megamenu-style-dev megamenu-dev">
                <div class="responsive">
                  <nav class="navbar-default">
                    <div class="container-megamenu-horizontal">
                      <div class="nav-bar-header">
                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle smooth">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                      </div>
                      <div class="megamenu-wrapper">
                        <span id="remove-megamenu"><i class="fa fa-times" aria-hidden="true"></i></span>
                        <div class="megamenu-pattern">
                          <div class="container1">
                            <ul class="megamenu clearfix" data-transition="fade" data-animationtime="500">
                              <li class="full-width menu-home">
                                <a href="index.php" class="smooth cleafix" title="">
                                  <i class="fa fa-home"></i>
                                </a>
                              </li>
                              <li class="full-width menu-layout with-sub-menu hover">
                                <p class="close-menu smooth"></p>
                                <a href="index.php" class="smooth cleafix" title="">
                                  LAYOUTS
                                  <b class="caret"></b>
                                </a>
                                <div class="sub-menu">
                                  <div class="content">
                                    <div class="row">

                                      <div class="html">
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="index.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/home-2.jpg" alt="">
                                          </a>
                                          <a href="index.php" class="smooth" title="">Home Page 1</a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="index2.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/home-lyout2.jpg" alt="">
                                          </a>
                                          <a href="index2.php" class="smooth" title="">Home Page 2</a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="index3.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/layout-3.jpg" alt="">
                                          </a>
                                          <a href="index3.php" class="smooth" title="">Home Page 3</a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="index4.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/layout-4.jpg" alt="">
                                          </a>
                                          <a href="index4.php" class="smooth" title="">Home Page 4</a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="index5.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/layout-5.jpg" alt="">
                                          </a>
                                          <a href="index5.php" class="smooth" title="">Home Page 5</a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="html_width_RTL/index.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/rtl.png" alt="">
                                          </a>
                                          <a href="html_width_RTL/index.php" class="smooth" title="">Home Page RTL</a>
                                        </div>

                                        <!-- <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="html_width_RTL/index2.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/rtl2.png" alt="">
                                          </a>
                                          <a href="html_width_RTL/index2.php" class="smooth" title="">Home Page 2 RTL</a>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="html_width_RTL/index3.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/rtl3.png" alt="">
                                          </a>
                                          <a href="html_width_RTL/index3.php" class="smooth" title="">Home Page 3 RTL</a>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="html_width_RTL/index4.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/rtl4.png" alt="">
                                          </a>
                                          <a href="html_width_RTL/index4.php" class="smooth" title="">Home Page 4 RTL</a>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                          <a href="html_width_RTL/index5.php" class="smooth c-img" title>
                                            <img src="image/catalog/layout/rtl5.png" alt="">
                                          </a>
                                          <a href="html_width_RTL/index5.php" class="smooth" title="">Home Page 5 RTL</a>
                                        </div> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="full-width menu-bedroom with-sub-menu hover">
                                <p class="close-menu"></p>
                                <a href="category2.php" class="smooth cleafix" title="">
                                  FEATURES
                                  <b class="caret"></b>
                                </a>
                                <div class="sub-menu">
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="html">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <div class="column">
                                                <a href="#" class="smooth title-submenu" title="">listing Pages</a>
                                                <div>
                                                  <ul class="row-list">
                                                    <li>
                                                      <a href="category.php" class="smooth" title="">Category Page 1</a>
                                                    </li>
                                                    <li>
                                                      <a href="category2.php" class="smooth" title="">Category Page 2</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="column">
                                                <a href="#" class="smooth title-submenu" title="">Product Pages</a>
                                                <div>
                                                  <ul class="row-list">
                                                    <li>
                                                      <a href="detail.php" class="smooth" title="">Product Detail
                                                      </a>
                                                    </li>
                                                    <li>
                                                      <a href="detail-sidebar.php" class="smooth" title="">Product Detail Sidebar
                                                      </a>
                                                    </li>
                                                    <li>
                                                      <a href="detail-sidebar-right.php" class="smooth" title="">Product Detail Sidebar Right
                                                      </a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="column">
                                                <a href="#" class="smooth title-submenu" title="">Shopping Pages</a>
                                                <div>
                                                  <ul class="row-list">
                                                    <li>
                                                      <a href="cart.php" class="smooth" title="">Shopping Cart Page</a>
                                                    </li>
                                                    <li>
                                                      <a href="checkout.php" class="smooth" title="">Checkout Page</a>
                                                    </li>
                                                    <li>
                                                      <a href="compare.php" class="smooth" title="">Compare Page</a>
                                                    </li>
                                                    <li>
                                                      <a href="wishlist.php" class="smooth" title="">Wishlist Page</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="column">
                                                <a href="#" class="smooth title-submenu" title="">MY ACCOUNT PAGES</a>
                                                <div>
                                                  <ul class="row-list">
                                                    <li>
                                                      <a href="my-account.php" class="smooth" title="">My Account Page</a>
                                                    </li>
                                                    <li>
                                                      <a href="login.php" class="smooth" title="">Login Page</a>
                                                    </li>
                                                    <li>
                                                      <a href="register.php" class="smooth" title="">Register Page</a>
                                                    </li>
                                                    <li>
                                                      <a href="order-history.php" class="smooth" title="">Order History</a>
                                                    </li>
                                                    <li>
                                                      <a href="order-infomation.php" class="smooth" title="">Order Infomation</a>
                                                    </li>
                                                    <li>
                                                      <a href="product-return.php" class="smooth" title="">Product Returns</a>
                                                    </li>
                                                    <li>
                                                      <a href="gift-voucher.php" class="smooth" title="">Gift Voucher</a>
                                                    </li>

                                                  </ul>
                                                </div>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="full-width menu-dinning with-sub-menu hover">
                                <p class="close-menu"></p>
                                <a href="#" class="smooth cleafix" title="">
                                  CATEGORY
                                  <b class="caret"></b>
                                </a>
                                <div class="sub-menu">
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="html">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <div class="column">
                                                <div class="static-menu-image">
                                                  <img src="image/catalog/demo/slider/home1/static-menu-image.jpg" alt="">
                                                </div>
                                                <a href="#" class="smooth title-submenu" title="">Living Room</a>
                                                <div>
                                                  <ul class="row-list">
                                                    <li>
                                                      <a href="#" class="smooth" title="">Large Coffee Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Small Coffee Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Coffee Table sets</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">End Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Console Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Set Of Tables</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="column">
                                                <div class="static-menu-image">
                                                  <img src="image/catalog/demo/slider/home1/static-menu-image2.jpg" alt="">
                                                </div>
                                                <a href="#" class="smooth title-submenu" title="">Bed Room</a>
                                                <div>
                                                  <ul class="row-list">
                                                    <li>
                                                      <a href="#" class="smooth" title="">Large Coffee Tables
                                                        <span class="menu-label menu-label-new">New</span>
                                                      </a>
                                                      <ul>
                                                        <li>
                                                          <a href="#" class="smooth" title="">Large Coffee Tables
                                                          </a>
                                                        </li>
                                                        <li>
                                                          <a href="#" class="smooth" title="">Small Coffee Tables
                                                          </a>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Small Coffee Tables
                                                        <span class="menu-label menu-label-hot">Hot</span>
                                                      </a>
                                                      <ul>
                                                        <li>
                                                          <a href="#" class="smooth" title="">Large Coffee Tables
                                                          </a>
                                                        </li>
                                                        <li>
                                                          <a href="#" class="smooth" title="">Small Coffee Tables
                                                          </a>
                                                        </li>
                                                        <li>
                                                          <a href="#" class="smooth" title="">Large Coffee Tables
                                                          </a>
                                                        </li>
                                                        <li>
                                                          <a href="#" class="smooth" title="">Small Coffee Tables
                                                          </a>
                                                        </li>

                                                      </ul>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Coffee Table sets</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">End Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Console Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Set Of Tables</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="column">
                                                <div class="static-menu-image">
                                                  <img src="image/catalog/demo/slider/home1/static-menu-image3.jpg" alt="">
                                                </div>
                                                <a href="#" class="smooth title-submenu" title="">Work Place</a>
                                                <div>
                                                  <ul class="row-list">
                                                    <li>
                                                      <a href="#" class="smooth" title="">Large Coffee Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Small Coffee Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Coffee Table sets</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">End Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Console Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Set Of Tables</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="column">
                                                <div class="static-menu-image">
                                                  <img src="image/catalog/demo/slider/home1/static-menu-image4.jpg" alt="">
                                                </div>
                                                <a href="#" class="smooth title-submenu" title="">Kitchen</a>
                                                <div>
                                                  <ul class="row-list">
                                                    <li>
                                                      <a href="#" class="smooth" title="">Large Coffee Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Small Coffee Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Coffee Table sets</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">End Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Console Tables</a>
                                                    </li>
                                                    <li>
                                                      <a href="#" class="smooth" title="">Set Of Tables</a>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="full-width menu-contact with-sub-menu hover">
                                <p class="close-menu"></p>
                                <a href="listing-blog.php" class="smooth cleafix" title="">
                                  BLOG
                                  <b class="caret"> </b>
                                </a>
                                <div class="sub-menu">
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        
                                        <ul>
                                          <li>
                                            <a href="listing-blog-2-column.php" class="smooth" title="Listing Blog 2 Column">Masorny Blog 2 Column</a>
                                          </li>
                                          <li>
                                            <a href="listing-blog-3-column.php" class="smooth" title="Listing Blog 3 Column">Masorny Blog 2 Column</a>
                                          </li>
                                          <li>
                                            <a href="portfolio-2-column.php" class="smooth" title="Portfolio 2 Column">Portfolio 2 Column</a>
                                          </li>
                                          <li>
                                            <a href="portfolio-3-column.php" class="smooth" title="Portfolio 3 Column">Portfolio 3 Column</a>
                                          </li>
                                          <li>
                                            <a href="portfolio-detail.php" class="smooth" title="Portfolio Detail">Portfolio Detail</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>

                              <li class="full-width menu-contact with-sub-menu hover">
                                <p class="close-menu"></p>
                                <a href="#" class="smooth cleafix" title="">
                                  PAGES
                                  <b class="caret"> </b>
                                </a>
                                <div class="sub-menu">
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <ul>
                                          <li>
                                            <a href="about-us.php" class="smooth" title="">About Us</a>
                                          </li>
                                          <li>
                                            <a href="contact-us.php" class="smooth" title="">Contact Us</a>
                                          </li>
                                          <li>
                                            <a href="faq.php" class="smooth" title="">FAQs</a>
                                          </li>
                                          <li>
                                            <a href="coming-soon.php" class="smooth" title="">Comming Soon</a>
                                          </li>
                                          <li>
                                            <a href="page404.php" class="smooth" title="">Page 404</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="menu-hot-deals"> 
                                <a href="#" class="smooth" title>HOT DEALS</a>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="header-bottom-right">
            <ul>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-wifi" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-podcast" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- //HEADER BOTTOM -->
    </header>
    <!-- //HEADER CONTAINER -->

    <div class="breadcrumbs">
      <div class="container">
        <h2 class="category-name">detail sidebar</h2>
        <ul class="breadcrumb">
          <li>
            <a href="index.php" class="smooth" title="">Home</a>
          </li>
          <li>
            <a href="category.php" class="smooth" title="">Listing Grid</a>
          </li>
          <li>
            <a href="detail-sidebar.php" class="smooth" title="">detail sidebar</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- DETAIL SIDEBAR -->
    <div class="detail-sidebar">
     <div class="container">
       <div class="row">
        <aside class="col-lg-3 col-md-3 aside-left">
          <span class="close-aside-left"><i class="fa fa-times" aria-hidden="true"></i></span>
          <div class="aside-best-seller">
            <h3 class="aside-title">BEST SELLER</h3>
            <div class="deals-box product-info clearfix">
              <div class="product-image-right">
                <a href="detail.php" class="hv-radial">
                  <img src="image/catalog/demo/products/product32.png" alt="">
                </a>
              </div>
              <div class="box">
                <h5 class="product-name"><a href="#" class="smooth" title="">Aliquam eget leo faucibus</a></h5>
                <div class="rating">
                  <div class="rating-box">
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                  </div>
                </div>
                <div class="price">$215.00 <span class="price-old">$342.00</span></div>
              </div>
            </div>
            <div class="deals-box product-info clearfix">
              <div class="product-image-right">
                <a href="detail.php" class="hv-radial">
                  <img src="image/catalog/demo/products/product33.png" alt="">
                </a>
              </div>
              <div class="box">
                <h5 class="product-name"><a href="#" class="smooth" title="">Aliquam eget leo faucibus</a></h5>
                <div class="rating">
                  <div class="rating-box">
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                  </div>
                </div>
                <div class="price">$115.00 <span class="price-old">$142.00</span></div>
              </div>
            </div>
            <div class="deals-box product-info clearfix">
              <div class="product-image-right">
                <a href="detail.php" class="hv-radial">
                  <img src="image/catalog/demo/products/product31.png" alt="">
                </a>
              </div>
              <div class="box">
                <h5 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur biben urnaet</a></h5>
                <div class="rating">
                  <div class="rating-box">
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-1x"></i>
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                    <span class="fa fa-stack">
                      <i class="fa fa-star-o fa-stack-1x"></i>
                    </span>
                  </div>
                </div>
                <div class="price">$115.00 <span class="price-old">$142.00</span></div>
              </div>
            </div>
          </div>

          <div class="aside-tags">
            <h3 class="aside-title">
              HOT TAGS
            </h3>
            <a href="#" class="smooth active tag" title="">fashion </a>
            <a href="#" class="smooth tag" title="">gift </a>
            <a href="#" class="smooth tag" title="">shoes </a>
            <a href="#" class="smooth tag" title="">woman </a>
            <a href="#" class="smooth tag" title="">electric </a>
            <a href="#" class="smooth tag" title="">cameras </a>
            <a href="#" class="smooth tag" title="">cakes </a>
            <a href="#" class="smooth tag" title="">birthday </a>
            <a href="#" class="smooth tag" title="">annivaersary </a>
            <a href="#" class="smooth tag view-all" title="">View all Tags <i class="fa fa-caret-right"></i></a>
          </div>

          <div class="aside-banner">
            <a href="#" title="" class="hv-full-light">
              <img src="image/catalog/demo/banners/another/banner1.png" class="img-responsive" alt="">
            </a>
          </div>
        </aside>

        <div class="col-lg-9 col-md-9 aside-detail-product">
          <button type="button" class="sidebar-toggle-btn"><i class="fa fa-align-left" aria-hidden="true"></i>SIDEBAR</button>
          <div class="sidebar-overlay"></div>
          <div class="product-detail-top">
            <div class="clearfix box">
              <div class="product-slider-box clearfix">

                <div class="main-slider-box">
                  <div class="product-detail-slider-sidebar popup-gallery">

                    <div class="item-slider">
                      <a href="image/catalog/demo/products/product51.png">
                        <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                      </a>
                    </div>
                    <div class="item-slider">
                      <a href="image/catalog/demo/products/product51.png">
                        <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                      </a>
                    </div>
                    <div class="item-slider">
                      <a href="image/catalog/demo/products/product51.png">
                        <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                      </a>
                    </div>
                    <div class="item-slider">
                      <a href="image/catalog/demo/products/product51.png">
                        <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                      </a>
                    </div>
                    <div class="item-slider">
                      <a href="image/catalog/demo/products/product51.png">
                        <img id="zoom_05" data-zoom-image="image/catalog/demo/products/product34-large.jpg" src="image/catalog/demo/products/product51.png">
                      </a>
                    </div>
                  </div>
                </div>

                <div class="gallery-box">
                  <div class="product-slider-gallery-sidebar">
                    <div class="gallery-item">
                      <img src="image/catalog/demo/products/product15.jpg">
                    </div>
                    <div class="gallery-item">
                      <img src="image/catalog/demo/products/product16.jpg">
                    </div>
                    <div class="gallery-item">
                      <img src="image/catalog/demo/products/product17.jpg">
                    </div>
                    <div class="gallery-item">
                      <img src="image/catalog/demo/products/product18.jpg">
                    </div>
                    <div class="gallery-item">
                      <img src="image/catalog/demo/products/product18.jpg">
                    </div>
                  </div>
                </div>

              </div>
              <div class="product-infomation">
                <div class="product-box">
                  <h1 class="product-name">Lorem ipsum dolor sit amet</h1>
                  <div class="review-box">
                    <div class="rating">
                      <div class="rating-box">
                        <span class="fa fa-stack">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </span>
                        <span class="fa fa-stack">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </span>
                        <span class="fa fa-stack">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </span>
                        <span class="fa fa-stack">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </span>
                        <span class="fa fa-stack">
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </span>
                      </div>
                    </div>
                    <a href="#" class="smooth reviews-button"> 1 Reviews</a>
                    <a href="#" class="smooth add-reviews">Add Your Rivew</a>
                  </div>
                  <div class="price">
                    $115.00 <span class="price-old">$142.00</span>
                  </div>
                  <div class="product-desc-box">
                    <h4 class="product-desc-title">Quick Overview</h4>
                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi </p>
                  </div>
                  <div class="option-group">
                    <div class="quantity-control-box">
                      <label>Qty:</label>
                      <input type="text" name="keyword" class="input-quantity only-number" value="1">
                      <span class="quantity-control-btn quantity-add">+</span>
                      <span class="quantity-control-btn quantity-minus">-</span>
                    </div>
                    <div class="button-group">
                      <button class="add-to-cart smooth">
                        ADD TO CART
                      </button>
                      <button class="wishlist-btn smooth">
                        <i class="fa fa-retweet" aria-hidden="true"></i>
                      </button>
                      <button class="wishlist-btn smooth">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                  <div class="share-box">
                    <h5 class="share-title">SHARE THIS PRODUCT</h5>
                    <div class="fb-like marl5 fb_iframe_widget" data-href="https://web5s.info/demo/bangtanha/gioi-thieu-bang-flipchart-a-model-tan-ha" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="f3bdea1d845d2c4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df20be4dd5d3ce6%26domain%3Dweb5s.info%26origin%3Dhttps%253A%252F%252Fweb5s.info%252Ff29a7f99d1644ac%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 122px; height: 20px;" class="mrr5"></iframe></span></div>
                    <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px; margin-bottom: 8px; margin-left: 4px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.2e9f365dae390394eb8d923cba8c5b11.vi.html#dnt=false&amp;id=twitter-widget-1&amp;lang=vi&amp;original_referer=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;size=m&amp;text=Gi%E1%BB%9Bi%20thi%E1%BB%87u%20b%E1%BA%A3ng%20Flipchart%20A%20Model%20T%C3%A2n%20H%C3%A0&amp;time=1557474728906&amp;type=share&amp;url=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha" data-url="https://web5s.info/demo/bangtanha/gioi-thieu-bang-flipchart-a-model-tan-ha"></iframe>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="content-product">

            <div class="content-product-tab clearfix">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#description" class="smooth">description</a></li>
                <li><a data-toggle="tab" href="#reviews" class="smooth">reviews</a></li>
                <li><a data-toggle="tab" href="#product-tags" class="smooth">product tags</a></li>
                <li><a data-toggle="tab" href="#custom-tabs" class="smooth">custom tabs</a></li>
              </ul>

              <div class="tab-content">
                <div id="description" class="tab-pane fade in active">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  </p>
                </div>
                <div id="reviews" class="tab-pane fade">
                 <form class="reviews-form">
                   <h4 class="form-title">Write A Review</h4>
                   <div class="form-group">
                     <label>Your Name</label>
                     <input type="text" name="keyword" placeholder="Your Name" class="form-control">
                   </div>
                   <div class="form-group">
                     <label>Your Review</label>
                     <textarea placeholder="Your Review"></textarea>
                   </div>
                   <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineRadio1">
                      Bad
                    </label>
                    <input class="form-check-input" type="radio">
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Good</label>
                  </div>
                  <button type="submit" class="smooth hv-border-inline">CONTINUTE</button>
                </form>
              </div>
              <div id="product-tags" class="tags-tab tab-pane fade">
                <a href="#" class="smooth active tag" title="">fashion </a>
                <a href="#" class="smooth tag" title="">gift </a>
                <a href="#" class="smooth tag" title="">shoes </a>
                <a href="#" class="smooth tag" title="">woman </a>
                <a href="#" class="smooth tag" title="">electric </a>
                <a href="#" class="smooth tag" title="">cameras </a>
                <a href="#" class="smooth tag" title="">cakes </a>
                <a href="#" class="smooth tag" title="">birthday </a>
                <a href="#" class="smooth tag" title="">annivaersary </a>
                <a href="#" class="smooth tag view-all" title="">View all Tags <i class="fa fa-caret-right"></i></a>
              </div>
              <div id="custom-tabs" class="tab-pane fade">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- RELEATED PRODUCTS -->
      <div class="featured-products releated-products">
        <h2 class="featured-title">
          <span>
            RELEATED <span>PRODUCTS</span>
          </span>
        </h2>
        <div class="featured-slider yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
          <div class="item">
            <div class="product-box">
              <div class="product-image">
                <a href="detail.php" class="c-img link-product">
                  <img src="image/catalog/demo/products/product2.jpg" class="img-responsive" alt="">
                </a>
                <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
                 <i class="fa fa-search" aria-hidden="true"></i>
               </a>
             </div>
             <div class="product-info">
              <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
              <div class="price">
                $115.00 <span class="price-old">$142.00</span>
              </div>
              <div class="rating">
                <div class="rating-box">
                  <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i>
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                  <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i>
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                  <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i>
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                  <span class="fa fa-stack">
                    <i class="fa fa-star fa-stack-1x"></i>
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                  <span class="fa fa-stack">
                    <i class="fa fa-star-o fa-stack-1x"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="button-group">
              <button class="wishlist-btn smooth">
                <i class="fa fa-retweet" aria-hidden="true"></i>
              </button>
              <button class="add-to-cart smooth">
                ADD TO CART
              </button>
              <button class="wishlist-btn smooth">
                <i class="fa fa-heart" aria-hidden="true"></i>
              </button>
            </div>
            <span class="label-sale red-right">SALE</span>
          </div>
        </div>
        <div class="item">
          <div class="product-box">
            <div class="product-image">
              <a href="detail.php" class="c-img link-product">
                <img src="image/catalog/demo/products/product9.jpg" class="img-responsive" alt="">
              </a>
              <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
               <i class="fa fa-search" aria-hidden="true"></i>
             </a>
           </div>
           <div class="product-info">
            <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
            <div class="price">
              $115.00 <span class="price-old">$142.00</span>
            </div>
            <div class="rating">
              <div class="rating-box">
                <span class="fa fa-stack">
                  <i class="fa fa-star fa-stack-1x"></i>
                  <i class="fa fa-star-o fa-stack-1x"></i>
                </span>
                <span class="fa fa-stack">
                  <i class="fa fa-star fa-stack-1x"></i>
                  <i class="fa fa-star-o fa-stack-1x"></i>
                </span>
                <span class="fa fa-stack">
                  <i class="fa fa-star fa-stack-1x"></i>
                  <i class="fa fa-star-o fa-stack-1x"></i>
                </span>
                <span class="fa fa-stack">
                  <i class="fa fa-star fa-stack-1x"></i>
                  <i class="fa fa-star-o fa-stack-1x"></i>
                </span>
                <span class="fa fa-stack">
                  <i class="fa fa-star-o fa-stack-1x"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="button-group">
            <button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
             <i class="fa fa-retweet" aria-hidden="true"></i>
           </button>
           <button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
             ADD TO CART
           </button>
           <button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
             <i class="fa fa-heart" aria-hidden="true"></i>
           </button>
         </div>
         <span class="label-sale red-right">SALE</span>
       </div>
     </div>
     <div class="item">
      <div class="product-box">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product4.jpg" class="img-responsive" alt="">
          </a>
          <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
           <i class="fa fa-search" aria-hidden="true"></i>
         </a>
       </div>
       <div class="product-info">
        <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
        <div class="price">
          $115.00 <span class="price-old">$142.00</span>
        </div>
        <div class="rating">
          <div class="rating-box">
            <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-1x"></i>
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
            <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-1x"></i>
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
            <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-1x"></i>
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
            <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-1x"></i>
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
            <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="button-group">
        <button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
         <i class="fa fa-retweet" aria-hidden="true"></i>
       </button>
       <button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
         ADD TO CART
       </button>
       <button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
         <i class="fa fa-heart" aria-hidden="true"></i>
       </button>
     </div>
     <span class="label-sale blue-left">SALE</span>
   </div>
 </div>
 <div class="item">
  <div class="product-box">
    <div class="product-image">
      <a href="detail.php" class="c-img link-product">
        <img src="image/catalog/demo/products/product5.jpg" class="img-responsive" alt="">
      </a>
      <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
       <i class="fa fa-search" aria-hidden="true"></i>
     </a>
   </div>
   <div class="product-info">
    <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
    <div class="price">
      $115.00 <span class="price-old">$142.00</span>
    </div>
    <div class="rating">
      <div class="rating-box">
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="button-group">
    <button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
     <i class="fa fa-retweet" aria-hidden="true"></i>
   </button>
   <button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
     ADD TO CART
   </button>
   <button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
     <i class="fa fa-heart" aria-hidden="true"></i>
   </button>
 </div>
</div>
</div>
<div class="item">
  <div class="product-box">
    <div class="product-image">
      <a href="detail.php" class="c-img link-product">
        <img src="image/catalog/demo/products/product1.jpg" class="img-responsive" alt="">
      </a>
      <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
       <i class="fa fa-search" aria-hidden="true"></i>
     </a>
   </div>
   <div class="product-info">
    <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
    <div class="price">
      $115.00 <span class="price-old">$142.00</span>
    </div>
    <div class="rating">
      <div class="rating-box">
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="button-group">
    <button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
     <i class="fa fa-retweet" aria-hidden="true"></i>
   </button>
   <button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
     ADD TO CART
   </button>
   <button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
     <i class="fa fa-heart" aria-hidden="true"></i>
   </button>
 </div>
</div>
</div>
</div>
</div>
<!-- //RELEATED PRODUCTS -->

<!-- UP-SELL PRODUCTS -->
<div class="featured-products up-sell-products">

  <h2 class="featured-title">
    <span>
      UP-SELL <span>PRODUCTS</span>
    </span>
  </h2>
  <div class="featured-slider yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
    <div class="item">
      <div class="product-box">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product2.jpg" class="img-responsive" alt="">
          </a>
          <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
           <i class="fa fa-search" aria-hidden="true"></i>
         </a>
       </div>
       <div class="product-info">
        <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
        <div class="price">
          $115.00 <span class="price-old">$142.00</span>
        </div>
        <div class="rating">
          <div class="rating-box">
            <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-1x"></i>
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
            <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-1x"></i>
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
            <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-1x"></i>
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
            <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-1x"></i>
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
            <span class="fa fa-stack">
              <i class="fa fa-star-o fa-stack-1x"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="button-group">
        <button class="wishlist-btn smooth">
          <i class="fa fa-retweet" aria-hidden="true"></i>
        </button>
        <button class="add-to-cart smooth">
          ADD TO CART
        </button>
        <button class="wishlist-btn smooth">
          <i class="fa fa-heart" aria-hidden="true"></i>
        </button>
      </div>
      <span class="label-sale red-right">SALE</span>
    </div>
  </div>
  <div class="item">
    <div class="product-box">
      <div class="product-image">
        <a href="detail.php" class="c-img link-product">
          <img src="image/catalog/demo/products/product3.jpg" class="img-responsive" alt="">
        </a>
        <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
         <i class="fa fa-search" aria-hidden="true"></i>
       </a>
     </div>
     <div class="product-info">
      <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
      <div class="price">
        $115.00 <span class="price-old">$142.00</span>
      </div>
      <div class="rating">
        <div class="rating-box">
          <span class="fa fa-stack">
            <i class="fa fa-star fa-stack-1x"></i>
            <i class="fa fa-star-o fa-stack-1x"></i>
          </span>
          <span class="fa fa-stack">
            <i class="fa fa-star fa-stack-1x"></i>
            <i class="fa fa-star-o fa-stack-1x"></i>
          </span>
          <span class="fa fa-stack">
            <i class="fa fa-star fa-stack-1x"></i>
            <i class="fa fa-star-o fa-stack-1x"></i>
          </span>
          <span class="fa fa-stack">
            <i class="fa fa-star fa-stack-1x"></i>
            <i class="fa fa-star-o fa-stack-1x"></i>
          </span>
          <span class="fa fa-stack">
            <i class="fa fa-star-o fa-stack-1x"></i>
          </span>
        </div>
      </div>
    </div>
    <div class="button-group">
      <button class="wishlist-btn smooth">
        <i class="fa fa-retweet" aria-hidden="true"></i>
      </button>
      <button class="add-to-cart smooth">
        ADD TO CART
      </button>
      <button class="wishlist-btn smooth">
        <i class="fa fa-heart" aria-hidden="true"></i>
      </button>
    </div>
    <span class="label-sale red-right">SALE</span>
  </div>
</div>
<div class="item">
  <div class="product-box">
    <div class="product-image">
      <a href="detail.php" class="c-img link-product">
        <img src="image/catalog/demo/products/product4.jpg" class="img-responsive" alt="">
      </a>
      <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
       <i class="fa fa-search" aria-hidden="true"></i>
     </a>
   </div>
   <div class="product-info">
    <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
    <div class="price">
      $115.00 <span class="price-old">$142.00</span>
    </div>
    <div class="rating">
      <div class="rating-box">
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="button-group">
    <button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
     <i class="fa fa-retweet" aria-hidden="true"></i>
   </button>
   <button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
     ADD TO CART
   </button>
   <button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
     <i class="fa fa-heart" aria-hidden="true"></i>
   </button>
 </div>
 <span class="label-sale blue-left">SALE</span>
</div>
</div>
<div class="item">
  <div class="product-box">
    <div class="product-image">
      <a href="detail.php" class="c-img link-product">
        <img src="image/catalog/demo/products/product1.jpg" class="img-responsive" alt="">
      </a>
      <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
       <i class="fa fa-search" aria-hidden="true"></i>
     </a>
   </div>
   <div class="product-info">
    <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
    <div class="price">
      $115.00 <span class="price-old">$142.00</span>
    </div>
    <div class="rating">
      <div class="rating-box">
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="button-group">
    <button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
     <i class="fa fa-retweet" aria-hidden="true"></i>
   </button>
   <button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
     ADD TO CART
   </button>
   <button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
     <i class="fa fa-heart" aria-hidden="true"></i>
   </button>
 </div>
</div>
</div>
<div class="item">
  <div class="product-box">
    <div class="product-image">
      <a href="detail.php" class="c-img link-product">
        <img src="image/catalog/demo/products/product7.jpg" class="img-responsive" alt="">
      </a>
      <a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
       <i class="fa fa-search" aria-hidden="true"></i>
     </a>
   </div>
   <div class="product-info">
    <h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
    <div class="price">
      $115.00 <span class="price-old">$142.00</span>
    </div>
    <div class="rating">
      <div class="rating-box">
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star fa-stack-1x"></i>
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
        <span class="fa fa-stack">
          <i class="fa fa-star-o fa-stack-1x"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="button-group">
    <button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
     <i class="fa fa-retweet" aria-hidden="true"></i>
   </button>
   <button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
     ADD TO CART
   </button>
   <button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
     <i class="fa fa-heart" aria-hidden="true"></i>
   </button>
 </div>
</div>
</div>
</div>
</div>
<!-- //UP-SELL PRODUCTS -->
</div>
</div>
</div>
</div>

<!-- //DETAIL SIDEBAR -->

    <!-- FOOTER -->
    <footer class="typefooter-1">
      <!-- NEWLETTER -->
      <div class="newletter">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 newletter-left">
              <h4 class="new-letter-title">NEED HELP? CALL OUR AWARD-WINNING </h4>
              <p>SUPPORT TEAM 24/7 AT <a href="tel:(844)555-8386">(844) 555-8386</a></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 newletter-right">
              <form action="#" method="post" class="send-letter form-inline">
                <div class="form-group form-box">
                  <input type="text" name="email" placeholder="Enter your email address" class="form-control">
                  <button type="submit" class="form-control">SUBSCRIBE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- //NEWLETTER -->
      <div class="footer-box">
        <!-- FOOTER MIDDLE -->
        <div class="footer-middle">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer-middle-box">
                  <h3 class="footer-title">our service</h3>
                  <ul class="footer-list">
                    <li>
                      <a href="#" class="smooth" title>Delivery Information</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>Returns</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>Terms & Conditions</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>Shipping & Refund</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>Specials</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer-middle-box">
                  <h3 class="footer-title">Extras</h3>
                  <ul class="footer-list">
                    <li>
                      <a href="#" class="smooth" title>Contact Us</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>return</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>special</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>brands</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>gift voucher</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer-middle-box">
                  <h3 class="footer-title">my account</h3>
                  <ul class="footer-list">
                    <li>
                      <a href="#" class="smooth" title>my order</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>My credit slips</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>My addresses</a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title>My personal info</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer-middle-box footer-middle-right">
                  <h3 class="footer-title">contact us</h3>
                  <ul class="contact-list">
                    <li>
                      <i class="fa fa-map-marker" aria-hidden="true"></i>Megnor Comp Pvt Limited, Trade Centre, Udhana Darwaja
                    </li>
                    <li>
                      <i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:(91)-2613023333">(91)-261 3023333</a>
                    </li>
                    <li>
                      <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:demo@harvest.com">demo@harvest.com</a>
                    </li>
                  </ul>
                  <div class="payment">
                    <img src="image/catalog/demo/footer/paymen.png" class="img-responsive" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- //FOOTER MIDDLE -->
        <!-- FOOTER BOTTOM -->
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="footer-bottom-left">
                  <h6 class="footer-bottom-title">
                    Download Our App
                  </h6>
                  <a href="#" class="d-inline-block">
                    <img src="image/catalog/demo/footer/down-app.png" class="img-responsive" alt="">
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="footer-bottom-right">
                  <h6 class="footer-bottom-title">
                    Follow Us
                  </h6>
                  <ul class="footer-social">
                    <li>
                      <a href="#" class="smooth" title="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title="">
                        <i class="fa fa-wifi" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title="">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="smooth" title="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="copyright text-center">
                  Furnicom HTML © 2019 Demo Store. All Rights Reserved. Designed by <a href="https://www.smartaddons.com/" target="_blank" class="smooth" title>SmartAddons.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- //FOOTER BOTTOM -->
      </div>
    </footer>
    <!-- //FOOTER -->
<div class="back-to-top">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
</div>




<!-- End Color Scheme
  ============================================ -->
<!-- Include Libs & Plugins
  ============================================ -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
  <script type="text/javascript" src="js/lightslider/lightslider.js"></script>
  <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript" src="js/slick-slider/slick.js"></script>
  <script type="text/javascript" src="js/themejs/libs.js"></script>
  <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
  <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
  <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
  <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
  <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>
  <script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
  <script type="text/javascript" src="js/jquery.nav.js"></script>
  <script type="text/javascript" src="js/quickview/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="js/quickview/jquery.elevateZoom-3.0.8.min.js"></script>
<!-- Theme files
  ============================================ -->
  <script type="text/javascript" src="js/themejs/application.js"></script>
  <script type="text/javascript" src="js/themejs/homepage.js"></script>
  <script type="text/javascript" src="js/themejs/cd1.js"></script>
  <script type="text/javascript" src="js/themejs/addtocart.js"></script>  
  <script type="text/javascript" src="js/themejs/nouislider.js"></script>
  <script type="text/javascript" src="js/themejs/script.js"></script>
  <!-- <script type="text/javascript" src="js/themejs/script1.js"></script> -->
</body>
</html>