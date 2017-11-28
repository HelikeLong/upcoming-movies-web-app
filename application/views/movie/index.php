<script src="https://use.fontawesome.com/c5ddaaccdf.js"></script>

<section class="jumbotron text-center">
    <a class="go-back" href="javascript:history.back()"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    <div class="container">
        <h1 class="jumbotron-heading">Movie Info</h1>
    </div>
</section>
<div class="container">
    <div class="">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="poster col-md-3">
                    <div class="poster-pic">
                        <div><img src="<?= (!empty($movie['poster_path']) ? API_IMAGES . 'w780/' . $movie['poster_path'] : (!empty($movie['backdrop_path']) ? API_IMAGES . 'w780/' . $movie['backdrop_path'] : 'http://placehold.it/342x513')) ?>" alt="" /></div>
                    </div>
                </div>
                <div class="details col-md-9">
                    <h3 class="movie-title"><?= $movie['title'] ?></h3>
                    <div class="rating">
                        <p class="highlight"><span><?=$movie['vote_average']?></span>/10</p>
                        <span class="review-no"><?=$movie['vote_count']?> reviews</span>
                    </div>
                    <p class="highlight">Release Date: <span><?= $movie['release_date'] ?></span></p>
                    <p class="genre"><strong>Genres:</strong>
                        <?php
                        $genre_list = '';
                        foreach ($movie['genres'] as $genre) {
                            $genre_list .= (!empty($genre_list) ? ', ' : '') . $genre['name'];
                        }
                        echo $genre_list;
                        ?>
                    </p>
                    <strong>Overview:</strong>
                    <p class="movie-description"><?= $movie['overview'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>