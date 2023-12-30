<?php 
class Unidade{
    private $id_unidade;
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;

    function set_id_unidade($id_unidade){
        $this->id_unidade = $id_unidade;
    }

    function get_id_unidade(){
        return $this->id_unidade;
    }

    function set_estado($estado){
        $this->estado = $estado;
    }

    function get_estado(){
        return $this->estado;
    }

    function set_cidade($cidade){
        $this->cidade = $cidade;
    }

    function get_cidade(){
        return $this->cidade;
    }

    function set_bairro($bairro){
        $this->bairro = $bairro;
    }

    function get_bairro(){
        return $this->bairro;
    }

    function set_rua($rua){
        $this->rua = $rua;
    }

    function get_rua(){
        return $this->rua;
    }
}
?>