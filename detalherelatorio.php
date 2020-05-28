<?php
// Verifique a existência do parâmetro id antes de processar mais
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Incluir arquivo de configuração
    require_once "conexao.php";

    // Prepare uma declaração de seleção
    $sql = "SELECT * FROM tbprodutos WHERE id = ?";

    if($stmt = mysqli_prepare($conn, $sql)){
        // Vincular variáveis ​​à instrução preparada como parâmetros
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Definir parâmetros
        $param_id = trim($_GET["id"]);

        // Tentativa de executar a declaração preparada
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result)  == 1){
                /* Busque a linha de resultados como uma matriz associativa. Desde o conjunto de resultados
                contém apenas uma linha, não precisamos usar o loop while */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Recuperar valor do campo individual
                $nome = $row["produto"];

            } else{
                // O URL não contém um parâmetro de identificação válido. Redirecionar para a página de erro
                header("location: error.php");
                exit();
            }

        } else{
            echo "Opa! Algo deu errado. Por favor, tente novamente mais tarde.";
        }
    }

    // Fecha declaração
    mysqli_stmt_close($stmt);

    // Fecha conexão
    mysqli_close($conn);
} else{
    // O URL não contém o parâmetro id. Redirecionar para a página de erro
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Dados</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<header>
      <div class="inner-width">
        <a href="index.php" class="logo"><img src="Kato_Logo_Branco.png" alt=""></a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
          <a href="index.php"><i class="fas fa-home home"></i> Home</a>
          <a href="Relatorio.php"><i class="fas fa-align-left about"></i> Relatorio</a>
          <a href="cadastraproduto.php"><i class="fab fa-buffer works"></i> Produtos</a>
          <a href="Suporte.php"><i class="fas fa-headset contact"></i> Suporte</a>
        </nav>
      </div>
      
    </header>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Visualizar Dados do produto</h1>
                    </div>
                    <div class="form-group">
                        <label>Código do produto</label>
                        <p class="form-control-static"><?php echo $row["id"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <p class="form-control-static"><?php echo $row["produto"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <p class="form-control-static"><?php echo $row["quantidade"]; ?></p>
                    </div>
                    <p><a href="Relatorio.php" class="btn btn-primary">Voltar</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>