<div class="main-slider__wrapper undefined js__section-quizz-quizz section-quizz " id="section-quizz-<?php echo $data->id ?>">
    <div class="wrapper-svg">
        <form class="card card-main card-default multiple-choice">
            <div class="u-position-absolute card__animation"><div title="" role="button" aria-label="animation" tabindex="0" style="width: 100%; height: 100%; overflow: hidden; margin: 0px auto; outline: none;">
                    <?php echo $this->render("//element/quizz/svg-birthday"); ?>
                </div></div>
            <div class="bg-circle__wrapper"><div class="bg-circle"></div></div>
            <div class="card__stack card__stack__left hide-one">
                <div class="card card-default">
                </div>
                <div class="card card-default">
                </div>
            </div>
            <div class="card__stack card__stack__right ">
                <div class="card card-default">
                </div>
                <div class="card card-default">
                </div>
            </div>
            <div class="card__inner__content">
                <h4 class="card__title">
                    <?php echo $data->name ?>
                </h4>
                <div class="btn-group">
                    <button type="button" class="btn-primary btn js-get-val" data-type="quizz-<?php echo $data->id ?>"
                            data-id="<?php echo $data->id ?>" data-value="1" value="yes">Có</button>
                    <button type="button" class="btn-primary btn js-get-val "
                            data-type="quizz-<?php echo $data->id ?>" data-id="<?php echo $data->id ?>" data-value="0" value="no">không</button></div>
            </div>
            <button class="slick-arrow btn-back js-btn-prev">
                <i class="fas fa-arrow-left"></i>
            </button>
            <button class="next-btn btn js-btn-next">
                Kế tiếp <i class="fas fa-arrow-right"></i>
            </button>
        </form>
    </div>
</div>
