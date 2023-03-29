<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Events extends Controller
{
    public function index(){
        
        
    $this->view('events',compact('page'));
        
    }
}