<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class About extends Controller
{
    private $Home;
    public function __construct()
    {
        $this->Home = $this->model("Home");
    }
    public function index()
    {
        $total=$this->Home->totalTable();
        $this->view('about', compact('total'));
    }
    public function rules()
    {
        $this->view('regulamento');
    }
}
