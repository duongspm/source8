<div class="menu">
    <div class="wrap-content">
        <ul class="menu-main">
            <li><a class=" menu__iconhome" href="" title="<?= trangchu ?>">

                    <i class="fas fa-home"></i>

                </a></li>

            <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition  " href="gioi-thieu"
                    title="Về chúng tôi">Về chúng tôi</a></li>
            <li><a class="<?php if ($com == 'khoa-hoc') echo 'active'; ?> transition  " href="khoa-hoc"
                    title="Khóa học">Khóa học</a></li>
            <li><a class="<?php if ($com == 'tai-lieu') echo 'active'; ?> transition  " title="Tài liệu">Tài
                    liệu</a>
                <?php if (count($tailieu)) { ?>
                <ul>
                    <?php foreach ($tailieu as $klist => $vlist) {?>
                    <li>
                        <a class="has-child transition" target="_blank" title="<?= $vlist['name' . $lang] ?>"
                        href="<?=UPLOAD_FILE_L.$vlist['file_tailieu']?>" ><?= $vlist['name' . $lang] ?></a>

                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>

            </li>
            <li><a class="<?php if ($com == 'giao-vien') echo 'active'; ?> transition  " href="giao-vien"
                    title="Giáo viên">Giáo viên</a></li>

            <li><a class="<?php if ($com == 'thu-vien-anh') echo 'active'; ?> transition  " href="thu-vien-anh"
                    title="Hình ảnh - Video">Hình ảnh - Video</a></li>
            <li>
                <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition  " href="tin-tuc"
                    title="<?= tintuc ?>"><?= tintuc ?></a>

            </li>


            <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition  " href="lien-he"
                    title="<?= lienhe ?>"><?= lienhe ?></a></li>

            <div class="menu__search">
                <div class="search-res">
                    <p class="icon-search transition"><i class="fa fa-search"></i></p>
                    <div class="search-grid w-clear">
                        <input type="text" name="keyword-res" id="keyword-res" placeholder="<?= nhaptukhoatimkiem ?>"
                            onkeypress="doEnter(event,'keyword-res');" />
                        <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
                    </div>
                </div>
            </div>


        </ul>
    </div>
</div>