<section class="flat-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <?php
                    $dataLast = array_pop($data);

                    foreach ($data as $value) {
                        ?>
                        <li class="trail-item">
                            <a href="<?= $value['link'] ?>"><?= $value['name'] ?></a>
                            <span><img src="/images/arrow-right.png" alt=""></span>
                        </li>
                    <?php } ?>
                    <li class="trail-end">
                        <a href="javascript:;" title=""><?php echo $dataLast['name'] ?></a>
                    </li>
                </ul><!-- /.breacrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-breadcrumb -->