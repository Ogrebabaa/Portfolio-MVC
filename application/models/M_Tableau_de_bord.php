<?php

class M_Tableau_de_bord extends CI_Model {

	private $id_Tableau_de_bord;	
	private $login_Admin;
	private $motDePasse;
    private $delete;


/** =================================
 * 
 *             Global
 * 
 * =================================
 */
 	
 
   /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */


    /** =================================
     * 
     *             SETTERS
     * 
     * ===============================
     */



 

    
        //supprime un enregistrement dans le Tableau de bord

        public function tb_delete ($delete, $id_Tableau_de_bord) {
        $this->load->database();

        $query = "DELETE FROM $delete WHERE id_Tableau_de_bord = ?";
        $this->db->query($query, array($id_Tableau_de_bord));
      
	    }
		
     }

?>
