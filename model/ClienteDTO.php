<?php 
class Cliente{
    private $id_cliente;
    private $nome;
    private $telefone;
    private $email;
    private $senha;

    function set_id_cliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }

    function get_id_cliente(){
        return $this->id_cliente;
    }

    function set_nome($nome){
        $this->nome = $nome;
    }

    function get_nome($nome){
        return $this->nome;
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

    function set_senha($senha){
        $this->senha = $senha;
    }

    function get_senha(){
        return $this->senha;
    }
}
?>