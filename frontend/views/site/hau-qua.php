<section class="wrapper-banner w100">
    <?php

    use frontend\models\Banner;

    $banner = Banner::getDataByCustomSetting('banner_hau_qua');

    if (!empty($banner->images->image)) {
        ?>
        <img src="/<?php echo $banner->images->image ?>" class="w100">
    <?php } ?>
</section>
<section class="wrapper-sympton-when-sleep w100 wrapper-banner-hau-qua">
    <div class="w1000">
        <div class="wrapper-bg w100">
            <div class="content-section">
                <div class="left">
                    <div class="title-section">
                        HẬU QUẢ CỦA “NGƯNG THỞ KHI NGỦ” LÀ GÌ?
                    </div>
                    <p>
                        Ngưng thở khi ngủ làm giảm oxi và tăng carbon dioxide trong máu, đến một mức nhất định thì cơ thể phải cố gắng tìm cách để thở, gây ra vi thức giấc. Khi thức giấc, hệ thần kinh giao cảm tăng hoạt động, tăng tiết adrenalin, dẫn đến tăng nhịp tim và huyết áp để cố gắng bù đắp oxi cho các cơ quan. Nếu điều này xảy ra thường xuyên và lâu dài sẽ gây stress cho cơ thể, thay đổi nội tiết tố và dẫn đến các bệnh nguy hiểm.
                    </p>
                    <div class="wrapper-btn js__call-modal">
                        <a>
                            Click làm bài đánh giá sức khỏe bạn
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper-benh-tim-mach w100">
    <div class="w1000">
        <div class="content-section w100">
            <div class="left">
                <img src="/images/hau-qua/hinh anh web-27.png" class="w100" />
            </div>
            <div class="right">
                <div class="content-right">
                    <p>
                        Ngưng thở khi ngủ là một rối loạn giấc ngủ nghiêm trọng có thể làm tăng nguy cơ phát triển các bệnh mãn tính khác và đe dọa tính mạng.
                    </p>
                </div>
                <div class="title-right">
                        | Những người bị <span>ngưng thở khi ngủ</span> không được điều trị có thể có nhiều khả năng:
                </div>
                <div class="content-right">
                    <p>
                        - Bệnh tim mạch như suy tim, đột quỵ </br>
                        - Cao huyết áp, tiểu đường type 2 </br>
                        - Tai nạn Giao Thông 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ngung-tho-trung-uong w100">
    <div class="w1000">
        <div class="title-section">
            | NGƯNG THỞ TRUNG ƯƠNG <span>(CENTRAL SLEEP APNEA – CSA)</span>
        </div>
        <p>
            Khi các tín hiệu thần kinh từ trung ương không dẫn truyền đến các cơ hô hấp, kết quả là không có gắng sức cử động của các cơ hô hấp và không có lưu lượng khí trao đổi ở phổi, mặc dù đường hô hấp vẫn mở ra đủ trong lúc ngủ, không bị xẹp hay tắc nghẽn.
        </p>
        <div class="title-section-1">
            | NGƯNG THỞ KHI NGỦ DO TẮC NGHẼN <span>(Obstructive Sleep Apnea-OSA)</span>
        </div>
        <p>
            Khi chúng ta ngủ, cơ hô hấp sẽ  sẽ thư giãn. Đối với những người bị OSA, đôi khi họ thư giãn quá mức khiến đường thở bị thu hẹp hoặc tắc nghẽn. Kết quả là, lưu lượng khí bị giảm hoặc ngừng hoàn toàn vào đường thở trên và phổi, do đó cơ thể không nhận được oxy cần thiết để hoạt động.
        </p>
        <div class="wrapper-image">
            <img src="/images/dinh-nghia/hinh anh web-24.png" class="w100" />
        </div>
    </div>
</section>
<?php echo $this->render("//element/home/risk-when-sleep"); ?>
<?php echo $this->render("//element/home/try"); ?>
<?php echo $this->render("//element/home/video"); ?>
<?php echo $this->render("//element/home/advisory"); ?>