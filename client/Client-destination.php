<?php
error_reporting(1);
class Client
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
        unset($url);
    }
    public function filter($data)
    {
        $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
        return $data;
        unset($data);
    }
    public function tampil_semua_data()
    {
        $client = curl_init($this->url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($data, $client, $response);
    }
    public function tampil_data($id_booking)
    {
        $id_booking = $this->filter($id_booking);
        $client = curl_init($this->url . "?aksi=tampil&id_destinasi=" . $id_booking);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_booking, $client, $response, $data);
    }
    public function tambah_data($data)
    {
        $data = '{"id_booking":"' . $data['id_booking'] . '",
        "nama_pemesan":"' . $data['nama_pemesan'] . '",
        "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }
    public function ubah_data($data)
    {
        $data = '{ "id_booking":"' . $data['id_booking'] . '",
        "nama_pemesan":"' . $data['nama_pemesan'] . '",
        "aksi":"' . $data['aksi'] . '"}';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }
    public function hapus_data($data)
    {
        $id_booking = $this->filter($data['id_booking']);
        $data = '{"id_booking":"' . $id_booking . '",
       "aksi":"' . $data['aksi'] . '"
       }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_booking, $data, $c, $response);
    }
    public function __destruct()
    {
        unset($this->url);
    }
}

$url = 'http://192.168.31.107/travely/server/server-destination.php';
$abc = new Client($url);
