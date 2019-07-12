<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view("admin/home");
	}

	public function profil()
	{
        $this->load->view("admin/v_profil.php");
	}
}