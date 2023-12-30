<?php 
require_once('../bd/gerenciador_de_conexoes.php');
require_once('UnidadeDTO.php');

class UnidadeDAO{
    private $con;

    function __construct(){
        $this->con = GerenciadorDeConexoes::obter_conexao();
    }

    function inserir($unidade){
        $result = $this->con->query("INSERT INTO unidades (estado,cidade,bairro,rua) VALUES ('" . $unidade->get_estado() . "', '" . $unidade->get_cidade() . "', '" . $unidade->get_bairro() . "', '" . $unidade->get_rua() . "')");

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function alterar($unidade){
        $result = $this->con->query("UPDATE unidades SET estado = '" . $unidade->get_estado() . "', cidade = '" . $unidade->get_cidade() . "', bairro = '" . $unidade->get_bairro() . "', rua = '" . $unidade->get_rua() . "' WHERE id_unidade = " . $unidade->get_id_unidade());

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function excluir($id){
        $result = $this->con->query("DELETE FROM unidades WHERE id_unidade = '" . $id . "'");

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function obter_todos(){
        $lista = [];
        $result = $this->con->query("SELECT * FROM unidades");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $u = new Unidade();
            $u->set_id_unidade($row['id_unidade']);
            $u->set_estado($row['estado']);
            $u->set_cidade($row['cidade']);
            $u->set_bairro($row['bairro']);
            $u->set_rua($row['rua']);
            array_push($lista, $u);
        }
        return $lista;

    }

    function obter_por_cidade($cidade){
        $lista = [];
        $result = $this->con->query("SELECT * FROM unidades WHERE cidade = '" . $cidade . "'");

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $u = new Unidade();
            $u->set_id_unidade($row['id_unidade']);
            $u->set_estado($row['estado']);
            $u->set_cidade($row['cidade']);
            $u->set_bairro($row['bairro']);
            $u->set_rua($row['rua']);
            array_push($lista, $u);
        }
        return $lista;
    }
}
?>