<?php
namespace app\controllers;

use app\core\Controller;

class ComentarioController extends Controller{
    
   public function index(){
    $dados ["view"] = "Comentario/Index";
    $this->load("template", $dados);

   
   } 
}
