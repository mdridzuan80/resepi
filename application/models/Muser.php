<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Muser extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUser($username)
    {
        $sql = "SELECT * FROM users
                WHERE username = ?";
        return $this->db->query($sql, [$username]);
    }
}
