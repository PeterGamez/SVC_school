<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="<?= config('site.logo.128') ?>" alt="<?= config('site.name') ?>">
            <span class="d-none d-sm-block">วิทยาลัยอาชีวศึกษาสุราษฎร์ธานี</span>
            <span class="d-block d-sm-none">วอศ. สุราษฎร์ธานี</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="<?= url('/') ?>">หน้าแรก</a></li>
                <li><a class="nav-link" href="<?= url('directors') ?>">ผู้บริหาร</a></li>
                <li><a class="nav-link" href="<?= url('personnels') ?>">บุคลากร</a></li>
                <li><a class="nav-link" href="<?= url('departments') ?>">สาขาวิชาที่เปิดสอน</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>