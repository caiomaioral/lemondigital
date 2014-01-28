<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    
		$this->load->model('home_model');
	}
	 
    public function index()
    {
		$this->usable('home');
    }
}