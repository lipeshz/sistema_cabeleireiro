<?php 
class Agendamento{
    private $id_agendamento;
    private $data;
    private $horario;
    private $tempo_atendimento;
    private $id_agendante;
    private $preco;


    function set_id_agendamento($id_agendamento){
        $this->id_agendamento = $id_agendamento;
    }

    function get_id_agentamento(){
        return $this->id_agendamento;
    }

    function set_data($data){
        $this->data = $data;
    }

    function get_data(){
        return $this->data;
    }

    function set_horario($horario){
        $this->horario = $horario;
    }

    function get_horario(){
        return $this->horario;
    }

    function set_tempo_atendimento($tempo_atendimento){
        $this->tempo_atendimento = $tempo_atendimento;
    }

    function get_tempo_atendimento(){
        return $this->tempo_atendimento;
    }

    function set_id_agendante($id_agendante){
        $this->id_agendante = $id_agendante;
    }

    function get_id_agendante(){
        return $this->id_agendante;
    }

    function set_preco($preco){
        $this->preco = $preco;
    }

    function get_preco(){
        return $this->preco;
    }
}
?>