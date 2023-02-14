<?php 
    namespace SitePodologiaPHP\DAO;

    require_once('Conexao.php');

    class Agendar{
        
        public function cadastrar(Conexao $conexao, string $nomeDaTabela, string $data_agendamento, string $hora_agendamento,string $nome_paciente, string $observacoes)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                // Verifica se já existe agendamento para a data e hora especificadas
                $sqlVerifica = "SELECT * FROM $nomeDaTabela WHERE data_agendamento = '$data_agendamento' AND hora_agendamento = '$hora_agendamento'";
                $resultVerifica = mysqli_query($conn, $sqlVerifica);
                if (mysqli_num_rows($resultVerifica) > 0) {
                    return "<br><br>Já existe agendamento para a data e hora especificadas";
                }

                // Insere o agendamento
                $sql  = "insert into $nomeDaTabela (id, data_agendamento, hora_agendamento, nome_paciente, observacoes) 
                values ('','$data_agendamento','$hora_agendamento','$nome_paciente', '$observacoes')";//Escrevi o script
                $result = mysqli_query($conn,$sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!
                
                if($result){
                    return "<br><br>Consulta agendada com SUCESSO!";
                }
                return "<br><br>Erro ao realizar o agendamento!";
                }catch(Except $erro){
                echo $erro;
                }
        }//fim do cadastrar
    }//fim da classe
?>

