<?php
class Table{
    private $innerHTML="";
    public $text="";
    private $tableAttr;
     public $arr=[];
    //  public $arr1=[];
    

    public function __construct($attr)
    {
        $this->tableAttr = $attr;
    }

    public function attr_array_to_string($attr)
    {
        $str = "";
        foreach ($attr as $k => $v) {
            $str .= "\t$k = \"$v\"";
        }
        return $str;
    }

    


function printTable($line, $column) {
    
    for ($l = 0; $l < $line; $l++) {
        $this->innerHTML.="<tr>\n";
        
        for ($c = 0; $c < $column; $c++) {
            $this->innerHTML.="\t<td>$l</td>\n";
        }
        $this->innerHTML.="</tr>\n";
        // $this->arr[]=$l;
        // $this->arr1[]=$c;
    }
}



    function show_table(){
        return "<table " . $this->attr_array_to_string($this->tableAttr) . ">\n $this->innerHTML </table>\n";
    }


    
    // public function sort1(){
    //     arsort($this->arr);
    // }


    // public function del($value){
    //     unset($this->arr1[$value]);
    // }
    
    
}
$table=new Table(["border" =>"1","width"=>"100%", "cellpadding" =>"5"]);

$table->printTable(5,2);
// $table->sort1();
// $table->del(3);
echo $table->show_table();

// var_dump ($table->arr);
// var_dump ($table->arr);








?>