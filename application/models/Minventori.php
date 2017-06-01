<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Minventori extends CI_Model
{
    private $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = "inventori_bahan";
    }

    public function getAll()
    {
        $sql = "SELECT * FROM ".$this->table;
        return $this->db->query($sql);
    }

    public function add($inv)
    {
        $this->db->set('bahan_id', $inv[0]);
        $this->db->set('amaun', $inv[1]);
        $this->db->set('tarikh', $inv[2]);
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
        $sql = "SELECT * FROM ".$this->table." WHERE id = $id";
        return $this->db->query($sql);
    }

    public function where($field, $value)
    {
        $this->db->where($field, $value);
        return $this;
    }

    public function get()
    {
        return $this->db->get($this->table);
    }

    public function delete($id)
    {
        return $this->db->where("id", $id)->delete($this->table);
    }

    public function getJumlahAmaun($bahanid)
    {
        $sql = "SELECT sum(amaun) as total_amaun FROM " . $this->table . " WHERE bahan_id = ?";
        return $this->db->query($sql,[$bahanid]);
    }
}
