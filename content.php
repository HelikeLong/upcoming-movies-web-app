<?php
    /**
     * Function to load and call Controllers, passing the action and, if applicable, parameters
     *
     * @param $controller
     * @param $action
     * @param $params
     */
    function load($controller, $action, $params) {
        try {
            $file = 'application/controllers/' . ucfirst($controller) . 'Controller.php';
            if (!file_exists ($file)) {
                throw new Exception("File ($file) Not Found");
            }
            require_once('application/controllers/' . ucfirst($controller) . 'Controller.php');

            $className = ucfirst($controller) . 'Controller';
            if (!class_exists($className)) {
                throw new Exception('Class Not Found');
            }
            $controller = new $className();

            if (!method_exists ($controller, $action)) {
                throw new Exception('Method Not Found');
            }
            require_once('application/models/MoviesModel.php');
            if ($params) {
                $controller->{$action}($params);
            } else {
                $controller->{$action}();
            }
        }
        catch (Exception $e) {
            require_once('application/controllers/ErrorHandleController.php');
            $errorHandleController = new ErrorHandleController();
            $errorHandleController->error404($e->getMessage());
        }
    }

    load($controller, $action, $params);
