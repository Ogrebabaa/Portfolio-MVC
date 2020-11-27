<?php

class C_Admin extends CI_Controller {
	
	
	
	
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
	
		$this->load->view('V_Admin');
;
	}
	
	function run(){      

     	$this->load->model('M_Admin');
            $this->M_Admin->runadmin();	
          $base_url = base_url();
                header("location: $base_url/C_Tableau_de_bord");

        }

	

	
	
	/* logging out the user */
	function logout()
	{
		Session::destroy();
		header('location: index');
		exit;
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