<?php

namespace App\Controllers;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Contact extends Controller
{
    private  $save;
    public function __construct()
    {
        $this->save = $this->model("Home");
    }
    public function index()
    {
        $this->view('contact', compact('page'));
    }
    // Metodo para contacto
    public function getForm()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (isset($formulario['btn_contact'])) {
            $dados = [
                'name' => $formulario['name'],
                'number' => $formulario['number'],
                'subject' => $formulario['subject'],
                'message' => $formulario['message'],
                'err_message' => '',
                'err_subject' => '',
                'err_number' => '',
                'err_name' => ''
            ];
            if (in_array("", $formulario)){
                $message = '';
                if (empty($formulario['subject'])) {
                    $dados['err_subject'] = '*Campo obrigatorio';
                }
                if (empty($formulario['message'])) {
                    $dados['err_message'] = '*Campo obrigatorio';
                }
                if (empty($formulario['number'])) {
                    $dados['err_number'] = '*Campo obrigatorio';
                }
                if (empty($formulario['name'])) {
                    $dados['err_name'] = '*Campo obrigatorio';
                }
            }
            else{                
                // exit;
                $send = $this->save->sendMessage($dados);
                if ($send) {
                    $message = 'd-block';
                } else {
                    $message = '';
                    die("error sending message");
                    exit;
                }
             }
        } else {
            $dados = [
                'name' => '',
                'number' => '',
                'subject' => '',
                'message' => '',
                'err_message' => '',
                'err_subject' => '',
                'err_number' => '',
                'err_name' => ''
            ];
            $message = '';
        }
        $this->view('contact', compact('dados', 'message'));
    }
}
