<?php
    namespace Step\Core;

    interface JsonInterface
    {


        public function get();

        public function del($id);

        public function edit($id, $array);

        public function add($array);
        
    }

    
?>