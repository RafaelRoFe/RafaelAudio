<?php

$pasta = "arquivos/";
$diretorio = dir($pasta);
$arquivos = array();

while($arquivo = $diretorio->read()){
    if($arquivo != '.' && $arquivo != '..'){
        $arquivos[] = $arquivo;
    }
}

$diretorio->close();

?>
