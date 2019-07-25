<?php

class siteView {
    public $viewName;
    public $viewData;
    public $layoutPath = 'views/layouts/mainLayout.php';
    public $viewPath = 'views/site/';
    function __construct() {  
    }

    function render($viewName, $viewData = []) {
        $this->viewName = $viewName;
        $this->viewData = $viewData;
        extract($this->viewData);
        include_once $this->layoutPath;
    }

    function body() {
        extract($this->viewData);
        include_once $this->viewPath.$this->viewName.'.php';
    }


function setlayoutPath($layoutPath){
$this->layoutPath = $layoutPath;
return $this;
}

function setviewPath($viewPath){
    $this->viewPath = $viewPath;
    return $this;
}

}

?>