<?php 
require_once('../bd/gerenciador_de_conexoes.php');
require_once('AgenteDTO.php');

class AgenteDAO{
    private $con;

    function __construct(){
        $this->con = GerenciadorDeConexoes::obter_conexao();
    }

    function inserir($agente){
        $result = $this->con->query("INSERT INTO agentes (nome,data_nasc,telefone,email,rg,cpf,unidade) VALUES ('" . $agente->get_nome() . "', '" . $agente->get_data_nasc() . "', '" . $agente->get_telefone() . "', '" . $agente->get_email() . "', '" . $agente->get_rg() . "', '" . $agente->get_cpf() . "', '" . $agente->get_unidade() . "')");

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function alterar($agente){
        $result = $this->con->query("UPDATE agentes SET nome = '" . $agente->get_nome() . "', data_nasc = '" . $agente->get_data_nasc() . "', telefone = '" . $agente->get_telefone() . "', rg = '" . $agente->get_rg() . "', cpf = '" . $agente->get_cpf() . "', unidade = '" . $agente->get_unidade() . "' WHERE id_agente = " . $agente->get_id_agente());

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function excluir($id){
        $result = $this->con->query("DELETE FROM agentes WHERE id_agente = '" . $id . "'");

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function obter_todos(){
        $lista = [];
        $result = $this->con->query("SELECT * FROM agentes");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $a = new Agente();
            $a->set_nome($row['nome']);
            $a->set_data_nasc($row['data_nasc']);
            $a->set_telefone($row['telefone']);
            $a->set_email($row['email']);
            $a->set_rg($row['rg']);
            $a->set_cpf($row['cpf']);
            $a->set_unidade($row['unidade']);
            array_push($lista, $a);
        }

        return $lista;
    }

    function obter_por_unidade($id){
        $lista = [];
        $result = $this->con->query("SELECT * FROM agentes WHERE unidade = '" . $id . "'");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $a = new Agente();
            $a->set_nome($row['nome']);
            $a->set_data_nasc($row['data_nasc']);
            $a->set_telefone($row['telefone']);
            $a->set_email($row['email']);
            $a->set_rg($row['rg']);
            $a->set_cpf($row['cpf']);
            $a->set_unidade($row['unidade']);
            array_push($lista, $a);
        }

        return $lista;
    }
}
?>