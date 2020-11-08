<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php
if (!isset($_SESSION['username'])) {
    header('Location: /login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
       <?php foreach ($_SESSION['products'] as $productId =>$quantity) : ?>
            <li>
                <?= $catalog[$productId]['name']?> : <?= $quantity ?>
            </li>

        <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
