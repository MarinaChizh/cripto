<?php

class Controller
{

    public $view;

    function __construct($view)
    {
        $this->view = $view;
    }

    function render($viewName, $veiwData = [])
    {
        $this->view->render($viewName, $veiwData);
    }

    function redirect($location)
    {
        header("Location " . $location);
    }

    function classNameNP()
    {
        return strtolower(preg_replace('/Controller$/', '', get_class($this)));
    }

    function currentActionNameNP()
    {
        return strtolower(preg_replace('/^action/', '', debug_backtrace()[1]['function']));
    }
}
