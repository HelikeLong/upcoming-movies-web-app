
<?php
    if(count($movies['results'])) {
        foreach ($movies['results'] as $movie) {
            ?>
            <div class="col-xs-12 col-sm-6 col-md-3 movie-card">
                <div class="thumbnail">
                    <a href="<?= BASE_URL ?>movie/index/<?= $movie['id'] ?>" title="<?= $movie['title'] ?>"> <img
                                src="<?= (!empty($movie['poster_path']) ? API_IMAGES . 'w342/' . $movie['poster_path'] : (!empty($movie['backdrop_path']) ? API_IMAGES . 'w342/' . $movie['backdrop_path'] : 'http://placehold.it/342x513')) ?>"
                                alt="<?= $movie['title'] ?>"> </a>
                    <div class="caption">
                        <h4><a href="<?= BASE_URL ?>movie/index/<?= $movie['id'] ?>" title="<?= $movie['title'] ?>"><?= $movie['title'] ?></a></h4>
                        <p class="genre"><strong>Genres:</strong>
                            <?php
                            $genre_list = '';
                            foreach ($movie['genre_ids'] as $genre_id) {
                                $index = array_search($genre_id, array_map(function ($data) {
                                    return $data['id'];
                                }, $genres['genres']));
                                $genre_list .= (!empty($genre_list) ? ', ' : '') . $genres['genres'][$index]['name'];
                            }
                            echo $genre_list;
                            ?>
                        </p>
                        <p class="releasedate"><strong>Release Date:</strong> <span><?= $movie['release_date'] ?></span>
                        </p>
                        <p><a href="<?= BASE_URL ?>movie/index/<?= $movie['id'] ?>" class="btn btn-info col-md-12" role="button" title="See More">See More</a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        ?>
            <div class="col-md-12">
                No Movie found.
            </div>
        <?php
    }
?>