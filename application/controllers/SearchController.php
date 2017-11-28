<?php
    class SearchController {
        public function index()
        {
            $term = $_GET['term'];
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $movies = MoviesModel::getMovieByName($term, $page);
            $genres = MoviesModel::getGenreList();

            $itemCount = $movies['total_results'];
            $paginationPath = BASE_URL.'search?term='.$term.'&page=';

            require_once('application/views/search/index.php');
        }
    }