<!-- Jquery -->
<?php if (in_array('jquery', $site['cdn'])) { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<?php } ?>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>

<!-- Site style -->
<script src="<?= resources('js/script.js') ?>"></script>