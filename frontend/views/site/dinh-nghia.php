<section class="wrapper-banner w100">
    <?php

    use frontend\models\Banner;

    $banner = Banner::getDataByCustomSetting('banner_dinh_nghia');

    if (!empty($banner->images->image)) {
        ?>
        <img src="/<?php echo $banner->images->image ?>" class="w100">
    <?php } ?>
</section>
<section class="wrapper-sympton-when-sleep wrapper-banner-cpap w100 wrapper-ngung-tho-khi-ngu">
    <div class="w1000">
        <div class="wrapper-bg w100">
            <div class="content-section">
                <div class="left">
                    <div class="title-section">
                        “NGƯNG THỞ KHI NGỦ” LÀ GÌ ?
                    </div>
                    <p>
                        Nhiều người bị “hội chứng ngưng thở khi ngủ” nhưng có thể họ không biết. Trên thực tế, theo nghiên cứu của Hiệp Hội Giấc Ngủ Hoa Kỳ  (ASSM) “hội chứng ngưng thở khi ngủ” ảnh hưởng đến 34% nam giới và gần 17%  nữ giới, vì vậy nó rất phổ biến hơn bạn nghĩ. Điều quan trọng là phải nhận ra một số triệu chứng phổ biến và hiểu tại sao bạn có thể cảm thấy mệt mỏi và bạn phải làm gì nếu bạn bị “Ngưng Thở Khi Ngủ”
                    </p>
                    <div class="wrapper-btn js__call-modal">
                        <a>
                            Trắc nghiệm đánh giá nguy cơ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper-nguyen-nhan w100">
    <div class="w1000">
        <div class="content-section w100">
            <div class="left">
                <img src="/images/dinh-nghia/hinh anh web-21.png" class="w100" />
            </div>
            <div class="right">
                <div class="title-right">
                    | NGƯNG THỞ KHI NGỦ LÀ GÌ ?
                </div>
                <div class="content-right">
                    <p>
                        Ngưng thở khi ngủ là một trong những rối loạn giấc ngủ thường gặp.
                    </p>
                    <p>
                        “Ngưng thở khi ngủ là tình trạng không có dòng khí đi vào phổi, xảy ra rất nhiều lần trong khi ngủ, mỗi lần kéo dài hơn 10 giây.
                    </p>
                </div>
                <div class="title-right-1">
                    | NGUYÊN NHÂN GÂY RA NGƯNG THỞ KHI NGỦ
                </div>
                <div class="content-right">
                    <p>
                        Ngưng thở khi ngủ bao gồm:</br>
                        - Ngưng thở tắc nghẽn (Obstructive Sleep Apnea – OSA)</br>
                        - Ngưng thở trung ương (Central Sleep Apnea – CSA)</br>
                        - Hoặc kết hợp cả hai.</br>
                        Trong đó, Ngưng thở do tắc nghẽn (OSA) là phổ biến nhất, chiếm hơn 80%.
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