<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aset_model extends CI_Model
{

private $_table = "aset";

public $aset_id;
public $kode;
public $nama;
public $kategori;
public $ruangan;
public $tanggal inventaris;	
public $batas pemakaian;

public function rules()
{
	return [
		['field' => 'kode',
		'label' => 'Kode',
		'rules' => 'required'],

		['field' => 'nama',
		'label' => 'Nama',
		'rules' => 'required'],

		['field' => 'kategori',
		'label' => 'Kategori',
		'rules' => 'required'],

		['field' => 'ruangan',
		'label' => 'Ruangan',
		'rules' => 'required'],

		['field' => 'tanggal inventaris',
		'label' => 'Tanggal Inventaris',
		'rules' => 'date'],

		['field' => 'batas pemakaian',
		'label' => 'Batas Pemakaian',
		'rules' => 'required'],
	];
}
	
	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["aset_id" => $id])->row();
	}
	public function save()
	{
		$post = $this->input->post();
		$this->aset_id = uniqid();
		$this->kode = $post["kode"];
		$this->nama = $post["nama"];
		$this->kategori = $post["kategori"];
		$this->ruangan = $post["ruangan"];
		$this->tanggal inventaris = $post["tanggal inventaris"];
		$this->batas pemakaian = $post["batas pemakaian"];
		return $this->db->insert($this->table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->aset_id = $post["id"];
		$this->kode = $post["kode"];
		$this->nama = $post["nama"];
		$this->kategori = $post["kategori"];
		$this->ruangan = $post["ruangan"];
		$this->tanggal inventaris = $post["tanggal inventaris"];
		$this->batas pemakaian = $post["batas pemakaian"];
		return $this->db->update($this->table, $this, array('aset_id' => $post['id']));
	}
	public function delete($id)
	{
		return $this->db->delete($this->table, array('aset_id' => $id));
	}
}