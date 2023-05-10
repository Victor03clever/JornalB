<?php

namespace App\Models;

use App\Helpers\Valida;
use App\Libraries\Conexao;

class Honra
{
    private $db;
    public function __construct()
    {
        $this->db = new Conexao();
    }
    public function saveHonra($data)
    {
        $this->db->query("INSERT INTO honra(path,curso,nome,media) VALUES (:path,:curso,:nome,:media)");
        $this->db->bind(":path", $data['img']);
        $this->db->bind(":curso", $data['curso']);
        $this->db->bind(":nome", $data['nome']);
        $this->db->bind(":media", $data['media']);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function updateNews($data, $id)
    {
        $this->db->query("UPDATE noticia SET tema=:tema, descricao=:descricao,  status=:status WHERE id=:id");
        $this->db->bind(":tema", $data['title']);
        $this->db->bind(":descricao", $data['desc']);
        $this->db->bind(":status", "1");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteNews($id)
    {
        $this->db->query("DELETE FROM noticia WHERE id=:id");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function getHonrados()
    {
        $this->db->query("SELECT * FROM honra");
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultados();
        } else {
            return false;
        }
    }
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM noticia WHERE id=:id");
        $this->db->bind(":id", $id);
        if ($this->db->executa() and $this->db->total()) {
            return $this->db->resultado();
        } else {
            return false;
        }
    }
}
