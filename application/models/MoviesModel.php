<?php
    class MoviesModel {
        /**
         * Get a list of upcoming movies, with pagination
         * @param int $page
         * @return array
         */
        public static function getUpComingMovies($page = 1) {
            $json = trim(file_get_contents("https://api.themoviedb.org/3/movie/upcoming?api_key=".API_TOKEN."&language=en-US&page=".$page));
            $movies = json_decode($json, true);

            return $movies;
        }

        /**
         * Get a List of movie genres
         * @return array
         */
        public static function getGenreList() {
            $json = trim(file_get_contents("https://api.themoviedb.org/3/genre/movie/list?api_key=".API_TOKEN."&language=en-US&region=BR"));
            $genres = json_decode($json, true);

            return $genres;
        }

        /**
         * Search movies by name
         * @param string $term
         * @param int $page
         * @return array
         */
        public static function getMovieByName($term, $page) {
            $json = trim(file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=".API_TOKEN."&language=en-US&query=".$term."&page=".$page."&include_adult=false&region=BR"));
            $movies = json_decode($json, true);

            return $movies;
        }

        /**
         * Gets a Movie info
         * @param int $id
         * @return array
         */
        public static function getMovie($id) {
            $json = trim(file_get_contents("https://api.themoviedb.org/3/movie/".$id."?api_key=".API_TOKEN."&language=en-US"));
            $movie = json_decode($json, true);

            return $movie;
        }
    }
