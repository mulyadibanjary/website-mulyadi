<?php 

/**
 * 
 */
class about extends Controller
{
	
	public function index($nama='Mulyadi',$pekerjaan='Programmer')
	{
		$data['judul']='About Me';
		$this->view('templates/header',$data);
		$data['nama']=$nama;
		$data['pekerjaan']=$pekerjaan;
		$this->view('about/index',$data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['judul']='Pages';
		$this->view('templates/header',$data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}