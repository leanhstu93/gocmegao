
<div class="col-lg-3 col-sm-6">
    <div class="product-box">
        <div class="imagebox">
            <span class="item-new">NEW</span>
            <div class="box-image">
                <a href="index.php?page=product"><img src="/<?php echo $data->image ?>" alt=""> </a>
            </div>
            <!-- /.box-image -->
            <div class="box-content">
                <div class="cat-name"> <a href="index.php?page=sanpham_view" title="">Tên chủ đề danh mục</a> </div>
                <div class="product-name"> <a href="<?php echo $data->getUrl() ?>" title=""><?php echo $data->name ?></a> </div>
                <div class="price"> <span class="sale">$1,250.00</span> <span class="regular"><?= $data->getPriceFormat() ?></span> </div>
            </div>
            <!-- /.box-content -->
            <div class="box-bottom">
                <div class="btn-add-cart">
                        <form action="/site/add-cart" method="get">
                            <input class="quantity-spinner" type="hidden" value="1" name="quantity">
                            <input name="product_id" value="<?= $data->id ?>" type="hidden">
                            <input name="action" value="add" type="hidden">
                            <button class="btn-one thm-bg-clr addtocart" type="submit">
                                <img src="images/add-cart.png" alt="">Thêm vào giỏ hàng
                            </button>
                        </form>
                </div>
            </div>
            <!-- /.box-bottom -->
        </div>
        <!-- /.imagebox -->
    </div>
</div>