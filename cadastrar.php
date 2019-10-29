<?php
    $conexao = mysqli_connect("localhost","	id11400973_estacionamento","estacionamento","id11400973_bd_estacionamento");
    //                  onde esta o banco    usuario banco          senha        nome banco de dados
    $nome = $_POST['nome'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $funcao = $_POST['funcao'];
    $valor = $_POST['valor'];
    $query = "insert into  values (null,'$nome','$funcao','$entrada','$saida',$valor)";
    mysqli_query($conexao,$query);
    echo "Registro Salvo com Sucesso!";