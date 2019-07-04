<?php
echo '<form action="' .$targetURL. '" method="post">';
foreach ($data as $key => $value){
    echo "<label for=" .$key.">" .$comments[$key]."</label></br>";
    echo "<input type='text' name='$key' value='$value'></br>";
}
echo "</br><input type='submit' value='Отправить'></br>";
echo '</form>';