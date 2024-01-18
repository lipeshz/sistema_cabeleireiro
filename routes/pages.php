<?php 
use \App\Controller\Pages;
use \App\Http\Response;

$obRouter->get('/a',[
    function(){
        return new Response(200, Pages\Home::getHome());
    }
])
?>