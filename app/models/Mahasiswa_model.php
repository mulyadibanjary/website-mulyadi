<?php 

class Mahasiswa_model
{
	/*
	private $mhs=[
		[
			"nama" => "Mulyadi",
			"nrp" => "0204141024",
			"email" => "mulyadi.mulyadi9620@gmail.com",
			"jurusan"=>"Teknik Informatika"	
		],
		[
			"nama" => "Indra",
			"nrp" => "0204141025",
			"email" => "indra.lesmana@gmail.com",
			"jurusan"=>"Teknik Informatika"	
		]
	];
	*/


	private $table='mhs';
	private $db;

	public function __construct()
	{
		$this->db=new Database;
	}

	public function getAllMahasiswa()
	{

		$this->db->query('SELECT * FROM '.$this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id)
	{

		$this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id' );
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data)
	{
		$query="INSERT INTO mhs
			VALUES ('',:nama_lengkap,:nrp,:email,:jurusan)
		";
		$this->db->query($query);

		$this->db->bind('nama_lengkap',$data['nama_lengkap']);
		$this->db->bind('nrp',$data['nrp']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('jurusan',$data['jurusan']);	
		$this->db->execute();
		
		return $this->db->rowCount();

	}


}