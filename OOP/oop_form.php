<?php
class Form
{
    public $form;

    function setForm($form)
    {
        $this->form = $form;
        return $this;
    }

    function setInput($input)
    {
        $this->input = $input;
        return $this;
    }

    function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    function setSubmit($submit)
    {
        $this->submit = $submit;
        return $this;
    }

    function show(){
        $str="";
        $str1="";
        if ($this->type != "" && $this->text != "" && $this->submit != ""){
            $str = " $this->type=\"$this->text\"";
            $str1 = " $this->type=\"$this->submit\"";
        } 
        
            return "<$this->form>\n<$this->input$str>\n<$this->input$str1>\n</$this->form>";
    }
}

$tag = new Form();

echo $tag->setForm('form')->setInput('input')->setType('type')->setText('text')->setSubmit('submit')->show();














?>