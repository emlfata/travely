<?php
error_reporting(1);
include "Database-destination.php";
$abc = new Database();

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    exit(0);
}
$postdata = file_get_contents("php://input");

// function untuk menghapus selain huruf dan angka
function filter($data)
{
    $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
    return $data;
    unset($data);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode($postdata);
    $id_destinasi = $data->id_destinasi;
    $nm_destinasi = $data->nm_destinasi;
    $harga = $data->harga;
    $kapasitas = $data->kapasitas;
    $harga_hotel = $data->harga_hotel;
    $harga_transport = $data->harga_transport;
    $harga_turquid = $data->harga_turquid;
    $harga_tempatwisata = $data->harga_tempatwisata;
    $img_1 = $data->img_1;
    $img_2 = $data->img_2;
    $img_3 = $data->img_3;
    $lokasi = $data->lokasi;
    $aksi = $data->aksi;

    if ($aksi == 'tambah') {
        $data2 = array('id_destinasi' => $id_destinasi, 'nm_destinasi' => $nm_destinasi, 'harga' => $harga, 'kapasitas' => $kapasitas, 'harga_hotel' => $harga_hotel, 'harga_transport' => $harga_transport, 'harga_turquid' => $harga_turquid, 'harga_tempatwisata' => $harga_tempatwisata, 'img_1' => $img_1, 'img_2' => $img_2,  'img_3' => $img_3);
        $abc->tambah_data($data2);
    } elseif ($aksi == 'ubah') {
        $data2 = array('id_destinasi' => $id_destinasi, 'nm_destinasi' => $nm_destinasi, 'harga' => $harga, 'kapasitas' => $kapasitas, 'harga_hotel' => $harga_hotel, 'harga_transport' => $harga_transport, 'harga_turquid' => $harga_turquid, 'harga_tempatwisata' => $harga_tempatwisata, 'img_1' => $img_1, 'img_2' => $img_2,  'img_3' => $img_3);
        $abc->ubah_data($data2);
    } elseif ($aksi == 'hapus') {
        $abc->hapus_data($id_destinasi);
    }
    // hapus variable dari memory
    unset($postdata, $data, $data2, $id_destinasi, $nm_destinasi, $harga, $kapasitas, $harga_hotel, $harga_transport, $harga_turquid, $harga_tempatwisata, $img_1, $img_2, $img_3, $lokasi, $aksi, $abc);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (($_GET['aksi'] == 'tampil') and (isset($_GET['id_destinasi']))) {
        $id_barang = filter($_GET['id_destinasi']);
        $data = $abc->tampil_data($id_destinasi);
        echo json_encode($data);
    } else //menampilkan semua data
    {
        $data = $abc->tampil_semua_data();
        echo json_encode($data);
    }
    unset($postdata, $data, $id_destinasi, $abc);
}
