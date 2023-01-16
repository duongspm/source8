<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="footerr">
                <div class="footer-news">
                    <h2 class="footer-title">thông tin liên hệ</h2>
                    <div class="footer-info"><?= $func->decodeHtmlChars($footer['content' . $lang]) ?></div>
                    <div class="footer-social">
                        <?php if(!empty($socialfooter)){foreach($socialfooter as $v) {?>
                            <a href="<?=$v['link']?>" class="text-decoration-none social-item">
                                <?= $func->getImage(['sizes' => '27x27x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name' . $lang]]) ?>
                            </a>
                        <?php }}?>
                    </div>
                </div>
                <div class="footer-news">
                    <div class="footer__middle">
                        <div class="footer__logo peShiner">
                        <?= $func->getImage(['sizes' => '148x139x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
                        </div>
                    </div>
                </div>

                <div class="footer-news footer-fb">
                    <h2 class="footer-title">Fanpage facebook</h2>
                    <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-powered">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-copyright col-md-12">Copyright. Design by Nina.vn</div>
            </div>
        </div>
    </div>
    <?= $addons->set('footer-map', 'footer-map', 6); ?>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<?php if ($com != 'gio-hang') { ?>
    <a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
        <i class="fas fa-shopping-bag"></i>
        <span class="count-cart"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
    </a>
<?php } ?>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>