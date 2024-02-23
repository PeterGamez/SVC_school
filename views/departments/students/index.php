<?php

use App\Models\Student;

$students = Student::find()
    ->select(
        'year',
        'room'
    )
    ->where('branch', $request['branch'])
    ->groupBy('year', 'DESC')
    ->groupBy('room', 'ASC')
    ->orderBy('year', 'DESC')
    ->orderBy('room', 'ASC')
    ->get();

$year = array_unique(array_column($students, 'year'));

$branch = explode('_', $request['branch']);
$branch = array_map('ucfirst', $branch);
$branch = implode(' ', $branch);

$site['social'] = true; // กำหนดให้เว็บไซต์ใช้งาน Open Graph ได้
$site['cdn'] = array(); // กำหนดให้เว็บไซต์ใช้งาน CDN ที่กำหนดได้
$site['name'] = 'นักเรียน/นักศึกษา - ' .  config('site.name');
$site['desc'] = config('site.description');
$site['bot'] = '';
?>

<?= views('layouts/head') ?>

<body>
    <?= views('layouts/header') ?>

    <main>
        <section class="students d-flex align-items-center">
            <div class="container">
                <div class="d-flex flex-column justify-content-center">
                    <h1>นักเรียน/นักศึกษา</h1>
                    <span>รายชื่อนักเรียน/นักศึกษา สาขา <?= $branch ?></span>
                </div>
                <div class="students-info">
                    <?php
                    if (count($students) == 0) :
                    ?>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">ไม่พบข้อมูล</h3>
                            </div>
                        </div>
                        <?php
                    else :
                        foreach ($year as $y) :
                        ?>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">ปีการศึกษา <?= $y ?></h3>
                                    <?php
                                    foreach ($students as $student) :
                                        if ($student['year'] == $y) :
                                    ?>
                                            <div>
                                                <h5>ห้อง <?= $student['room'] ?></h5>
                                                <span><i class="bi bi-arrow-right-short"></i> <a href="<?= url('departments.' . $request['branch'] . '.students.' . $y . '-' . $student['room']) ?>">รายชื่อนักเรียน/นักศึกษา</a></span>
                                            </div>
                                    <?php
                                        endif;
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
        </section>
    </main>

    <?= views('layouts/footer') ?>

    <?= views('layouts/footer_cdn') ?>

</body>