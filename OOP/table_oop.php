<?php
class Table{
    private $innerHTML="";
    public $text="";
    private $tableAttr;
    private $td="";

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


    function pair_tag($line)
{
    $this->innerHTML.="\n<$line>" . $this->pair_tag_colomn($column, $text) . "</$line>";
    return $this;
}

function pair_tag_colomn($column, $text)
{
  $this->innerHTML.="<$column>$text</$column>";
    
}

function printTable($cols, $rows) {
    
    for ($r = 0; $r < $rows; $r++) {
        echo '<tr>';
        for ($c = 0; $c < $cols; $c++) {
            echo '<td>TD</td>';
        }
        echo '</tr>';
    }
    
}
 




    function show_table(){
        return "<table " . $this->attr_array_to_string($this->tableAttr) . "> ".$this->printTable($cols, $rows)." </table>";
    }
    
}
$table=new Table(["border" =>"1","width"=>"100%", "cellpadding" =>"5"]);
// $table->pair_tag("tr");
// $table->pair_tag_colomn("td", 123);
// $table->pair_tag_colomn("td", 123);
$table->printTable(1,2);

echo $table->show_table();







?>