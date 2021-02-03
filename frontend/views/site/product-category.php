<?php

use frontend\models\Banner;
use yii\widgets\LinkPager;
use frontend\models\Product;

/**
 * @var $categories
 * @var $pages
 * @var $bread
 */
if (!empty($categories)) {
    $page_title = $categories->name;
    $page_des = $categories->desc;
    $category_id = $categories->id;
} else {
    $page_title = 'Sản phẩm';
    $page_des = '';
    $category_id =0;
}
echo $this->render("//element/breadcrumb",['name' => $page_title, 'data' => $bread]);
?>

<div class="container">
    <div class="row box-product-list">

        <div class="box-product col-lg-9 col-sm-12 float-right">
            <div class="row">
                <?php
                foreach ($data as $item) {
                    echo $this->render("//element/product-category/item",['data' => $item,]);
                 } ?>


            </div>
            <div class="pagination_text">
                <?php
                echo LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>
                <div style="clear: both;"></div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-12 float-right">
            <div class="box-right-list-pro">
                <h3 class="title-list-pro">Sản phẩm nổi bật</h3>
                <div class="row right_pro">
                    <?php
                    # sp moi
                    $data = Product::find()
                        ->where(['active' => 1])
                        ->andWhere(new \yii\db\Expression('FIND_IN_SET(:option,`option`) > 0'))
                        ->addParams([':option' => Product::OPTION_HOT])
                        ->limit(4)
                        ->orderBy(Product::ORDER_BY)->all();
                    foreach ($data as $item) {
                        echo $this->render("//element/product-category/item-right", ['data' => $item]);
                    } ?>
                </div>
            </div>
        </div>

    </div>
</div>