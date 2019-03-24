<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
   
    public function __construct() 
        {
	        parent::__construct();  
	        
	    }
	public function index()
		{
			if($this->input->post())
				{
			       $var=$this->input->post();
			       $var['password']=sha1($var['password']);
			       $chk=$this->mdb->getData('user',$var);
			       if(!empty($chk)) {
												
						$this->session->set_userdata('abc',$chk);
						redirect('dashboard');
			       }
			        
			       else{
			       	redirect('login');
			       }
			    }
			    
			$this->load->view('login');
		}






}