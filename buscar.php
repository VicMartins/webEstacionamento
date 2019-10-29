<?php
$conexao = mysqli_connect("localhost","	id11400973_estacionamento","estacionamento","id11400973_bd_estacionamento");
//                  onde esta o banco    usuario banco          senha        nome banco de dados

    $placa = $_POST['placa'];
    $query = "SELECT * FROM horas WHERE nr_placa = '$placa'";
    $result = mysqli_query($conexao,$query);
    while($linha = mysqli_fetch_assoc($result)){
      $registro = array(
          'veiculo'=>array(
            'nome' => $linha['nm_proprietario'],
            'tipo' => $linha['ds_tipo'],
            'marca' => $linha['nm_marca'],
            'modelo' => $linha['ds_modelo'],
            'placa' => $linha['nr_placa'],
            'entrada' => $linha['hr_entrada'],
            'saida' => $linha['hr_saida'],
            'valor' => $linha['vl_pagar']
          )
      );
    }
    echo json_encode($registro);