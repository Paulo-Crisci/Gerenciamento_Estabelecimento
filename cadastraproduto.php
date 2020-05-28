
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
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
                        <h2>Cadastrar Produto</h2>
                    </div>
                    <p>Preencha os campos abaixo para cadastrar o produto</p>
                    <form action="cproduto.php" method="post">
                        <div class="form-group">
                            <label>Código do produto</label>
                            <input type="text" name="" class="form-control" disabled>
                            
                        </div>

                        <div class="form-group">
                            <label>Nome do produto</label>
                            <input type="text" name="nome" id="nome" class="form-control" >
                            
                        </div>
                        <div class="form-group">
                            <label>Quantidade</label>
                            <input type="text" name="quantidade" class="form-control" > 
                        </div>
                       
                        <input type="submit" name="submit" class="btn btn-primary" value="Salvar Produto">
                        <a href="index.php" class="btn btn-default">Voltar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>