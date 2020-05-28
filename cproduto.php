<?php
                            
                            
                            // Incluir arquivo de configuração
                            require_once "conexao.php";
                             
                            // Definir variáveis ​​e inicializar com valores vazios
                            $NPRODUTO = $_POST['nome'];
                            $QUANTIDADE = $_POST['quantidade'];
                            
                            
                            
                            $sql = "INSERT INTO tbprodutos (produto, quantidade)  VALUES ('$NPRODUTO', '$QUANTIDADE')";
                            
                            if (mysqli_query($conn, $sql)){
                            echo "Fornecedor Cadastrado";
                            header("location:cadastraproduto.php");
                            }else{
                                echo "erro: " . $sql . "<br>" . mysqli_error($conn);
                            }
                             mysqli_close($conn);
                            
                            ?>