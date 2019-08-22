<?php

namespace Step\Core;

class json implements jsonInterface
{
    protected $file_name;

    function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    public function del($id)
    {
        $new_array = $this->get();
        unset($new_array[$id]);
        $this->write_file($new_array);
    }

    public function edit($id, $array)
    {
        $new_array = $this->get();
        $new_array[$id] = $array;
        $this->write_file($new_array);
    }

    public function add($data_array)
    {
        $new_array = $this->get();
        $new_array[] = $data_array;
        $this->write_file($new_array);

    }

    function get()
    {
        return json_decode(file_get_contents($this->file_name), true);
    }

    private function write_file($data_array)
    {
        return file_put_contents($this->file_name, json_encode($data_array, JSON_FORCE_OBJECT));
    }
}


?>