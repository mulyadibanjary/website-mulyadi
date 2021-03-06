<?php

/**
 * 
 */
class Mahasiswa extends Controller
{
	
	public function index()
	{
		$data['judul']='Daftar Mahasiswa';
		$data['mhs']=$this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('templates/header',$data);
		$this->view('mahasiswa/index',$data);
		$this->view('templates/footer');
	}

	public function cari()
	{
		$data['judul']='Daftar Mahasiswa';
		$data['mhs']=$this->model('Mahasiswa_model')->SearchMahasiswa();
		$this->view('templates/header',$data);
		$this->view('mahasiswa/index',$data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul']='Detail Mahasiswa';
		$data['mhs']=$this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header',$data);
		$this->view('mahasiswa/detail',$data);
		$this->view('templates/footer');
		
	}


	public function tambah()
	{
		
		if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)>0) {
			Flasher::setFlash('berhasil','ditambahkan','success');
			header('location: '.BASEURL.'/mahasiswa');
			exit;
		}else{
			Flasher::setFlash('gagal','ditambahkan','danger');
			header('location: '.BASEURL.'/mahasiswa');
			exit;
		}
		
		//var_dump($_POST);
	}

	public function save()
	{
		
		
		if ($this->model('Mahasiswa_model')->updateDataMahasiswa($_POST)>0) {
			Flasher::setFlash('berhasil','diubah','success');
			header('location: '.BASEURL.'/mahasiswa');
			exit;
		}else{
			Flasher::setFlash('gagal','diubah','danger');
			header('location: '.BASEURL.'/mahasiswa');
			exit;
		}
		
		//var_dump($_POST);
	}

	public function update($id)
	{
		$data['judul']='Detail Mahasiswa';
		$data['mhs']=$this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header',$data);
		$this->view('mahasiswa/edit',$data);
		$this->view('templates/footer');
		
	}
	public function delete($id)
	{
		
		if ($this->model('Mahasiswa_model')->deleteMahasiswa($id)>0) {
			Flasher::setFlash('berhasil','dihapus','success');
			header('location: '.BASEURL.'/mahasiswa');
			exit;
		}else{
			Flasher::setFlash('gagal','dihapus','danger');
			header('location: '.BASEURL.'/mahasiswa');
			exit;
		}
		
		//var_dump($_POST);
	}
	

}