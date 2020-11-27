<?php

class M_Article extends CI_Model {

    private $id;
    private $titre;
    private $lien;
    private $corp;
    private $date_publication;
    private $auteur;

    /** =================================
     * 
     *             Global
     * 
     * =================================
     */

    /**
     * Renvois tout les articles
     */
    public function get_articles() {
        $this->load->database();
        $query = $this->db->get('PFC_Article');
        return $query->result();
    }

     /**
     * Renvois des articles sous condition
     */
    public function get_articles_where($clause) {
        $this->load->database();

        if ($clause != "") {
            $query = $this->db->query("SELECT * FROM PFC_Article WHERE $clause");
        } else {
            //si la clause est erroné/vide, renvois tout les articles : a completer avec regex
            $clause = "1 = 1";
            $query = $this->db->query("SELECT * FROM PFC_Article WHERE $clause");
        }
        
        return $query->result();
    }

    /**
     * 
     * Ajoute un article dans la base
     * 
     */
    public function add_Articles($titre, $lien, $corp, $date_publication, $auteur) {
        $this->load->database();
        $now = date("Y-m-d H:i:s");

        if ($date_publication == "") {
            //alors on met la date de maintenant
            $date_publication = $now;
        }

        $data = array(
            'titre' => $titre,
            'lien' => $lien,
            'date_publication' => $date_publication,
            'corp' => $corp,
            'auteur' => $auteur
        );

        $this->db->insert('PFC_Article', $data);

    }

    /**
     * 
     * supprime un article
     * 
     */
    public function rm_article($id) {
        $this->load->database();

        $query = "DELETE FROM PFC_Article WHERE id = ?";
        $this->db->query($query, array($id));

    }


    /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */

    public function set_titre($id, $titre) {
        $this->load->database();

        $query = "UPDATE PFC_Article SET titre = ? WHERE id = ?";
        $this->db->query($query, array($titre, $id));


    }

    public function set_lien($id, $lien) {
        $this->load->database();

        $query = "UPDATE PFC_Article SET lien = ? WHERE id = ?";
        $this->db->query($query, array($lien, $id));


    }

    public function set_date_publication($id, $date_publication) {
        $this->load->database();

        $query = "UPDATE PFC_Article SET date_publication = ? WHERE id = ?";
        $this->db->query($query, array($date_publication, $id));


    }

    public function set_corp($id, $corp) {
        $this->load->database();

        $query = "UPDATE PFC_Article SET corp = ? WHERE id = ?";
        $this->db->query($query, array($corp, $id));


    }

    public function set_auteur($id, $auteur) {
        $this->load->database();

        $query = "UPDATE PFC_Article SET auteur = ? WHERE id = ?";
        $this->db->query($query, array($auteur, $id));


    }
    

    /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */

    public function get_titre($id) {
        $this->load->database();

        $query = "SELECT titre FROM PFC_Article WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }

    public function get_auteur($id) {
        $this->load->database();

        $query = "SELECT auteur FROM PFC_Article WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }

    public function get_lien($id) {
        $this->load->database();

        $query = "SELECT lien FROM PFC_Article WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }

    public function get_date_publication($id) {
        $this->load->database();

        $query = "SELECT date_publication FROM PFC_Article WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }

    public function get_corp($id) {
        $this->load->database();

        $query = "SELECT corp FROM PFC_Article WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }
}


?>