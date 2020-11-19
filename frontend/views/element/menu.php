<?php
use Yii\helpers\Url;

$menuSymptom = trim(Url::current(),'/') == 'symptom' ? 'active' : '';
$menuDiagnose = trim(Url::current(),'/') == 'diagnose' ? 'active' : '';
$menuCpap = trim(Url::current(),'/') == 'cpap' ? 'active' : '';
$menuDieuTri = trim(Url::current(),'/') == 'dieu-tri' ? 'active' : '';
$menuDinhNghia = trim(Url::current(),'/') == 'dinh-nghia' ? 'active' : '';
$menuHauQua = trim(Url::current(),'/') == 'hau-qua' ? 'active' : '';
$menuCauHoi = trim(Url::current(),'/') == 'cau-hoi' ? 'active' : '';


?>
<div class="wrapper-menu">
    <div class="w1000">
        <div class="logo-menu">
            <a href="/">
                <img width="120px" src="<?=  $this->params['company']->logo ?>">
            </a>
        </div>
        <div id='cssmenu' class="w100">
            <ul>
                <li>
                    <a href="/dinh-nghia" class="<?php echo $menuDinhNghia ?>">
                    Định nghĩa - nguyên nhân
                    </a>
                </li>
                <li>
                    <a href="/symptom" class="<?php echo $menuSymptom ?>">
                        Triệu Chứng
                    </a>
                </li>
                <li>
                    <a href="/hau-qua" class="<?php echo $menuHauQua ?>">
                        Hậu Quả
                    </a>
                </li>
                <li>
                    <a href="/diagnose" class="<?php echo $menuDiagnose ?>">
                        Chẩn Đoán
                    </a>
                </li>
                <li>
                    <a href="/dieu-tri" class="<?php echo $menuDieuTri ?>">
                        Điều Trị
                    </a>
                </li>
                <li>
                    <a href="/cpap" class="<?php echo $menuCpap ?>">
                        Cpap
                    </a>
                </li>
                <li>
                    <a href="/cau-hoi" class="<?php echo $menuCauHoi ?>">
                        Câu hỏi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>