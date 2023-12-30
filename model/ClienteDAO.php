<?php
require_once('../bd/gerenciador_de_conexoes.php');
require_once('../model/ClienteDTO.php');

class ClienteDAO{
    private $con;

    function __construct(){
        $this->con = GerenciadorDeConexoes::obter_conexao();
    }

    function inserir($cliente){
        $result = $this->con->query("INSERT INTO clientes (nome,telefone,email,senha) VALUES ('" . $cliente->get_nome() . "', '" . $cliente->get_telefone() . "', '" . $cliente->get_email() . "', '" . $cliente->senha() . "')");

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function alterar($cliente){
        $result = $this->con->query("UPDATE clientes SET nome = '" . $cliente->get_nome() . "', telefone = '" . $cliente->get_telefone() . "', email = '" . $cliente->get_email() . "', senha = '" . $cliente->get_senha() . "' WHERE id_cliente = " . $cliente->get_id_cliente());

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function excluir($id){
        $result = $this->con->query("DELETE FROM clientes WHERE id_cliente = '" . $id . "'");

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function obter_por_nome($nome){
        $result = $this->con->query("SELECT * FROM clientes where nome = '" . $nome . "'");

        if($result->rowCount() > 0){
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $c = new Cliente();
            $c->set_id_cliente($row['id_cliente']);
            $c->set_nome($row['nome']);
            $c->set_telefone($row['telefone']);
            $c->set_email($row['email']);
            $c->set_senha($row['senha']);
            return $c;
        }else{
            return false;
        }
    }
}
?>