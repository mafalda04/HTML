<?php

$horas = $_POST['hora'];

if($horas <= 40){
    echo $horas*16;
}else{
    $restantes = ($horas-40)*20;
    $extra = $horas - 40;
    $normal= ($horas-$extra)*16;
echo ($normal+$restantes);

}