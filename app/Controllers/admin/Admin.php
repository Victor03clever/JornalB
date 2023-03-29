<?php

namespace App\Controllers\admin;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\Controller;

class Admin extends Controller
{
    private $Data;
    private $Home;
    public function __construct()
    {
        $this->Data = $this->model("Usuarios");
        $this->Home = $this->model("Home");
    }
    //Funcao para autenticar o administrador
    public function index()
    {

        if (Sessao::session()) {
            Url::redireciona("admin/home");
        } else {
            Url::redireciona("admin/login");
        }
    }
    public function login()
    {

        if (Sessao::session()) {
            Url::redireciona("admin/home");
        }

        $formulario =   filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (isset($formulario['btn-login'])) {
            $dados = [
                'username' => trim($formulario['username']),
                'password' => trim($formulario['password']),
                'error_name' => '',
                'error_pass' => '',
            ];
            if (in_array("", $formulario)) {
                if (empty($dados['username'])) {
                    $dados['error_name'] = "Digite o seu nome";
                }
                if (empty($dados['password'])) {
                    $dados['error_pass'] = "Digite a sua senha";
                }
            } else {
                $auth = $this->Data->checalogin($dados);
                if ($auth) {
                    Sessao::sms("login", "Login feito com sucesso");
                    Url::redireciona("admin/home");
                    $this->criarsessao($auth);
                    exit;
                } else {
                    Sessao::sms("sms", "Erro, Dados Invalidos", "alert alert-danger");
                    $dados['error_name'] = "Dados errados";
                    $dados['error_pass'] = "Dados errados";
                }
            }
        } else {
            $dados = [
                'username' => '',
                'password' => '',
                'error_name' => '',
                'error_pass' => '',
            ];
        }
        $this->view("admin/login", compact('dados'));
    }

    private function  criarsessao($usuario)
    {

        $_SESSION['usuarioJB_id'] = $usuario['id'];
        $_SESSION['usuarioJB_nome'] = $usuario['nome'];
        $_SESSION['usuarioJB_email'] = $usuario['email'];
    }
    public function sair()
    {
        unset($_SESSION['usuarioJB_id']);
        unset($_SESSION['usuarioJB_nome']);
        unset($_SESSION['usuarioJB_email']);
        session_destroy();
        Url::redireciona('admin');
    }

    // ============================================================================================

