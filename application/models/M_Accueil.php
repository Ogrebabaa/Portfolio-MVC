<?php

class M_Accueil extends CI_Model {

public $id;
public $nom;



/** =================================
 * 
 *             Global
 * 
 * =================================
 */


 //recupere tout les projets
public function get_content() {
    $this->load->database();
    $query = $this->db->get('PFC_AccueilContent');
    return $query->result();
}

public function setNom($id, $nom) {
    $this->load->database();
    $query = "UPDATE PFC_AccueilContent SET nom = ? WHERE id = ?";
    $this->db->query($query, array($nom, $id));
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