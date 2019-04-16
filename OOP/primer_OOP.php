<?php
// class Numeric
// {
//     public $value;
//     function set($val)
//     {
//         $this->value = $val;
//     }
//     function add($val)
//     {
//         $this->value += $val;
//     }
//     function get()
//     {
//         return $this->value;
//     }
// }
// $num = new Numeric();
// $num->set(5);
// echo $num->get();
// $num->add(3);
// echo $num->get();
// echo $num->value;




// class Numeric
// {
//     protected $value;
//     public function set($val)
//     {
//         $this->value = $val;
//     }
//     public function add($val)
//     {
//         $this->value += $val;
//     }
//     public function get()
//     {
//         return $this->value;
//     }
// }
// $num = new Numeric();
// $num->set(5);
// echo $num->get();
// $num->add(3);
// echo $num->get();

// class Numeric
// {
//     protected $value;

//     public function __construct($val)
//     {
//         $this->value=$val;
//     }
//     public function set($val)
//     {
//         $this->value = $val;
//     }
//     public function add($val)
//     {
//         $this->value += $val;
//     }
//     public function get()
//     {
//         return $this->value;
//     }
// }
// $num = new Numeric(12);
// echo $num->get();
// $num->add(3);
// echo $num->get();




class List_html
{
    protected $array;
    public function __construct($data)
    {
        $this->set_data($data);
    } 
    
    public function set_data($data)
    {
        $this->array = $data;
    }
   public function str_li()
    {
        $str = "";
        foreach ($this->array as $val) {
            $str.="<li>$val</li>";
        }
        return $str;
    }
    
    public function get_num()
    {
        return"<ol type='1'>".$this->str_li()."</ol>";
    }

    public function get_low_row()
    {
        return"<ol type='i'>".$this->str_li()."</ol>";
    }
    
}

$arr1  = ["one", "two", "three"];
$obj = new List_html($arr1);
echo $obj->get_num();
$arr2 = ["один", "два" , "три"];
$obj -> set_data($arr2);
echo $obj->get_num();
echo $obj->get_low_row();

