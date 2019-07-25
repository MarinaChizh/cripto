<?php

class tableProductController extends tableController
{

    public $table_name = 'product';
    function __construct($view)
    {
        parent::__construct($view);
        global $conf;
        // $this->table = new productModel(new mysqli($conf['host'], $conf['user'], $conf['password'], $conf['db']), $this->table_name);
        // $this->table_categories = new tableModel(new mysqli($conf['host'], $conf['user'], $conf['password'], $conf['db']), 'categories');
        $this->table = new TableProduct(new mysqli(Conf::mysql_host, Conf::mysql_user, Conf::mysql_password, Conf::mysql_db), $this->table_name);
        // $this->table = new TableProduct(new mysqli($conf['host'], $conf['user'], $conf['password'], $conf['db']), $this->table_name);
        $this->table->set_page_size(3);
        $this->view->setlayoutPath("views/layouts/mainLayout.php")->setviewPath('views/product/');


        
    }

    function actionShowTable()

    {
    $this->table->prepareQuery();
    parent::actionShowTable();
    }

    

    function actionShowAddForm() {
        $this->render("addForm", [
            'fields' => array_diff($this->table->get_fields(), ['id', 'time']),
            'categories' => $this->table_categories->query(),
            'targetURL' => '?t='.$this->classNameNP().'&a=addrow'
        ]);
    }

    function actionShowEditForm() {
        $this->render("editForm", [
            // 'comments' => $this->table->get_field_comments(),
            'row' => $this->table->get_row_by_id($_GET['id']),
            'categories' => $this->table->reset_default_select()->selectTable('categories')->query(),
            'targetURL' => '?t='. $this->classNameNP() .'&a=editrow&id=' . $_GET['id']
        ]);
    }
}
