<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

// Get HTTP/HTTPS (the possible values for this vary from server to server)
$myUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
// Get domain portion
$myUrl .= '://'.$_SERVER['HTTP_HOST'];
?>
<?php $this->beginPage() ?>
<?php $company = $this->params['company']; ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?=  Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= Yii::$app->urlManager->createAbsoluteUrl(Yii::$app->request->url) ?>" />
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="shortcut icon" type="image/x-icon" href="/<?=  $this->params['company']->logo ?>"/>
    <meta property="og:url" content="<?= Yii::$app->urlManager->createAbsoluteUrl(Yii::$app->request->url) ?>">
    <meta property="og:title" content="<?php echo $company->name ?>">
    <meta property="og:description" content="<?php echo $company->meta_desc ?>">
    <meta property="og:image" content="<?php echo $company->image ?>">
    <meta property="og:site_name" content="<?= $myUrl ?>">
    <meta property="og:type" content="product"/>
    <meta property="og:locale" content="vi_VN"/>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<div class="w1350">
    <!-- Load Facebook SDK for JavaScript -->
    <!--    <div id="fb-root"></div>-->
<!--        <script>(function(d, s, id) {-->
<!--                var js, fjs = d.getElementsByTagName(s)[0];-->
<!--                if (d.getElementById(id)) return;-->
<!--                js = d.createElement(s); js.id = id;-->
<!--                js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";-->
<!--                fjs.parentNode.insertBefore(js, fjs);-->
<!--            }(document, 'script', 'facebook-jssdk'));</script>-->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v9.0'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <?php echo $this->render("//element/social/message-facebook"); ?>
    <!-- Preloader -->
    <div class="preloader"></div>
    <?php echo $this->render("//element/header"); ?>
        <?= Alert::widget() ?>
    <?php echo $this->render("//element/message"); ?>
        <?php echo $content ?>
    <?php echo $this->render("//element/flat-iconbox"); ?>
    <?php  echo $this->render("//element/footer"); ?>
</div>
<?php # echo  \Yii::$app->view->render('@app/views/modal/form-advisory'); ?>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
