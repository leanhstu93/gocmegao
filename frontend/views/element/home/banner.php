<?php

use frontend\models\Banner;

?>

<section class="flat-row flat-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider owl-carousel-slider">
                    <ul class="slides">
                        <?php

                        $banner = Banner::getDataByCustomSetting('banner_slide_home');
                        if (!empty($banner->images)) {
                        foreach ($banner->images as $item) {

                        ?>
                        <li>
                            <div class="slider-item style2">
                                <div class="item-text">
                                    <div class="header-item">
<!--                                        <p>Thực phẩm đông lạnh: </p>-->
                                        <h2 class="name"><?php echo $item->name ?> </h2>
                                    </div>
                                    <div class="divider65"></div>
                                    <div class="content-item">
                                        <div class="price">
                                            <span class="sale"><?php echo $item->desc ?></span>
                                            <span class="btn-shop">
                                                <a href="<?php echo $item->link ?>" title="">Mua ngay
                                                    <img src="images/right-2.png" alt="">
                                                </a>
                                            </span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-image">
                                    <img src="/<?php echo $item->image ?>" alt=""> </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                      <?php }} ?>
                    </ul>
                </div>
                <!-- /.slider -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.flat-slider -->

<section class="flat-row flat-banner-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="banner-box one-half">
                    <?php
                    $bannerLeftTop = Banner::getDataByCustomSetting('banner_left_top_home');
                    if (!empty($bannerLeftTop->images)) {
                    foreach ($bannerLeftTop->images as $item) {
                    ?>
                    <div class="inner-box">
                        <a href="<?php echo $item->link ?>" title=""> <img src="/<?php echo $item->image ?>" alt=""> </a>
                    </div>
                    <?php
                    }
                    }
                    ?>
                    <!-- /.inner-box -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.box -->
                <?php
                $bannerLeftBottom = Banner::getDataByCustomSetting('banner_left_bottom_home');
                ?>
                <div class="banner-box">
                    <div class="inner-box"> <a href="#" title=""> <img src="<?php echo $bannerLeftBottom->images->image ?>" alt=""> </a> </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="banner-box">
                    <?php
                    $bannerRight = Banner::getDataByCustomSetting('banner_right_home');
                    ?>
                    <div class="inner-box"> <a href="#" title=""> <img src="<?php echo $bannerRight->images->image ?>"
                                                                       alt="<?php echo $bannerRight->images->name ?>"> </a> </div>
                    <!-- /.inner-box -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.flat-banner-box -->