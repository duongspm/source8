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
                data-navcontainer=".control-khoahoc">
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
            <div class="control-khoahoc control-owl transition"></div>
        </div>
    </div>
</div>
<?php } ?>
<?php if (count($giaovien)) { ?>
<div class="giaovien pd">
    <div class="wrapper">
        <div class="heading">
            <span>Giáo viên tại <?=$setting['name'.$lang]?></span>
        </div>
        <div class="giaovien__list">
    
            <?php for ($i=0; $i < 4; $i++) { 
            
            if (!empty($giaovien[$i])) {?>
                <div class="giaovien__item ">
                    <div class="giaovien__img">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '250x250x1', 'upload' => UPLOAD_NEWS_L, 'image' => $giaovien[$i]['photo'], 'alt' => $giaovien[$i]['name' . $lang]]) ?>
                    </div>
                    <div class="giaovien__content">
                        <span class="giaovien__name">
                            <?=$giaovien[$i]['name'.$lang]?>
                        </span><span class="giaovien__desc">
                            <?=$giaovien[$i]['desc'.$lang]?>
                        </span>
                    </div>
                </div>

            <?php } }?>
    
        </div>
        <?php if(count($giaovien)>4){?>
        <div class="giaovien__xemthem">
            <a href="giao-vien" class="text-decoration-none buttond">Xem Thêm</a>
        </div>
        <?php } ?>

    </div>
</div>
<?php } ?>
<div class="hinhanh">
    <div class="wrapper pd">
        <div class="hinhanh__list">
            <?php if(!empty($thuvienanh)){?>
            <div class="slickAlbum">
                <?php foreach($thuvienanh as $v){?>
                    <div>
                        <div class="albumd">
                            <a class="albumd-image scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '335x232x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="blog">
    <div class="wrapper pd">
        <?php if(!empty($newsnb)){?>
        <div class="blog__list">
            <?php for ($i=0; $i < 3; $i++) { if(!empty($newsnb[$i])){?>

                <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--beach">
    
                               
                                               <h2 class="card-front__heading">
                                                   <?=$newsnb[$i]['name'.$lang]?>
                                               </h2>
                                               <p class="card-front__text-price cut_string2">
                                                <?=$newsnb[$i]['desc'.$lang]?>

                                               </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--beach">
                                        Xem thêm
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '335x230x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[$i]['photo'], 'alt' => $newsnb[$i]['name' . $lang]]) ?>

                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--beach">
                            <?=$newsnb[$i]['name'.$lang]?>

                            </h3>
                            <p class="inside-page__text cut_string3">
                            <?=$newsnb[$i]['desc'.$lang]?>
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--beach">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </section>
            <?php } }?>
        </div>
        <?php } ?>
    </div>
</div>
<div class="wrapper">
    <div class="pd">
        <div class="blog__list1">
            <?php if(!empty($newsnb)){?>
            <div class="slickBlog">
                <?php foreach ($newsnb as $v) { ?>
                    <div>
                        <div class="blog__item">
                            <div class="blog__img">
                                <?= $func->getImage(['class' => '', 'sizes' => '335x230x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </div>
                            <div class="blog__date">
                                <span><?= date("d", $v['date_created']) ?> tháng <?= date("m Y", $v['date_created']) ?></span>
                            </div>
                            <div class="blog__content">
                                <span class="blog__name">
                                    <?=$v['name' . $lang]?>
                                </span>
                                <span class="blog__desc">
                                    <?=$v['desc' . $lang]?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
                
            <?php } ?>
        </div>
    </div>
</div>
