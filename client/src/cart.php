<?php
include "header.php";
include "../Client-booking.php";
// include "../Client-destination.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">

    <title>My Cart</title>
    <style>
        th,
        td {
            border: 1px solid black;
        }

        #contact-form {
            background-color: white;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            /* text-align: center; */
            padding: 30px;
            border: 1px solid #ccc;
        }

        .form-section {
            font-size: 16px;
            border: none;
            border-bottom: 1px solid #ccc;
            width: 100%;
            margin-bottom: 30px;
            padding-bottom: 10px;
        }

        #form-submit {
            margin-top: 20px;
            background-color: blue;
            padding: 12px 24px 12px 24px;
            color: white;
            border: none;
            font-size: 14px;
            cursor: pointer;
        }

        table,
        th,
        td {
            border-left: none;
            border-right: none;
            border-top: 1px solid #B1AFFF;
            border-bottom: 1px solid #B1AFFF;
            text-align: center;
            /* border: 1px solid #B1AFFF; */
        }

        td {
            height: 50px;
        }

        th {
            /* background-color: #FDFDBD; */
            /* color: #1C3879; */
            color: #2192FF;
        }
    </style>
</head>

<body>
    <main style="padding-left: 50px; padding-right: 50px; height: 150vh;">
        <?php
        if ($_GET['page'] == 'ubah') {
            $data_array = $abc->tampil_semua_data2();
            foreach ($data_array as $r) {
                $details = $_GET['id_booking'];
                if ($details == $r->id_booking) {
        ?>
                    <legend>Ubah Data</legend>
                    <form id="contact-form" style="margin-top: 50px;" method="POST" action="../proses.php">
                        <input type="hidden" name="aksi" value="ubah" />
                        <input type="hidden" name="id_booking" value="<?= $r->id_booking ?>" />
                        <div>
                            <label>ID Booking</label>
                            <input class="form-section" type="number" value="<?= $r->id_booking ?>" disabled>
                        </div>
                        <div>
                            <label style="text-align: left;">Nama Pemesan</label>
                            <input class="form-section" type="text" name="nama_pemesan" value="<?= $r->nama_pemesan ?>" />
                        </div>
                        <div>
                            <label>Tanggal</label>
                            <input class="form-section" type="date" name="tanggal" value="<?= $r->tanggal ?>" />
                        </div>
                        <div>
                            <label>Jumlah Pemesanan</label>
                            <input class="form-section" type="number" name="jml_orang" value="<?= $r->jml_orang ?>" />
                        </div>
                        <div>
                            <label>Id Destinasi</label>
                            <input class="form-section" type="number" name="id_destinasi" value="<?= $r->id_destinasi ?>" />
                        </div>
                        <div style="margin: auto; text-align: center;">
                            <input style="background-color: #2192FF;" id="form-submit" type="submit" name="ubah" value="Submit" />
                        </div>
                    </form>
            <?php unset($r);
                }
            }
        }

        if ($_GET['page'] == 'my-cart') {
            ?>
            <h1 class="text-2xl font-semibold" style="color: #2192FF;">My Cart</h1>
            <table style="margin-top: 20px;">
                <tr>
                    <td class=" font-semibold" Width='5%'>ID Booking</td>
                    <td class="font-semibold" Width='5%'>Destinasi</td>
                    <td class="font-semibold" Width='15%'>Nama Pemesan</td>
                    <td class="font-semibold" Width='15%'>Tanggal Pemberangkatan</td>
                    <td class="font-semibold" Width='15%'>Jumlah Pemesanan</td>
                    <!-- <td class="font-semibold" Width='15%'>Total Harga</td> -->
                    <td class="font-semibold" Width='5%' colspan="2">Aksi</td>
                </tr>
                <?php
                $r = $abc->tampil_data2($_GET['id_booking']);
                $no = 1;
                $data_array = $abc->tampil_semua_data2();
                foreach ($data_array as $r) {
                ?>
                    <tr>
                        <td><?= $r->id_booking ?></td>
                        <td><?= $r->id_destinasi ?></td>
                        <td class="font-semibold"><?= $r->nama_pemesan ?></td>
                        <td><?= $r->tanggal ?></td>
                        <td><?= $r->jml_orang ?></td>
                        <!-- <td><?= $r->jml_orang * $x->harga ?></td> -->
                        <td><a style="background-color: #2192FF; border-radius: 10px; padding: 7px; color: white;" href="?page=ubah&id_booking=<?= $r->id_booking ?>">Ubah</a></td>
                        <td><a style="border-radius: 10px; padding: 7px; background-color: #FF6464; color: white;" href="/travely/client/proses.php?aksi=hapus&id_booking=<?= $r->id_booking ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">Hapus</a></td>
                    </tr>
                <?php }
                unset($data_array, $r, $no);
                ?>
            </table>
        <?php
        }
        ?>
    </main>



</body>

</html>