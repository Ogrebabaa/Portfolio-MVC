<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tableau_de_bord extends CI_Controller {
	
	

	
/** =================================
 * 
 *             Global
 * 
 * =================================
 */
      function __construct() {
		parent::__construct();
		
	}
	
	function index() {
	
        //variable
	    $data["title"] = "Tableau_de_bord";
       
	   
	    //load
	    
		$this->load->model('M_Tableau_de_bord');
        $this->load->model('M_Admin');
        $this->load->model('M_Message');
        $this->load->view('Layout');
		
		
        //export
        $this->load->view('V_Tableau_de_bord', $data);
        }




              //ajoute un admin a la bdd, via formulaire dans le tb
               public function add_admin() {
               $this->load->model('M_Admin');

               //test si les données ont été renseigné
               if(!empty($_POST)) {
		       $nom_Admin = $_POST["nom_Admin"];
		       $prenom_Admin = $_POST["prenom_Admin"];
               $login_Admin = $_POST["login_Admin"];
		       $motDePasse =  $_POST["motDePasse"];

               $nom_Admin = $this->input->post('nom_Admin');
               $prenom_Admin = $this->input->post('prenom_Admin');
               $login_Admin = $this->input->post('login_Admin');
               $motDePasse = $this->input->post('motDePasse');

	


               $this->M_Admin->set_admin($nom_Admin, $prenom_Admin, $login_Admin, $motDePasse);

               $base_url = base_url();
               header("location: $base_url/C_Tableau_de_bord");
               } else {
               return "Veuillez remplir les champs.";
                    }
               }



	 /** =================================
     * 
     *             GETTERS
     * 
     * =================================
     */


	 
	   //recupere tout les messages
	
        public function get_message() {
		$this->load->model('M_Message');
		$this->M_Message->get_all_message();
		 
        
    }

	


	    //change le nom admin
        public function change_name() {
        $this->load->model('M_Admin');

        if (isset($_POST['id_Admin']) && isset($_POST['new_nom_Admin'])) {
            if (!empty($_POST['id_Admin']) && empty($_POST['new_nom_Admin'])){
                $id_Admin = $this->input->post('id_Admin');
                $nom_Admin = $this->input->post('new_nom_Admin');
                
                $this->M_Admin->set_nom($id_Admin, $nom_Admin);

                
            } else {
                return "Veuillez renseigner un nom.";
            }
        }

        $base_url = base_url();
        header("location: $base_url/C_Tableau_de_bord");

	}

         //change prenom admin
         public function change_prenom() {
         $this->load->model('M_Admin');

        if (isset($_POST['id_Admin']) && isset($_POST['new_prenom_Admin'])) {
            if (!empty($_POST['id_Admin']) && isset($_POST['new_prenom_Admin'])){
                $id_Admin = $this->input->post('id_Admin');
                $prenom_Admin = $this->input->post('new_prenom_Admin');
                
                $this->M_Admin->set_prenom($id_Admin, $prenom_Admin);

                
            } else {
                return "Veuillez renseigner une description.";
            }
        }

        $base_url = base_url();
        header("location: $base_url/C_Tableau_de_bord");

    }

        //change le login admin
        public function change_login() {
        $this->load->model('M_Admin');

        if (isset($_POST['id_Admin']) && isset($_POST['new_login_Admin'])) {
            if (!empty($_POST['id_Admin']) && isset($_POST['new_login_Admin'])){
                $id_Admin = $this->input->post('id_Admin');
                $login_Admin = $this->input->post('new_login_Admin');
                
                $this->M_Admin->set_login($id_Admin, $login_Admin);

                $base_url = base_url();
                header("location: $base_url");
            } else {
                return "Veuillez renseigner un login.";
            }
        }

        $base_url = base_url();
        header("location: $base_url/C_Tableau_de_bord");

    }









     /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */

  }	
  
?>
