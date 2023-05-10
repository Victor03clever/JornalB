<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Quadro extends Controller
{
    private $Honra;
    public function __construct(){
        $this->Honra=$this->model("Honra");
    }
    public function index(){
        $dados=$this->Honra->getHonrados();
        // var_dump($dados);
        // exit;
        
    $this->view('quadro',compact('dados'));
        
    }
}