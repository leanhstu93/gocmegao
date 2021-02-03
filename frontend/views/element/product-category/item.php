<div class="col-lg-4 col-sm-6">
    <div class="product-box">
        <div class="imagebox">
            <span class="item-new">NEW</span>
            <div class="box-image">
                <a href="<?php echo $data->getUrl() ?>" title="">
                    <img src="/<?php echo $data->image ?>" alt="<?php echo $data->name ?>">
                </a>
            </div>
            <!-- /.box-image -->
            <div class="box-content">
                <div class="cat-name"><a href="<?php echo $data->getUrl() ?>" title="">Tên chủ đề danh mục</a></div>
                <div class="product-name"><a href="<?php echo $data->getUrl() ?>" title=""><?php echo $data->name ?></a>
                </div>
                <div class="price">
                    <span class="sale"><?php echo $data->getPriceFinalFormat() ?></span>
                    <?php if ($data->price_sale > 0) { ?>
                    <span class="regular">
                        <?php echo $data->getPriceFormat() ?>
                    </span>
                    <?php } ?>
                </div>
            </div>
            <!-- /.box-content -->
            <div class="box-bottom">
                <?php

                if ($data->getPriceFinal() == 0) { ?>
                    <div class="btn-add-cart">
                        <a href="javascrip:;">
                        <?php echo Yii::$app->view->params['lang']->contact ?>
                        </a>
                    </div>
                <?php } else {
                ?>
                <div class="btn-add-cart ta-js-add-cart" data-product_id="<?= $data->id ?>">
                    <a href="<?php echo $data->getUrl() ?>" title="">
                        <img src="images/icons/add-cart.png" alt="">Thêm vào giỏ hàng </a>
                </div>
                <?php } ?>
            </div>
            <!-- /.box-bottom -->
        </div>
        <!-- /.imagebox -->
    </div>
</div>