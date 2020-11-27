 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class C_Contact extends CI_Controller {	


	
/** =================================
 * 
 *             Global
 * 
 * =================================
 */
 
 



				

	    public function index() {
		
	    //variable
	    $data["title"] = "Contact";     
	   
	    //load
        $this->load->model('M_Message');
        $this->load->view('Layout');
		
		
        //export
        $this->load->view('V_Message', $data);
		        
        
        }

		   
		   
		   
		       //ajoute un message a la bdd,  via formulaire
               public function add_message() {
               $this->load->model('M_Message');

               //test si les données ont été renseigné
               if(!empty($_POST)) {
		       $nom_Message = $_POST["nom_Message"];
		       $prenom_Message = $_POST["prenom_Message"];
		       $mail_Message = $_POST["mail_Message"];
               $objet_Message = $_POST["objet_Message"];
		       $contenu_Message = $_POST["contenu_Message"];

               $nom_Message = $this->input->post('nom_Message');
               $prenom_Message = $this->input->post('prenom_Message');
               $mail_Message = $this->input->post('mail_Message');
               $objet_Message = $this->input->post('objet_Message');
               $contenu_Message = $this->input->post('contenu_Message');
	


               $this->M_Message->set_message($nom_Message, $prenom_Message, $mail_Message, $objet_Message, $contenu_Message);

               $base_url = base_url();
               header("location: $base_url/C_Accueil");
               } else {
               return "Veuillez remplir les champs.";
                    }
               }
			   
			   
			   
			   
     /** =================================
     * 
     *             GETTERS
     * 
     * =================================
	 
	 
	 		
	
     /** =================================
     * 
     *             SETTERS
     * 
     * =================================
     */
      
}   
  
?>
