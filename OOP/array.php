<?php
class Arrayy{
protected $array = [];
    
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function show()
    {
        $str = "";
        foreach ($this->array as $value) {
            $str .= "<li>$value</li>";
        }
        return $str;
    }
    
    public function sort1(){
        sort($this->array);
    }

    public function del($value){
        unset($this->array[$value]);
    }
public function add($new){
    
}

}
$arr=new Arrayy(array(1,1,2,4,5,7,8,9,1,0,11));
$arr->sort1();
echo $arr->show();
$arr->del(3);
echo $arr->show();

