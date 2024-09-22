<?php
/* CREE EL NUMERO DADO COMO UNA VARIABLE GLOBAL */
$num = 5;
/* CREE UN LOOP FOR, EN DONDE MULTIPLICARA EL NUMERO CON EL VALOR DE I,
    HASTA QUE LLEGUE A 10 */
for ( $i = 0; $i <= 10; $i++ ){
    $res = $num * $i;
    echo "$num * $i = $res <br>";
}
