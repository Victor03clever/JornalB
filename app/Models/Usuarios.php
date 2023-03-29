<?php
namespace App\Models;

use App\Helpers\Valida;
use App\Libraries\Conexao;

class Usuarios {
   private $db;
    public function __construct()
    {
       $this->db = new Conexao();
    }
    
   
    public function checalogin($data){
        $this->db->query("SELECT * FROM user WHERE nome=:nome");
        $this->db->bind(':nome',$data['username']);
        $this->db->executa();
        if($this->db->executa() AND $this->db->total()):
            $resultado=$this->db->resultado();
        
                 if (password_verify($data['password'], $resultado['senha'])) :
                    return $resultado;
                else:
                    return false;
                endif;
                
        else:
            return false;
        endif;
    }
    public function usuarioRead($id)
    {
        $this->db->query("SELECT * FROM user WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->executa();
        if ($this->db->executa() and $this->db->total()) :
           return $this->db->resultado();
        endif;
    }
    public function newpass($data, int $id)
    {
        $this->db->query("UPDATE user SET senha=:senha WHERE id=:id");
        $this->db->bind(':senha',$data['novasenha']);
        $this->db->bind(':id',$id);
        if ($this->db->executa() AND $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
    public function newname($data, int $id)
    {
        $this->db->query("UPDATE user SET nome=:nome WHERE id=:id");
        $this->db->bind(':nome',$data['nome']);
        $this->db->bind(':id',$id);
        if ($this->db->executa() AND $this->db->total()) {
            return true;
        } else {
            return false;
        }
    }
}