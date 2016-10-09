<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		$this->load->library(array('form_validation', 'session', 'table', 'bcrypt', 'encrypt', 'email', 'typography'));
		$this->load->helper(array('date', 'array', 'html', 'url', 'form'));
		
			

	}
	 
	
	
 
	function dashboard(){
		$this->load->view('dash');				
	}	 
	
	// Loading the login view
	function login(){
		$this->load->view('login'); 
	}
		
	// Codeigniter welcome page
	function welcome(){
		$this->load->view('welcome_message');
	}
	
	
	
	



}

?>
