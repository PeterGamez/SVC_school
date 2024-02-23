<?php

$site['social'] = true; // กำหนดให้เว็บไซต์ใช้งาน Open Graph ได้
$site['cdn'] = array(); // กำหนดให้เว็บไซต์ใช้งาน CDN ที่กำหนดได้
$site['name'] = config('site.name');
$site['desc'] = config('site.description');
$site['bot'] = '';
?>

<?= views('layouts/head') ?>

<body>
    <?= views('layouts/header') ?>

    <main>
        <section class="home d-flex align-items-center" style="background: url(<?= config('site.cdn.path') . '/images/landing/home-bg.png' ?>) top center no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1>Welcome to <span><?= config('site.name') ?></span></h1>
                        <h2 class="text-line">456/3 ถ.ตลาดใหม่ ต.ตลาด อ.เมือง จ.สุราษฎร์ธานี 84000
                            โทรศัพท์ 0-7728-2001, 0-7728-4499
                            โทรสาร 0-7727-2631
                        </h2>
                    </div>
                    <div class="col-lg-6 home-img">
                        <img src="<?= resources('images/logo.png') ?>" alt="<?= config('site.name') ?>" class="img-fluid" width="400px">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?= views('layouts/footer') ?>

    <?= views('layouts/footer_cdn') ?>

</body>