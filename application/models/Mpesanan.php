<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpesanan extends CI_Model
{
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "pesanan";
    }

    public function getAll()
    {
        $sql = "SELECT * FROM ".$this->table;
        return $this->db->query($sql);
    }

    public function add($bahan)
    {
        $this->db->set('resepi_id', $bahan[0]);
        $this->db->set('tarikh', $bahan[1]);
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

    public function delete($id)
    {
        return $this->db->where("id", $id)->delete($this->table);
    }

    public function getJumlahAmaun($bahanid)
    {
        $sql = "SELECT
                Sum(resepi_bahan.amaun) AS total_amaun
                FROM
                pesanan
                INNER JOIN resepi_bahan ON pesanan.resepi_id = resepi_bahan.resepi_id
                WHERE resepi_bahan.bahan_id = ?";
        return $this->db->query($sql, [$bahanid]);
    }

}
