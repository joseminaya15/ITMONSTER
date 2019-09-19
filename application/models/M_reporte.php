<?php

class M_reporte extends  CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getDatosUser() {
        $sql = "SELECT * FROM contact";
        $result = $this->db->query($sql);
        return $result->result();
    }
    function getDatosSurvey() {
        $sql = "SELECT * FROM survey";
        $result = $this->db->query($sql);
        return $result->result();
    }
}