<?php

class tableCategoriesController extends tableController {

    public $table_name = 'categories';

    function __construct($view) {
        parent::__construct($view);

        $this->view->setlayoutPath("views/layouts/mainLayout.php")->setviewPath('views/categories/');

}
}

?>