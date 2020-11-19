<section class="wrapper-banner w100">
    <?php

    use frontend\models\Banner;
    use frontend\models\SinglePage;

    $banner = Banner::getDataByCustomSetting('banner_cau_hoi');

    if (!empty($banner->images->image)) {
        ?>
        <img src="/<?php echo $banner->images->image ?>" class="w100">
    <?php } ?>
</section>


<section class="wrapper-list-answer w100">
    <div class="w1000">
        <div class="content-section">
            <ul>
                <?php
                $list_answer = SinglePage::getDataByCustomSetting('list_answer');
                 foreach ($list_answer as $item) {
                ?>
                <li>
                    <div class="js__answer css__name-answer">
                        <?php echo $item->name ?>
                    </div>
                    <div class="wrapper-col w100">
                        <div class="js__content-cut css__content-cut">
                            <?php echo $item->desc ?>
                        </div>
                        <div class="btn-on-off-content js__on-of-content">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="js__content-full css__content-all">
                        <?php echo $item->content ?>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>

<section class="wrapper-list-answer wrapper-list-answer-block-2 w100">
    <div class="w1000">
        <div class="content-section">
            <ul>
                <?php
                $list_answer = SinglePage::getDataByCustomSetting('list_answer_block_2');
                foreach ($list_answer as $item) {
                    ?>
                    <li>
                        <div class="js__answer css__name-answer">
                            <?php echo $item->name ?>
                        </div>
                        <div class="wrapper-col w100">
                            <div class="js__content-cut css__content-cut">
                                <?php echo $item->desc ?>
                            </div>
                            <div class="btn-on-off-content js__on-of-content">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="js__content-full css__content-all">
                            <?php echo $item->content ?>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>

<?php echo $this->render("//element/home/risk-when-sleep"); ?>
<?php echo $this->render("//element/home/try"); ?>
<?php echo $this->render("//element/home/video"); ?>
<?php echo $this->render("//element/home/advisory"); ?>