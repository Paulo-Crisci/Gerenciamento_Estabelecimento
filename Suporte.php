<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Fornecedor</title>
    <link rel="stylesheet" href="style.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
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

    <div class="business-card middle">
      <div class="front">
        <h2>Paulo Crisci</h2>
        <span>Suporte</span>
        <ul class="contact-info">
          <li>
            <i class="fas fa-mobile-alt"></i> (11)94239-8938
          </li>
          <li>
            <i class="far fa-envelope"></i> Paulinho.crisci@gmail.com
          </li>
          <li>
            <i class="fas fa-map-marker-alt"></i> Diadema, SP
          </li>
        </ul>
      </div>
      <div class="back">
        <span>Paulo Crisci</span>
      </div>
    </div>

    <script>
      $(".business-card").click(function(){
        $(".business-card").toggleClass("business-card-active");
      });
    </script>



  </body>
</html>