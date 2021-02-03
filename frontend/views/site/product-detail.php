<?php
use yii\widgets\LinkPager;
/**
 * @var $categories
 * @var $pages
 * @var $bread
 * @var $dataRL
 */
echo $this->render("//element/breadcrumb",[ 'data' => $bread]);
?>

<section class="flat-product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="images/product/flexslider/l01.jpg">
                            <img src="<?= $data->image ?>" alt="<?=  $data->name ?>">
                            <span>NEW</span>
                        </li>
                        <?php
                        foreach ($dataImages as $item) { ?>
                            <li data-thumb="<?= $item->image ?>">
                                <img src="<?= $item->image ?>" alt="<?=  $data->name ?>" />
                            </li>
                        <?php   } ?>
                    </ul><!-- /.slides -->
                </div><!-- /.flexslider -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="product-detail">
                    <div class="header-detail">
                        <h1 class="name"><?php echo $data->name ?></h1>
                        <div class="content-detail">
                            <div class="info-text">
                                <?php echo $data->desc ?>
                            </div>
                        </div>
                        <div class="product-id">
                            Mã: <span class="id">#GMG-<?php echo $data->id ?></span>
                        </div>
                        <div class="reviewed">
                            <div class="status-product">
                                Tình trạng <span> Còn hàng</span>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <ul class="price">
                            <li>
                                <div class="sale">
                                    <?php echo $data->getPriceFinalFormat() ?>
                                </div>
                            </li>
                            <?php if($data->price_sale > 0) { ?>
                            <li>
                                <div class="regular">
                                    <?php echo $data->getPriceFormat() ?>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="footer-detail ta-js-params-add-cart">
                        <div class="quanlity-box" >
                            <div class="quanlity">
                                <span class="btn-down"></span>
                                <input type="number" name="number" class="ta-js-quantity" value="1" min="1" max="100" placeholder="Số lượng">
                                <span class="btn-up"></span>
                            </div>
                            <div style="clear: both;"></div>
                        </div><!-- /.quanlity-box -->
                        <div class="box-cart style2">
                            <div class="btn-add-cart">
                                <a href="#" title="" data-product_id="<?= $data->id ?>" class="ta-js-add-cart"><img src="images/icons/add-cart.png" alt="">Thêm vào giỏ hàng</a>
                            </div>
                        </div><!-- /.box-cart -->
                        <div class="social-single">
                            <span>Chia sẻ</span>
                            <div class="wrapper-social-share">
                                <div class="fb-like" data-href="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                <ul class="social-list style2">
                                    <li>
                                        <a href="#" title="">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="">
                                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="">
                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="">
                                            <i class="fa fa-google" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul><!-- /.social-list -->
                            </div>

                        </div><!-- /.social-single -->
                    </div><!-- /.footer-detail -->


                </div>

                <!-- /.product-detail -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-product-detail -->
<section class="flat-product-content">
    <ul class="product-detail-bar">
        <li class="active">Mô tả</li>
        <li>Đánh gía</li>
    </ul><!-- /.product-detail-bar -->
    <div class="container">
        <div class="row">
            <?= $data->content ?>
        </div>
        <div class="row">
            <div class="w-100">
            <?php echo $this->render("//element/comment"); ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-product-content -->

<section class="flat-imagebox style4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flat-row-title">
                    <h3>Sản phẩm liên quan</h3>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="owl-loaded owl-drag row">
            <?php
            foreach ($dataRL as $item) {
                ?>
                <?php echo $this->render("//element/home/item-product",['data' => $item,]); ?>
            <?php } ?>
        </div>
</section><!-- /.flat-imagebox style4 -->
