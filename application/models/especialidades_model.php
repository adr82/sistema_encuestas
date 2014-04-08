<?php

class Especialidades_Model extends CI_Model
{

    private $table = 'especialidades';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get()
    {
        return $this->db->get($this->table)->result();
    }
}


?>