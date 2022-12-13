<?php
include "header.php";
include "../Client-booking.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Book</title>

    <style>
        h2 {
            text-align: center;
        }

        #form {
            background-color: white;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 20px;
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
            /* background-color: blue; */
            padding: 12px 24px 12px 24px;
            color: white;
            border: none;
            font-size: 14px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <main>

        <form id="form" style="margin-top: 50px;" method="POST" action="../proses.php">
            <input type="hidden" name="aksi" value="tambah" />
            <div>
                <input class="form-section" type="text" name="nama_pemesan" placeholder="Nama Pemesan" />
            </div>
            <div>
                <input class="form-section" type="date" name="tanggal" placeholder="Tanggal Pemberangkatan" />
            </div>
            <div>
                <input class="form-section" type="number" name="jml_orang" placeholder="Jumlah Pemesan" />
            </div>
            <div>
                <input hidden class="form-section" type="number" name="id_destinasi" placeholder="Destinasi" value="<?php echo $_GET['book']; ?>" />
            </div>
            <div>
                <input class="bg-blue-500" id="form-submit" type="submit" name="simpan" value="Book" />
            </div>
        </form>

    </main>


</body>

</html>