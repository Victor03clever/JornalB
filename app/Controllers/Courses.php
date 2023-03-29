<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Courses extends Controller
{
    public function index(){
        
        
    $this->view('actividade',compact('page'));
        
    }
}