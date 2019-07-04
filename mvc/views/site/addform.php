<?php
// print_r($targetURL);

echo '<form action="' .$targetURL. '" method="post">';
foreach ($fields as $key => $value){
    echo "<label for=".$key.">".$value."</label></br>";
    echo "<input type='text' id=".$key." name=".$value."></br>";
}
echo "</br><input type='submit' value='Отправить'></br>";
echo '</form>';