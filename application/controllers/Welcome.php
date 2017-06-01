<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("mbahan");
		$data["items"] = $this->mbahan->getAll();
		renderView("dashboard/show", $data);
	}
}
