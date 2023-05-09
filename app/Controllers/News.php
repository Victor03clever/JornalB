<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class News extends Controller
{
    private $Data;
    public function __construct(){
        $this->Data = $this->model("News");

    }
    public function index(){
        $News=$this->Data->getNews();
       
        
    $this->view('events',compact('News'));
        
    }
}