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

    function actionShowTable() {
    //     $this->table->prepareQuery();
    // parent::actionShowTable();
        $page = isset($_GET['page']) ? $_GET['page'] : 0;
        $this->render("show", [
            'title' => "show",
            'table' => $this->table->set_table_name('product')->productQueryPrepare()->set_page($page)->query(),
            'targetDelURL' => '?t='.$this->classNameNP().'&a=delrow',
            'targetEditURL' => '?t='.$this->classNameNP().'&a=showeditForm',
            'targetAddURL' => '?t='.$this->classNameNP().'&a=showAddForm',
            'currentURL' => '?t='.$this->classNameNP().'&a='.$this->currentActionNameNP(),
            'currentPage' => $page,
            'pageCount' => $this->table->set_table_name('product')->page_count(),
            'product_column_names' => $this->table->set_table_name('product')->get_fields(),
            'fields_comments_product' => $this->table->get_field_comments()
            
        ]);
    }












    // function actionShowTable()

    // {
    // $this->table->prepareQuery();
    // parent::actionShowTable();
    // }

    

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
