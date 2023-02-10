<?php 
    namespace SitePodologiaPHP\DAO\Conexao;

    require_once('Conexao.php');

    class CadastroPessoas{
        
        public function cadastrar(Conexao $conexao, string $nomeDaTabela, string $nomeCompleto, string $email, string $senha, date $data_nascimento, string $telefone, string $cidade, string $estado, string $cep, string $pais)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql  = "insert into $nomeDaTabela (id, nomeCompleto, email, senha, data_nascimento, telefone, endereco, cidade, estado, cep, pais) 
                values ('','$nomeCompleto','$email', '$senha', 'data_nascimento', 'telefone', 'cidade', 'estado', 'cep', 'pais')";//Escrevi o script
                $result = mysqli_query($conn,$sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!
                
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do cadastrar
    }//fim da classe
?>