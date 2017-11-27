<?php
    class MoviesModel {
        public static function getUpComingMovies() {
            $content = trim(file_get_contents("https://api.themoviedb.org/3/movie/upcoming?api_key=".API_TOKEN."&language=en-US&page=1"));
            $decoded = json_decode($content, true);

            if(is_array($decoded)) {
                return $decoded;
            } else {

            }
        }
    }