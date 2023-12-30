<?php 
class Agente{
    private $id_agente;
    private $nome;
    private $data_nasc;
    private $telefone;
    private $email;
    private $rg;
    private $cpf;
    private $unidade;

    function set_nome($nome){
        $this->nome = $nome;
    }

    function get_nome(){
        return $this->nome;
    }

    function set_data_nasc($data_nasc){
        $this->data_nasc = $data_nasc;
    }

    function get_data_nasc(){
        return $this->data_nasc;
    }

    function set_telefone($telefone){
        $this->telefone = $telefone;
    }

    function get_telefone(){
        return $this->telefone;
    }

    function set_email($email){
        $this->email = $email;
    }

    function get_email(){
        return $this->email;
    }

    function set_rg($rg){
        $this->rg = $rg;
    }

    function get_rg(){
        return $this->rg;
    }

    function set_cpf($cpf){
        $this->cpf = $cpf;
    }

    function get_cpf(){
        return $this->cpf;
    }

    function set_unidade($unidade){
        $this->unidade = $unidade;
    }

    function get_unidade(){
        return $this->unidade;
    }
}
?>