<?php
    session_start();

    require_once('../.connection/connection.class.php');

    if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql = "SELECT * FROM tb_beneficiario";

    $resultado = $mysqli->query($sql);

    //$dados = mysqli_fetch_array($resultado);
    foreach ($resultado AS $dados){
        echo '<option value=' . $dados["id"] . '>' . $dados["nome"] . ' / ' . $dados["municipio"] . '</option>';
    }
?>
