<?php
class MovieController {
    public function index($params)
    {
        $movie = MoviesModel::getMovie($params[0]);

        require_once('application/views/movie/index.php');
    }
}