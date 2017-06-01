<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventori extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("mbahan");
		$data["items"] = $this->mbahan->getAll();
		renderView("inventori/show",$data);
	}

	public function bahan($id)
	{
		$this->load->model("mbahan");
		$this->load->model("minventori");
		$data["item"] = $this->mbahan->find($id);
		$data["items"] = $this->minventori->where("bahan_id = ", $id)->get();
		renderView("inventori/show_bahan",$data);
	}

	public function bahan_add($id)
	{
		if($this->isPost())
		{
			$this->load->model("minventori");
			$tarikh = $this->input->post("tarikh");
			$amaun = $this->input->post("amaun");
			if($this->minventori->add([$id, $amaun, $tarikh]))
			{
				redirect("inventori/$id");
			}

		}

		$this->load->model("mbahan");
		$data["item"] = $this->mbahan->find($id);
		renderView("inventori/bahan_add",$data);
	}

	public function bahan_delete($id)
	{
		$this->load->model("minventori");
		$item = $this->minventori->find($id);
		$this->minventori->delete($id);

		redirect("inventori/".$item->row()->bahan_id);
	}
}
