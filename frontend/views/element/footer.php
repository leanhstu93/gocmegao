<?php

use frontend\models\Banner;
use frontend\models\ProductCategory;
use frontend\models\SinglePage;
$company = $this->params['company'];
?>
<footer>
    <div class="container">
        <div class="row">
            <!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="logo logo-ft"> <a href="/" title=""> <img src="/<?php echo $company->logo ?>" alt=""> </a> </div>
                <!-- /.logo-ft -->
                <div class="widget-content">
                    <div class="icon"> <img src="images/icons/call.png" alt=""> </div>
                    <div class="info">
                        <p class="questions">Gọi cho chúng tôi 24/7!</p>
                        <p class="phone">Gọi: <?php echo $company->phone ?></p>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget-ft widget-menu">
                    <div class="widget-title">
                        <h3>Sản phẩm</h3>
                    </div>
                    <ul>
                        <?php
                        $data = ProductCategory::find()
                            ->where(['active' => 1])
                            ->limit(8)->orderBy(ProductCategory::ORDER_BY)->all();

                        foreach ($data as $item) {
                            echo "<li><a href='{$item->getUrl()}'>{$item->name}</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.widget-menu -->
            </div>
            <!-- /.col-lg-2 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget-ft widget-newsletter">
                    <div class="widget-title">
                        <h3>Đăng ký nhận mail</h3>
                    </div>
                    <p>Đăng ký Email để nhận những thông tin khuyến mãi, tin tức, sự kiện mới nhất từ chúng tôi qua Email của bạn!</p>
                    <form action="#" class="subscribe-form" method="get" accept-charset="utf-8">
                        <div class="subscribe-content">
                            <input type="text" name="email" class="subscribe-email" placeholder="Nhập địa chỉ EMail">
                            <button type="submit"><img src="images/icons/right-2.png" alt=""></button>
                        </div>
                    </form>
                    <!-- /.subscribe-form -->

                    <!-- /.pay-list -->
                </div>
                <!-- /.widget-newsletter -->
            </div>
            <!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget-ft widget-categories-ft">
                    <div class="widget-title">
                        <h3>Facebook</h3>
                    </div>
                    <ul class="face_bottom">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-page" data-href="https://www.facebook.com/thitheohcm" data-tabs="timeline" data-width="280" data-height="210" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/thitheohcm" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/thitheohcm">Góc mẹ GẠO</a></blockquote>
                        </div>
                    </ul>
                    <!-- /.cat-list-ft -->
                </div>
                <!-- /.widget-categories-ft -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
    </div>
    <!-- /.container -->
</footer>
</section>
<!-- /footer -->