<?php

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100; $i--) { // Mostra os ultimos 100 anos

    echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";

?>
