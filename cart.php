<?php require 'inc/head.php';

$cookies = [58, 46, 36, 32];

if (!isset($_SESSION['login']))
{
    header("Location:login.php");
} ?>

<section class="cookies container-fluid">
    <div class="row">

         <?php if (!empty($_SESSION['cart'][36])) {
            echo 'Quantité de Pecan Nuts cookies : ' . $_SESSION['cart'][36] . '<br>';
        }
        if (isset($_SESSION['cart'][46])) {
            echo 'Quantité de Chocolate chips cookies : ' . $_SESSION['cart'][46] . '<br>';
        }
        if (isset($_SESSION['cart'][58])) {
            echo 'Quantité de Chocolate cookies : ' . $_SESSION['cart'][58] . '<br>';
        }
        if (isset($_SESSION['cart'][32])) {
            echo 'Quantité de M&Ms cookies : ' . $_SESSION['cart'][32] . '<br>';
        }
        if (empty($_SESSION['cart'])) {
            echo 'Votre panier est vide!';
        }?>

    </div>
</section>;}

  require 'inc/foot.php';


/*AUTRE SOLUTION DE CREATION DE PANIER

<!--$panier = [
46 => "Pecan nuts",
36 => "Chocolate chips",
58 => "Chocolate cookie",
32 => "M&M's&copy; cookies"
];
?>
<section class="cookies container-fluid">
    <?php /*if (isset($_SESSION['cart']))
        foreach($_SESSION['cart'] as $id => $value){ ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <figcaption class="caption">
                        <h3><?= $panier[$id] ?></h3>
                        <p> <?= $value ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
</section>*/
