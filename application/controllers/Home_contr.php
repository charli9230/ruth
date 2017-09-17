<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_contr extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    // Your own constructor code
    }



	public function index()
	{
		$this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('home');
        $this->load->view('footer');
	}
}