    //pagina home
    public function home()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }

        $messages = $this->Home->getMessages();
        $totaltable = $this->Home->totalTable();
        $totalhonra = $this->Home->totalHonra();
        $totalnoticia = $this->Home->totalNoticia();
        $totalactividade = $this->Home->totalActividade();

        $this->view('admin/home', compact('messages', 'totaltable', 'totalactividade', 'totalnoticia', 'totalhonra'));
    }
    public function seeMessage($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        if ($id) {
            $see = $this->Home->getMessageByOne($id);
            // var_dump($see);
            if ($see) {
            } else {
                die("Problem with message");
            }
        } else {
            die('error');
        }
        $this->view('admin/message', compact('see'));
    }
    public function deleteMessage($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_SPECIAL_CHARS);
        if ($id and $method) {
            $delete = $this->Home->deleteMessage($id);
            if ($delete) {
                Url::redireciona("admin/home");
                Sessao::sms("message", "Deletada com sucesso");
            } else {
                die('error deleteMessage');
            }
        } else {
            die("Could not delete message: Nao e permitido metodo Get para deletar");
        }
    }

    // pie chart

    public function piechart()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if ($formulario['btnTotal']) {
            $dados = [
                'aluno' => trim($formulario['aluno']),
                'prof' => trim($formulario['prof']),
                'salas' => trim($formulario['salas'])
            ];
            if (in_array("", $formulario)) {
                Sessao::sms("message", "Alerta: *Não deixe nunhum campo vazio", "alert alert-info");
                Url::redireciona("admin/home");
            } else {
                $update = $this->Home->updateTotal($dados);
                if ($update) {
                    Sessao::sms("message", "Actualizada com exito");
                    Url::redireciona("admin/home");
                } else {
                    die("Error piechart");
                }
            }
        } else {
            $dados = [
                'aluno' => '',
                'prof' => '',
                'salas' => ''
            ];
        }
    }
    // =================================================================================
    // Novo aviso controller
    // Aviso controller
    public function avisos()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $read = $this->Home->getAvisos();

        $this->view("admin/avisos", compact('read'));
    }

    public function newaviso()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }

        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if ($formulario['btnNew']) {
            $dados = [
                'title' => trim($formulario['title']),
                'sms' => trim($formulario['sms']),
                'date' => trim($formulario['date']),
                'error' => ''
            ];

            if (in_array("", $formulario)) {
                if (empty($dados['title']) || empty($dados['sms'] || empty($dados['date']))) {
                    $dados['error'] = "Preencha todos os campos";
                    Sessao::sms("aviso", "Alerta: *Não deixe nunhum campo vazio", "alert alert-info");
                }
            } else {
                $save = $this->Home->saveAviso($dados);
                if ($save) {
                    Sessao::sms("aviso", "Aviso criado com sucesso");
                    // Url::redireciona("admin/home");
                }
            }
        } else {
            $dados = [
                'title' => '',
                'sms' => '',
                'date' => '',
                'error' => ''
            ];
        }
        $this->view("admin/novoAviso", compact('dados'));
    }

    public function deleteAviso($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_SPECIAL_CHARS);
        if ($id and $method == "POST") {
            if ($_POST['btn']) {
                $delete = $this->Home->deleteAviso($id);
                if ($delete) {
                    Sessao::sms("aviso", "Aviso deletado com sucesso");
                    Url::redireciona("admin/avisos");
                } else {
                    die("Error Model");
                }
            } else {
                die('No POST Method');
            }
        } else {

            die("Invalid GET request method");
        }
    }
    public function editAviso($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $aviso = $this->Home->getAviso($id);
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if ($id) {

            if ($form['btn']) {
                $dados = [
                    'title' => trim($form['title']),
                    'sms' => trim($form['sms']),
                    'error' => ''
                ];
                if (in_array("", $form)) {
                    if (empty($dados['title']) || empty($dados['sms'])) {
                        $dados['error'] = "Preencha todos os campos";
                        Sessao::sms("aviso", "Alerta: *Não deixe nunhum campo vazio", "alert alert-info");
                    }
                } else {
                    $save = $this->Home->updateAviso($dados, $id);
                    if ($save) {
                        Sessao::sms("aviso", "Aviso actualizado com sucesso");
                        Url::redireciona("admin/avisos");
                        exit;
                    }
                }
            } else {
                $dados = [
                    'title' => $aviso['tema'],
                    'sms' => $aviso['descricao'],
                    'id' => $aviso['id'],
                    'error' => $aviso['error']
                ];
            }
        } else {
            die('Invalid parameters');
        }


        $this->view("admin/editaviso", compact("dados"));
    }

    // ============================================================
    //Change message
    // ============================================================
    public function config()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $senha = $this->Data->usuarioRead($_SESSION['usuarioJB_id']);
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (isset($formulario['cad'])) :
            $dados = [
                'senha' => trim($formulario['password']),
                'novasenha' => trim($formulario['newpassword']),
                'rnovasenha' => trim($formulario['renewpassword']),
                'err_senha' => '',
                'name' => $senha['nome'],
                'err_newpass' => '',
                'err_renewpass' => ''
            ];
            if (in_array("", $formulario)) :
                if (empty($formulario['password'])) :
                    $dados['err_senha'] = 'Preencha o campo*';
                endif;
                if (empty($formulario['newpassword'])) :
                    $dados['err_newpass'] = 'Preencha o campo Nova Senha*';
                endif;
                if (empty($formulario['renewpassword'])) :
                    $dados['err_renewpass'] = 'Porfavor repita a Nova Senha*';
                endif;

            else :
                if (!password_verify($dados['senha'], $senha['senha'])) :
                    $dados['err_senha'] = 'Senha errada';
                elseif ($formulario['newpassword'] != $formulario['renewpassword']) :
                    $dados['err_renewpass'] = 'Senhas diferentes*';
                else :
                    $dados['novasenha'] = password_hash(trim($formulario['newpassword']), PASSWORD_DEFAULT);
                    $newpass = $this->Data->newpass($dados, $_SESSION['usuarioJB_id']);
                    if ($newpass) :
                        Sessao::sms('change', 'Senha actualizada com sucesso');
                        Url::redireciona('admin/config');
                        exit;
                    else :
                        Sessao::sms('change', 'Erro com a Model Usuarios->newpass', 'alert alert-danger');

                    endif;
                endif;
                var_dump($dados);
            endif;

        else :
            $dados = [
                'senha' => '',
                'novasenha' => '',
                'rnovasenha' => '',
                'err_senha' => '',
                'err_newpass' => '',
                'name' => $senha['nome'],
                'err_renewpass' => ''
            ];
        endif;


        
        $this->view('admin/changepassword', compact('dados'));
    }
    public function changename(){
        $formulario=filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if ($formulario['btn']) {
            $dados = [
                'nome' => trim($formulario['nome']),
                'err_nome' => ''
            ];

            if (in_array("", $formulario)) {
                if (empty($formulario['nome'])) {
                    $dados['err_nome'] = 'Preencha o campo*';
                }
            } else {
                $newname = $this->Data->newname($dados, $_SESSION['usuarioJB_id']);
                    if ($newname) :
                        Sessao::sms('change', 'Nome actualizado com sucesso');
                        Url::redireciona('admin/config');
                        exit;
                    else :
                        Sessao::sms('change', 'Erro com a Model Usuarios->newpass', 'alert alert-danger');
                        Url::redireciona('admin/config');
                        exit;
                    endif;

            }
        } else {
            $dados=['nome'=>'', 'err_nome'=>'',];
        }
        $this->view('admin/changepassword', compact('dados'));

    }
    // ============================================================
}
