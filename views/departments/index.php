<?php

$site['social'] = true; // กำหนดให้เว็บไซต์ใช้งาน Open Graph ได้
$site['cdn'] = array(); // กำหนดให้เว็บไซต์ใช้งาน CDN ที่กำหนดได้
$site['name'] = 'สาขาวิชาที่เปิดสอน - ' .  config('site.name');
$site['desc'] = config('site.description');
$site['bot'] = '';
?>

<?= views('layouts/head') ?>

<body>
    <?= views('layouts/header') ?>

    <main>
        <section class="departments d-flex align-items-center">
            <div class="container">
                <div class="d-flex flex-column justify-content-center">
                    <h1>สาขาวิชาที่เปิดสอน</h1>
                    <span>รายการสาขาวิชาที่เปิดสอนในแผนกคอมพิวเตอร์ธุรกิจ</span>
                </div>
                <div class="departments-info">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">หลักสูตรประกาศนียบัตรวิชาชีพ (ปวช.) หลักสูตร 3 ปี</h3>
                            <div>
                                <h4>สาขาวิชาคอมพิวเตอร์ธุรกิจ</h4>
                                <h5>สาขางานคอมพิวเตอร์ธุรกิจ</h5>
                                <span><i class="bi bi-arrow-right-short"></i> <a href="<?= url('departments.business_computer.students') ?>">รายชื่อนักเรียน</a></span>
                            </div>
                            <div>
                                <h4>สาขาวิชาเทคโนโลยีสารสนเทศ</h4>
                                <h5>สาขางานการโปรแกรมคอมพิวเตอร์เว็บและอุปกรณ์เคลื่อนที่</h5>
                                <span><i class="bi bi-arrow-right-short"></i> <a href="<?= url('departments.infomation_technology.students') ?>">รายชื่อนักเรียน</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">หลักสูตรประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) หลักสูตร 2 ปี</h3>
                            <div>
                                <h4>สาขาวิชาเทคโนโลยีธุรกิจดิจิทัล</h4>
                                <h5>สาขางานธุรกิจดิจิทัล</h5>
                                <span><i class="bi bi-arrow-right-short"></i> <a href="<?= url('departments.digital_business_technology.students') ?>">รายชื่อนักศึกษา</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?= views('layouts/footer') ?>

    <?= views('layouts/footer_cdn') ?>

</body>