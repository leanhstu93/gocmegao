<div class="main-slider__wrapper  undefined section-hide section-quizz" id="section-gender">
    <div class="wrapper-svg">
        <form class="card card-main card-default multiple-choice">
            <div class="u-position-absolute card__animation">
                <div class="wrapper-radiant">
                </div>
                <?php echo $this->render("//element/quizz/svg"); ?>
            </div>
            <div class="bg-circle__wrapper">
                <div class="bg-circle">
                </div>
            </div>
            <div class="card__stack card__stack__left hide-all">
                <div class="card card-default"></div>
                <div class="card card-default"></div>
            </div>
            <div class="card__stack card__stack__right ">
                <div class="card card-default"></div>
                <div class="card card-default"></div>
            </div>
            <div class="card__inner__content">
                <h4 class="card__title js-title-qizz">
                   Giới tính của bạn là gì?
                </h4>
                <div class="btn-group">
                    <button type="button" data-type="gender" data-value="1" name="female" class="btn-primary flex-4 btn js-get-val " value="0">Nữ</button>
                    <button type="button" data-type="gender" data-value="2" name="male" class="btn-primary flex-4 btn js-get-val" value="1">Nam</button>
                    <button type="button" data-type="gender" data-value="3" name="other" class="btn-primary flex-4 btn js-get-val" value="Other">Khác</button>
                    <button type="button" data-type="gender" data-value="4" name="rather-not-say" class="btn-primary flex-4 btn js-get-val" value="Rather not say">Không thể nói</button>
                </div>
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
