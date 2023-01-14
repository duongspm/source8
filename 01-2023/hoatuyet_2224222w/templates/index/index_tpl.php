<div class="about">
    <div class="wrapper">
        <div class="aboutt">
            <div class="about__left">
                <span class="about__name">
                    <?=$about['name'.$lang]?>
                </span>

                <span class="about__desc">
                    <?=$about['desc'.$lang]?>
                </span>
                <a href="gioi-thieu" class="text-decoration-none about__xemthem">
                    Xem tất cả
                </a>
            </div>
            <div class="about__right">
                <div class="about__right--bg">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '404x486x2', 'upload' => UPLOAD_NEWS_L, 'image' => $about['photo'], 'alt' => $about['name' . $lang]]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if (count($khoahoc)) { ?>
<div class="khoahoc">
    <div class="wrapper">
        <div class="heading">
            <span>Thông tin khóa học</span>
        </div>
        <div class="khoahoc__list">
            <div class="owl-page owl-carousel owl-theme"
                data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:1|margin:20,screen:767|items:2|margin:20,screen:991|items:3|margin:35,screen:1199|items:3|margin:35"
                data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                data-navcontainer=".control-brand">
                <?php foreach ($khoahoc as $v) { ?>
                <div>
                    <div class="khoahoc__item">
                        <div class="khoahoc__img">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '250x250x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <div class="khoahoc__content">
                            <span class="khoahoc__name">
                                <?=$v['name'.$lang]?>
                            </span><span class="khoahoc__desc">
                                <?=$v['desc'.$lang]?>
                            </span>
                        </div>
                        <div class="khoahoc__chitiet">
                            <a href="<?=$v[$sluglang]?>" class="text-decoration-none">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if (count($pronb)) { ?>
<div class="wrap-product wrap-content">
    <div class="title-main"><span>Sản phẩm nổi bật</span></div>
    <div class="paging-product"></div>
</div>
<?php } ?>

<?php if (count($splistnb)) {
    foreach ($splistnb as $vlist) { ?>
<div class="wrap-product wrap-content">
    <div class="title-main"><span><?= $vlist['name' . $lang] ?></span></div>
    <div class="paging-product-category paging-product-category-<?= $vlist['id'] ?>" data-list="<?= $vlist['id'] ?>">
    </div>
</div>
<?php }
} ?>

<div class="wrap-intro mb-5">
    <div class="wrap-content py-5">
        <div class="title-main"><span>Video clip - tin tức</span></div>
        <div class="row">
            <div class="col-6">
                <?php if (!empty($newsnb)) { ?>
                <div class="news-intro position-relative">
                    <span class="news-control position-absolute transition" id="up"><i
                            class="fas fa-chevron-up"></i></span>
                    <span class="news-control position-absolute transition" id="down"><i
                            class="fas fa-chevron-down"></i></span>
                    <div class="news-scroll position-relative">
                        <ul class="list-unstyled p-0 m-0">
                            <?php foreach ($newsnb as $v) { ?>
                            <li>
                                <div class="news-shadow">
                                    <div class="news-shadow-time position-relative text-capitalize text-center">
                                        <span class="d-block"><?= $func->makeDate($v['date_created']) ?></span>
                                        <span class="d-block"><?= date("d/m/Y", $v['date_created']) ?></span>
                                    </div>
                                    <div class="news-shadow-article position-relative">
                                        <a class="news-shadow-image rounded-circle scale-img"
                                            href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '90x90x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                        </a>
                                        <div class="news-shadow-info">
                                            <h3 class="news-shadow-name">
                                                <a class="text-decoration-none transition text-split"
                                                    href="<?= $v[$sluglang] ?>"
                                                    title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                            </h3>
                                            <div class="news-shadow-desc text-split">
                                                <?= $v['desc' . $lang] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-6">
                <div class="video-intro">
                    <?= $addons->set('video-fotorama', 'video-fotorama', 4); ?>
                    <?php /* $addons->set('video-select', 'video-select', 4); */ ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (count($partner)) { ?>
<div class="wrap-partner">
    <div class="wrap-content">
        <div class="owl-page owl-carousel owl-theme"
            data-items="screen:0|items:2|margin:10,screen:425|items:3|margin:10,screen:575|items:4|margin:10,screen:767|items:4|margin:10,screen:991|items:5|margin:10,screen:1199|items:7|margin:10"
            data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
            data-smartspeed="300" data-autoplayspeed="500" data-autoplaytimeout="3500" data-dots="0" data-nav="1"
            data-navcontainer=".control-partner">
            <?php foreach ($partner as $v) { ?>
            <div>
                <a class="partner" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '150x120x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                </a>
            </div>
            <?php } ?>
        </div>
        <div class="control-partner control-owl transition"></div>
    </div>
</div>
<?php } ?>