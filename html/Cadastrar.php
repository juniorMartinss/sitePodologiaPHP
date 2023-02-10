<?php
    namespace SitePodologiaPHP\html\Cadastrar;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/CadastroPessoas.php");

    use SitePodologiaPHP\DAO\Conexao;
    use SitePodologiaPHP\DAO\Conexao\CadastroPessoas;
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar</title>
    </head>
    <body>
        <form method="POST">
                    <label>Nome Completo: </label>
                    <input type="text" name="tNome" placeholder="Informe seu nome" required/><br><br>

                    <label>Email: </label>
                    <input type="text" name="tEmail" placeholder="Informe seu email" required/><br><br>

                    <label>Senha: </label>
                    <input type="text" name="tSenha" placeholder="Informa uma senha" required/><br><br>

                    <label>Telefone: </label>
                    <input type="text" name="tTelefone" placeholder="1199999-9999" required/><br><br>
                    
                    <button> Cadastrar </button>
                    
                    <?php
                        if($_POST['tNome'] != "" && $_POST['tTelefone'] != ""){
                            $conexao = new Conexao();
                            $cad     = new Inserir();
                            echo $cad->cadastrar($conexao, "pessoa",$_POST['tNome'],$_POST['tTelefone']);
                            return;
                        }
                        echo "Erro, preencha o campo!";
                    ?>
        </form>
        
    </body>
</html>