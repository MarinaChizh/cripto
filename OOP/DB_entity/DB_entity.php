<?php
class DB_entity
{
    public $link;
    public $table_name;
    public $defold_select = [
        "SELECT" => "*",
        "FROM" => NULL,
        "WHERE" => 1,
        "GROUP BY" => NULL,
        "HAVING" => NULL,
        "ORDER BY" => NULL,
        "LIMIT" => NULL
    ];



    public $current_select = [];
    public $error_list =[];

    function __construct($link, $table_name)
    {
        $this->link = $link;
        $this->table_name = $table_name;
        $this->current_select["FROM"] = $this->table_name;
    }

    function get_sql()
    {

        $sql = "";
        foreach (array_merge($this->defold_select, $this->current_select) as $key => $value) {
            if (!empty($value)) {
                $sql .= "$key $value\n";
            }
        }
        return $sql;
    }

    function query()
    {
        $query_result = $this->execute_sql($this->get_sql());
        if ($query_result !==false){
            return $this->result_query_table($query_result);
        }
        else{
            return false;
        }
    }

    protected function execute_sql($sql){
        $query_result = $this->link->query($sql);
        $this->error_list[] = $this->link->error;
        return $query_result;
    }

    protected function result_query_table($query_result){
        $result = [];
        while ($row = $query_result->fetch_assoc()){
            $result[] = $row;
        }
        return $result;
    }

    function reset_defaut_select(){
        $this->current_select=[];
        $this->current_select['FROM'] = $this->table_name;
        return $this;
    }
    // Выводит только заданное условие $str. Напримет CITY = Витебск
    function add_where_condition($str)
    {
        $this->current_select['WHERE'] = !empty($this->current_select['WHERE']) ? $this->current_select['WHERE'] . "AND $str" : $str;
        return $this;
    }
    // Удаляет условия запроса
    function delete_where_condition()
    {
        unset($this->current_select['WHERE']);
        return $this;
    }
    // Сортирует по выбранному элементу
    function order_by_asc($str)
    {
        $this->current_select['ORDER BY'] = !empty($this->current_select['ORDER BY']) ? $this->current_select['ORDER BY'] . ", $str" : $str;
        return $this;
    }
    // Сортирует по убыванию
    function order_by_desc($str)
    {
        $this->current_select['ORDER BY'] = !empty($this->current_select['ORDER BY']) ? $this->current_select['ORDER BY'] . ", $str DESC" : $str . " DESC";
        return $this;
    }
    function reset_select()
    {
        $this->current_select['SELECT'] = null;
        return $this;
    }

    function add_select_field($str)
    {
        $this->current_select['SELECT'] =  !empty($this->current_select['SELECT']) ? $this->current_select['SELECT'] . ", $str" : $str;
        return $this;
    }

    function add_group_by($str){
        $this->current_select['GROUP BY'] =  !empty($this->current_select['GROUP BY']) ? $this->current_select['GROUP BY'] . ", $str" : $str;
        return $this;
    }

    function add_having_condition($str)
    {
        $this->current_select['HAVING'] = !empty($this->current_select['HAVING']) ? $this->current_select['HAVING'] . "$str" : $str;
        return $this;
    }

    function delete_having_condition()
    {
        unset($this->current_select['HAVING']);
        return $this;
    }
    
    function add_like($str)
    {
        $this->current_select['LIKE'] = !empty($this->current_select['LIKE']) ? $this->current_select['LIKE'] . "$str" : $str;
        return $this;
    }


}
