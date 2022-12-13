<?php
error_reporting(1);
include "Client-booking.php";

if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_booking" => $_POST['id_booking'],
        "nama_pemesan" => $_POST['nama_pemesan'],
        "tanggal" => $_POST['tanggal'],
        "jml_orang" => $_POST['jml_orang'],
        "id_destinasi" => $_POST['id_destinasi'],
        "aksi" => $_POST['aksi']
    );
    $abc->tambah_data2($data);
    header('location:/travely/client/src/cart.php?page=my-cart');
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_booking" => $_POST['id_booking'],
        "nama_pemesan" => $_POST['nama_pemesan'],
        "tanggal" => $_POST['tanggal'],
        "jml_orang" => $_POST['jml_orang'],
        "id_destinasi" => $_POST['id_destinasi'],
        "aksi" => $_POST['aksi']
    );
    $abc->ubah_data2($data);
    header('location:/travely/client/src/cart.php?page=my-cart');
} else if ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_booking" => $_GET['id_booking'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_data2($data);
    header('location:/travely/client/src/cart.php?page=my-cart');
}
unset($abc, $data);
