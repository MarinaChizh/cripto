<?php
class siteController extends Controller
{
    function __construct($view)
    {
        parent:: __construct($view);

        $this->table = new tableModel(new mysqli('localhost', 'root', '', 'mydb'), 'db_entity');
        $this->table->set_page_size(3);
    }

    function actionShowTable(){
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        // print_r ($this->table->set_page($page)->query());
        
        
        $this->render("show", [
            'title' => "show",
            'table' => $this->table->set_page($page)->query()
            // ,
            // 'PageCount' => $this->table->PageCount(),
            // 'currentPage' => $page,
            // 'currentURL' => '?t=' . $this->classNameNP() . '&a=' . $this->currentActionNameNP
        ]);
    }
function actionDelRow(){
    $this->table->del($_GET['id']);
    $this->redirect('?t=' . $this->classNameNP() . '&a=ShowTable');
}

function actionAddRow(){
    $this->table->add($_POST);
    $this->redirect('?t=' . $this->classNameNP() . '&a=ShowTable');
}

function actionShowAddForm(){
    $this->render("addform", [
        'fields' => array_diff($this->table->get_fieldes(), ['id']),
        'targettURL' => '?t=' . $this->classNameNP() . '&a=addrow'
    ]);

    
}










}
?>