<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    /*
     *Returns request string
     */
    private function getURI()
    {
        if (!empty($_SERVER ['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }


    public function run()
    {
        // Получить строку запроса $uri
        $uri = $this->getURI();

             // Проверить наличие такого запроса в routes.php
            foreach ($this->routes as $uriPattern => $path) {

                    // Сравниваем $uri(строку запроса) и $uriPattern (данные, которые содержатся в роутах)
                  if (preg_match("~^$uriPattern~", $uri)) {

                      //Получить внутренний путь из внешнего согласно правилу:
                      $internalRoute = preg_replace("~^$uriPattern~", $path, $uri);

                        // Определить Contrroller, action, параметры

                        $segments = explode('/', $internalRoute);

                        $controllerName = array_shift($segments) . 'Controller';
                        $controllerName = ucfirst($controllerName);

                        $actionName = 'action' . ucfirst((array_shift($segments)));
                        $parameters=$segments;


                         // Подключить файл класса-контроллера

                         $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                         if (file_exists($controllerFile)) {
                         include_once($controllerFile);
                          }

                             // Создать объект, вызвать метод (action)
                        $controllerObject = new $controllerName;
                        $result = call_user_func_array([$controllerObject, $actionName], $parameters);
                        if ($result != null) {
                        break;
                        }
                    break;
                 }
            }
    }
}