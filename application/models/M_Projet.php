<?php

class M_Projet extends CI_Model {

    public $id;
    public $nom;
    public $derniere_maj;
    public $description;

    /** =================================
     * 
     *             Global
     * 
     * =================================
     */


     //recupere tout les projets
    public function get_all_project() {
        $this->load->database();
        $query = $this->db->get('PFC_Projet');
        return $query->result();
    }

    // recupere un projet via son id
    public function get_project_by_id($id) {
        $this->load->database();
        $query = $this->db->query("SELECT nom, derniere_maj, description FROM PFC_PROJET WHERE id = $id");
        return $query->result();
    }

    //ajoute un projet
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

    //supprime un projet
    public function rm_project($id) {
        $this->load->database();

        $query = "DELETE FROM PFC_PROJET WHERE id = ?";
        $this->db->query($query, array($id));


    }

    /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */

    public function set_name($id, $nom) {
        $this->load->database();

        $query = "UPDATE PFC_PROJET SET nom = ? WHERE id = ?";
        $this->db->query($query, array($nom, $id));


    }

    public function set_description($id, $description) {
        $this->load->database();

        $query = "UPDATE PFC_PROJET SET description = ? WHERE id = ?";
        $this->db->query($query, array($description, $id));


    }

    public function set_lien($id, $lien) {
        $this->load->database();

        $query = "UPDATE PFC_PROJET SET lien = ? WHERE id = ?";
        $this->db->query($query, array($lien, $id));


    }

    /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */
    public function get_name($id) {
        $this->load->database();

        $query = "SELECT nom FROM PFC_PROJET WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }

    public function get_description($id) {
        $this->load->database();

        $query = "SELECT description FROM PFC_PROJET WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }

    public function get_lien($id) {
        $this->load->database();

        $query = "SELECT lien FROM PFC_PROJET WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }

}


?>

