<?php

use App\Models\Personnel;

$personnels = Personnel::find()
    ->select(
        'name',
        'position',
        'education',
        'image'
    )
    ->get();

$site['social'] = true; // กำหนดให้เว็บไซต์ใช้งาน Open Graph ได้
$site['cdn'] = array(); // กำหนดให้เว็บไซต์ใช้งาน CDN ที่กำหนดได้
$site['name'] = 'บุคลากร - ' . config('site.name');
$site['desc'] = config('site.description');
$site['bot'] = '';
?>

<?= views('layouts/head') ?>

<body>
    <?= views('layouts/header') ?>

    <main>
        <section class="personnels d-flex align-items-center">
            <div class="container">
                <div class="d-flex flex-column justify-content-center">
                    <h1>บุคลากร</h1>
                    <span>รายชื่อบุคลากร แผนกวิชาคอมพิวเตอร์ธุรกิจ</span>
                </div>
                <div class="personnels-info">
                    <?php
                    foreach ($personnels as $personnel) :
                    ?>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><?= $personnel['name'] ?></h3>
                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        <div class="personnels-img d-flex justify-content-center">
                                            <img src="<?= $personnel['image'] ?>" alt="<?= $personnel['name'] ?>" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h5>ประวัติการศึกษา</h5>
                                            <span><?= $personnel['education'] ?></span>
                                        </div>
                                        <div>
                                            <h5>ตำแหน่ง</h5>
                                            <span><?= $personnel['position'] ?></span>
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