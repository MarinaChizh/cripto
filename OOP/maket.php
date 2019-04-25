<?
class Form
{
    protected $method;
    protected $action;
    protected $formAttr;
    protected $innerHTML = "";

    public function __construct($attr)
    {
        $this->formAttr = $attr;
    }

    public function attr_array_to_string($attr)
    {
        $str = "";
        foreach ($attr as $k => $v) {
            $str .= "$k = \"$v\"";
        }
        return $str;
    }

    public function add_input($attr)
    {
        $this->innerHTML .= "\t<input " . $this->attr_array_to_string($attr) . ">\n";
        return $this;
    }

    protected function add_tag($name, $attr, $text)
    {
        $this->innerHTML .= "\t<$name " . $this->attr_array_to_string($attr) . ">$text</$name>\n";
        return $this;
    }

    public function add_textarea($attr, $text)
    {
        $this->add_tag("textarea", $attr, $text);
        return $this;
    }

    public function add_button($attr, $text)
    {
        $this->add_tag("button", $attr, $text);
        return $this;
    }
    public function add_label($attr, $text)
    {
        $this->add_tag("label", $attr, $text);
        return $this;
    }

    public function add_br()
    {
        $this->innerHTML .= "\t<br>\n";
        return $this;
    }

    public function show_form()
    {
        return "<form  " . $this->attr_array_to_string($this->formAttr) . ">$this->innerHTML</form>\n";
    }
}