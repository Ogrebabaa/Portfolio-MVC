<?php

class M_Projet extends CI_Model {

    public $id;
    public $nom;
    public $derniere_maj;
    public $description;

    public function get_all_project() {
        $this->load->database();
        $query = $this->db->get('PFC_Projet');
        return $query->result();
    }

    public function get_project_by_id($id) {
        $this->load->database();
        $query = $this->db->query("SELECT nom, derniere_maj, description FROM PFC_PROJET WHERE id = $id");
        return $query->result();
    }

    public function add_project($nom, $description, $lien) {
        $this->load->database();
        $now = date("Y-m-d H:i:s");

        $data = array(
            'nom' => $nom,
            'description' => $description,
            'derniere_maj' => $now,
            'lien' => $lien
        );

        $this->db->insert('PFC_PROJET', $data);

    }

}


?>

