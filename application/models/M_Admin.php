<?php

class M_Admin extends CI_Model {
  
    private $nom_Admin;
    private $prenom_Admin;
    private $login_Admin;
    private $motDePasse;


    /** =================================
     * 
     *             Global
     * 
     * =================================
     */


	public function __construct()
	{
		parent::__construct();

	}


	public function runadmin() {
		$this->load->database();

		$login_Admin=$_POST['login_Admin'];
		$motDePasse=($_POST['motDePasse']);
		
		$res= $this->db->select("SELECT * FROM `pfc_admin` WHERE login_Admin = '".$login_Admin."' AND motDePasse = '".$motDePasse."'");
		

		
	}
		

		

  
    /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */
	 
       //récuperation des login et mdp admin

	   public function get_admin() { 
       $query = $this->db->query("SELECT * FROM pfc_admin WHERE id_Admin = ?");
	   
       $query ->execute();
       return $query->result();
       }

       // recupere un admin via son id_admin

        public function get_admin_by_id($id_admin) {
        $this->load->database();
		
        $query = $this->db->query("SELECT login_Admin, motDePasse FROM pfc_admin WHERE id_Admin = ?");
        return $query->result();

        }


       /** =================================
       * 
       *             SETTERS
       * 
       * =================================
       */

    
	    //ajoute un admin

        public function set_admin($nom_Admin, $prenom_Admin, $login_Admin, $motDePasse) {

        $this->load->database();
       
		       
        $data = array(
            'nom_Admin'=> $nom_Admin,
			'prenom_Admin'=> $prenom_Admin,
			'login_Admin'=> $login_Admin,			  
		    'motDePasse'=> $motDePasse=md5,

        );

        $this->db->insert('pfc_admin', $data);

    }

        //supprime un admin

        public function delete_admin($id_Admin) {
        $this->load->database(); 
		
        $query = "DELETE FROM pfc_admin WHERE id_Admin = ?";
        $this->db->query($query($id_Admin));

        }
		
		//rename nom admin

        public function set_nom($id_Admin, $nom_Admin) {
        $this->load->database();

        $query = "UPDATE pfc_admin SET nom_Admin = ? WHERE id_Admin = ?";
        $this->db->query($query, array($nom_Admin, $id_Admin));

        }
		
		//rename prenom admin
		
		public function set_prenom($id_Admin, $prenom_Admin) {
        $this->load->database();

        $query = "UPDATE pfc_admin SET prenom_Admin = ? WHERE id_Admin = ?";
        $this->db->query($query, array($prenom_Admin, $id_Admin));

        }
		
	     //rename login admin

         public function set_login($id_Admin, $login_Admin) {
        $this->load->database();

        $query = "UPDATE pfc_admin SET login_Admin = ? WHERE id_Admin = ?";
        $this->db->query($query, array($login_Admin, $id_Admin));

      	}
		
		
        public function getUser($userid) {
        $query = $this->db->where(id,[$id_Admin])->get('users');
        if($query->num_rows() == 1) {
        return $query->row();
               }
        throw new Exception("no user data found");
        }

        public function updatePassword($new_motDePasse, $id_Admin){
        $data = array
		('motDePasse'=> md5($new_motDePasse) );
        if (!$this->db->where('id', $id_Admin)->update('users', $data)){
        throw new Exception('Failed to update password');
           }
        }

   

   }
   
?>





