<?php

namespace Step\Core;

class php extends CrodEntity
{
    function get()
    {
       return include($this->file_name);
        // return json_encode(file_get_contents($this->file_name), true);
    }

    public function write_file($data_array)
    {
        return file_put_contents($this->file_name, '<?php return '.var_export($data_array, true). ';');
    }

    
}


?>