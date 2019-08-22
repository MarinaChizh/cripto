<?php
    include 'autoload.php';

    use Step\Core\json;
      
    $obj = new json('123.json');
    // $obj->read_file();
    $obj->del(2);

    print_r($obj->get());
?>