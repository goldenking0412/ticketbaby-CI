<?php
#session_start();
class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library("adminauthex2");

        if( ! $this->adminauthex2->logged_in())
        {
            redirect('music', 'music/Welcome');
            exit;
        }
    }

		public function index()
		{
        $this->adminauthex->logout();
  		  redirect('music/login', 'refresh');
		}
}