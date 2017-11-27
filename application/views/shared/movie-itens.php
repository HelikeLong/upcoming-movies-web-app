
<?php
    foreach($movies['results'] as $movie) {
        ?>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="http://placehold.it/300x350" alt="">
                <div class="caption">
                    <h4><?=$movie['title']?></h4>
                    <p><?=implode(',', $movie['genre_ids'])?></p>
                    <p><?=$movie['release_date']?></p>
                    <p><a href="<?=BASE_URL?>movie/index/<?=$movie['id']?>" class="btn btn-info btn-xs" role="button">See More</a>
                </div>
            </div>
        </div>
        <?php
    }
?>