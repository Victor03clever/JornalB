<?php

namespace App\Models;

use App\Helpers\Valida;
use App\Libraries\Conexao;

class Home
{
    private $db;
    public function __construct()
    {
        $this->db = new Conexao();
    }

    // contact
    public function sendMessage($dados)
    {
        $this->db->query("INSERT INTO contato(nome, numero, assunto, mensagem) VALUES(:nome, :numero, :assunto, :mensagem)");
        $this->db->bind(":nome", $dados['name']);
        $this->db->bind(":numero", $dados['number']);
        $this->db->bind(":assunto", $dados['subject']);
        $this->db->bind(":mensagem", $dados['message']);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function getMessages()
    {
        $this->db->query("SELECT * FROM contato");
        if ($this->db->executa() and $this->db->total()) {

            return $this->db->resultados();
        } else {
            return false;
        }
    }
    public function getMessageByOne($id)
    {
        $this->db->query("SELECT * FROM contato WHERE id=:id");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultado();
        } else {
            return false;
        }
    }
    public function deleteMessage($id)
    {
        $this->db->query("DELETE FROM contato WHERE id=:id");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }

    // Calculando total das tabelas
    // tabela total
    public function totalTable()
    {
        $this->db->query("SELECT * FROM total WHERE id='1'");
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultado();
        } else {
            return false;
        }
    }

    // total de honra
    public function totalHonra()
    {
        $this->db->query("SELECT count(id) as totalHonra FROM honra");
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultado();
        } else {
            return false;
        }
    }
    // total de Noticia
    public function totalNoticia()
    {
        $this->db->query("SELECT count(id) as totalNoticia FROM noticia");
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultado();
        } else {
            return false;
        }
    }
    // total de Actividade
    public function totalActividade()
    {
        $this->db->query("SELECT count(id) as totalActividade FROM atividade");
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultado();
        } else {
            return false;
        }
    }

    // actualizando dados da tabela total
    public function updateTotal($data)
    {
        $this->db->query("UPDATE total SET aluno=:aluno, prof=:prof, salas=:salas WHERE id='1'");
        $this->db->bind(":aluno", $data['aluno']);
        $this->db->bind(":prof", $data['prof']);
        $this->db->bind(":salas", $data['salas']);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }

    // ====================
    // Salvar avisos no bd
    public function saveAviso($data)
    {
        $this->db->query("INSERT INTO aviso(tema,descricao) VALUES (:tema,:descricao)");
        $this->db->bind(":tema", $data['title']);
        $this->db->bind(":descricao", $data['sms']);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function updateAviso($data,$id)
    {
        $this->db->query("UPDATE aviso SET tema=:tema, descricao=:descricao WHERE id=:id");
        $this->db->bind(":tema", $data['title']);
        $this->db->bind(":descricao", $data['sms']);
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteAviso($id)
    {
        $this->db->query("DELETE FROM aviso WHERE id=:id");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function getAvisos(){
        $this->db->query("SELECT * FROM aviso");
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultados();
        } else {
            return false;
        }
    }
    public function getAviso($id){
        $this->db->query("SELECT * FROM aviso WHERE id=:id");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultado();
        } else {
            return false;
        }
    }
}
