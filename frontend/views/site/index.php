<?php

use frontend\models\Banner;
use frontend\models\News;
use frontend\models\Product;
use \frontend\models\ProductCategory;
use frontend\models\RlProductCategory;

?>
<?php echo  $this->render("//element/home/banner"); ?>
<?php //echo $this->render("//element/home/when-sleep"); ?>
<?php //echo $this->render("//element/home/risk-when-sleep"); ?>
<?php //echo $this->render("//element/home/map"); ?>
<?php //echo $this->render("//element/home/try"); ?>
<?php //echo $this->render("//element/home/video"); ?>
<?php //echo $this->render("//element/home/advisory"); ?>
<section class="flat-imagebox">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-tab">
                    <ul class="tab-list">
                        <li class="active">sản phẩm mới</li>
                        <li>Sản phẩm nỗi bật</li>
                        <li>sản phẩm khuyến mãi</li>
                    </ul>
                </div>
                <!-- /.product-tab -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="box-product">
            <div class="row">
                <?php
                # sp moi
                $data = Product::find()
                    ->where(['active' => 1])
                    ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,option) > 0'))
                    ->addParams([':option' => Product::OPTION_NEW])
                    ->limit(8)
                    ->orderBy(Product::ORDER_BY)->all();
                foreach ($data as $item) {
                    echo $this->render("//element/home/item-product", ['data' => $item]);
                 } ?>
            </div>
            <!-- /.row -->
            <div class="row">
               <?php
               # sp moi
               $data = Product::find()
                   ->where(['active' => 1])
                   ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,option) > 0'))
                   ->addParams([':option' => Product::OPTION_HOT])
                   ->limit(8)->orderBy(Product::ORDER_BY)->all();
               foreach ($data as $item) {
                   echo $this->render("//element/home/item-product", ['data' => $item]);
               } ?>
               ?>
            </div>
            <!-- /.row -->
            <div class="row">
                <?php
                # sp moi
                $data = Product::find()
                    ->where(['active' => 1])
                    ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,option) > 0'))
                    ->addParams([':option' => Product::OPTION_SALE])
                    ->limit(8)->orderBy(Product::ORDER_BY)->all();
                foreach ($data as $item) {
                    echo $this->render("//element/home/item-product", ['data' => $item]);
                } ?>
                ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-product -->
    </div>
    <!-- /.container -->
</section>
<!-- /.flat-imagebox -->    <section class="flat-imagebox style1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flat-row-title">
                    <h3>sản phẩm bán chạy</h3>
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="box-product">
            <div class="row">
                <?php
                # sp moi
                $data = Product::find()
                    ->where(['active' => 1])
                    ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,option) > 0'))
                    ->addParams([':option' => Product::OPTION_HOME])
                    ->limit(8)->orderBy(Product::ORDER_BY)->all();
                foreach ($data as $item) {
                    echo $this->render("//element/home/item-product", ['data' => $item]);
                } ?>
                ?>
            </div>

        </div>
        <!-- /.container -->
