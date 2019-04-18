<?php
class Tag
{
     public $name;

     function setName($name){
        return $this->name = $name;
     }

     function setText($text){
        return $this->text = $text;
     }

     function setAttr($attrName, $attrValue){
          $this->attrName = $attrName;
          $this->attrValue = $attrValue;
     }
     
    
     function show(){
         $str="";
         if ($this->attrName != "" && $this->attrValue != ""){
             $str = " $this->attrName=\"$this->attrValue\"";
         } 
         
             return "<$this->name$str>$this->text</$this->name>";
         
         
        
     }
}

$teg = new Tag();
$teg->setName('a');
$teg->setText('Googl');
$teg->setAttr('href', 'https://www.google.by/');
echo $teg->show();

?>
123