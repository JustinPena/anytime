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
        </ol>
    </nav>
    <div class="row gy-3 ">
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/crosstrainer1">
                        <img class="product-img img-responsive center-block" src='/img/categories/crosstrainer/cr1.jpg'/>
                    </a>
                    <div class="card-title mb-3">Crosstrainer 1</div>
                </div>

            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/crosstrainer/2">
                        <img class="product-img img-responsive center-block" src='/img/categories/crosstrainer/cr2.jpg'/>
                    </a>
                    <div class="card-title mb-3">Crosstrainer 2</div>
                </div>

            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/crosstrainer/3">
                        <img class="product-img img-responsive center-block" src='/img/categories/crosstrainer/cr3.jpg'/>
                    </a>
                    <div class="card-title mb-3">Crosstrainer 3</div>
                </div>

            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/crosstrainer/4">
                        <img class="product-img img-responsive center-block" src='/img/categories/crosstrainer/cr4.jpg'/>
                    </a>
                    <div class="card-title mb-3">Crosstrainer 4</div>
                </div>

            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/crosstrainer/5">
                        <img class="product-img img-responsive center-block" src='/img/categories/crosstrainer/cr5.jpg'/>
                    </a>
                    <div class="card-title mb-3">Crosstrainer 5</div>
                </div>

            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <a href="/crosstrainer/6">
                        <img class="product-img img-responsive center-block" src='/img/categories/crosstrainer/cr6.jpg'/>
                    </a>
                    <div class="card-title mb-3">Crosstrainer 6</div>
                </div>

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
