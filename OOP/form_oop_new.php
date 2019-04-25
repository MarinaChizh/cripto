<?php
class Form
{
    protected $action;
    protected $method;
    protected $input = "";
    protected $textarea;

    public function __construct($action, $method)
    {
        $this->setAction($action);
        $this->setMethod($method);
    }
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }
    public function setInput($type, $name = "", $value = "")
    {
        $strName = "";

        if ($name != '') {
            $strName = ' name="' . $name . '"';
        }

        $strValue = "";

        if ($value != '') {
            $strValue = ' value="' . $value . '"';
        }

        $this->input .= "\t<input type='$type'$strName $strValue>\n";

        // $this->input .= "\t<input type=\"$type\"" . (($name != '') ? ' name="' . $name . '"' : '') . (($value != '') ? ' value="' . $value . '"' : '') .  ">\n";
        return $this;
    }
    public function addTag($name, $attr = "", $text = "")
    {
        $this->input .= "\t<$name  $attr>$text</$name>\n";
        return $this;
    }

    public function addTextarea($attr = "", $text = "")
    {
        $this->addTag("textarea", $attr, $text);
        return $this;
    }

    function show()
    {
        return "<form action =\"$this->action\" method=\"$this->method\">\n$this->input\n</form>";
    }
}
$form = new Form('action.php', 'POST');
echo $form->setInput('text', 'login')
    ->setInput('password', 'password')
    ->addTextarea('cols="100"')
    ->setInput('submit', '', 'Отправить')
    ->setInput('button', '', 'Кнопка')
    ->show();



// $form->setInput('password', 'password');
// $form->addTextarea('cols="100"');
// $form->setInput('submit', '', 'Отправить');
// $form->setInput('button', '', 'Кнопка');
// echo $form->show();
