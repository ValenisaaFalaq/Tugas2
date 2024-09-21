# Tugas2 (OOP Based View)

<h2>Menu </h2>
<li>Data Mahasiswa</li>
<li>Data Nilai Perbaikan</li>
<li>Data Perbaikan Matkul DIP</li>
<li>Data Perbaikan Matkul KBD</li>
<li>Data Perbaikan Matkul Matdis</li>

<h2>Fungsi</h2>
<li>Data Mahasiswa</li>
menampilkan seluruh data mahasiswa, menampilkan semua field yang ada di database table mahasiswa
<li>Data Nilai Perbaikan</li>
menampilkan seluruh data nilai mahasiswa dan mahasiswa yang membutuhkan nilai perbaikan di seluruh matkul 
<li>Data Perbaikan Matkul DIP</li>
hanya menampilkan nilai perbaikan untuk mata kuliah Desain Interaksi Pengguna dengan kode matkul MK001
<li>Data Perbaikan Matkul KBD</li>
hanya menampilkan nilai perbaikan untuk mata kuliah Konsep Basis Data dengan kode matkul MK002
<li>Data Perbaikan Matkul Matdis</li>
hanya menampilkan nilai perbaikan untuk mata kuliah Matematika Diskrit dengan kode matkul MK003

<h2>Dokumentasi Pekerjaan</h2>
<h3><li>Menghubungkan ke Database</li></h3>
untuk menghubungkan ke database pertama tama saya membuat folder 'config' yang berisi file koneksi.php. di dalam file koneksi.php berisi class dan function php oop yang nantinya akan dipanggil untuk setiap menu yang dibuat. 
dalam menghubungkan ke databas, kita perlu membuat class bernama database dan menginisiasikan properti yang akan digunakan. menggunakan methode encapsulation kita dapat mengatur batasan untuk property mana saja yang dapat dipakai secara public, private, maupun protected.

![image](https://github.com/user-attachments/assets/d426b0a0-b739-4e97-a88e-db6052634e80)

diatas terlihat bahwa properti yang digunakan memakai metode encapsulation private selain property koneksi. hal ini dipertimbangkan karena properti $koneksi akan dipakai di kelas turunan dari database maupun dipakai oleh kelas database itu sendiri

<h4>membuat function __construct</h4>
methode __construct ini dibuat untuk mengkoneksikan file ke database, sehingga nantinya kita dapat mengambil data data yang ada pad database tersebut

![image](https://github.com/user-attachments/assets/d628e3dc-3ca0-4748-b7ac-68c1419a7040)

perhatikan bahwa $this ini berfungsi untuk mengambil nilai property yang sudah di inisiasi diatas. semua property yang disebutkan harus di deklarasikan terlebih dahulu. syntax if (mysqli_connect_errno()) ini adalah proses ketika koneksi gagal dijalankan maka akan muncul tulisan "Koneksi database gagal" diikuti dengan informasi kegagalan nya di bagian mana.

<h3>Inheritance</h3>
class turunan dari database adalah class mahasiswa dan class nilai. di dalam kelas ini tidak dituliskan function untuk menampilkan data mahasiswa dann data nilai karna sudah diinisiasikan di parent class (class database). 

![image](https://github.com/user-attachments/assets/0f3c08c0-5778-4415-9dd1-8c9c60ef6839)

public function atau methode diatas dituliskan di parent class (class database) setealah function __construct. prosesnya adalah function tampil_data_mahasiswa ini akan mengambil seluruh data yang ada di table mahasiswa.
$hasil[] = $row merupakan inisiasi array
return $hasil gunanya untuk mengembaikan nilai hasil sehingga nantinya data bisa dicetak.
untuk menampilkan data mahasiswa dengan methode inheritance. maka dibuatlah file view_mhs.php. yang berisi instansiasi methode tampil_data_mahasiswa dengan metode inheritance. namun hal ini tidak aakann bekerja saat kita belum include file koneksi.php tadi ke dalam file yang ingin menggunakan fungsi di file konkesi.php. maka untuk memanggil koneksi.php dalam file view_mh.php sayang menggunakan syntax berikut

![image](https://github.com/user-attachments/assets/6dcfa5f0-b0ba-4ae0-8da9-681b558edf13)

'../config/koneksi.php' merupakan file path koneksi.php. hal ini dikarenakan saya menyimpan file koneksi.php di dalam folder config

![image](https://github.com/user-attachments/assets/b270539d-ccd5-4ca1-8692-79b0b0474f9d)

inheritance memungkinkan kita untuk mengakses method yang ada di parent class menggunakan instansiasi child class. maka dari itu disini kita akan mengimplemenatasikan metode inheritance dengan instansiasi $db = new mahasiswa() bukan $db = new database(). disini kit amenggunakan obek $db yang di inisiasikan kembali sembagai $data_mahasiswa. maka pada saat melakukan perulangan untuk mencetak data kita menggunakan $data_mahasiswa yang sudah terinisiasi sebagai method $db->tampil_data_mahasiswa()

method inheritance ini juga diimplementasikan di menu Data Nilai Perbaikan. yang mana di dalam file view_nilai.php kita 






