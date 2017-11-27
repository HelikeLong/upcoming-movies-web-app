<?php
class SearchController {
    public function index()
    {
        $term = $_GET['term'];
        $movies = ['aaa', 'bbb', 'ccc', 'ddd', 'eee', 'fff', 'ggg', 'hhh', 'iii', 'jjj', 'lll', 'kkk', 'mmm', 'nnn', 'ooo', 'ppp', 'qqq', 'rrr', 'sss', 'ttt', 'uuu', 'vvv', 'www', 'xxx', 'yyy', 'zzz'];
        require_once('application/views/search/index.php');
    }
}