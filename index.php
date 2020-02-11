<?php 
    require './Balanca.php';
    require './Objeto.php';

    $balanca = new Balanca();
    $result = $balanca->calcularPeso(new Objeto('Bola'));
    echo '<pre>';
    print_r($result);
    echo '</pre>';

    $objeto = new Objeto('Bola');
    echo '<pre>';
    print_r($objeto->gerar_pesos());
    echo '</pre>';
?>