<?php
class ErrorHandleController {
    /**
     * Simple 404 error handle
     * @param $message
     */
    public function error404($message)
    {
        require_once('application/views/error-handle/404.php');
    }
}