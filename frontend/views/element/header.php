<?php

use frontend\models\Banner;
use frontend\models\ProductCategory;
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
                    <div id="logo" class="logo"> <a href="/" title=""> <img src="/<?php echo $company->logo ?>" alt=""> </a> </div>
                    <!-- /#logo -->
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-6">
                    <div class="top-search">
                        <?php
                        $modelProduct = new \frontend\models\Product();
                        $urlAllProduct = $modelProduct->getUrlAll();
                        ?>
                        <form action="<?php echo $urlAllProduct ?>" method="get" class="form-search" accept-charset="utf-8">
                            <div class="cat-wrap">
                                <select name="category">
                                    <option  value="" selected="selected">Tất cả danh mục</option>
                                    <?php
                                    $data = ProductCategory::find()
                                        ->where(['active' => 1])
                                        ->limit(8)->orderBy(ProductCategory::ORDER_BY)->all();

                                    foreach ($data as $item) {
                                        echo "<option value='{$item->id}'>{$item->name}</option>";
                                    }
                                    ?>
                                </select>
                                <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                            </div>
                            <!-- /.cat-wrap -->
                            <div class="box-search">
                                <?php
                                $dataGet = Yii::$app->request->get();
                                $keyword = '';
                                if (!empty($dataGet['keyword'])) {
                                    $keyword = $dataGet['keyword'];
                                }
                                ?>
                                <input type="text" name="keyword" value="<?php echo $keyword ?>" placeholder="Tìm kiếm những gì bạn đang tìm kiếm?">
                                <span class="btn-search">
                  <button type="submit" class="waves-effect"><img src="images/search.png" alt=""></button>
                  </span>

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
                        <?= Yii::$app->view->params['lang']->cart ?>  <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        <?php
                        $cart = \Yii::$app->cart;
                        ?>

                        <div class="inner-box"> <a href="#" title="">
                                <div class="icon-cart"> <img src="images/cart.png" alt=""> <span><?= $cart->getTotalCount() ?></span> </div>
                                <div class="price"> <?php echo number_format($cart->getTotalCost()) ?> </div>
                            </a>
                            <div class="dropdown-box">
                                <ul>
                                    <?php
                                    foreach ($cart->getItems() as $item) {
                                        $product = $item->getProduct();
                                    ?>
                                    <li>
                                        <div class="img-product"> <img src="/<?php echo $product->image ?>" alt=""> </div>
                                        <div class="info-product">
                                            <div class="name"><?php echo $product->name ?></div>
                                            <div class="price"> <span><?= $item->getQuantity() ?> x</span> <span><?= $product->getPriceFinalFormat() ?></span> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <span class="delete">x</span> </li>
                                    <?php } ?>
                                </ul>
                                <div class="total"> <span>Tổng tiền:</span> <span class="price"><?php echo number_format($cart->getTotalCost()) ?></span> </div>
                                <div class="btn-cart"> <a href="/cart" class="view-cart" title="">Giỏ hàng</a>
                                    <a href="/checkout" class="check-out" title="">Thanh toán</a> </div>
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
                            <?php
                            $data = ProductCategory::find()
                                ->where(['active' => 1])
                                ->limit(8)->orderBy(ProductCategory::ORDER_BY)->all();

                            foreach ($data as $item) {
                            ?>
                            <li>
                                <a href="<?php echo $item->getUrl() ?>" title="" class="dropdown">
                                    <span class="menu-title"> <?php echo $item->name ?> </span> </a>
                            </li>
                            <?php } ?>
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
