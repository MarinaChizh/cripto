<?php

class joke2 extends DB_entity
{

    function get_random_field()
    {
        $array = (array_column($this->reset_defaut_select()->add_select_field('id')->query(), 'id'));
        return $this->reset_defaut_select()->add_where_condition("id = ".$array[array_rand($array)])->add_select_field('joke')->query()[0]['joke'];
    }


    
}
?>