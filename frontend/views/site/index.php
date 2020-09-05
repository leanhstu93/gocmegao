<?php
use frontend\models\News;
?>
<div class="w1000">
    <div class="content" id="streamItem">
        <div class="noibat_home clearfix">
            <div class="news_left">
                <div data-check-position="cf_home-position_focus"></div>
                <div class="top_noibat clearfix" data-marked-zoneid="cf_home_focus">
                    <div class="top_noibat_row1 clearfix">
                        <h2>
                            FBNC - LONGFORM
                        </h2>
                        <?php
                        $longForm = News::find()->where(['option' => News::OPTION_LONG_FORM, 'active' => 1])->orderBy(News::ORDER_BY)->one();
                        $data = News::find()->where(['option' => News::OPTION_HOT, 'active' => 1])->orderBy(News::ORDER_BY)->all();

                        if($data != false)
                        {
                            ?>
                            <div class="bghltop clearfix">
                                <div class="left">
                                    <a class="avatar" href="" title="title">
                                        <img src="<?php echo $longForm->image_standing ?>" alt="alt">
                                    </a>
                                </div>
                                <div class="right">
                                    <h2>
                                        <a href="<?php echo $longForm->getUrl() ?>"
                                           title="<?php echo $longForm->name ?>">
                                            <strong>
                                              <?php echo $longForm->desc ?>
                                            </strong>
                                        </a>
                                    </h2>

                                    <div class="right-desc text">
                                        Việt Nam đã sẵn sàng đón nhận làn sóng đầu tư mới? Phải làm
                                        gì để cuộc dịch chuyển này sẽ chọn "bến đỗ" là Việt Nam? Các doanh nghiệp
                                        Việt nhìn nhận và tận dụng cơ hội này ra sao? Các chuyên gia phân tích và
                                        đánh giá về cơ hội này như thế nào?...
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                    $item = array_shift($data);
                    if (isset($item)) {
                    ?>
                    <div class="block-top-one spacing-row-home w100">
                        <div class="heading-category-title">
                            Bài top 1
                        </div>
                        <div class="wrapper-info w100">
                            <div class="w50">
                                <label>
                                    <?php echo $item->name ?>
                                </label>
                                <div class="wrapper-desc text">
                                    <?php echo $item->desc ?>
                                </div>
                            </div>
                            <div class="w50">
                                <img src="<?php echo $item->image ?>" class="w100">
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                    <div class="top_noibat_row2 mgt20">
                        <ul>
                            <?php
                            $item = array_shift($data);
                            if (isset($item)) {
                            ?>
                            <li class="big ">
                                <a href="" title="<?php echo $item->name ?>">
                                    <img src="<?php echo $item->image ?>" class="w100" alt=""></a>
                                <h2 class="w100">
                                    <a href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a>
                                </h2>
                            </li>
                            <?php } ?>
                            <?php
                            $item = array_shift($data);
                            if (isset($item)) {
                                ?>
                            <li class="big ">
                                <a href="" title="<?php echo $item->name ?>">
                                    <img src="<?php echo $item->image ?>" alt=""></a>
                                <h2 class="w100">
                                    <a href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a>
                                </h2>
                            </li>
                            <?php } ?>
                            <?php
                            $item = array_shift($data);
                            if (isset($item)) {
                                ?>
                            <li class="big ">
                                <a href="" title="<?php echo $item->name ?>">
                                    <img src="<?php echo $item->image ?>" alt=""></a>
                                <h2 class="w100">
                                    <a href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a>
                                </h2>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="top_event spacing-row-home  clearfix">
                    <ul>
                        <?php
                        for ($i = 5; $i <= 8;$i++ ) {
                            $item = array_shift($data);
                            if (!isset($item)) {
                                break;
                            }
                        ?>
                            <li>
                                <span>»</span>
                                <a href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="top5_news">
                    <div class="magazine-and-investors clearfix">
                        <div class="home-box-magazine">
                            <div class="home-box-magazine-news clearfix">
                                <a class="avatar" href="" title="">
                                    <img src="images/hom1.png" alt="hom1">
                                </a>
                                <div class="home-box-magazine-news-info">
                                    <h3>
                                        <a title="" href="">
                                            Chưởng môn Khí công Himalaya VN: "Một phần không nhỏ đàn ông Việt
                                            hùng hục kiếm tiền, nhậu nhẹt vô độ để mua chỗ trên… giường bệnh"
                                        </a><a href="" title="">
                                            <span class="home-box-magazine-top-label">Magazine</span>
                                        </a>

                                    </h3>
                                </div>
                            </div>

                            <div class="home-box-magazine-news clearfix">
                                <a class="avatar" href="" title="">
                                    <img src="images/hom2.png" alt="">
                                </a>
                                <div class="home-box-magazine-news-info">
                                    <h3>
                                        <a title="" href="">
                                            Đằng sau kỳ họp "Lưỡng hội" đặc biệt và câu chuyện Việt Nam sẽ đối
                                            diện như thế nào trước một Trung Quốc thay đổi
                                        </a><a href="" title="">
                                            <span class="home-box-magazine-top-label">Magazine</span>
                                        </a>

                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="box-nha-dau-tu">
                            <h2 class="title_box">Góc nhà đầu tư</h2>
                            <div class="box-nha-dau-tu-content">
                                <ul>
                                    <li class="clearfix">
                                        <a title="" href="" class="bndt-item-title">
                                            ĐHĐCĐ Masan (MSN): Quý II có lợi nhuận ròng dương, sẽ chi tới 1 tỷ
                                            USD tăng sở hữu tại CrownX
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a title="" href="" class="bndt-item-title">
                                            ĐHĐCĐ Sabeco (SAB): Kết thúc nửa đầu năm 2020 mới nhận thấy là thời
                                            điểm vô cùng khó khăn, Công ty không thể ngồi yên
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a title="" href="" class="bndt-item-title">
                                            ĐHĐCĐ Digiworld: Apple là đối tác lớn và sẽ có đóng góp tích cực vào
                                            kết quả kinh doanh
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a title="" href="" class="bndt-item-title">
                                            ĐHCĐ Vinaconex: Trình phương án tái cấu trúc phần vốn tại Khu đô thị
                                            mới Bắc An Khánh Splendora, chào bán cổ phần tỷ lệ 15% giá 15.000
                                            đồng/cp
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a title="" href="" class="bndt-item-title">
                                            Habeco ra mắt nhiều sản phẩm mới, đặt kế hoạch lãi ròng gần 250 tỷ
                                            đồng trong năm 2020
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a title="" href="" class="bndt-item-title">
                                            Top 10 cổ phiếu tăng/giảm mạnh nhất tuần: Thaiholdings liên tục tăng
                                            trần kể từ khi niêm yết
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a title="" href="" class="bndt-item-title">
                                            Coteccons đạt được những ‘bước tiến’ giải quyết mâu thuẫn, ông
                                            Nguyễn Bá Dương có từ chức?
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="listchungkhoannew">
                        <li class="tlitem clearfix top">
                            <a class="avatar" href="">
                                <img src="images/chungkhoan1.jpg" alt=""></a>
                            <div class="knswli-right">
                                <h3><a href="" title="">Điều tra chống bán phá giá đường lỏng nhập khẩu</a></h3>
                                <p class="time_cate">
                                    <a href="" title="">Thị trường</a>
                                    <span class="gachngoai">-<span>
                                            <span class="time" title="2020-06-30T19:52:08">1 giờ trước</span></span></span>
                                </p>
                                <p class="sapo">
                                    Bộ Công Thương vừa ban hành Quyết định số 1715/QĐ-BCT về việc tiến hành điều
                                    tra áp dụng biện pháp chống bán phá giá đối với một số sản phẩm đường lỏng
                                    chiết xuất từ tinh bột ngô...
                                </p>
                            </div>
                        </li>
                        <li class="tlitem clearfix">
                            <a class="avatar" href="" title="">
                                <img src="images/chungkhoan2.jpg" alt="">
                            </a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">Dạy con theo cách của Lý Tiểu Long: Mỗi bài học chỉ tóm gọn trong
                                        một câu nói nhưng lại đủ sức làm thay đổi cả một con người</a>
                                </h3>
                                <p class="time_cate">
                                    <a href="" title="Sống">Sống</a>
                                    <span class="gachngoai">-<span>
                        <span class="time" title="2020-06-30T19:37:00"></span></span></span>
                                </p>
                                <p class="sapo">Những chia sẻ chân thực và đầy cảm động về cách nuôi dạy con của
                                    Lý Tiểu Long qua lời kể của cô con gái thứ 2 - Lý Ngưng Hương.</p>
                            </div>
                        </li>

                        <li class="tlitem clearfix">
                            <a class="avatar" href="" title="">
                                <img src="images/chungkhoan3.png" alt="">
                            </a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="" title="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng;
                                        TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Tài chính quốc tế</a>
                                    <span class="gachngoai">-<span>
                                                <span class="time" title="2020-06-30T19:25:00"></span></span></span>
                                </p>
                                <p class="sapo">Theo bảng xếp hạng mới công bố của công ty tư vấn Kantar, Amazon
                                    tiếp tục duy trì vị thế là thương hiệu có giá trị nhất thế giới. Giá trị
                                    thương hiệu của công ty thương mại điện...</p>
                            </div>
                        </li>

                        <li class="tlitem clearfix">
                            <a class="avatar" href="" title="">
                                <img src="images/chungkhoan4.jpg" alt="" title="">
                            </a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="" title="">The CrownX: Chặng đường mới của Masan sau khi "ôm" Vinmart và
                                        Vinmart+</a>
                                </h3>
                                <p class="time_cate ">
                                    <a href="" title="">Doanh nghiệp</a>
                                    <span class="gachngoai">-<span>
                                            <span class="time" title="2020-06-30T11:17:49"></span></span></span>
                                </p>
                                <p class="sapo">Bán lẻ không có biên giới, Vincommerce sẽ không chỉ dừng lại ở
                                    Việt Nam mà trở thành top 50 thương hiệu toàn cầu. Masan cũng lên chiến lược
                                    xây dựng thương hiệu riêng - hàng độc...</p>
                            </div>
                        </li>

                        <li class="tlitem clearfix">
                            <a class="avatar " href="" title="">
                                <img src="images/chungkhoan4.jpg" alt=""></a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="/tphcm-khong-khuyen-khich-lam-nha-pho-trong-10-nam-toi-20200630085917951.chn" title="TPHCM không khuyến khích làm nhà phố trong 10 năm tới">TPHCM
                                        không khuyến khích làm nhà phố trong 10 năm tới</a></h3>
                                <p class="time_cate">
                                    <a href="" title="">Bất động sản</a>
                                    <span class="gachngoai">-<span>
                        <span class="time" title="2020-06-30T09:04:06"></span></span></span>
                                </p>
                                <p class="sapo">Trong 10 năm tới, TPHCM không khuyến khích đẩy mạnh phát triển
                                    nhà ở thấp tầng để tận dụng quỹ đất làm nhà ở cao tầng hiện đại nhằm đáp ứng
                                    về số lượng và tỷ lệ nhà ở chung cư...</p>
                            </div>
                        </li>

                        <li class="tlitem clearfix bottom">
                            <a class="avatar" href="" title="">
                                <img src="images/chungkhoan4.jpg" alt="">
                            </a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="" title="">2 cuộc họp cổ đông của Eximbank bất thành, cổ đông ra về trong thất
                                        vọng</a>
                                </h3>
                                <p class="time_cate ">
                                    <a href="" title="">Tài chính - ngân hàng</a>
                                    <span class="gachngoai">-<span>
                                            <span class="time" title="2020-06-30T15:04:00"></span></span></span>
                                </p>
                                <p class="sapo">Cả 2 cuộc họp cổ đông dự kiến tổ chức trong ngày 30/6 của
                                    Eximbank đều bất thành vì không đủ tỷ lệ tham dự. Trước đó, 3 cuộc họp cổ
                                    đông trong năm 2019 của ngân hàng cũng đều...</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="top5_news mgt0">
                    <div class="kl-group-content clearfix">
                        <div class="newdangchuy">
                            <p class="title_box">ĐÁNG CHÚ Ý</p>
                            <div class="kdsdsk-wrapper">
                                <ul class="list-kdsdsk">
                                    <li class="kdsdsk">
                                        <a class="avatar clearfix" href="" title="">
                                            <img src="images/chuy1.jpg" alt="">
                                        </a>
                                        <h4>
                                            <a href="">
                                                Bầu Đức: Nếu tôi không quyết liệt thì không có HAGL hôm nay,
                                                chắc chắn sẽ mua lại cổ phần để tăng sở hữu tại công ty nông
                                                nghiệp
                                            </a>
                                        </h4>
                                    </li>
                                    <li class="kdsdsk">
                                        <a class="avatar clearfix" href="">
                                            <img src="images/chuy2.jpg" alt="">
                                        </a>
                                        <h4>
                                            <a href="">
                                                Hàng loạt quán trà sữa thuê mặt bằng 15.000 USD/tháng phải đóng
                                                cửa, sếp KPMG chỉ ra sai lầm của hầu hết doanh nghiệp Việt
                                            </a>
                                        </h4>
                                    </li>
                                    <li class="kdsdsk">
                                        <a class="avatar clearfix" href=""><img src="images/chuy3.jpg" alt="">
                                        </a>
                                        <h4>
                                            <a href="">
                                                CEO Vĩnh Hoàn: Với EVFTA, kim ngạch cá tra sang châu Âu dự tăng
                                                gấp đôi lên 500 triệu USD
                                            </a>
                                        </h4>
                                    </li>
                                    <li class="kdsdsk">
                                        <a class="avatar clearfix" href=""><img src="images/chuy4.jpg" alt="">
                                        </a>
                                        <h4>
                                            <a href="">
                                                Nhà đầu tư tháo chạy, chiến lược 'cổ phiếu chỉ tăng giá' sụp đổ
                                                trước cú sập 2 nghìn tỷ USD
                                            </a>
                                        </h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="higlight_box clearfix row1 box-goc-nhin-chuyen-gia">
                            <a href="">
                                <p class="title_box">GÓC NHÌN CHUYÊN GIA</p>
                            </a>
                            <div class="chuyengia_box clearfix">
                                <div class="chuyengia_bg clearfix">
                                    <div class="chuyengian-quote">
                                        <span class="icon_quote sprite"></span>
                                    </div>
                                    <div class="bggocnhin clearfix">
                                        <div class="boxleft">
                                            <a href="" class="title">Những bí quyết giúp banker xây dựng quan hệ
                                                khách hàng</a>
                                            <div class="chuyengia">
                                                <a href="">
                                                    <p class="name">Ông Trịnh Minh Thảo</p></a>

                                            </div>
                                            <div class="boxright">
                                                <a href=""><img src="images/chuyengia1.png" alt=""></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="chuyengia_bg clearfix">
                                    <div class="chuyengian-quote">
                                        <span class="icon_quote sprite"></span>
                                    </div>
                                    <div class="bggocnhin clearfix">
                                        <div class="boxleft">
                                            <a href="" class="title">Chuyên gia: Cấu trúc và đặc trưng kinh tế Việt Nam
                                                hiện nay khá tương đồng với một số nước trước thời kỳ bùng nổ
                                                tăng trưởng</a>
                                            <div class="chuyengia">
                                                <a href="">
                                                    <p class="name">GS.TS Trần Thọ Đạt</p></a>
                                            </div>
                                            <div class="boxright">
                                                <a href="">
                                                    <img src="images/chuyengia2.png" alt=""></a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="chuyengia_bg clearfix">
                                    <div class="chuyengian-quote">
                                        <span class="icon_quote sprite"></span>
                                    </div>
                                    <div class="bggocnhin clearfix">
                                        <div class="boxleft">
                                            <a href="" class="title">TS. Cấn Văn Lực: Không nên quá lo ngại về sự
                                                cạnh
                                                tranh giữa mobile money và các ví điện tử khác</a>
                                            <div class="chuyengia">
                                                <a href="">
                                                    <p class="name">TS Cấn Văn Lực</p></a>
                                            </div>
                                            <div class="boxright">
                                                <a href=""><img src="images/chuyengia3.png" alt=""></a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="listchungkhoannew">
                        <li class="tlitem clearfix top">
                            <a class="avatar" href="">
                                <img src="images/c1.jpeg" alt=""></a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">[Nhịp
                                        đập phái sinh phiên 30/06] Các hợp đồng tương lai “đồng loạt lao dốc”
                                        cuối phiên chiều</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Thị trường chứng khoán</a>
                                    <span class="gachngoai">-<span>
                        <span class="time" title="2020-06-30T18:02:37"></span></span></span>
                                </p>
                                <p class="sapo">Phiên giao dịch ngày hôm nay có diễn biến tương tự giống phiên
                                    thứ 6 tuần trước khi đẩy giá vào đầu phiên sáng và đuối sức vào cuối phiên
                                    chiều…</p>
                            </div>
                        </li>
                        <li class="tlitem clearfix top">
                            <a class="avatar" href="">
                                <img src="images/c2.jpg" alt=""></a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">Doanh
                                        nghiệp loay hoay, than khó vì điều kiện tiếp cận gói hỗ trợ 62.000</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Thị trường chứng khoán</a>
                                    <span class="gachngoai">-<span>
                        <span class="time" title="2020-06-30T18:02:37"></span></span></span>
                                </p>
                                <p class="sapo">Nhiều doanh nghiệp cho rằng, điều kiện để hưởng gói hỗ trợ
                                    62.000 tỷ của Chính phủ chưa phù hợp, khiến doanh nghiệp và người lao động
                                    khó tiếp cận.</p>
                            </div>
                        </li>
                        <li class="tlitem clearfix top">
                            <a class="avatar" href="">
                                <img src="images/c3.jpg" alt=""></a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">Doanh
                                        nghiệp loay hoay, than khó vì điều kiện tiếp cận gói hỗ trợ 62.000</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Thị trường chứng khoán</a>
                                    <span class="gachngoai">-<span>
                        <span class="time" title="2020-06-30T18:02:37"></span></span></span>
                                </p>
                                <p class="sapo">Nhiều doanh nghiệp cho rằng, điều kiện để hưởng gói hỗ trợ
                                    62.000 tỷ của Chính phủ chưa phù hợp, khiến doanh nghiệp và người lao động
                                    khó tiếp cận.</p>
                            </div>
                        </li>
                        <li class="tlitem clearfix top">
                            <a class="avatar" href="">
                                <img src="images/c4.png" alt=""></a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">Doanh
                                        nghiệp loay hoay, than khó vì điều kiện tiếp cận gói hỗ trợ 62.000</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Thị trường chứng khoán</a>
                                    <span class="gachngoai">-<span>
                        <span class="time" title="2020-06-30T18:02:37"></span></span></span>
                                </p>
                                <p class="sapo">Nhiều doanh nghiệp cho rằng, điều kiện để hưởng gói hỗ trợ
                                    62.000 tỷ của Chính phủ chưa phù hợp, khiến doanh nghiệp và người lao động
                                    khó tiếp cận.</p>
                            </div>
                        </li>
                        <li class="tlitem clearfix top">
                            <a class="avatar" href="">
                                <img src="images/c5.jpg" alt=""></a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">Doanh
                                        nghiệp loay hoay, than khó vì điều kiện tiếp cận gói hỗ trợ 62.000</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Thị trường chứng khoán</a>
                                    <span class="gachngoai">-<span>
                        <span class="time" title="2020-06-30T18:02:37"></span></span></span>
                                </p>
                                <p class="sapo">Nhiều doanh nghiệp cho rằng, điều kiện để hưởng gói hỗ trợ
                                    62.000 tỷ của Chính phủ chưa phù hợp, khiến doanh nghiệp và người lao động
                                    khó tiếp cận.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="higlight_box clearfix row2 nobd">
                        <div class="boxexamination">
                            <div class="title">
                                <p class="text-examination">Sự kiện : </p>
                                <h2 class="toppicbig">
                                    <a href="">Giảm đau kinh tế</a>
                                </h2>
                            </div>
                            <ul class="news-list">
                                <li>
                                    <a href="" class="img230x144">
                                        <img src="images/sk1.png" class="img230x144" alt="">
                                    </a>
                                    <div class="name-news">
                                        <a href="" class="title-news">"Lột xác" căn studio ngoạn mục chỉ với 45
                                            triệu đồng sau 1 tuần </a>
                                        <a href="" class="category-news">Bất động sản</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="" class="img230x144">
                                        <img src="images/sk2.jpg" class="img230x144" alt="">
                                    </a>
                                    <div class="name-news">
                                        <a href="" class="title-news">"Lột xác" căn studio ngoạn mục chỉ với 45
                                            triệu đồng sau 1 tuần </a>
                                        <a href="" class="category-news">Bất động sản</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="" class="img230x144">
                                        <img src="images/sk3.png" class="img230x144" alt="">
                                    </a>
                                    <div class="name-news">
                                        <a href="" class="title-news">"Lột xác" căn studio ngoạn mục chỉ với 45
                                            triệu đồng sau 1 tuần </a>
                                        <a href="" class="category-news">Bất động sản</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="top5_news mt-0">
                    <ul class="listchungkhoannew">
                        <li class="tlitem clearfix top">
                            <a class="avatar" href="">
                                <img src="images/hk1.jpg" alt="">
                            </a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">4 xu hướng chính của thị trường bất động sản năm 2020</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Bất động sản</a>
                                    <span class="gachngoai">-<span>
                                            <span class="time" title="2020-06-30T18:59:00"></span></span></span>
                                </p>
                                <p class="sapo">Hiện thị trường BĐS chưa khởi sắc ở hầu hết các phân khúc sản
                                    phẩm nhưng theo dự báo, trong giai đoạn tới, một số xu hướng thị trường có
                                    thể sẽ diễn ra mạnh mẽ, thể hiện ở một vài...</p>
                            </div>
                        </li>
                        <li class="tlitem clearfix">
                            <a class="avatar" href="">
                                <img src="images/hk2.jpg" alt="">
                            </a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">4 xu hướng chính của thị trường bất động sản năm 2020</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Bất động sản</a>
                                    <span class="gachngoai">-<span>
                                            <span class="time" title="2020-06-30T18:59:00"></span></span></span>
                                </p>
                                <p class="sapo">Hiện thị trường BĐS chưa khởi sắc ở hầu hết các phân khúc sản
                                    phẩm nhưng theo dự báo, trong giai đoạn tới, một số xu hướng thị trường có
                                    thể sẽ diễn ra mạnh mẽ, thể hiện ở một vài...</p>
                            </div>
                        </li>
                        <li class="tlitem clearfix">
                            <a class="avatar" href="">
                                <img src="images/hk3.png" alt="">
                            </a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">4 xu hướng chính của thị trường bất động sản năm 2020</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Bất động sản</a>
                                    <span class="gachngoai">-<span>
                                            <span class="time" title="2020-06-30T18:59:00"></span></span></span>
                                </p>
                                <p class="sapo">Hiện thị trường BĐS chưa khởi sắc ở hầu hết các phân khúc sản
                                    phẩm nhưng theo dự báo, trong giai đoạn tới, một số xu hướng thị trường có
                                    thể sẽ diễn ra mạnh mẽ, thể hiện ở một vài...</p>
                            </div>
                        </li>
                        <li class="tlitem clearfix">
                            <a class="avatar" href="">
                                <img src="images/hk4.jpg" alt="">
                            </a>
                            <div class="knswli-right">
                                <h3>
                                    <a href="">4 xu hướng chính của thị trường bất động sản năm 2020</a></h3>
                                <p class="time_cate ">
                                    <a href="" title="">Bất động sản</a>
                                    <span class="gachngoai">-<span>
                                            <span class="time" title="2020-06-30T18:59:00"></span></span></span>
                                </p>
                                <p class="sapo">Hiện thị trường BĐS chưa khởi sắc ở hầu hết các phân khúc sản
                                    phẩm nhưng theo dự báo, trong giai đoạn tới, một số xu hướng thị trường có
                                    thể sẽ diễn ra mạnh mẽ, thể hiện ở một vài...</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_right">
                <div class="searchboxwp">
                    <div>
                        <div class="searchbox clearfix">
                            <input class="textbox s-input ac_input" type="text" placeholder="Gõ mã CK hoặc tên công ty...">
                            <input class="textbox s-input" type="text" placeholder="Tìm kiếm tin tức..." style="display: none;">
                            <input class="textbox s-input ac_input" type="text" placeholder="Gõ họ tên..." style="display: none;">
                            <a href="javascript:void(0)" rel="nofollow" class="bt_search sprite s-submit"></a>
                        </div>
                        <div class="checked">
                            <input class="mg0" type="radio" checked="checked" name="BoxSearch_Type" value="0"><label>Công ty</label>
                            <input type="radio" name="BoxSearch_Type" value="1"><label>Tin tức</label>
                            <input type="radio" name="BoxSearch_Type" value="2"><label>Lãnh đạo</label>
                        </div>
                    </div>
                </div>

                <div class="banner_right1">
                    <div class="clr">
                        <a><img src="images/banner2.jpg"></a>
                        <a><img src="images/banner2.jpg"></a>
                        <a><img src="images/banner2.jpg"></a>
                    </div>
                    <div class="mgt20 clearfix">
                        <div class="widget2">
                            <iframe src="https://adi.admicro.vn/adt/banners/nam2015/2033/boxtaitro/tygia_box1.html" width="300" height="282" frameborder="0" scrolling="no"></iframe>
                        </div>
                        <div class="widget2">
                            <iframe src="https://adi.admicro.vn/adt/banners/nam2015/2033/boxtaitro/tygia_box2.html" width="300" height="145" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
                <div class="banner_right2">
                    <div class="list3box clearfix mgb15 mgt15">
                        <div class="left" id="ListLichSuKien">
                            <h2 class="title_box">
                                <a href="">
                                    <span class="icon_time sprite"></span>
                                    LỊCH SỰ KIỆN</a>
                            </h2>
                            <div class="mgt10">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 500px;">
                                    <ul class="list listlichsk" style="overflow: hidden; width: auto; height: 500px;">
                                        <div class="listevent-inner">
                                            <li class="time top clearfix"><p>30/06</p></li>
                                            <div class="listGroupLichSuKien">
                                                <li class="event"><span class="ma">MSN</span><a href="" target="_blank">ĐHĐCĐ
                                                        thường niên 2020</a></li>
                                                <li class="event"><span class="ma">VND</span><a href="" target="_blank">ĐHĐCĐ
                                                        thường niên 2020</a></li>
                                            </div>
                                            <li class="time top clearfix"><p>01/07</p></li>
                                            <div class="listGroupLichSuKien">
                                                <li class="event"><span class="ma">VFS</span><a href="" target="_blank">Giao dịch 41.000.000 cổ phiếu đăng ký
                                                        giao dịch</a></li>
                                                <li class="event"><span class="ma">SBH</span><a href="" target="_blank">Trả cổ tức bằng tiền mặt (500đ/cp)</a>
                                                </li>
                                                <li class="event no_border"><span class="ma">ILB</span><a href="" target="_blank">Chi trả cổ tức năm 2019 (1.500 đ/cp)</a>
                                                </li>
                                            </div>
                                            <li class="time top clearfix"><p>02/07</p></li>
                                            <div class="listGroupLichSuKien">
                                                <li class="event"><span class="ma">NUE</span><a href="" target="_blank">Trả cổ tức bằng tiền mặt (708đ/cp)</a>
                                                </li>
                                                <li class="event"><span class="ma">MDC</span><a href="" target="_blank">Trả cổ tức bằng tiền mặt (600 đ/cp)</a>
                                                </li>
                                                <li class="event"><span class="ma">GGS</span><a href="" target="_blank">Hủy ĐKGD cổ
                                                        phiếu</a></li>
                                                <li class="event"><span class="ma">HGR</span><a href="" target="_blank">Giao dịch 10.000 cổ phiếu đăng ký giao
                                                        dịch</a></li>
                                                <li class="event"><span class="ma">TAW</span><a href="" target="_blank">Trả cổ tức bằng tiền mặt (1.000đ/cp)</a>
                                                </li>
                                            </div>
                                        </div>
                                    </ul>
                                    <div class="slimScrollBar" style="background: rgb(198, 198, 198); width: 3px; position: absolute; top: 0px; opacity: 1; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 107.296px;"></div>
                                    <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list3box mgb15">
                        <div class="center" id="companyinfo-box">
                            <h2 class="title_box">
                                <a href="">TIN TỨC DOANH NGHIỆP NIÊM YẾT</a>
                            </h2>
                            <div id="cn-content" class="mgt10">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 500px;">
                                    <ul class="hCompany" style="overflow: hidden; width: auto; height: 500px;">
                                        <li class="clearfix">
                                            <div class="company-left cib-cell" style="width: 33px;">
                                                <span class="time">18:39</span>
                                                <span class="ma"><a href="" class="symbol">HNG</a></span>
                                            </div>
                                            <div class="company-center cib-cell" style="width: 185px;">
                                                <a href="">HNG: Bổ nhiệm ông Đoàn Nguyên Đức làm Chủ...</a>
                                            </div>
                                            <div class="company-right cib-cell" style="width: 32px;">15.3<span class="down">-0.1</span></div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="company-left cib-cell" style="width: 33px;">
                                                <span class="time">18:39</span>
                                                <span class="ma"><a href="" class="symbol">KDH</a></span>
                                            </div>
                                            <div class="company-center cib-cell" style="width: 185px;">
                                                <a href="">KDH: Báo cáo định kỳ tình hình thanh toán gốc, lãi
                                                    trái...</a>
                                            </div>
                                            <div class="company-right cib-cell" style="width: 32px;">23.2<br>
                                                <span class="">0.0</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="company-left cib-cell" style="width: 33px;">
                                                <span class="time">18:37</span>
                                                <span class="ma"><a href="" class="symbol">HMC</a></span>
                                            </div>
                                            <div class="company-center cib-cell" style="width: 185px;">
                                                <a href="">HMC: Bà Nguyễn Thúy Ly - CĐL đã mua 7.900 cp</a>
                                            </div>
                                            <div class="company-right cib-cell" style="width: 32px;">
                                                13.8<span class="up">+0.7</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="slimScrollBar" style="background: rgb(198, 198, 198); width: 3px; position: absolute; top: 0px; opacity: 1; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 252.004px;"></div>
                                    <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_right3 fr mgt20">
                    <div class="clr mgt15">
                        <a><img src="images/banner3.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="list3box bdtop w710">
            <div class="mgt25 bdtopadm">
                <div id="boxTinDoanhNghiep">
                    <div class="title_boxTinDN">
                        <span class="iconBoxDN sprite_adm"></span>
                        <a href="" class="textTitleTinDN" target="_blank">TIN DOANH NGHIỆP</a>
                    </div>
                    <ul class="tinDNul">
                        <li class="no_border prM6 bdbot">
                            <a class="nameTDN" href="">Kiến
                                trúc &amp; Xây dựng An Nguyên: Giá trị cốt lõi của công trình không nằm ở phần chi
                                phí!</a><span class="icon_hot sprite_adm"></span>
                            <p>&nbsp;</p>
                        </li>
                        <li class="no_border prM6 bdbot">
                            <a class="nameTDN" href="">Kiến
                                trúc &amp; Xây dựng An Nguyên: Giá trị cốt lõi của công trình không nằm ở phần chi
                                phí!</a><span class="icon_hot sprite_adm"></span>
                            <p>&nbsp;</p>
                        </li>
                        <li class="no_border prM6 bdbot">
                            <a class="nameTDN" href="">Kiến
                                trúc &amp; Xây dựng An Nguyên: Giá trị cốt lõi của công trình không nằm ở phần chi
                                phí!</a><span class="icon_hot sprite_adm"></span>
                            <p>&nbsp;</p>
                        </li>
                        <li class="no_border prM6 bdbot">
                            <a class="nameTDN" href="">Kiến
                                trúc &amp; Xây dựng An Nguyên: Giá trị cốt lõi của công trình không nằm ở phần chi
                                phí!</a><span class="icon_hot sprite_adm"></span>
                            <p>&nbsp;</p>
                        </li>
                        <li class="no_border prM6 bdbot">
                            <a class="nameTDN" href="">Kiến
                                trúc &amp; Xây dựng An Nguyên: Giá trị cốt lõi của công trình không nằm ở phần chi
                                phí!</a><span class="icon_hot sprite_adm"></span>
                            <p>&nbsp;</p>
                        </li>
                        <li class="no_border prM6 bdbot">
                            <a class="nameTDN" href="">Kiến
                                trúc &amp; Xây dựng An Nguyên: Giá trị cốt lõi của công trình không nằm ở phần chi
                                phí!</a><span class="icon_hot sprite_adm"></span>
                            <p>&nbsp;</p>
                        </li>
                    </ul>
                </div>
                <div id="boxSanPhamNoiBat">
                    <a href="" class="titleSPNB">SẢN PHẨM NỔI BẬT</a>
                    <ul class="boxSPNoiBatul">
                        <li class="top">
                            <a href="">
                                <img alt="" src="images/sp1.jpg" class="spImg">
                            </a>
                            <div class="textBottom">
                                <p class="bottomimgSP fr borderAround">Doanh nghiệp</p>
                                <p class="bottomimgSP">+ 0,1M Reached</p>
                            </div>
                            <span class="icon_hot sprite_adm"></span>
                            <a class="textNoiBat first" href="">
                                Hậu covid, Mũi Né 'cháy phòng' đón khách nội địa và cơ hội bứt phá</a>
                        </li>
                        <li class="sp">
                            <a href="">
                                <img alt="" src="images/sp2.jpg" class="spImg">
                            </a>
                            <div class="textBottom">
                                <p class="bottomimgSP fr borderAround">Bất động sản</p>
                                <p class="bottomimgSP">+ 0,1M Reached</p>
                            </div>
                            <span class="icon_hot sprite_adm"></span>
                            <a class="textNoiBat first" href="">
                                Vì sao căn hộ 20 triệu đồng/m2 không dễ làm?</a>
                        </li>
                        <li class="sp">
                            <a href="">
                                <img alt="" src="images/sp3.jpg" class="spImg">
                            </a>
                            <div class="textBottom">
                                <p class="bottomimgSP fr borderAround">Thị trường</p>
                                <p class="bottomimgSP">+ 0,1M Reached</p>
                            </div>
                            <span class="icon_hot sprite_adm"></span>
                            <a class="textNoiBat first" href="">
                                8 xe mới rục rịch ra mắt Việt Nam đón cơ hội giảm trước bạ hàng chục triệu đồng nhờ
                                lắp ráp</a>
                        </li>
                    </ul>
                </div>
                <div class="flgadmnntr">
                    <p class="ndttTinDN">NỘI DUNG ĐƯỢC TÀI TRỢ</p>
                </div>
                <span class="clearfix"></span>
            </div>
            <div class="border_bottom mgt0"></div>
        </div>
        <div class="top5_news2 top5_news4">
            <div class="top5_news">
                <ul class="listchungkhoannew">
                    <li class="tlitem clearfix">
                        <a class="avatar" href=""><img src="images/chungkhoan2.jpg" alt=""></a>
                        <div class="knswli-right">
                            <h3>
                                <a href="">Hoá ra lời nói ngây ngô của Hoàng tử William hồi bé chính là thứ giữ chân
                                    Công
                                    nương Diana trong cuộc hôn nhân đầy bi kịch suốt 15 năm</a>
                            </h3>
                            <p class="time_cate ">
                                <a href="">Sống</a>
                                <span class="gachngoai">-<span>
                                        <span class="time" title="2020-06-30T16:23:00"></span></span></span>
                            </p>
                            <p class="sapo">Cuộc hôn nhân kéo dài trong 15 năm với Thái tử Charles được coi là
                                tấm bi kịch cho cuộc đời ngắn ngủi của Công nương Diana. Tuy nhiên, ngoài những
                                nuối tiếc cho số phận đáng buồn...</p>
                        </div>
                    </li>
                    <li class="tlitem clearfix">
                        <a class="avatar" href=""><img src="images/chungkhoan2.jpg" alt=""></a>
                        <div class="knswli-right">
                            <h3>
                                <a href="">Hoá ra lời nói ngây ngô của Hoàng tử William hồi bé chính là thứ giữ chân
                                    Công
                                    nương Diana trong cuộc hôn nhân đầy bi kịch suốt 15 năm</a>
                            </h3>
                            <p class="time_cate ">
                                <a href="">Sống</a>
                                <span class="gachngoai">-<span>
                                        <span class="time" title="2020-06-30T16:23:00"></span></span></span>
                            </p>
                            <p class="sapo">Cuộc hôn nhân kéo dài trong 15 năm với Thái tử Charles được coi là
                                tấm bi kịch cho cuộc đời ngắn ngủi của Công nương Diana. Tuy nhiên, ngoài những
                                nuối tiếc cho số phận đáng buồn...</p>
                        </div>
                    </li>
                    <li class="tlitem clearfix">
                        <a class="avatar" href=""><img src="images/chungkhoan2.jpg" alt=""></a>
                        <div class="knswli-right">
                            <h3>
                                <a href="">Hoá ra lời nói ngây ngô của Hoàng tử William hồi bé chính là thứ giữ chân
                                    Công
                                    nương Diana trong cuộc hôn nhân đầy bi kịch suốt 15 năm</a>
                            </h3>
                            <p class="time_cate ">
                                <a href="">Sống</a>
                                <span class="gachngoai">-<span>
                                        <span class="time" title="2020-06-30T16:23:00"></span></span></span>
                            </p>
                            <p class="sapo">Cuộc hôn nhân kéo dài trong 15 năm với Thái tử Charles được coi là
                                tấm bi kịch cho cuộc đời ngắn ngủi của Công nương Diana. Tuy nhiên, ngoài những
                                nuối tiếc cho số phận đáng buồn...</p>
                        </div>
                    </li>
                    <li class="tlitem clearfix">
                        <a class="avatar" href=""><img src="images/chungkhoan2.jpg" alt=""></a>
                        <div class="knswli-right">
                            <h3>
                                <a href="">Hoá ra lời nói ngây ngô của Hoàng tử William hồi bé chính là thứ giữ chân
                                    Công
                                    nương Diana trong cuộc hôn nhân đầy bi kịch suốt 15 năm</a>
                            </h3>
                            <p class="time_cate ">
                                <a href="">Sống</a>
                                <span class="gachngoai">-<span>
                                        <span class="time" title="2020-06-30T16:23:00"></span></span></span>
                            </p>
                            <p class="sapo">Cuộc hôn nhân kéo dài trong 15 năm với Thái tử Charles được coi là
                                tấm bi kịch cho cuộc đời ngắn ngủi của Công nương Diana. Tuy nhiên, ngoài những
                                nuối tiếc cho số phận đáng buồn...</p>
                        </div>
                    </li>
                    <li class="tlitem clearfix">
                        <a class="avatar" href=""><img src="images/chungkhoan2.jpg" alt=""></a>
                        <div class="knswli-right">
                            <h3>
                                <a href="">Hoá ra lời nói ngây ngô của Hoàng tử William hồi bé chính là thứ giữ chân
                                    Công
                                    nương Diana trong cuộc hôn nhân đầy bi kịch suốt 15 năm</a>
                            </h3>
                            <p class="time_cate ">
                                <a href="">Sống</a>
                                <span class="gachngoai">-<span>
                                        <span class="time" title="2020-06-30T16:23:00"></span></span></span>
                            </p>
                            <p class="sapo">Cuộc hôn nhân kéo dài trong 15 năm với Thái tử Charles được coi là
                                tấm bi kịch cho cuộc đời ngắn ngủi của Công nương Diana. Tuy nhiên, ngoài những
                                nuối tiếc cho số phận đáng buồn...</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="BoxKinhDoanhTuTe2 clearfix w710 qgcc">
            <div class="boximg">
                <img src="images/cbanl-dnfbh.png" alt="">
            </div>
            <div class="content-boxkdtt swiper-container swiper-container-horizontal">
                <ul class="swiper-wrapper">
                    <li class="content-li-news swiper-slide swiper-slide-active" style="margin-right: 10px;">
                        <a href="" class="aimg230x141">
                            <img src="images/slide1.png" class="img230x141">
                        </a>
                        <a class="title-content-li" href="">CEO ô mai Hồng Lam: “Chúng tôi có thể chuyển giao giữa những thế hệ kỹ sư, cớ gì
                            chuyển giao cho con lại khó khăn được”
                        </a>
                        <p class="reached">+ <span class=" item-view" rel="20200608143716621">0</span> Reached </p>
                    </li>
                    <li class="content-li-news swiper-slide swiper-slide-next" style="margin-right: 10px;">
                        <a href="" class="aimg230x141">
                            <img src="images/slide1.png" class="img230x141">
                        </a>
                        <a class="title-content-li" href="">CEO ô mai Hồng Lam: “Chúng tôi có thể chuyển giao giữa những thế hệ kỹ sư, cớ gì
                            chuyển giao cho con lại khó khăn được”
                        </a>
                        <p class="reached">+ <span class=" item-view" rel="20200608143716621">0</span> Reached </p>
                    </li>
                    <li class="content-li-news swiper-slide" style="margin-right: 10px;">
                        <a href="" class="aimg230x141">
                            <img src="images/slide1.png" class="img230x141">
                        </a>
                        <a class="title-content-li" href="">CEO ô mai Hồng Lam: “Chúng tôi có thể chuyển giao giữa những thế hệ kỹ sư, cớ gì
                            chuyển giao cho con lại khó khăn được”
                        </a>
                        <p class="reached">+ <span class=" item-view" rel="20200608143716621">0</span> Reached </p>
                    </li>
                    <li class="content-li-news swiper-slide" style="margin-right: 10px;">
                        <a href="" class="aimg230x141">
                            <img src="images/slide1.png" class="img230x141">
                        </a>
                        <a class="title-content-li" href="">CEO ô mai Hồng Lam: “Chúng tôi có thể chuyển giao giữa những thế hệ kỹ sư, cớ gì
                            chuyển giao cho con lại khó khăn được”
                        </a>
                        <p class="reached">+ <span class=" item-view" rel="20200608143716621">0</span> Reached </p>
                    </li>
                </ul>
                <span class="swiper-button-next"></span>
                <span class="swiper-button-prev swiper-button-disabled"></span>
                <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <span class="border_bottom w710"></span>
        <div class="BoxKinhDoanhTuTe2 clearfix w710 qgcc mgt25">
            <div class="boximg">
                <img src="images/enjoy-vn.png" alt="Bất động sản du lịch">
            </div>
            <div class="content-boxkdtt swiper-container swiper-container-horizontal">
                <ul class="swiper-wrapper">
                    <li class="content-li-news swiper-slide swiper-slide-active" style="margin-right: 10px;">
                        <a href="" class="aimg230x141">
                            <img src="images/slide2.jpg" class="img230x141">
                        </a>
                        <a class="title-content-li" href="">CEO ô mai Hồng Lam: “Chúng tôi có thể chuyển giao giữa những thế hệ kỹ sư, cớ gì
                            chuyển giao cho con lại khó khăn được”
                        </a>
                        <p class="reached">+ <span class=" item-view" rel="20200608143716621">0</span> Reached </p>
                    </li>
                    <li class="content-li-news swiper-slide swiper-slide-next" style="margin-right: 10px;">
                        <a href="" class="aimg230x141">
                            <img src="images/slide2.jpg" class="img230x141">
                        </a>
                        <a class="title-content-li" href="">CEO ô mai Hồng Lam: “Chúng tôi có thể chuyển giao giữa những thế hệ kỹ sư, cớ gì
                            chuyển giao cho con lại khó khăn được”
                        </a>
                        <p class="reached">+ <span class=" item-view" rel="20200608143716621">0</span> Reached </p>
                    </li>
                    <li class="content-li-news swiper-slide" style="margin-right: 10px;">
                        <a href="" class="aimg230x141">
                            <img src="images/slide2.jpg" class="img230x141">
                        </a>
                        <a class="title-content-li" href="">CEO ô mai Hồng Lam: “Chúng tôi có thể chuyển giao giữa những thế hệ kỹ sư, cớ gì
                            chuyển giao cho con lại khó khăn được”
                        </a>
                        <p class="reached">+ <span class=" item-view" rel="20200608143716621">0</span> Reached </p>
                    </li>
                    <li class="content-li-news swiper-slide" style="margin-right: 10px;">
                        <a href="" class="aimg230x141">
                            <img src="images/slide2.jpg" class="img230x141">
                        </a>
                        <a class="title-content-li" href="">CEO ô mai Hồng Lam: “Chúng tôi có thể chuyển giao giữa những thế hệ kỹ sư, cớ gì
                            chuyển giao cho con lại khó khăn được”
                        </a>
                        <p class="reached">+ <span class=" item-view" rel="20200608143716621">0</span> Reached </p>
                    </li>
                </ul>
                <span class="swiper-button-next"></span>
                <span class="swiper-button-prev swiper-button-disabled"></span>
                <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <span class="border_bottom w710"></span>
        <div class="cateboxhome">
            <div class="leftcatHome fl">
                <div class="clearfix">
                    <div class="box2cate" id="CategoryHomeHl1">
                        <div class="left chuyenmuc">
                            <h2 class="title_box">
                                <a href="">Thị trường chứng khoán</a>
                            </h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar " href="">
                                        <img src="images/tt1.jpg" alt=""></a>
                                    <h3>
                                        <a href="">Chủ tịch Nguyễn Bá Dương: Ai bỏ tiền
                                            mua Coteccons đều muốn Coteccons tốt hơn, sẽ mua thêm cổ phiếu vì "đây
                                            là việc tốt cho Công ty"</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">[Nhịp
                                        đập phái sinh phiên 30/06] Các hợp đồng tương lai “đồng loạt lao dốc” cuối
                                        phiên chiều</a>
                                </li>
                                <li class="small ">
                                    <a href="">[Nhịp
                                        đập phái sinh phiên 30/06] Các hợp đồng tương lai “đồng loạt lao dốc” cuối
                                        phiên chiều</a>
                                </li>
                                <li class="small ">
                                    <a href="">[Nhịp
                                        đập phái sinh phiên 30/06] Các hợp đồng tương lai “đồng loạt lao dốc” cuối
                                        phiên chiều</a>
                                </li>
                                <li class="small ">
                                    <a href="">[Nhịp
                                        đập phái sinh phiên 30/06] Các hợp đồng tương lai “đồng loạt lao dốc” cuối
                                        phiên chiều</a>
                                </li>
                            </ul>
                        </div>

                        <div class="right chuyenmuc">
                            <h2 class="title_box">
                                <a href="">Tài chính ngân hàng</a></h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar " href="">
                                        <img src="images/tc1.jpeg"></a>
                                    <h3>
                                        <a href="">2 cuộc họp cổ đông của Eximbank bất thành, cổ đông ra về trong
                                            thất vọng</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">Lãi suất tiếp tục giảm trên 2 thị trường</a></li>
                                <li class="small ">
                                    <a href="">Lãi suất tiếp tục giảm trên 2 thị trường</a></li>
                                <li class="small ">
                                    <a href="">Lãi suất tiếp tục giảm trên 2 thị trường</a></li>
                                <li class="small ">
                                    <a href="">Lãi suất tiếp tục giảm trên 2 thị trường</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="box2cate" id="CategoryHomeHl2">

                        <div class="left chuyenmuc">
                            <h2 class="title_box">
                                <a href="">Bất động sản</a>
                            </h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar " href="">
                                        <img src="images/tt1.jpg"></a>
                                    <h3><a href="">Cơ hội cuối sở hữu Charm City với ưu đãi hấp dẫn</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">4 xu hướng chính của thị trường bất động sản năm 2020</a></li>
                                <li class="small ">
                                    <a href="">4 xu hướng chính của thị trường bất động sản năm 2020</a></li>
                                <li class="small ">
                                    <a href="">4 xu hướng chính của thị trường bất động sản năm 2020</a></li>
                                <li class="small ">
                                    <a href="">4 xu hướng chính của thị trường bất động sản năm 2020</a></li>
                            </ul>
                        </div>

                        <div class="right chuyenmuc">
                            <h2 class="title_box">
                                <a href="">Doanh nghiệp</a></h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar" href="">
                                        <img src="images/tc1.jpeg"></a>
                                    <h3>
                                        <a href="">Tập đoàn của ông Đặng Văn Thành mở chuỗi xe bánh mì</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">Chủ tịch Quốc Cường Gia Lai - bà Nguyễn Thị Như Loan: Dự án Phước
                                        Kiển vẫn chưa
                                        biết đi về đâu, đây không phải lỗi của Công ty!</a></li>
                                <li class="small ">
                                    <a href="">Chủ tịch Quốc Cường Gia Lai - bà Nguyễn Thị Như Loan: Dự án Phước
                                        Kiển vẫn chưa
                                        biết đi về đâu, đây không phải lỗi của Công ty!</a></li>
                                <li class="small ">
                                    <a href="">Chủ tịch Quốc Cường Gia Lai - bà Nguyễn Thị Như Loan: Dự án Phước
                                        Kiển vẫn chưa
                                        biết đi về đâu, đây không phải lỗi của Công ty!</a></li>
                                <li class="small ">
                                    <a href="">Chủ tịch Quốc Cường Gia Lai - bà Nguyễn Thị Như Loan: Dự án Phước
                                        Kiển vẫn chưa
                                        biết đi về đâu, đây không phải lỗi của Công ty!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="box2cate" id="CategoryHomeHl3">

                        <div class="left chuyenmuc">
                            <h2 class="title_box">
                                <a href="">Tài chính quốc tế</a></h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar " href=""><img src="images/tt1.jpg"></a>
                                    <h3>
                                        <a href="">Rúng động vụ thế chấp 83 tấn vàng giả để vay 2,8 tỷ USD</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                            </ul>
                        </div>

                        <div class="right chuyenmuc">
                            <h2 class="title_box"><a href="">Vĩ mô</a></h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar " href=""><img src="images/tt1.jpg"></a>
                                    <h3>
                                        <a href="">Rúng động vụ thế chấp 83 tấn vàng giả để vay 2,8 tỷ USD</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="box2cate" id="CategoryHomeHl4">
                        <div class="left chuyenmuc">
                            <h2 class="title_box"><a href="">Sống</a></h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar " href=""><img src="images/tt1.jpg"></a>
                                    <h3>
                                        <a href="">Rúng động vụ thế chấp 83 tấn vàng giả để vay 2,8 tỷ USD</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                            </ul>
                        </div>
                        <div class="right chuyenmuc">
                            <h2 class="title_box"><a href="">Thời sự</a></h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar " href=""><img src="images/tt1.jpg"></a>
                                    <h3>
                                        <a href="">Rúng động vụ thế chấp 83 tấn vàng giả để vay 2,8 tỷ USD</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="box2cate" id="CategoryHomeHl5">
                        <div class="left chuyenmuc">
                            <h2 class="title_box"><a href="">Thị trường</a></h2>
                            <span class="borderbox"></span>
                            <ul>
                                <li class="big tnb1">
                                    <a class="avatar " href=""><img src="images/tt1.jpg"></a>
                                    <h3>
                                        <a href="">Rúng động vụ thế chấp 83 tấn vàng giả để vay 2,8 tỷ USD</a></h3>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                                <li class="small ">
                                    <a href="">BXH các thương hiệu đắt giá nhất thế giới: Amazon giữ vị trí đầu
                                        bảng; TikTok lần đầu lọt top, vượt qua những ông lớn như Adidas, KFC</a>
                                </li>
                            </ul>
                        </div>

                        <div class="right tinhaytoquocbox mgb20">
                            <h2 class="title_box">
                                <a target="_blank" rel="nofollow" href="">TIN HAY TOQUOC.VN</a></h2>
                            <span class="borderbox"></span>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="slimScroll" style="overflow: hidden; width: auto; height: 250px;">
                                    <ul class="tinhaytoquocboxul">
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>

                                    </ul>
                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 189.394px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </div>
                        <div class="right chinhphubox">
                            <h2 class="title_box">
                                <a href="">CỔNG THÔNG TIN ĐIỆN TỬ CHÍNH PHỦ</a>
                            </h2>
                            <span class="borderbox"></span>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="slimScroll" style="overflow: hidden; width: auto; height: 250px;">
                                    <ul class="tinhaytoquocboxul">
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>
                                        <li class="clearfix no_border">
                                            <a href=""><img src="images/cp1.jpg"></a>
                                            <p>
                                                <a href="">Châu Âu không còn tin vào Huawei: Thế lực nào hưởng lợi?</a>
                                            </p>
                                        </li>

                                    </ul>
                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 189.394px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </div>
                    </div>
                </div>
                <div class="box2cate" id="CategoryHomeHl6">
                    <div class="boxfinal" data-marked-zoneid="cf_home_b5">
                        <div class="right boxthongcao">
                            <h2 class="title_box">
                                <a href="">THÔNG CÁO BÁO CHÍ</a></h2>
                            <span class="borderbox"></span>
                            <ul class="boxthongcaoul">
                                <li class="item gr gr1">
                                    <h3>
                                        <a class="linktcbc" href="">
                                            <span class="icon_hot sprite_adm"></span>
                                            Khai trương thương hiệu thời trang Halita và chia sẻ của ca sĩ Cao Hồng</a>
                                    </h3>
                                    <a href="">
                                        <img class="imgtcbc" src="images/bc1.jpg"></a>
                                </li>
                                <li class="item gr gr1">
                                    <h3>
                                        <a class="linktcbc" href="">
                                            <span class="icon_news sprite_adm"></span>
                                            Khai trương thương hiệu thời trang Halita và chia sẻ của ca sĩ Cao Hồng</a>
                                    </h3>
                                    <a href="">
                                        <img class="imgtcbc" src="images/bc1.jpg"></a>
                                </li>
                                <li class="item gr gr1">
                                    <h3>
                                        <a class="linktcbc" href="">
                                            <span class="icon_hot sprite_adm"></span>
                                            Khai trương thương hiệu thời trang Halita và chia sẻ của ca sĩ Cao Hồng</a>
                                    </h3>
                                    <a href="">
                                        <img class="imgtcbc" src="images/bc1.jpg"></a>
                                </li>
                                <li class="item gr gr1">
                                    <h3>
                                        <a class="linktcbc" href="">
                                            <span class="icon_hot sprite_adm"></span>
                                            Khai trương thương hiệu thời trang Halita và chia sẻ của ca sĩ Cao Hồng</a>
                                    </h3>
                                    <a href="">
                                        <img class="imgtcbc" src="images/bc1.jpg"></a>
                                </li>
                                <li class="item gr gr1">
                                    <h3>
                                        <a class="linktcbc" href="">
                                            <span class="icon_hot sprite_adm"></span>
                                            Khai trương thương hiệu thời trang Halita và chia sẻ của ca sĩ Cao Hồng</a>
                                    </h3>
                                    <a href="">
                                        <img class="imgtcbc" src="images/bc1.jpg"></a>
                                </li>
                                <li class="item gr gr1">
                                    <h3>
                                        <a class="linktcbc" href="">
                                            <span class="icon_hot sprite_adm"></span>
                                            Khai trương thương hiệu thời trang Halita và chia sẻ của ca sĩ Cao Hồng</a>
                                    </h3>
                                    <a href="">
                                        <img class="imgtcbc" src="images/bc1.jpg"></a>
                                </li>
                                <li class="item gr gr1">
                                    <h3>
                                        <a class="linktcbc" href="">
                                            <span class="icon_hot sprite_adm"></span>
                                            Khai trương thương hiệu thời trang Halita và chia sẻ của ca sĩ Cao Hồng</a>
                                    </h3>
                                    <a href="">
                                        <img class="imgtcbc" src="images/bc1.jpg"></a>
                                </li>
                                <li class="item gr gr1">
                                    <h3>
                                        <a class="linktcbc" href="">
                                            <span class="icon_hot sprite_adm"></span>
                                            Khai trương thương hiệu thời trang Halita và chia sẻ của ca sĩ Cao Hồng</a>
                                    </h3>
                                    <a href="">
                                        <img class="imgtcbc" src="images/bc1.jpg"></a>
                                </li>
                            </ul>
                            <p class="ndttTCBC">NỘI DUNG ĐƯỢC TÀI TRỢ</p>
                        </div>
                        <div class="CauChuyenThuongHieu left">
                            <h2></h2>
                            <ul class="CauChuyenThuongHieuul">
                                <li class="top">
                                    <a class="imgThuongHieu" href="">
                                        <img src="images/ch1.jpg"></a>
                                    <div class="overBlack"></div>
                                    <a class="textCoHoi" href="">CƠ HỘI ĐẦU TƯ</a>
                                    <a class="textThuongHieu" href="">
                                        <span class="icon_hotThuongHieu sprite_adm "></span>
                                        Giải mã bí mật chuỗi cafe Baci khách hàng quay lại rất nhiều lần</a>
                                    <div class="textBottom"><p class="bottomimgSP fr borderAround">Sống</p>
                                        <p class="bottomimgSP fl ">+29,4k Reached</p></div>
                                </li>
                                <li>
                                    <a href="" class="textsmall"><span class="icon_news sprite_adm "></span>Bạn có
                                        biết
                                        Steve Jobs từng suýt thành CEO Google, từng tự tay tháo lắp iPhone cho
                                        'thái tử' Samsung xem...</a></li>
                                <li>
                                    <a href="" class="textsmall">Giới đại gia Hàn Quốc đổ xô mua xe sang sau dịch
                                        Covid-19</a></li>
                            </ul>
                            <div class="ndTaiTro">NỘI DUNG ĐƯỢC TÀI TRỢ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//echo $this->render("//element/slide");
//
//echo $this->render("//element/bottom-slide");
//
//echo $this->render("//element/single-page-middle");
//
//echo $this->render("//element/funnfact-home");
//
//echo $this->render("//element/service-home");
//
//echo $this->render("//element/product-home");
//
//echo $this->render("//element/customer");
//
//echo $this->render("//element/news-home");
//
//echo $this->render("//element/banner-before-footer");
//echo $this->render("//element/news-letter-home");


