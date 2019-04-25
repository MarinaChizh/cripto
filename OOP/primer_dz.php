<?php
class Form
{
    public function __construct($attr)
    {
        $this->open($attr);
    }

    private function getAttribute($attr)
    {

        $str = "";
        foreach ($attr as $key => $item) {
            $str .= $key . "=" . $item;
        }

        return $str;
    }

    public function input($attr)
    {
        $attr = $this->getAttribute($attr);
        return "<input $attr><br>\n<br>";
    }

    public function password($attr)
    {

        $attr = $this->getAttribute($attr);
        return "<input $attr>\n<br><br>";
    }

    public function textarea($attr)
    {
        $attr = $this->getAttribute($attr);
        return '<textarea ' . $attr . '></textarea><br><br>';
    }

    public function submit($attr = [])
    {

        $attr = $this->getAttribute($attr);
        return "<input type='submit'" . $attr . ">";
    }

    public function open($attr)
    {

        $attr = $this->getAttribute($attr);
        return "<form" . $attr . ">\n<br>";
    }

    public function close()
    {

        return "</form>";
    }
}


$form = new Form();
 echo $form->open(['action' => '', 'method' => 'post']);
echo $form->input(['type' => 'text', 'name' => 'login']);
echo $form->password(['type' => 'password', 'name' => 'pass']);
echo $form->textarea(['name' => 'text', 'cols' => 100, 'rows' => 5]);
echo $form->submit();
echo $form->close();
