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
        $query_result = $this->link->query($this->get_sql());
        $result = [];
        while ($row = $query_result->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
    // Выводит только заданное условие $str. Напримет CITY = Витебск
    function add_where_conditin($str)
    {
        $this->current_select['WHERE'] = !empty($this->current_select['WHERE']) ? $this->current_select['WHERE'] . "AND $str" : $str;
    }
    // Удаляет условия запроса
    function delete()
    {
        unset($this->current_select['WHERE']);
    }
    // Сортирует по выбранному элементу
    function order_by_asc($str)
    {
        $this->current_select['ORDER BY'] = !empty($this->current_select['ORDER BY']) ? $this->current_select['ORDER BY'] . ", $str" : $str;
    }
    // Сортирует по убыванию
    function order_by_desc($str)
    {
        $this->current_select['ORDER BY'] = !empty($this->current_select['ORDER BY']) ? $this->current_select['ORDER BY'] . ", $str DESC" : $str . " DESC";
    }
function reset_select(){
    $this->current_select['SELECT'] = null;
}

function add_select_field($str){
    $this->current_select['SELECT'] =  !empty($this->current_select['SELECT']) ? $this->current_select['SELECT'] . ", $str" : $str;
}

}
