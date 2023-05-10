<?php

namespace App\Models;

use App\Helpers\Valida;
use App\Libraries\Conexao;

class Activity
{
    private $db;
    public function __construct()
    {
        $this->db = new Conexao();
    }
    public function saveAct($data)
    {
        $this->db->query("INSERT INTO atividade(tema,subtema,descricao,organizador,img) VALUES (:tema,:subtema,:descricao,:organizador,:img)");
        $this->db->bind(":tema", $data['tema']);
        $this->db->bind(":subtema", $data['sub']);
        $this->db->bind(":descricao", $data['cont']);
        $this->db->bind(":organizador", $data['org']);
        $this->db->bind(":img", $data['img']);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function updateAct($data, $id)
    {
        $this->db->query("UPDATE atividade SET nome=:nome, curso=:curso,  media=:media WHERE id=:id");
        $this->db->bind(":nome", $data['nome']);
        $this->db->bind(":curso", $data['curso']);
        $this->db->bind(":media", $data['media']);
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteAct($id)
    {
        $this->db->query("DELETE FROM atividade WHERE id=:id");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function getAct()
    {
        $this->db->query("SELECT * FROM atividade");
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultados();
        } else {
            return false;
        }
    }
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM atividade WHERE id=:id");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultado();
        } else {
            return false;
        }
    }
}
