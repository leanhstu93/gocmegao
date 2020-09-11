<?php
use yii\widgets\LinkPager;
use frontend\models\Product;

/**
 * @var $categories
 * @var $pages
 * @var $bread
 */
if (!empty($categories)) {
    $page_title = $categories->name;
    $page_des = $categories->desc;
    $category_id = $categories->id;
} else {
    $page_title = 'Tin tức';
    $page_des = '';
    $category_id =0;
}

?>
<div class="w1000">
    <div class="content content-page page-category w100">
        <div class="page-left">
            <?php
            $item = array_shift($data);
            if (!empty($item)) {
            ?>
           <div class="block-top w100">
               <div class="block-top-left">
                    <div class="wrapper-image">
                        <img src="<?php echo $item->image ?>" class="w100">
                    </div>
                   <div class="title">
                       <?php echo $item->name ?>
                   </div>
               </div>
               <div class="block-top-right">

               </div>
           </div>
            <?php } ?>
        </div>
        <?php  echo $this->render("//element/sidebar"); ?>
    </div>
</div>
