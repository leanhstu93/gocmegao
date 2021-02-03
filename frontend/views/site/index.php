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
                    ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,`option`) > 0'))
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
                    ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,`option`) > 0'))
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
                    ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,`option`) > 0'))
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
                    ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,`option`) > 0'))
                    ->addParams([':option' => Product::OPTION_HOME])
                    ->limit(8)->orderBy(Product::ORDER_BY)->all();
                foreach ($data as $item) {
                    echo $this->render("//element/home/item-product", ['data' => $item]);
                } ?>

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
                            $dataProduct = Product::find()->where(['in', 'id', $arrIds])->limit(5)->orderBy(Product::ORDER_BY)->all();
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
                                foreach ($dataProduct as $key => $item) {
                                    if ($key == 0) {
                                        echo '<div class="col-md-3 col-sm-6">';
                                    }
                                    echo $this->render("//element/home/item-product-box", ['data' => $item]);
                                    if ($key == 1) {
                                        echo '</div> <div class="col-md-3 col-sm-6">';
                                    }

                                    if ($key == 3) {
                                        echo '</div>';
                                    }
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
                    <h3>sản phẩm nổi bật</h3>
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
                    ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,`option`) > 0'))
                    ->addParams([':option' => Product::OPTION_HOT])
                    ->limit(4)->orderBy(Product::ORDER_BY)->all();
                foreach ($data as $item) {
                    echo $this->render("//element/home/item-product", ['data' => $item]);
                } ?>


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
                    <?php
                    $data = News::find()
                        ->where(['active' => 1, 'option' => News::OPTION_HOT])
                        ->limit(4)->orderBy(News::ORDER_BY)->all();
                    foreach ($data as $item) {
                        ?>
                        <li>
                            <div class="img-product">
                                <a href="<?php echo $item->getUrl() ?>" title="">
                                    <img src="/<?php echo $item->image ?>" alt="<?php echo $item->name ?>">
                                </a>
                            </div>
                            <div class="info-product">
                                <div class="name">
                                    <h3><a href="<?php echo $item->getUrl() ?>" title=""><?php echo $item->name ?></a>
                                    </h3>
                                </div>

                                <p class="short_ar">
                                    <?php echo $item->getDescriptionCut(350) ?>

                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    <?php } ?>
                    <div class="clearfix"></div>
                </ul>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.flat-highlights -->


