<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Error extends Controller
{
    public function index()
    {
        // echo "Victor and Victor are working together on this website";
        $this->view("404page");
    }
}