</section>
<!-- /.flat-imagebox style1 -->    <section class="flat-imagebox style2 background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-wrap">
                    <div class="product-tab style1">
                        <ul class="tab-list">
                            <?php
                             $i = 0;
                            $data = ProductCategory::find()
                            ->where(['active' => 1, 'option' => ProductCategory::OPTION_HOT])
                            ->limit(8)->orderBy(ProductCategory::ORDER_BY)->all();
                            foreach ($data as $item) {
                                $i++;
                                $active = $i == 1 ? 'active' : '';
                                echo "<li class='$active'>{$item->name}</li>";
                            }
                            ?>
                        </ul>
                        <!-- /.tab-list -->
                    </div>
                    <!-- /.product-tab style1 -->
                    <div class="tab-item">
                        <!-- /.row -->
                        <?php
                        foreach ($data as $item) {
                            $arrIds = RlProductCategory::getProductIds($item->id);
                            $dataProduct = Product::find()->where(['in', 'id', $arrIds])->limit(8)->orderBy(Product::ORDER_BY)->all();
                            $productFirst = array_shift($dataProduct);

                        ?>
                        <div class="row">
                            <?php
                            if (!empty($productFirst)) {
                            ?>
                                <div class="col-md-6">
                                <div class="product-box">
                                    <div class="imagebox style2">
                                        <div class="box-image">
                                            <a href="#" title=""> <img src="/<?php echo $productFirst->image ?>" alt=""> </a>
                                        </div>
                                        <!-- /.box-image -->
                                        <div class="box-content">
                                            <div class="cat-name"> <a href="#" title="">Tên chủ đề danh mục</a> </div>
                                            <div class="product-name"> <a href="#" title=""><?php echo $productFirst->name ?></a> </div>
                                            <div class="price"> <span class="sale"><?php echo $productFirst->getPriceFinalFormat() ?></span>
                                                <span class="regular"><?php echo $productFirst->getPriceFormat()  ?></span>
                                            </div>
                                        </div>
                                        <!-- /.box-content -->
                                        <div class="box-bottom">
                                            <div class="btn-add-cart">
                                                <a href="#" title="">
                                                    <img src="images/icons/add-cart.png" alt="">Thêm vào giỏ hàng </a>
                                            </div>
                                        </div>
                                        <!-- /.box-bottom -->
                                    </div>
                                    <!-- /.imagebox style2 -->
                                </div>
                                <!-- /.product-box -->
                            </div>
                            <?php } ?>
                            <?php
                            foreach ($dataProduct as $item) {
                                echo $this->render("//element/home/item-product", ['data' => $item]);
                            ?>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <!-- /.row -->
                    </div>
                    <!-- /.tab-item -->
                </div>
                <!-- /.product-wrap -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.flat-imagebox style2 -->    <section class="flat-imagebox style1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flat-row-title">
                    <h3>sản phẩm xem nhiều</h3>
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="box-product">
            <div class="row">

                <div class="col-lg-3 col-sm-6">

                    <div class="product-box">
                        <div class="imagebox">
                            <ul class="box-image owl-carousel owl-carousel-1">
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/06.jpg" alt=""> </a> </li>
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/06.jpg" alt=""> </a> </li>
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/06.jpg" alt=""> </a> </li>
                            </ul>
                            <!-- /.box-image -->
                            <div class="box-content">
                                <div class="cat-name"> <a href="index.php?page=sanpham_view" title="">Tên chủ đề danh mục</a> </div>
                                <div class="product-name"> <a href="index.php?page=sanpham_view" title="">Thịt bò nhập khẩu từ Mỹ 250g</a> </div>
                                <div class="price"> <span class="sale">$2,009.00</span> <span class="regular">$2,999.00</span> </div>
                            </div>
                            <!-- /.box-content -->
                            <div class="box-bottom">
                                <div class="btn-add-cart"> <a href="index.php?page=sanpham_view" title=""> <img src="images/add-cart.png" alt="">Thêm vào giỏ hàng </a> </div>
                                <div class="compare-wishlist"> <a href="index.php?page=sanpham_view" class="compare" title=""> <img src="images/compare.png" alt="">So sánh </a> <a href="index.php?page=sanpham_view" class="wishlist" title=""> <img src="images/wishlist.png" alt="">Yêu thích </a> </div>
                            </div>
                            <!-- /.box-bottom -->
                        </div>
                        <!-- /.imagebox -->
                    </div>
                </div>
                <!-- /.col-lg-3 col-sm-6 -->
                <div class="col-lg-3 col-sm-6">

                    <div class="product-box">
                        <div class="imagebox">
                            <ul class="box-image owl-carousel owl-carousel-1">
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/07.jpg" alt=""> </a> </li>
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/07.jpg" alt=""> </a> </li>
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/07.jpg" alt=""> </a> </li>
                            </ul>
                            <!-- /.box-image -->
                            <div class="box-content">
                                <div class="cat-name"> <a href="index.php?page=sanpham_view" title="">Computers</a> </div>
                                <div class="product-name"> <a href="index.php?page=sanpham_view" title="">Thịt bò nhập khẩu từ Mỹ 250g</a> </div>
                                <div class="price"> <span class="sale">$5,759.68</span> <span class="regular">$2,999.00</span> </div>
                            </div>
                            <!-- /.box-content -->
                            <div class="box-bottom">
                                <div class="btn-add-cart"> <a href="index.php?page=sanpham_view" title=""> <img src="images/add-cart.png" alt="">Thêm vào giỏ hàng </a> </div>
                                <div class="compare-wishlist"> <a href="index.php?page=sanpham_view" class="compare" title=""> <img src="images/compare.png" alt="">So sánh </a> <a href="index.php?page=sanpham_view" class="wishlist" title=""> <img src="images/wishlist.png" alt="">Yêu thích </a> </div>
                            </div>
                            <!-- /.box-bottom -->
                        </div>
                        <!-- /.imagebox -->
                    </div>
                </div>
                <!-- /.col-lg-3 col-sm-6 -->
                <div class="col-lg-3 col-sm-6">

                    <div class="product-box">
                        <div class="imagebox">
                            <ul class="box-image owl-carousel owl-carousel-1">
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/08.jpg" alt=""> </a> </li>
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/08.jpg" alt=""> </a> </li>
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/08.jpg" alt=""> </a> </li>
                            </ul>
                            <!-- /.box-image -->
                            <div class="box-content">
                                <div class="cat-name"> <a href="index.php?page=sanpham_view" title="">Computers</a> </div>
                                <div class="product-name"> <a href="index.php?page=sanpham_view" title="">Thịt bò nhập khẩu từ Mỹ 250g</a> </div>
                                <div class="price"> <span class="sale">$5,759.68</span> <span class="regular">$2,999.00</span> </div>
                            </div>
                            <!-- /.box-content -->
                            <div class="box-bottom">
                                <div class="btn-add-cart"> <a href="index.php?page=sanpham_view" title=""> <img src="images/add-cart.png" alt="">Thêm vào giỏ hàng </a> </div>
                                <div class="compare-wishlist"> <a href="index.php?page=sanpham_view" class="compare" title=""> <img src="images/compare.png" alt="">So sánh </a> <a href="index.php?page=sanpham_view" class="wishlist" title=""> <img src="images/wishlist.png" alt="">Yêu thích </a> </div>
                            </div>
                            <!-- /.box-bottom -->
                        </div>
                        <!-- /.imagebox -->
                    </div>
                </div>
                <!-- /.col-lg-3 col-sm-6 -->
                <!-- /.col-lg-3 col-sm-6 -->
                <div class="col-lg-3 col-sm-6">

                    <div class="product-box">
                        <div class="imagebox">
                            <ul class="box-image owl-carousel owl-carousel-1">
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/08.jpg" alt=""> </a> </li>
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/08.jpg" alt=""> </a> </li>
                                <li> <a href="index.php?page=sanpham_view" title=""> <img src="images/08.jpg" alt=""> </a> </li>
                            </ul>
                            <!-- /.box-image -->
                            <div class="box-content">
                                <div class="cat-name"> <a href="index.php?page=sanpham_view" title="">Computers</a> </div>
                                <div class="product-name"> <a href="index.php?page=sanpham_view" title="">Thịt bò nhập khẩu từ Mỹ 250g</a> </div>
                                <div class="price"> <span class="sale">$5,759.68</span> <span class="regular">$2,999.00</span> </div>
                            </div>
                            <!-- /.box-content -->
                            <div class="box-bottom">
                                <div class="btn-add-cart"> <a href="index.php?page=sanpham_view" title=""> <img src="images/add-cart.png" alt="">Thêm vào giỏ hàng </a> </div>
                                <div class="compare-wishlist"> <a href="index.php?page=sanpham_view" class="compare" title=""> <img src="images/compare.png" alt="">So sánh </a> <a href="index.php?page=sanpham_view" class="wishlist" title=""> <img src="images/wishlist.png" alt="">Yêu thích </a> </div>
                            </div>
                            <!-- /.box-bottom -->
                        </div>
                        <!-- /.imagebox -->
                    </div>
                </div>
                <!-- /.col-lg-3 col-sm-6 -->
            </div>

        </div>
        <!-- /.container -->
</section>
<!-- /.flat-imagebox style1 -->  <section class="flat-highlights">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="flat-row-title">
                    <h3>Tin tức mới nhất</h3>
                </div>

                <ul class="product-list article-list style1">
                    <li>
                        <div class="img-product"> <a href="index.php?page=tintuc_view" title=""> <img src="images/10.jpg" alt=""> </a> </div>
                        <div class="info-product">
                            <div class="name">
                                <h3><a href="index.php?page=tintuc_view" title="">Cách chọn thịt tươi ngon nhất</a> </h3>
                            </div>

                            <p class="short_ar">
                                Thịt lợn là một loại thực phẩm rất quen thuộc đối với nhiều gia đình Việt. Tuy nhiên, hiện nay vì chạy theo lợi nhuận nên rất nhiều thịt lợn kém chất lượng được bày bán vậy làm thế nào để có thể chọn được những miếng thịt lợn ngon nhất để chế biến món ăn cho gia đình, bạn hãy cùng theo dõi những bí quyết dưới đây nhé.

                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="img-product"> <a href="index.php?page=tintuc_view" title=""> <img src="images/10.jpg" alt=""> </a> </div>
                        <div class="info-product">
                            <div class="name">
                                <h3><a href="index.php?page=tintuc_view" title="">Cách chọn thịt tươi ngon nhất</a> </h3>
                            </div>

                            <p class="short_ar">
                                Thịt lợn là một loại thực phẩm rất quen thuộc đối với nhiều gia đình Việt. Tuy nhiên, hiện nay vì chạy theo lợi nhuận nên rất nhiều thịt lợn kém chất lượng được bày bán vậy làm thế nào để có thể chọn được những miếng thịt lợn ngon nhất để chế biến món ăn cho gia đình, bạn hãy cùng theo dõi những bí quyết dưới đây nhé.

                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="img-product"> <a href="index.php?page=tintuc_view" title=""> <img src="images/10.jpg" alt=""> </a> </div>
                        <div class="info-product">
                            <div class="name">
                                <h3><a href="index.php?page=tintuc_view" title="">Cách chọn thịt tươi ngon nhất</a> </h3>
                            </div>

                            <p class="short_ar">
                                Thịt lợn là một loại thực phẩm rất quen thuộc đối với nhiều gia đình Việt. Tuy nhiên, hiện nay vì chạy theo lợi nhuận nên rất nhiều thịt lợn kém chất lượng được bày bán vậy làm thế nào để có thể chọn được những miếng thịt lợn ngon nhất để chế biến món ăn cho gia đình, bạn hãy cùng theo dõi những bí quyết dưới đây nhé.

                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="img-product"> <a href="index.php?page=tintuc_view" title=""> <img src="images/10.jpg" alt=""> </a> </div>
                        <div class="info-product">
                            <div class="name">
                                <h3><a href="index.php?page=tintuc_view" title="">Cách chọn thịt tươi ngon nhất</a> </h3>
                            </div>

                            <p class="short_ar">
                                Thịt lợn là một loại thực phẩm rất quen thuộc đối với nhiều gia đình Việt. Tuy nhiên, hiện nay vì chạy theo lợi nhuận nên rất nhiều thịt lợn kém chất lượng được bày bán vậy làm thế nào để có thể chọn được những miếng thịt lợn ngon nhất để chế biến món ăn cho gia đình, bạn hãy cùng theo dõi những bí quyết dưới đây nhé.

                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.flat-highlights -->
<section class="flat-iconbox">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="iconbox">
                    <div class="box-header">
                        <div class="image"> <img src="images/car.png" alt=""> </div>
                        <div class="box-title">
                            <h3>giao hàng toàn quốc</h3>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-content">
                        <p>Miễn phí cho đơn hàng trên 5 triệu</p>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.iconbox -->
            </div>
            <!-- /.col-md-3 col-sm-6 -->
            <div class="col-md-3 col-sm-6">
                <div class="iconbox">
                    <div class="box-header">
                        <div class="image"> <img src="images/order.png" alt=""> </div>
                        <div class="box-title">
                            <h3>HỖ TRỢ 24/7</h3>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-content">
                        <p>Hỗ trợ trực tuyến 24 giờ ngày</p>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.iconbox -->
            </div>
            <!-- /.col-md-3 col-sm-6 -->
            <div class="col-md-3 col-sm-6">
                <div class="iconbox">
                    <div class="box-header">
                        <div class="image"> <img src="images/payment.png" alt=""> </div>
                        <div class="box-title">
                            <h3>Thanh toán</h3>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-content">
                        <p>Hệ thống an toàn</p>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.iconbox -->
            </div>
            <!-- /.col-md-3 col-sm-6 -->
            <div class="col-md-3 col-sm-6">
                <div class="iconbox">
                    <div class="box-header">
                        <div class="image"> <img src="images/return.png" alt=""> </div>
                        <div class="box-title">
                            <h3>đảm bảo hàng hóa</h3>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-content">
                        <p>30 ngày trở lại tiền bảo lãnh</p>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.iconbox -->
            </div>
            <!-- /.col-md-3 col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.flat-iconbox -->

