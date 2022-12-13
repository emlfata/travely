<?php
class Database
{
    private $host = "localhost";
    private $dbname = "travely";
    private $user = "root";
    private $password = "";
    private $port = "3306";
    private $conn;

    // function yang pertama kali di-load saat class dipanggil
    public function __construct()
    {
        // koneksi database
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8", $this->user, $this->password);
        } catch (PDOException $e) {
            echo "Koneksi gagal";
        }
    }

    public function tampil_data2($id_booking)
    {
        $query = $this->conn->prepare("select id_booking,nama_pemesan,tanggal,jml_orang,id_destinasi from booking where id_booking=?");
        $query->execute(array($id_booking));
        // mengambil satu data dengan fetch
        $data = $query->fetch(PDO::FETCH_ASSOC);
        // mengembalikan data
        return $data;
        // hapus variable dari memory
        $query->closeCursor();
        unset($id_destinasi, $data);
    }

    public function tampil_semua_data2()
    {
        $query = $this->conn->prepare("select id_booking,nama_pemesan,tanggal,jml_orang,id_destinasi from booking order by id_booking");
        $query->execute();
        // mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($data);
    }

    public function tambah_data2($data)
    {
        $query = $this->conn->prepare("insert ignore into booking (id_booking,nama_pemesan,tanggal,jml_orang,id_destinasi) values (?,?,?,?,?)");
        $query->execute(array($data['id_booking'], $data['nama_pemesan'], $data['tanggal'], $data['jml_orang'], $data['id_destinasi']));
        $query->closeCursor();
        unset($data);
    }

    public function ubah_data2($data)
    {
        $query = $this->conn->prepare("update booking set nama_pemesan=?,tanggal=?,jml_orang=?, id_destinasi=? where id_booking=?");
        $query->execute(array($data['id_booking'], $data['nama_pemesan'], $data['tanggal'], $data['jml_orang'], $data['id_destinasi']));
        $query->closeCursor();
        unset($data);
    }

    public function hapus_data2($id_booking)
    {
        $query = $this->conn->prepare("delete from booking where id_booking=?");
        $query->execute(array($id_booking));
        $query->closeCursor();
        unset($id_destinasi);
    }
}
