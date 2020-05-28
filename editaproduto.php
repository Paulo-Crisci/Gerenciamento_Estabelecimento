<?php
// Incluir arquivo de configuração
require_once "conexao.php";
 
// Definir variáveis ​​e inicializar com valores vazios
$N_PRODUTO = $_POST['produto'];
$QUANTIDADE = $_POST['quantidade'];


$sql = "UPDATE tbproduto (produto, quantidade)  VALUES ('$N_PRODUTO', '$QUANTIDADE')";

if (mysqli_query($conn, $sql)){
echo "disciplina cadastrada com sucesso";
}else{
    echo "erro: " . $sql . "<br>" . mysqli_error($conn);
}
 mysqli_close($conn);

?>