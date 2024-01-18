<?php 
namespace App\Controller\Pages;
use App\Utils\View;

class Home extends Page{
    public static function getHome(){
        $content = View::render('pages/home', ['nome' => 'Filipe']);

        return parent::getPage('Beleza & Arte', $content);
    }
}
?>