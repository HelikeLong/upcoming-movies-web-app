<?php
    class HomeController {
        public function index()
        {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $movies = MoviesModel::getUpComingMovies($page);
            $genres = MoviesModel::getGenreList();

            $itemCount = $movies['total_results'];
            $paginationPath = BASE_URL.'?page=';

            require_once('application/views/home/index.php');
        }
    }