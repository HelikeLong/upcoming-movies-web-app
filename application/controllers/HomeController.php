<?php
    class HomeController {
        public function index()
        {
            $movies = MoviesModel::getUpComingMovies();

            require_once('application/views/home/index.php');
        }
    }