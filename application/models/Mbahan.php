<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mbahan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM dict_bahan";
        return $this->db->query($sql);
    }

    public function add($bahan)
    {
        $this->db->set('bahan', $bahan[0]);
        $this->db->set('min_alert', $bahan[1]);
        return $this->db->insert('dict_bahan');
    }

    public function edit($id, $bahan)
    {
        $this->db->set('bahan', $bahan[0]);
        $this->db->set('min_alert', $bahan[1]);
        $this->db->where("id", $id);
        return $this->db->update('dict_bahan');
    }

    public function find($id)
    {
        $sql = "SELECT * FROM dict_bahan
                WHERE id = $id";
        return $this->db->query($sql);
    }

    public function delete($id)
    {
        return $this->db->where("id", $id)->delete("dict_bahan");
    }
}
