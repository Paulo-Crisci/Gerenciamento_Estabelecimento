<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Fornecedor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script> 
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

      
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Relatorio dos produtos</h2>
                        <a href="cadastraproduto.php" class="btn btn-success pull-right">Cadastrar um novo Produto</a>
                        
                        <a href="index.php" class="btn btn-success pull-right">Voltar</a>
                    </div>
                   
                    <?php
                    // Incluir arquivo de configuração
                    require_once "conexao.php";
                    
                    // Tentativa de selecionar a execução da consulta
                    $sql = "SELECT * FROM tbprodutos";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Código</th>";
                                        echo "<th>Nome</th>";
                                        echo "<th>Quantidade</th>";
                                        echo "<th>Ação</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['produto'] . "</td>";
                                        echo "<td>" . $row['quantidade'] . "</td>";
                                       
                                        echo "<td>";
                                            echo "<a href='detalherelatorio.php?id=". $row['id'] ."' title='Visualizar Dados' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='Alterarproduto.php?id=". $row['id'] ."' title='Atualizar Dados' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Deletar Dados' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>Não há dados para serem apresentados.</em></p>";
                        }
                    } else{
                        echo "ERRO: Não foi possível executar $sql. " . mysqli_error($conn);
                    }
 
                    // Fecha conexão
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>

      
    </header>
    </body>
</html>