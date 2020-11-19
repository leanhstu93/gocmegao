<?php

use frontend\models\Quizz;

?>
<div class="page-quizz ">
    <section class="page-wellcome site__wrapper ">
        <div class="purple-bg fixed-bg"></div>
        <div class="fixed-bg blue-bg fixed-bg"></div>
        <div class="header__wrapper">
            <a href="/" title=""<?=  $this->params['company']->name ?>">
            <img src="<?=  $this->params['company']->logo ?>" class="w100"/>
            </a>
        </div>
        <div class="content__wrapper">
            <div class="main__wrapper ">
                <?php echo $this->render("//element/quizz/wellcome"); ?>
                <?php echo $this->render("//element/quizz/gender"); ?>
                <?php echo $this->render("//element/quizz/tall"); ?>
                <?php echo $this->render("//element/quizz/birthday"); ?>
                <?php echo $this->render("//element/quizz/thankyou"); ?>

                <?php

                $dataQuizz = Quizz::find()->where(['active' => 1])->all();
                foreach ($dataQuizz as $item) {
                    echo $this->render("//element/quizz/quizz",['data' => $item]);
                }
                ?>
                <?php echo $this->render("//element/quizz/result"); ?>
                <?php echo $this->render("//element/quizz/pagi"); ?>
            </div>
        </div>
    </section>

</div>