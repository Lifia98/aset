<?php
define(BASEPATH) OR exit('No direct script access allowed');

class Aset extends CI_Controller
{
	
	public function__construct()
	{
		parent::__construct();
		$this->load->model("aset_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["aset"] = $this->aset_model->getAll();
		$this->load->view("admin/aset/list, $data");
	}
	public function add()
	{
		$aset = $this->aset_model;
		$validation = $this->form_validation;
		$validation->set_rules($aset->rules());

		if ($validation->run()) {
			$aset->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}
		$this->load->view("admin/aset/new_form");
	}
	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/aset');

		$aset = $this->aset_model;
		$validation = $this->form_validation;
		$validation->set_rules($aset->rules());

		if ($validation->run()) {
			$aset->update();
			$this->session->set_flashdata('success','Berhasil disimpan');

		}
		$data["aset"] = $aset->getById($id);
		if (!$data["aset"]) show_404();

		$this->load->view("admin/aset/edir_form", $data);

	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->aset_model->delete($id)) {
			redirect(site_url('admin/aset'));
		}

	}
}