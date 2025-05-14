<?php
    include "conexao.php";    
    class modelTestes{
        public function inserir(Testes $testes){
            $sql = "insert into usuarios(nome, email) values(?, ?)";
            $con = new Conexao();
            $bd = $con->pegarConexao();

            $stm = $bd->prepare($sql);
            $stm->bindValue(1, $testes->getNome());
            $stm->bindValue(2, $testes->getEmail());
            $resultado = $stm->execute();
            if($resultado){
                echo "cadastrado com sucesso";
            }else{
                echo "erro ao cadastrar";
            }
        }

    }
?>