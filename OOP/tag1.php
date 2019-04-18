<?php
class Tag
{
    public $name;

    function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    function setAttr($attrName, $attrValue)
    {
        $this->attrName = $attrName;
          $this->attrValue = $attrValue;
        return $this;
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
// $teg->setName('a');
// $teg->setText('Googl');
// $teg->setAttr('href', 'https://www.google.by/');
echo $teg->setName('a')->setText('Googl')->setAttr('href', 'https://www.google.by/')->show();
