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
        try
        {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8",$this->user,$this->password);
        }
        catch (PDOException $e)
        {
            echo "Koneksi gagal";
        }
    }

    public function tampil_data($id_destinasi)
    {
        $query = $this->conn->prepare("select id_destinasi,nm_destinasi,harga,kapasitas,harga_hotel, harga_transport,harga_turquid,harga_tempatwisata,img_1, img_2, img_3 from destination where id_destinasi=?");
        $query->execute(array($id_destinasi));
        // mengambil satu data dengan fetch
        $data = $query->fetch(PDO::FETCH_ASSOC);
        // mengembalikan data
        return $data;
        // hapus variable dari memory
        $query->closeCursor();
        unset($id_destinasi,$data);
    }

    public function tampil_semua_data()
    {
        $query = $this->conn->prepare("select id_destinasi,nm_destinasi,harga,kapasitas,harga_hotel, harga_transport,harga_turquid,harga_tempatwisata,img_1, img_2, img_3, lokasi from destination order by id_destinasi");
        $query->execute();
        // mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($data);
    }

    public function tambah_data($data)
    {
        $query = $this->conn->prepare("insert ignore into destination (id_destinasi,nm_destinasi,harga,kapasitas,harga_hotel, harga_transport,harga_turquid,harga_tempatwisata,img_1, img_2, img_3) values (?,?,?,?,?,?,?,?,?,?,?)");
        $query->execute(array($data['id_destinasi'],$data['nm_destinasi'],$data['harga'],$data['kapasitas'],$data['harga_hotel'],$data['harga_transport'],$data['harga_turquid'],$data['harga_tempatwisata']));
        $query->closeCursor();
        unset($data);
    }

    public function ubah_data($data)
    {
        $query = $this->conn->prepare("update destination set nm_destinasi=?,harga=?,kapasitas=?,harga_hotel=?, harga_transport=?,harga_turquid=?,harga_tempatwisata=?,img_1=?, img_2=?, img_3=? where id_destinasi=?");
        $query->execute(array($data['id_destinasi'],$data['nm_destinasi'],$data['harga'],$data['kapasitas'],$data['harga_hotel'],$data['harga_transport'],$data['harga_turquid'],$data['harga_tempatwisata']));
        $query->closeCursor();
        unset($data);
    }

    public function hapus_data($id_destinasi)
    {
        $query = $this->conn->prepare("delete from destination where id_destinasi=?");
        $query->execute(array($id_destinasi));
        $query->closeCursor();
        unset($id_destinasi);
    }
}
