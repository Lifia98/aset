<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$isLogedIn = true;
		if($isLogedIn == true) {
		$this->load->view('welcome_message');
		} else {
		$this->load->view('iki_login');
		}
	}
	public function about()
	{
		$this->load->view('about.php');
	}
	public function contact()
	{
		$this->load->view('contact.php');
	}
}
