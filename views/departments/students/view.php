<?php

use App\Models\Student;

$data = explode('-', $request['data']);

$students = Student::find()
    ->select(
        'student_id',
        'name'
    )
    ->where('branch', $request['branch'])
    ->where('year', $data[0])
    ->where('room', $data[1])
    ->orderBy('student_id', 'ASC')
    ->get();

$branch = explode('_', $request['branch']);
$branch = array_map('ucfirst', $branch);
$branch = implode(' ', $branch);

$site['social'] = true; // กำหนดให้เว็บไซต์ใช้งาน Open Graph ได้
$site['cdn'] = array(); // กำหนดให้เว็บไซต์ใช้งาน CDN ที่กำหนดได้
$site['name'] = 'นักเรียน/นักศึกษา - ' . config('site.name');
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
                    <span>รายชื่อนักเรียน/นักศึกษา สาขา <?= $branch ?> ปีการศึกษา <?= $data[0] ?> ห้อง <?= $data[1] ?></span>
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
                        echo '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">';
                        foreach ($students as $student) :
                        ?>
                            <div class="col">
                                <div class="card">
                                    <img class="card-img-top" src="https://rms.svc.ac.th/files/importpicstd/01/<?= $student['student_id'] ?>.jpg" width="200px">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?= $student['name'] ?></h5>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endforeach;
                        echo '</div>';
                    endif;
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?= views('layouts/footer') ?>

    <?= views('layouts/footer_cdn') ?>

</body>