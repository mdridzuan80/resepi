<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mresepi extends CI_Model
{
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "resepi";
    }

    public function getAll()
    {
        $sql = "SELECT * FROM ".$this->table;
        return $this->db->query($sql);
    }

    public function add($bahan)
    {
        $this->db->set('nama', $bahan[0]);
        $this->db->set('keterangan', $bahan[1]);
        return $this->db->insert($this->table);
    }

    public function edit($id, $bahan)
    {
        $this->db->set('bahan', $bahan);
        $this->db->where("id", $id);
        return $this->db->update($this->table);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM ".$this->table."
                WHERE id = $id";
        return $this->db->query($sql);
    }

    public function delete($id)
    {
        return $this->db->where("id", $id)->delete($this->table);
    }
}
