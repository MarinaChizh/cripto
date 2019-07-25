<?php
class TableProduct extends DB_entity
{
    public function prepareQuery(){
        $this->current_select['SELECT'] = 'product.id,
        product.name AS product_name,
        product.description,
        product.price, 
        product.count,
        categories.name AS categories_name';
        $this->current_select['FROM'] = 'product,
        categories';

        $this->current_select['WHERE'] = 'categories_id = categories.id';
        return parent::query();

    }

    public function selectTable($table_name)
    {
        $this->current_select['FROM'] = $this->table_name = $table_name;
        return $this;
    }
}
