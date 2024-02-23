<?php

use App\Models\Director;

$directors = Director::find()
    ->select(
        'name',
        'position',
        'education',
        'academic',
        'tel',
        'image'
    )
    ->get();

$site['social'] = true; // กำหนดให้เว็บไซต์ใช้งาน Open Graph ได้
$site['cdn'] = array(); // กำหนดให้เว็บไซต์ใช้งาน CDN ที่กำหนดได้
$site['name'] = 'ผู้บริหาร - ' . config('site.name');
$site['desc'] = config('site.description');
$site['bot'] = '';
?>

<?= views('layouts/head') ?>

<body>
    <?= views('layouts/header') ?>

    <main>
        <section class="directors d-flex align-items-center">
            <div class="container">
                <div class="d-flex flex-column justify-content-center">
                    <h1>ผู้บริหาร</h1>
                    <span>รายชื่อผู้บริหารสถานศึกษา</span>
                </div>
                <div class="directors-info">
                    <?php
                    foreach ($directors as $director) :
                    ?>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><?= $director['name'] ?> - <span><?= $director['position'] ?></span></h3>
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col">
                                        <div>
                                            <h5>ประวัติการศึกษา</h5>
                                            <span><?= $director['education'] ?></span>
                                        </div>
                                        <div>
                                            <h5>วิทยฐานะ</h5>
                                            <span><?= $director['academic'] ?></span>
                                        </div>
                                        <div>
                                            <h5>ตำแหน่ง</h5>
                                            <span><?= $director['position'] ?></span>
                                        </div>
                                        <div>
                                            <h5>เบอร์โทรศัพท์</h5>
                                            <span><?= $director['tel'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-none d-md-block">
                                            <div class="directors-img d-flex justify-content-end">
                                                <img src="<?= $director['image'] ?>" alt="<?= $director['name'] ?>" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="d-md-none d-block">
                                            <div class="directors-img d-flex justify-content-center">
                                                <img src="<?= $director['image'] ?>" alt="<?= $director['name'] ?>" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?= views('layouts/footer') ?>

    <?= views('layouts/footer_cdn') ?>

</body>