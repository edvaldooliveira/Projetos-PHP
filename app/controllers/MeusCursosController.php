<?php
namespace app\controllers;

use app\core\Controller;

class MeusCursosController extends Controller{
    
   public function index(){
       $dados ["view"] = "Meus_cursos/Index";
    $this->load("template", $dados);
   } 
}
