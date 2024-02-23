<footer id="footer" class="footer">
    <div class="footer-top" style="background: white url(<?= config('site.cdn.path') . '/images/landing/footer-bg.png' ?>) no-repeat right top;">
        <div class="container">
            <div class="row gy-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 footer-info">
                    <a href="/" class="logo d-flex align-items-center">
                        <img src="<?= config('site.logo.128') ?>" alt="<?= config('site.name') ?>">
                        <span><?= config('site.name') ?></span>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-5 col-lg-3 footer-links">
                    <h4>เมนูลัด</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="<?= url('/') ?>">หน้าแรก</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="<?= url('directors') ?>">ผู้บริหาร</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="<?= url('personnels') ?>">บุคลากร</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="<?= url('departments') ?>">สาขาวิชาที่เปิดสอน</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            Copyright &copy; 2024 <a href="/">วิทยาลัยอาชีวศึกษาสุราษฎร์ธานี</a>. All rights reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>