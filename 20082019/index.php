<?php
    include 'autoload.php';

    use Step\Core\php;
      
    $obj = new php("123.php");
    // $obj->read_file();
    // $obj->del(2);

    // print_r($obj->get());

    // $obj->write_file([1,2,3]);
    $obj->add([44]);
    $obj->del(0);
    $obj->edit(3,6):
?>