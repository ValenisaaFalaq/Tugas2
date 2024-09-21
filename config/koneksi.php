<?php
// membuat class database (parent class) yang akan mengkoneksikan dengan database php myadmin
class database{

	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "pweb2"; 
	public $koneksi = "";

	// function construct adalah fungsi untuk menyambungkan koneksi ke database
	public function __construct(){
		 $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);

		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	// fngsi untuk menampilkan seluruh data mahasiswa (inheritance)
    public function tampil_data_mahasiswa(){

        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;

    }

	// fungsi untuk menampilkan seluruh data nilai perbaikan (inheritance)
    public function tampil_data_perbaikan(){
        $data = mysqli_query($this->koneksi, "select * from nilai_perbaikan");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

	// fungsi yang akan mencetak judul halaman (polymorphism)
	public function judulpage(){
		echo "Hallo Selamat Datang";
	}
}
class mahasiswa extends database{

	// override fungsi judulpage (polymorphism)
	public function judulpage(){
		echo "Data Diri Mahasiswa";
	}

}

class nilai extends database{

	// override fungsi judulpage (polymorphism)
	public function judulpage(){
		echo "Nilai Remidi";
	}

	// fungsi hanya menampilkan sesuai dengan matkul_id nya saja (polymorphism)
	public function matkul_remidi($matkul_id){
		$data = mysqli_query($this->koneksi, "select * from nilai_perbaikan where matkul_id ='$matkul_id'");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
	} 
    
}

// polymorph untuk judulpage
class page {
	public function judul(database $tampil){
		echo $tampil->judulpage();
	}
}
?>