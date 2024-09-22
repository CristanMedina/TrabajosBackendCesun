<?php
/* CREE UNA VARIABLE EN DONDE CREARA UN NUMERO ALEATORIO ENTRE 1 Y 100 */
$randNum = rand(1, 100);
/* UNA FUNCION IF EN DONDE CHECARA SI EL NUMERO GENERADO ES MAYOR, MENOR O IGUAL A 50 */
if( $randNum < 50) {
    echo $randNum, "\nEs menor a 50";
} else if ( $randNum > 50 ) {
    echo $randNum, "\nEs mayor a 50";
} else if ($randNum = 50) {
    echo "Salio exactamente!!\n", $randNum;
}
