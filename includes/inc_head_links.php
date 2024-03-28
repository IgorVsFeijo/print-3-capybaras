<?php

$end_completo_raiz = str_replace("\\", "/", dirname(__DIR__));
$pastas_servidor = $_SERVER['DOCUMENT_ROOT']."/";
$pasta_raiz = str_replace($pastas_servidor, "", $end_completo_raiz );

?>

<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    >
<link rel="stylesheet" href="/<?=$pasta_raiz; ?>/style/style.css" >
<link rel="stylesheet" href="/<?=$pasta_raiz; ?>/style/nav.css" >

