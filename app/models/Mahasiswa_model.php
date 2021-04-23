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
}