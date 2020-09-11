<?php use frontend\models\News;
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
</div>