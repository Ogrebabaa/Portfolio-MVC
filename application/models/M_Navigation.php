<?php

class M_Navigation extends CI_Model {

    public $id_nav;
    public $libelle;
    public $lien;


    /** =================================
     * 
     *             Global
     * 
     * =================================
     */


     //recupere tout les projets
    public function get_nav() {
        $this->load->database();
        $query = $this->db->get('PFC_Navigation');
        return $query->result();
    }

    /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */

    

    /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */
    

}


?>

