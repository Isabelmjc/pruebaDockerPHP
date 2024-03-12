<?php

$num=$_POST['numero'];
$numero=$num;

// Número perfecto: todo número natural que es igual a la suma de sus divisores propios 
//(es decir, todos sus divisores excepto el propio número). 

$acunuper=0;
$fin1=$num-1;

for($i=$fin1; $i>0; $i--){
    $resto1=$num%$i;
    if($resto1==0){
        echo("Divisores<br/>");
        echo("$i <br/>");
        $acunuper=$acunuper+$i;
    }
}
echo("La suma de los divisores propios vale: ".$acunuper."<br/>");
if($acunuper==$num){
    echo("El número: $num es perfecto. <br/>");
} else {
    echo("El número: $num NO es perfecto. <br/>");
}

// Número abundante: todo número natural que cumple que la suma de 
// sus divisores propios es mayor que el propio número.

if($acunuper>$num){
    echo("El número: $num es abundante. <br/>");
} else {
    echo("El número: $num NO es abundante. <br/>");
}


// Número ambicioso: todo número que cumple que la secuencia que se forma al 
// sumar sus divisores propios, después los divisores propios del resultado 
// de esa suma, después los del número obtenido…acaba en un número perfecto.

// Veamos si $acunuper es perfecto

// $acunuper=0;
$acunu2=0;
$fin2=$acunuper-1;

for($i=$fin2; $i>0; $i--){
    $resto2=$acunuper%$i;
    if($resto2==0){
        // echo("$i ");
        $acunu2=$acunu2+$i;
    }
}

if($acunuper==$acunu2){
    echo("El número: $acunuper es perfecto. Y por lo tanto $num es un numero Ambicioso<br/>");
} else {
    echo("El número: $acunuper NO es perfecto. Y por lo tanto $num NO es un numero Ambicioso<br/>");
}