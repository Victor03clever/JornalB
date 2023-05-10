<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Activities extends Controller
{
    private $Act;
    public function __construct(){
        $this->Act = $this->model("Activity");
    }
    public function index(){
        $dados=$this->Act->getAct();
        
        
    $this->view('actividade',compact('dados'));
        
    }
}