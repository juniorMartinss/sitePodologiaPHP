<?php
    namespace SitePodologiaPHP\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/Agendar.php");


    use SitePodologiaPHP\DAO\Conexao;
    use SitePodologiaPHP\DAO\Agendar;

?>

<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendamento de Consulta</title>
    </head>
    <body>
        <h1>Agendamento de Consulta para Avaliação</h1>
        <form method="POST">
            <label for="data_agendamento">Data:</label>
            <input type="date" id="data_agendamento" name="data_agendamento">
            <br><br>
            <label for="hora_agendamento">Hora:</label>
            <input type="time" id="hora_agendamento" name="hora_agendamento">
            <br><br>
            <label for="nome_paciente">Nome do Paciente:</label>
            <input type="text" id="nome_paciente" name="nome_paciente">
            <br><br>
            <label for="observacoes">Observações:</label>
            <textarea id="observacoes" name="observacoes"></textarea>
            <br><br>
            <input type="submit" value="Agendar" name="agendar">

            <?php
                if($_POST['data_agendamento'] != "" && $_POST['hora_agendamento'] != "" && $_POST['nome_paciente'] != "" && $_POST['observacoes'] != ""){
                    $conexao = new Conexao();
                    $cad     = new Agendar();
                    echo $cad->cadastrar($conexao, "agendamento",$_POST['data_agendamento'],$_POST['hora_agendamento'], $_POST['nome_paciente'], $_POST['observacoes']);
                    return;
                }
                echo "Erro, preencha o campo!";
            ?>
        </form>
    </body>
</html>