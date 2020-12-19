<?php

use frontend\models\Banner;
use yii\bootstrap\Modal;
$company = $this->params['company'];
?>
<section id="header" class="header">

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <ul class="flat-support">
                    <li> <a href="javascript:;" title="">Hỗ trợ khách hàng</a> </li>
                    <li> <a href="javascript:;" title="">liên hệ</a> </li>
                    </li>
                </ul>
                <!-- /.flat-support -->
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <ul class="flat-infomation">
                    <li class="phone"> <i class="fa fa-phone-square" style="padding-right:5px; color:#666;"></i>Hotline:
                        <a href="#" title="" style="font-size:18px; font-weight:600; color:#f00;"><?php echo $company->phone ?></a> </li>
                </ul>
                <!-- /.flat-infomation -->
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <ul class="flat-unstyled">
                    <li class="account">
                        <a href="#" title="">Giao hàng nhanh chóng<i class="fa fa-angle-down" aria-hidden="true"></i></a>

                        <!-- /.unstyled -->
                    </li>
                </ul>
                <!-- /.flat-unstyled -->
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- /.header-top -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="logo" class="logo"> <a href="index.php" title=""> <img src="images/logo.png" alt=""> </a> </div>
                    <!-- /#logo -->
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-6">
                    <div class="top-search">
                        <form action="#" method="get" class="form-search" accept-charset="utf-8">
                            <div class="cat-wrap">
                                <select name="category">
                                    <option  value="" selected="selected">Tất cả danh mục</option>
                                    <option  value="">Menu sản phẩm</option>
                                    <option  value="">Menu sản phẩm</option>
                                    <option  value="">Menu sản phẩm</option>
                                </select>
                                <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>

                            </div>
                            <!-- /.cat-wrap -->
                            <div class="box-search">
                                <input type="text" name="search" placeholder="Tìm kiếm những gì bạn đang tìm kiếm?">
                                <span class="btn-search">
                  <button type="submit" class="waves-effect"><img src="images/search.png" alt=""></button>
                  </span>
                                <div class="search-suggestions">
                                    <div class="box-suggestions">
                                        <div class="title"> Đề xuất tìm kiếm </div>
                                        <ul>
                                            <li>
                                                <div class="image"> <img src="images/s05.jpg" alt=""> </div>
                                                <div class="info-product">
                                                    <div class="name"> <a href="#" title="">Thịt bò nhập khẩu từ Mỹ</a> </div>
                                                    <div class="price"> <span class="sale"> $50.00 </span> <span class="regular"> $2,999.00 </span> </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image"> <img src="images/s06.jpg" alt=""> </div>
                                                <div class="info-product">
                                                    <div class="name"> <a href="#" title="">Thịt bò nhập khẩu từ Mỹ</a> </div>
                                                    <div class="price"> <span class="sale"> $24.00 </span> </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image"> <img src="images/14.jpg" alt=""> </div>
                                                <div class="info-product">
                                                    <div class="name"> <a href="#" title="">Thịt bò nhập khẩu từ Mỹ</a> </div>
                                                    <div class="price"> <span class="sale"> $90.00 </span> </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image"> <img src="images/02.jpg" alt=""> </div>
                                                <div class="info-product">
                                                    <div class="name"> <a href="#" title="">Thịt bò nhập khẩu từ Mỹ</a> </div>
                                                    <div class="price"> <span class="sale"> $50.00 </span> </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image"> <img src="images/l01.jpg" alt=""> </div>
                                                <div class="info-product">
                                                    <div class="name"> <a href="#" title="">Thịt bò nhập khẩu từ Mỹ</a> </div>
                                                    <div class="price"> <span class="sale"> $24.00 </span> <span class="regular"> $2,999.00 </span> </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image"> <img src="images/s08.jpg" alt=""> </div>
                                                <div class="info-product">
                                                    <div class="name"> <a href="#" title="">Thịt bò nhập khẩu từ Mỹ</a> </div>
                                                    <div class="price"> <span class="sale"> $90.00 </span> <span class="regular"> $2,999.00 </span> </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.box-suggestions -->
                                    <div class="box-cat">
                                        <div class="cat-list-search">
                                            <div class="title"> Danh mục sản phẩm </div>
                                            <ul>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                                <li> <a href="index.php?page=product">Sub menu sản phẩm</a> </li>
                                            </ul>
                                        </div>
                                        <!-- /.cat-list-search -->
                                    </div>
                                    <!-- /.box-cat -->
                                </div>
                                <!-- /.search-suggestions -->
                            </div>
                            <!-- /.box-search -->
                        </form>
                        <!-- /.form-search -->
                    </div>
                    <!-- /.top-search -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-3">
                    <div class="box-cart">
                        <!-- /.inner-box -->
                        <div class="inner-box"> <a href="#" title="">
                                <div class="icon-cart"> <img src="images/cart.png" alt=""> <span>4</span> </div>
                                <div class="price"> $0.00 </div>
                            </a>
                            <div class="dropdown-box">
                                <ul>
                                    <li>
                                        <div class="img-product"> <img src="images/img-cart-1.jpg" alt=""> </div>
                                        <div class="info-product">
                                            <div class="name"> Thịt bò nhập khẩu từ Mỹ <br />
                                                with 32GB Memory Cell Phone </div>
                                            <div class="price"> <span>1 x</span> <span>$250.00</span> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <span class="delete">x</span> </li>
                                    <li>
                                        <div class="img-product"> <img src="images/img-cart-1.jpg" alt=""> </div>
                                        <div class="info-product">
                                            <div class="name"> Thịt bò nhập khẩu từ Mỹ <br />
                                                with 32GB Memory Cell Phone </div>
                                            <div class="price"> <span>1 x</span> <span>$250.00</span> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <span class="delete">x</span> </li>
                                </ul>
                                <div class="total"> <span>Tổng tiền:</span> <span class="price">$500.00</span> </div>
                                <div class="btn-cart"> <a href="index.php?page=giohang" class="view-cart" title="">Giỏ hàng</a> <a href="index.php?page=thanhtoan" class="check-out" title="">Thanh toán</a> </div>
                            </div>
                        </div>
                        <!-- /.inner-box -->
                    </div>
                    <!-- /.box-cart -->
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-middle -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-2">
                    <div id="mega-menu">
                        <div class="btn-mega"><i class="fa fa-bars" aria-hidden="true"></i>TẤT CẢ DANH MỤC</div>
                        <ul class="menu">
                            <li>
                                <a href="index.php?page=sanpham" title="" class="dropdown">
                                    <span class="menu-title"> Sub Menu Sản Phẩm </span> </a>
                                <div class="drop-menu">

                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li class="has_child">
                                                <a href="index.php?page=sanpham" title="">Sub menu chủ đề</a>
                                                <i class="fa fa-angle-down show_child" aria-hidden="true"></i>
                                                <ul class="list_child">
                                                    <li> <a href="index.php?page=sanpham" title="">Sub menu chủ đề 1</a> </li>
                                                    <li> <a href="index.php?page=sanpham" title="">TSub menu chủ đề 2</a> </li>
                                                    <li> <a href="index.php?page=sanpham" title="">Sub menu chủ đề 3</a> </li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>

                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <ul class="banner">
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-01.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-02.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-03.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="index.php?page=sanpham" title="" class="dropdown">
                                    <span class="menu-title"> Sub Menu Sản Phẩm </span> </a>
                                <div class="drop-menu">
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <ul class="banner">
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-01.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-02.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-03.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="index.php?page=sanpham" title="" class="dropdown">
                                    <span class="menu-title"> Sub Menu Sản Phẩm </span> </a>
                                <div class="drop-menu">
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <div class="cat-title"> chủ đề danh mục </div>
                                        <ul>
                                            <div class="cat-title"> meu chủ đề sản phẩm </div>
                                            <ul>
                                                <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                                <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                                <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                                <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                                <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                                <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            </ul>
                                            <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <ul class="banner">
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-01.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-02.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-03.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="index.php?page=sanpham" title="">
                                    <span class="menu-title"> Sub Menu Sản Phẩm </span> </a> </li>
                            <li>
                                <a href="#" title="">
                                    <span class="menu-title"> Sub Menu Sản Phẩm </span> </a> </li>
                            <li>
                                <a href="#" title="">
                                    <span class="menu-title"> Sub Menu Sản Phẩm </span> </a> </li>
                            <li class="hid">
                                <a href="#" title="" class="dropdown">
                                    <span class="menu-title"> Sub Menu Sản Phẩm </span> </a>
                                <div class="drop-menu">
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <ul class="banner">
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-01.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-02.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-03.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="hid">
                                <a href="#" title=""> <span class="menu-img"> <img src="images/08.png" alt=""> </span> <span class="menu-title"> Sub Menu Sản Phẩm </span> </a> </li>
                            <li class="hid">
                                <a href="#" title="" class="dropdown"> <span class="menu-img"> <img src="images/09.png" alt=""> </span> <span class="menu-title"> Sub Menu Sản Phẩm </span> </a>
                                <div class="drop-menu">
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <ul class="banner">
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> Chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-01.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> Chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-02.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> Chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-03.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="hid">
                                <a href="#" title="" class="dropdown"> <span class="menu-img"> <img src="images/10.png" alt=""> </span> <span class="menu-title"> Sub Menu Sản Phẩm </span> </a>
                                <div class="drop-menu">
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <div class="cat-title"> meu chủ đề sản phẩm </div>
                                        <ul>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                            <li><a href="index.php?page=product" title="">Sub menu chủ đề</a> </li>
                                        </ul>
                                        <div class="show"> <a href="#" title="">Mua ngay</a> </div>
                                    </div>
                                    <div class="one-third">
                                        <ul class="banner">
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-01.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-02.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li>
                                                <div class="banner-text">
                                                    <div class="banner-title"> chủ đề danh mục </div>
                                                    <div class="more-link"> <a href="#" title="">Mua ngay <img src="images/right-2.png" alt=""></a> </div>
                                                </div>
                                                <div class="banner-img"> <img src="images/menu-03.png" alt=""> </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="show_more_menu">
                                <a href="#">Xem thêm chủ đề</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-9 col-10">
                    <div class="nav-wrap">
                        <?php  echo $this->render("//element/menu"); ?>
                        <!-- /.mainnav -->
                    </div>
                    <!-- /.nav-wrap -->
                    <div class="today-deal"> <a href="index.php?page=tintuc_view" title="">TODAY DEALS</a> </div>
                    <!-- /.today-deal -->
                    <div class="btn-menu"> <span></span> </div>
                    <!-- //mobile menu button -->
                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-bottom -->
</section>
<!-- /#header -->
