<?php

use frontend\models\Province;
use kartik\select2\Select2;

?>
<form action="/admin/form/create" method="post"
      class="wpcf7-form css__form-tu-van">
    <input type="hidden" name="-three">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <d_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                <div class="form-group">
                    <span class="fas fa-user"></span>
                    <input type="text"
                           name="Form[name]"
                           class="form-control"
                           value=""
                           placeholder="Họ và tên"
                           required>
                </div>
            </div>
            <div class="col-md-12 column">
                <div class="form-group">
                    <?php
                    $proviceAll = Province::find()->asArray()->all();

                    $listCate = array_combine(array_column($proviceAll,'id'),array_column($proviceAll,'_name'));

                    echo Select2::widget([
                        'name' => 'Form[province_id]',
                        'value' => '',
                        'data' => $listCate,
                        'options' => ['required' => true, 'style'=> ' display:block;color:red','class' => 'form-control','multiple' => false, 'placeholder' => 'Chọn tỉnh thành  ...']
                    ]);
                    ?>
                </div>
            </div>
            <div class="col-md-12 column">
                <div class="form-group"><span
                        class="fas fa-phone"></span>
                    <input  type="text" name="Form[phone]"
                            class="form-control" value=""
                            placeholder="Điện thoại" required>
                </div>
            </div>
            <div class="col-md-12 column">
                <div class="form-group"><span class="fas fa-comment"></span><textarea
                        name="Form[content]"
                        class="form-control textarea required"
                        placeholder="Lời nhắn"></textarea></div>
            </div>
        </div>
        <div class="contact-section-btn">
            <div class="form-group style-two text-center"><input
                    id="form_botcheck" name="form_botcheck"
                    class="form-control" type="hidden" value="">
                <button class="theme-btn btn-style-one w-100" type="submit"
                        data-loading-text="Please wait...">Gửi chúng tôi
                </button>
            </div>
        </div>
    </div>
    <div class="wpcf7-response-output wpcf7-display-none"></div>
</form>