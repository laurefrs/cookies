<?php require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">

        <?php
        if (!empty($_SESSION['cart'][46])) {
            echo 'Quantité de Pecan Nuts cookies : ' . $_SESSION['cart'][46] . '<br>';
        }
        if (isset($_SESSION['cart'][49])) {
            echo 'Quantité de Chocolate chips cookies : ' . $_SESSION['cart'][49] . '<br>';
        }
        if (isset($_SESSION['cart'][58])) {
            echo 'Quantité de Chocolate cookies : ' . $_SESSION['cart'][58] . '<br>';
        }
        if (isset($_SESSION['cart'][32])) {
            echo 'Quantité de M&Ms cookies : ' . $_SESSION['cart'][32] . '<br>';
        }
        ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
