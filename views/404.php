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
        <section class="error d-flex align-items-center">
            <div class="container">
                <div class="text-center">
                    <h1>404</h1>
                    <h2>Page Not Found</h2>
                </div>
            </div>
        </section>
    </main>

    <?= views('layouts/footer') ?>

    <?= views('layouts/footer_cdn') ?>

</body>