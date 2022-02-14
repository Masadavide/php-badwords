<?php
    $string = "Così ebbe inizio l'età del Fuoco. Ma presto le fiamme svaniranno, e resterà soltanto l'Oscurità.
    Perfino ora, restano soltanto le braci e l'uomo non vede la luce, ma solo notti eterne.
    E tra i viventi si distinguono i portatori del maledetto Segno Oscuro.";

    $len = strlen($string);

    $url = $_GET["censura"];

    $dacensurare = '*******';

    $string = str_replace($url,$dacensurare,$string);

?>


<h1><?php echo $string?></h1>
<h2>Lunghezza frase: <?php echo $len?></h2>
