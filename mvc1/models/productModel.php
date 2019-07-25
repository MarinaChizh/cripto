<?php
class productModel extends DB_entity
{
    function query()
    {
        $this->current_select['SELECT'] = 'categories.name AS categories_name, product.name AS product_name, product.description, product.price, product.count, product.img';
        $this->current_select['FROM'] = 'categories, product';
        $this->current_select['WHERE'] = 'categories.id = product.categories_id';
        return parent::query();
    }
}