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
    <div class="container">
        <h4>Crosstrainer 1</h4>
        Testing
        <hr>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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
