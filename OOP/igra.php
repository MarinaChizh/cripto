<?php
class Igra{
    private $line=3;
    private $innerHTML="";

    
    public function table(){
        for ($l = 0; $l < $this->line; $l++) {
            $this->innerHTML.="<tr>\n";
            
            for ($c = 0; $c < $this->line; $c++) {
                $this->innerHTML.="\t<td></td>\n";
            }
            $this->innerHTML.="</tr>\n";
    }
    
    
}
}
$igra = new Igra;
echo $igra->table();















?>