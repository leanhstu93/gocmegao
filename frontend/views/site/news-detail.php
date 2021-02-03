<?php
use yii\widgets\LinkPager;
use frontend\models\Product;

/**
 * @var $categories
 * @var $pages
 * @var $bread
 */

echo $this->render("//element/breadcrumb",['data' => $bread]);
?>

<div class="container">

    <div class="row box-product-list">

        <div class="box-product col-lg-9 col-sm-12" style="float: right;">
            <p class="flat-row-title">
            <h3 class="title-detail-ar"> <?php echo $data->name ?> </h3>
            </p>
            <p class="des-short">
                <?php echo $data->desc ?>
            </p>
            <div class="des-ar">
                <?php echo $data->content ?>
            </div>
        </div>

        <div class="col-lg-3 col-sm-12 pull-left">
            <div class="box-right-list-pro">
                <h3 class="title-list-pro">Tin tức liên quan</h3>
                <div class="box-product">
                    <ul class="list-ar-relate">
                        <?php
                        foreach ($dataRL as $item) {
                        ?>
                        <li><a href="<?php echo $item->getUrl() ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo $item->name ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="box-right-list-pro">
                <h3 class="title-list-pro">Sản phẩm nổi bật</h3>
                <div class="row">
                    <?php
                    # sp moi
                    $dataProductHot = Product::find()
                        ->where(['active' => 1])
                        ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,`option`) > 0'))
                        ->addParams([':option' => Product::OPTION_HOT])
                        ->limit(4)
                        ->orderBy(Product::ORDER_BY)->all();
                    foreach ($dataProductHot as $item) {
                        echo $this->render("//element/product-category/item-right", ['data' => $item]);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>