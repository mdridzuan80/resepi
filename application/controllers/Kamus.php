<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamus extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		renderView("dashboard/show");
	}

	public function bahan_show()
	{
		$this->load->model("mbahan");
		$data["items"] = $this->mbahan->getAll();
		renderView("kamus/bahan/show",$data);
	}

	public function bahan_add()
	{
		if($this->isPost())
        {
			$this->load->model("mbahan");
            $bahan = $this->input->post("bahan");
            if($this->mbahan->add($bahan))
            {
                redirect("/kamus/bahan");
            }
        }
		renderView("kamus/bahan/add");
	}
	public function bahan_edit($id)
	{
		$this->load->model("mbahan");
		if($this->isPost())
        {
            $bahan = $this->input->post("bahan");
            if($this->mbahan->edit($id, $bahan))
            {
                redirect("/kamus/bahan");
            }
        }
		$data["item"] = $this->mbahan->find($id);
		renderView("kamus/bahan/edit", $data);
	}

	public function bahan_delete($id)
	{
		$this->load->model("mbahan");
		if($this->mbahan->delete($id))
		{
			redirect("/kamus/bahan");
		}
	}
}
