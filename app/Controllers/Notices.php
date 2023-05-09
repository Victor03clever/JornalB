<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Notices extends Controller
{
    private $Data;
    public function __construct()
    {
        $this->Data = $this->model("Home");
    }
    public function index(){
        $read=$this->Data->getAvisos();
        
        
    $this->view('trainers',compact('read'));
        
    }
}