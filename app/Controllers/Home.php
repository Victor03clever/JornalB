<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Home extends Controller
{
    private $News;
    private $Act;
    public function __construct()
    {
        $this->News = $this->model("News");
        $this->Act = $this->model("Activity");
    }
    public function index()
    {

        $act=$this->Act->getActR();
        $news=$this->News->getNewsR();
      
        $this->view('home',compact('act','news'));
    }
}
