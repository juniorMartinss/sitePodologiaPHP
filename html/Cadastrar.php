<?php
    namespace SitePodologiaPHP\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/CadastroPessoas.php");


    use SitePodologiaPHP\DAO\Conexao;
    use SitePodologiaPHP\DAO\CadastroPessoas;

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/Estilo.css">
        <title>Cadastrar</title>
    </head>
    <body>  
        <form method="POST">
            <label>Nome Completo: </label>
            <input type="text" name="tNome" placeholder="Informe seu nome" required/><br><br>
        
            <label>CPF: </label>
            <input type="text" name="tCpf" placeholder="xxx.xxx.xxx-xx" required/><br><br>

            <label>Data de nascimento: </label>
            <input type="date" name="tData" required/><br><br>

            <label>E-mail: </label>
            <input type="text" name="tEmail" placeholder="Digite seu E-mail" required/><br><br>

            <label>Telefone: </label>
            <input type="number" name="tTelefone" placeholder="Digite seu telefone" required/><br><br>

            <label>Senha: </label>
            <input type="password" name="tSenha" placeholder="Digite sua senha" required/><br><br>
            
            <h6> Genero </h6>

            <div class="gender-group">
                                <div class="gender-input">
                                    <input id="female" value="feminino" type="radio" name="tSexo">
                                    <label for="female">Feminino</label>
                                </div>

                                <div class="gender-input">
                                    <input id="male" value="masculino" type="radio" name="tSexo">
                                    <label for="male">Masculino</label>
                                </div>

                                <div class="gender-input">
                                    <input id="others" value="outros" type="radio" name="tSexo">
                                    <label for="others">Outros</label>
                                </div>

                                <div class="gender-input">
                                    <input id="none" value="x" type="radio" name="tSexo">
                                    <label for="none">Prefiro não dizer</label>
                                </div>
                            </div>
                        </div>

            
            <button> Cadastrar </button>
            
            <?php
                if($_POST['tNome'] != "" && $_POST['tCpf'] != "" && $_POST['tData'] != "" && $_POST['tEmail'] != "" && $_POST['tTelefone'] != "" && $_POST['tSenha'] != "" && $_POST['tSexo'] != ""){
                    $conexao = new Conexao();
                    $cad     = new CadastroPessoas();
                    echo $cad->cadastrar($conexao, "pessoas",$_POST['tNome'],$_POST['tCpf'], $_POST['tData'], $_POST['tEmail'], $_POST['tTelefone'], $_POST['tSenha'], $_POST['tSexo']);
                    return;
                }
                echo "Erro, preencha o campo!";
            ?>
        </form>
        <a href="ConsultarPessoa.php"><button>Consultar</button></a>
        <a href="AtualizarPessoa.php"><button>Atualizar</button></a>
        <a href="ExcluirPessoa.php"><button>Excluir</button></a>
    </body>
</html>