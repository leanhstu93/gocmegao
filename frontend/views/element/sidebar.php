<?php use frontend\models\Banner;
use frontend\models\News;
use  frontend\models\Video;
use yii\widgets\ActiveForm;

?>
<div class="page-right sidebar_right">
    <div class="searchboxwp">
        <div>
            <?php $form = ActiveForm::begin([
//                'enableClientScript' => false,
            ]);
            $model = new News();
             ?>
            <div class="searchbox clearfix">
                <?= $form->field($model, 'name')->label(false)->widget(keygenqt\autocompleteAjax\AutocompleteAjax::class, [
                    'url' => ['site/search-json'],
                    'listener' => '(e,ui) => {
                        window.location.href = ui.item.url;
                    }',
                    'options' => ['placeholder' => 'Nhập từ khóa tìm kiếm ...']
                ]) ?>
                <a href="javascript:void(0)" rel="nofollow" class="bt_search sprite s-submit"></a>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <div class="w100 block-sidebar list-news-special">
        <div class="title-block-sidebar">
            <?php echo Yii::$app->view->params['lang']->mutex ?>
        </div>
        <ul>
            <?php
            $videos = Video::find()->where([ 'active' => 1, 'option' =>Video::OPTION_HOT])->limit(4 )->orderBy(News::ORDER_BY)->all();
            foreach ($videos as $item) { ?>
                <li>
                    <div class="wrapper-image w100">
                        <a href="<?php echo $item->getUrl() ?>">
                            <img src="<?php echo $item->image ?>" class="w100" />

                        </a>
                    </div>
                    <div class="title w100">
                        <a href="<?php echo $item->getUrl() ?>">
                            <?php echo $item->name ?>
                        </a>
                    </div>
                </li>
            <?php }
            ?>
        </ul>
    </div>

    <div class="w100 block-sidebar wrapper-advertisement">
        <?php
        $banner = Banner::getDataByCustomSetting('banner_adv_sidebar_1');
        if (!empty($banner->images)) {
        ?>
            <img src="<?php echo $banner->images->image ?>" class="w100">
        <?php } ?>
    </div>
    <div class="w100 block-sidebar wrapper-advertisement">
        <?php
        $banner = Banner::getDataByCustomSetting('banner_adv_sidebar_2');
        if (!empty($banner->images)) {
            ?>
            <img src="<?php echo $banner->images->image ?>" class="w100">
        <?php } ?>
    </div>

    <div class="w100 block-sidebar block-exchange-rate">
        <iframe class="100" src="https://adi.admicro.vn/adt/cpc/tvcads/files/html/tu_050820/tygia_box1.html?&url=undefined"></iframe>
    </div>

    <div class="w100 block-sidebar block-exchange-rate-price">
        <iframe class="w100" src="https://adi.admicro.vn/adt/banners/nam2015/2033/boxtaitro/tygia_box2.html"></iframe>
    </div>
    <div id="rightstickyanchor"></div>
    <div class="w100 block-sidebar wrapper-advertisement" id="rightsticky">
        <?php
        $banner = Banner::getDataByCustomSetting('banner_adv_sidebar_3');
        if (!empty($banner->images)) {
            ?>
            <img src="<?php echo $banner->images->image ?>" class="w100">
        <?php } ?>
    </div>

</div>