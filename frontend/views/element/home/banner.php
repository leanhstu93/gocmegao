<?php

use frontend\models\Banner;

?>
<section class="main-slider w100">
    <div class="js__slider-news-home w100">
        banner_slide_home
        <?php

        $banner = Banner::getDataByCustomSetting('banner_slide_home');
        if (!empty($banner->images)) {
        foreach ($banner->images as $item) {

            ?>
            <div class="item w100">
                <img src="/<?php echo $item->image ?>" class="w100">
            </div>
            <?php
            }
        } ?>
    </div>
</section>