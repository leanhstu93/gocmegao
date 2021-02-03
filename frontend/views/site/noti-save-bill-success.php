<?php
use yii\widgets\LinkPager;
use frontend\models\Product;

/**
 * @var $categories
 * @var $pages
 * @var $bread
 */
$page_title = '';
echo $this->render("//element/breadcrumb",['name' => $page_title, 'data' => $bread]);
$cart = Yii::$app->cart;
?>
<section class="cart-area">
    <div class="container">
        <?php
        if (Yii::$app->session->hasFlash('success')) {
        ?>
        <h1> <?= Yii::$app->session->getFlash('success') ?></h1>
        <?php } else {
            Yii::$app->response->redirect(['/']);
        } ?>
    </div>
</section>
