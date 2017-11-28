<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Search</h1>
        <p class="lead text-muted">Term: <?=$term?></p>
    </div>
</section>
<div class="container">
    <div class="row">
        <?php require_once('application/views/shared/movie-itens.php'); ?>
        <div class="pagination pagination-centered"></div>
    </div>
</div>

<?php require_once('application/views/shared/pagination.js.php'); ?>
