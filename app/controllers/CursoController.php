<?php
namespace app\controllers;

use app\core\Controller;

class CursoController extends Controller{
    
   public function index(){
       $dados ["view"] = "Curso/Index";
    $this->load("template", $dados);
   } 
}


