<?php

class M_Message extends CI_Model   {
	
	public $id_Message;
    public $nom_Message;
	public $prenom_Message;
	public $mail_Message;
    public $objet_Message;
    public $contenu_Message;


/** =================================
 * 
 *             Global
 * 
 * =================================
 */

  
			   public function set_message($nom_Message, $prenom_Message, $mail_Message, $objet_Message,  $contenu_Message) {
      
		   
		      
		
        $this->load->database();
      
        $data = array(
            'nom_Message'=> $nom_Message,
			'prenom_Message'=> $prenom_Message,
			'mail_Message'=> $mail_Message,			  
		    'objet_Message'=> $objet_Message,
		    'contenu_Message'=> $contenu_Message
		
        );

        $this->db->insert('pfc_message', $data);

    }
 


	
     /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */
	 
	   // On récupère tout les messages de la table pfc_message

        public function get_all_message() {
        $this->load->database();
	    $query = $this->db->get('SELECT * FROM pfc_message');
        return $query->fetch();

		 
        }		
		
	    // On récupère dans la table pfc_message avec id_message

        public function get_all_message_by_id($id_Message) {
        $this->load->database();
		
        $query = $this->db->get("SELECT * FROM pfc_message WHERE id_Message = ?");
        return $query->result();
		 
        }		
		
        // On récupère dans la table pfc_message

        public function get_mail() {
        $this->load->database();

        $query = ("SELECT mail_Message FROM pfc_message");
        $this->db->query($query);
        return $query->result();

        }

        // On récupère dans la table pfc_message

        public function get_objet() {
        $this->load->database();

        $query = ("SELECT objet_Message FROM pfc_message");
        $this->db->query($query);
        return $query->result();

        }

        // On récupère dans la table pfc_message
		
        public function get_contenu() {
        $this->load->database();

        $query = ("SELECT contenu_Message FROM pfc_message");
        $this->db->query($query);
        return $query->result();

        }

	

    /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */

 

	
        //supprime un message de la table pfc_message

        public function delete_message($id_Message) {
        $this->load->database();

        $query = "DELETE FROM pfc_message WHERE id_Message = ?";
        $this->db->query($query, array($id_message));

        }
 

  }

?>

