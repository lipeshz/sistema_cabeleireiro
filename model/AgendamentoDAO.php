<?php 
require_once('../bd/gerenciador_de_conexoes.php');
require_once('AgendamentoDTO.php');

class AgendamentoDAO{
    private $con;

    function __construct(){
        $this->con = GerenciadorDeConexoes::obter_conexao();
    }

    function inserir($agendamento){
        $result = $this->con->query("INSERT INTO agendamentos (data,horario,tempo_atendimento,id_agendante,preco) VALUES ('" . $agendamento->get_data() . "', '" . $agendamento->get_horario() . "', '" . $agendamento->get_tempo_atendimento() . "', '" . $agendamento->get_id_agendante() . "', '" . $agendamento->get_preco() . "', '" . $agendamento->get_tipo() . "')");

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function alterar($agendamento){
        $result = $this->con->query("UPDATE agendamentos SET data = '" . $agendamento->get_data() . "', horario = '" . $agendamento->get_horario() . "', tempo_atendimento = '" . $agendamento->get_tempo_atendimento() . "', preco = '" . $agendamento->get_preco() . "', tipo = '" . $agendamento->get_tipo() . "' WHERE id_agendamento = " . $agendamento->get_id_agendamento());
        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function excluir($id){
        $result = $this->con->query("DELETE FROM agendamentos WHERE id_agendamento = '" . $id . "'");

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function obter_por_data($data){
        $result = $this->con->query("SELECT * FROM agendamentos WHERE data = '" . $data . "'");
        if($result->rowCount() > 0){
            $row = $result->fetch(PDO::FETCH_ASSOC);

            $a = new Agendamento();
            $a->set_id_agendamento($row['id_agendamneto']);
            $a->set_data($row['data']);
            $a->set_horario($row['horario']);
            $a->set_tempo_atendimento($row['tempo_atendimento']);
            $a->set_id_agendante($row['id_agendante']);
            $a->set_preco($row['preco']);
            $a->set_tipo($row['tipo']);
            return $a;
        }else{
            return false;
        }
    }

    function obter_por_nome_agendante($nome){
        $result = $this->con->query("SELECT * FROM agendamentos WHERE nome = '" . $nome . "'");

        if($result->rowCount() > 0){
            $row = $result->fetc(PDO::FETCH_ASSOC);

            $a = new Agendamento();
            $a->set_id_agendamento($row['id_agendamento']);
            $a->set_data($row['data']);
            $a->set_horario($row['horario']);
            $a->set_tempo_atendimento($row['tempo_atendimento']);
            $a->set_id_agendante($row['id_agendante']);
            $a->set_preco($row['preco']);
            $a->set_tipo($row['tipo']);

            return $a;
        }else{
            return false;
        }
    }
}
?>