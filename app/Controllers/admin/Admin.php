<?php

namespace App\Controllers\admin;

use App\Helpers\Sessao;
use App\Helpers\Url;
use App\Libraries\uploads;
use App\Libraries\Controller;

class Admin extends Controller
{
    private $Data;
    private $Home;
    private $News;
    private $Honra;
    private $Activity;
    public function __construct()
    {
        $this->Data = $this->model("Usuarios");
        $this->Home = $this->model("Home");
        $this->News = $this->model("News");
        $this->Honra = $this->model("Honra");
        $this->Activity = $this->model("Activity");
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
    public function changename()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);
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
            $dados = ['nome' => '', 'err_nome' => '',];
        }
        $this->view('admin/changepassword', compact('dados'));
    }
    // ============================================================

    // ============================================================
    // noticias

    public function news()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $dados = $this->News->getNews();
        $this->view('admin/news', compact('dados'));
    }
    public function newNews()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if ($form['not']) {
            $dados = [
                'title' => trim($form['title']),
                'desc' => trim($form['desc']),
                'img' => trim($form['img']),
                'error' => ''
            ];

            if (in_array("", $form)) {
                if (empty($dados['title']) || empty($dados['desc'] || empty($dados['img']))) {
                    $dados['error'] = "Preencha todos os campos";
                    Sessao::sms("noticia", "Alerta: *Não deixe nunhum campo vazio", "alert alert-info");
                }
            } else {
                if ($_FILES['img']) {
                    $uploads = new Uploads;
                    $uploads->imagem($_FILES['img'], 7, 'noticias');
                }
                if ($uploads->getexito()) {
                    $dados['img'] = !empty($_SESSION['path']) ? $_SESSION['path'] : 'img\exemplo.png';
                    $save = $this->News->saveNews($dados);
                    if ($save) {
                        unset($_SESSION['path']);
                        Sessao::sms("noticia", "Aviso criado com sucesso");
                        Url::redireciona("admin/news");
                    } else {
                        Sessao::sms("noticia", "Aviso nao criado com sucesso", "alert alert-danger");
                    }
                } else {
                    if ($uploads->geterro()) {

                        Sessao::sms("noticia", $uploads->geterro(), "alert alert-danger");
                    }
                    Sessao::sms("noticia", "Erro", "alert alert-danger");
                }
            }
        } else {
            $dados = [
                'title' => '',
                'desc' => '',
                'img' => '',
                'error' => ''
            ];
        }

        $this->view('admin/newNews', compact('dados'));
    }
    public function deleteNews($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_SPECIAL_CHARS);
        if ($id and $method == "POST") {
            if ($_POST['btn']) {
                $delete = $this->News->deleteNews($id);
                if ($delete) {
                    Sessao::sms("noticia", "Noticia deletado com sucesso");
                    Url::redireciona("admin/news");
                    exit;
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
    public function editNews($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $aviso = $this->News->getOne($id);
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if ($id) {

            if ($form['btn']) {
                $dados = [
                    'title' => trim($form['title']),
                    'desc' => trim($form['desc']),

                    'error' => ''
                ];
                if (in_array("", $form)) {
                    if (empty($dados['title']) || empty($dados['sms'])) {
                        $dados['error'] = "Preencha todos os campos";
                        Sessao::sms("noticia", "Alerta: *Não deixe nunhum campo vazio", "alert alert-info");
                    }
                } else {


                    $update = $this->News->updateNews($dados, $id);
                    if ($update) {
                        Sessao::sms("noticia", "Noticia actualizado com sucesso");
                        Url::redireciona("admin/news");
                        exit;
                    } else {
                        Sessao::sms("noticia", "Noticia não criado com sucesso", "alert alert-danger");
                    }
                }
            } else {
                $dados = [
                    'title' => $aviso['tema'],
                    'desc' => $aviso['descricao'],
                    'id' => $aviso['id'],
                    'error' => $aviso['error']
                ];
            }
        } else {
            die('Invalid parameters');
        }


        $this->view("admin/editNews", compact("dados"));
    }
    //     // ============================================================
    // <!-- ========== Start Quadro de honra ========== -->
    public function newHonra()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($form['btn'])) {
            $dados = ['nome' => trim($form['nome']), 'curso' => trim($form['curso']), 'media' => trim($form['media']), 'error' => ''];
            if (in_array("", $form)) {
                if (empty($dados['nome']) || empty($dados['curso'] || empty($dados['media']))) {
                    $dados['error'] = "Preencha todos os campos";
                    Sessao::sms("honra", "Alerta: *Não deixe nunhum campo vazio", "alert alert-info");
                }
            } else {
                if ($_FILES['img']) {
                    $uploads = new Uploads;
                    $uploads->imagem($_FILES['img'], 7, 'Honra');
                }
                if ($uploads->getexito()) {
                    $dados['img'] = !empty($_SESSION['path']) ? $_SESSION['path'] : 'img\exemplo.png';
                    $save = $this->Honra->saveHonra($dados);
                    if ($save) {
                        unset($_SESSION['path']);
                        Sessao::sms("honra", "Criado com sucesso");
                        Url::redireciona("admin/honrados");
                        exit;
                    } else {
                        Sessao::sms("honra", "Não criado com sucesso", "alert alert-danger");
                    }
                } else {
                    if ($uploads->geterro()) {

                        Sessao::sms("honra", $uploads->geterro(), "alert alert-danger");
                    }
                    Sessao::sms("honra", "Erro", "alert alert-danger");
                }
            }
        } else {
            $dados = ['nome' => '', 'curso' => '', 'media' => '', 'error' => ''];
        }
        $this->view("admin/newhonra", compact('dados'));
    }
    public function honrados()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $dados = $this->Honra->getHonrados();
        $this->view("admin/honrados", compact('dados'));
    }
    public function seeHonra($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $Honra = $this->Honra->getOne($id);
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if ($id) {

            if (isset($form['btn'])) {
                $dados = ['nome' => trim($form['nome']), 'curso' => trim($form['curso']), 'media' => trim($form['media']), 'error' => ''];
                if (in_array("", $form)) {
                    if (empty($dados['nome']) || empty($dados['curso'] || empty($dados['media']))) {
                        $dados['error'] = "Preencha todos os campos";
                        Sessao::sms("honra", "Alerta: *Não deixe nunhum campo vazio", "alert alert-info");
                    }
                } else {
                    $update = $this->Honra->updateHonra($dados, $id);
                    if ($update) {
                        // unset($_SESSION['path']);
                        Sessao::sms("honra", "Actualizado com sucesso");
                        Url::redireciona("admin/honrados");
                        exit;
                    } else {
                        Sessao::sms("honra", "Não criado com sucesso", "alert alert-danger");
                    }
                }
            } else {
                $dados = ['nome' => $Honra['nome'], 'curso' => $Honra['curso'], 'media' => $Honra['media'], 'error' => ''];
            }
        } else {
            die('Invalid parameters');
        }

        $this->view("admin/viewHonrados", compact('dados', 'id'));
    }
    public function deleteHonra($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_SPECIAL_CHARS);
        if ($id and $method == "POST") {
            if ($_POST['delete']) {
                $delete = $this->Honra->deleteHonra($id);
                if ($delete) {
                    Sessao::sms("honra", "deletada com sucesso");
                    Url::redireciona("admin/honrados");
                    exit;
                } else {
                    die("Error Model");
                }
            } else {
                die('You didnt click in button');
            }
        } else {

            die("Invalid GET request method");
        }
    }

    // <!-- ========== End Quadro de honra ========== -->
    // <!-- ========== Start Actividades ========== -->
    public function newActivity()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($form['save'])) {
            $dados = ['tema' => trim($form['tema']), 'sub' => trim($form['sub']), 'cont' => trim($form['cont']), 'org' => trim($form['org']), 'error' => ''];
            if (in_array("", $form)) {
                if (empty($dados['tema']) || empty($dados['sub']) || empty($dados['cont']) || empty($dados['org'])) {
                    $dados['error'] = "Preencha todos os campos";
                    Sessao::sms("act", "Alerta: *Não deixe nunhum campo vazio", "alert alert-info");
                }
            } else {
                if ($_FILES['img']) {
                    $uploads = new Uploads;
                    $uploads->imagem($_FILES['img'], 7, 'Honra');
                }
                if ($uploads->getexito()) {
                    $dados['img'] = !empty($_SESSION['path']) ? $_SESSION['path'] : 'img\exemplo.png';
                    $save = $this->Activity->saveAct($dados);
                    if ($save) {
                        unset($_SESSION['path']);
                        Sessao::sms("act", "Actividade Criado com sucesso");
                        Url::redireciona("admin/activities");
                        exit;
                    } else {
                        Sessao::sms("act", "Não criado com sucesso", "alert alert-danger");
                    }
                } else {
                    if ($uploads->geterro()) {

                        Sessao::sms("act", $uploads->geterro(), "alert alert-danger");
                    }
                    Sessao::sms("act", "Erro", "alert alert-danger");
                }
            }
        } else {
            $dados = ['tema' => '', 'sub' => '', 'cont' => '', 'org', 'error' => ''];
        }
        $this->view("admin/newActivity", compact('dados'));
    }
    public function Activities()
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $dados = $this->Activity->getAct();
        
        $this->view("admin/activities", compact('dados'));
    }
    public function seeActivity($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        if ($id) {
            $see = $this->Activity->getOne($id);
            
            if ($see) {

            } else {
                die("Problem with message");
            }
        } else {
            die('error');
        }
        $this->view('admin/seeActivity', compact('see'));
    }
    public function deleteActivity($id)
    {
        if (!Sessao::session()) {
            Url::redireciona("admin");
        }
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_SPECIAL_CHARS);
        if ($id and $method == "POST") {
            if ($_POST['delete']) {
                $delete = $this->Activity->deleteAct($id);
                if ($delete) {
                    Sessao::sms("act", "deletada com sucesso");
                    Url::redireciona("admin/activities");
                    exit;
                } else {
                    die("Error Model");
                }
            } else {
                die('You didnt click in button');
            }
        } else {

            die("Invalid GET request method");
        }
    }

    // <!-- ========== End Actividades ========== -->
}
