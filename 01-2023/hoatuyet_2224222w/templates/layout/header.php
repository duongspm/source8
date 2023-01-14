<div class="header">
    <div class="header-top">
        <div class="wrap-content">
            <p class="info-header"><i class="fas fa-envelope"></i>Email: <?= $optsetting['email'] ?></p>
            <p class="info-header"><i class="fas fa-phone-square-alt"></i>Hotline:
                <?= $func->formatPhone($optsetting['hotline']) ?></p>
            <ul class="social social-header list-unstyled p-0 m-0">
                <?php foreach ($socialheader as $k => $v) { ?>
                <li class="d-inline-block align-top mr-1">
                    <a href="<?= $v['link'] ?>" target="_blank">
                        <?= $func->getImage(['sizes' => '17x16x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap-content">
            <div class="header__logo">

                <a class="logo-header" href="">
                    <?= $func->getImage(['sizes' => '148x139x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
                </a>
            </div>
        </div>
    </div>
</div>