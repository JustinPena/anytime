<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/crosstrainers">Crosstrainer</a></li>
            <li class="breadcrumb-item"><a href="/crosstrainer1">Crosstrainer 1</a></li>
        </ol>
    </nav>
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                        <img class="product-img img-responsive center-block" src='/img/categories/crosstrainer/cr1.jpg'/>
                    <div class="card-title mb-3">Crosstrainer 1</div>
                </div>

            </div>
        </div>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
    </div>

</body>
</html>
