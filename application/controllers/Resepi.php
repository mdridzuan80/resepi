<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepi extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("mresepi");
		$data["items"] = $this->mresepi->getAll();
		renderView("resepi/show", $data);
	}

	public function add()
	{
		if($this->isPost())
		{
			$this->load->model("mresepi");
			$nama = $this->input->post("nama");
			$keterangan = $this->input->post("ketrangan");
			if($this->mresepi->add([$nama, $keterangan]))
			{
				redirect("resepi");
			}
		}

		renderView("resepi/add");
	}

	public function delete($id)
	{
		$this->load->model("mresepi");
		$this->mresepi->delete($id);

		redirect("resepi/");
	}

	public function bahan($id)
	{
		$this->load->model("mresepi");
		$this->load->model("mresepi_bahan");
		$data["item"] = $this->mresepi->find($id);
		$data["items"] = $this->mresepi_bahan->where("resepi_id = ", $id)->get();
		renderView("resepi/show_bahan",$data);
	}

	public function bahan_add($id)
	{
			$this->load->model("mbahan");
		if($this->isPost())
		{
			$this->load->model("mresepi_bahan");
			$bahan_id = $this->input->post("bahanid");
			$amaun = $this->input->post("amaun");
			if($this->mresepi_bahan->add([$id, $bahan_id, $amaun]))
			{
				redirect("resepi/bahan/$id");
			}

		}

		$this->load->model("mresepi");
		$data["item"] = $this->mresepi->find($id);
		$data["bahan2"] = $this->mbahan->getAll();
		renderView("resepi/bahan_add",$data);
	}

	public function hapus_bahan($id)
	{
		$this->load->model("mresepi_bahan");
		$item = $this->mresepi_bahan->find($id);
		$this->mresepi_bahan->delete($id);

		redirect("resepi/bahan/".$item->row()->resepi_id);
	}
}
