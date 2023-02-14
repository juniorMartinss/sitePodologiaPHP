<?php
    namespace SitePodologiaPHP\DAO;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','sitePodologiaPhp');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do método conectar
    }//fim da classe
?>