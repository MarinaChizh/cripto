<?php
class siteController extends Controller
{
    function __construct($view)
    {
        parent::__construct($view);

        $this->table = new tableModel(new mysqli('localhost', 'root', '', 'mydb'), 'db_entity');
        $this->table->set_page_size(4);
    }

    function actionShowTable()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        // print_r ($this->table->set_page($page)->query());


        $this->render("show", [
            'title' => "show",
            // 'table' => $this->table->set_page($page)->query()
            'table' => $this->table->query(),
            'targetDelURL' => '?t=' . $this->classNameNP() . '&a=delrow',
            'targetEditURL' => '?t=' . $this->classNameNP() . '&a=editform'
            // ,
            // 'PageCount' => $this->table->PageCount(),
            // 'currentPage' => $page,
            // 'currentURL' => '?t=' . $this->classNameNP() . '&a=' . $this->currentActionNameNP
        ]);
    }
    function actionDelRow()
    {
        $this->table->delete($_GET['id']);
        $this->redirect('?t=' . $this->classNameNP() . '&a=ShowTable');
    }

    function actionAddRow()
    {
        $this->table->add($_POST);
        // echo '?t=' . $this->classNameNP() . '&a=ShowTable';
        $this->redirect('?t=' . $this->classNameNP() . '&a=ShowTable');
    }

    function actionShowAddForm()
    {
        $this->render("addform", [
            'fields' => array_diff($this->table->get_fields(), ['id']),
            'targetURL' => '?t=' . $this->classNameNP() . '&a=addrow'
        ]);
    }

    function actionEditRow()
    {
        $this->table->update($_GET['id'], $_POST);
        $this->redirect('?t=' . $this->classNameNP() . '&a=ShowTable');
    }

    function actionEditForm()
    {
        $this->render("editform", [
            'data' => array_diff($this->table->get_row_by_id($_GET['id']), ['id']),
            'comments' => array_diff($this->table->get_comments(), ['id']),
            'targetURL' => '?t=' . $this->classNameNP() . '&a=editrow&id=' . $_GET['id']
        ]);
    }
}
