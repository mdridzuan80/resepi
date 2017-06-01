<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("mpesanan");
		$data["items"] = $this->mpesanan->getAll();
		renderView("pesanan/show",$data);
	}

	public function add()
	{
		if($this->isPost())
		{
			$this->load->model("mpesanan");
			$tarikh = $this->input->post("tarikh");
			$resepi_id = $this->input->post("resepiid");
			if($this->mpesanan->add([$resepi_id, $tarikh]))
			{
				redirect("pesanan");
			}
		}
		$this->load->model("mresepi");
		$data["resepi2"] = $this->mresepi->getAll();
		renderView("pesanan/add", $data);
	}
}
