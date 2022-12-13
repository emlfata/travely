<?php
include "header.php";
include "../Client-destination.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Details</title>
</head>

<body>
    <?php
    $data_array = $abc->tampil_semua_data();
    foreach ($data_array as $r) {
        $details = $_GET['details'];
        if ($details == $r->nm_destinasi) {
    ?>
            <main class="px-10" style="height: 200vh;">
                <h1 class="text-2xl font-semibold"><?= $r->nm_destinasi ?></h1>
                <p><?= $r->lokasi ?></p>

                <div class="grid grid-cols-3 gap-4 p-5">
                    <div class="relative aspect-h-1 aspect-w-1"><img src="http://192.168.31.107/travely/server/image/<?= $r->img_1 ?>" class="w-full h-full absolute inset-0 object-cover"></div>
                    <div class="relative aspect-h-1 aspect-w-1"><img src="http://192.168.31.107/travely/server/image/<?= $r->img_2 ?>" class="w-full h-full absolute inset-0 object-cover"></div>
                    <div class="relative aspect-h-1 aspect-w-1"><img src="http://192.168.31.107/travely/server/image/<?= $r->img_3 ?>" class="w-full h-full absolute inset-0 object-cover"></div>
                </div>
                <hr class="my-4 w-full h-1 bg-gray-300 rounded border-0 md:my-10">
                <div class="flex justify-around">
                    <div>
                        <h1 class="text-2xl font-semibold">Facility</h1>
                        <ul class="space-y-1 max-w-md list-inside mt-5">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Hotel Penginapan
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Perjalanan Pergi-Pulang
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Tour Guide
                            </li>
                        </ul>
                    </div>

                    <div class="rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-semibold text-xl mb-2"><?= $r->harga ?> IDR</div>
                            <p class="text-gray-700 text-base">11-18 Des 2022</p>
                            <p class="font-semibold mt-5">Details:</p>
                            <table class="mb-10">
                                <tr>
                                    <td class="text-gray-700">Hotel Penginapan</td>
                                    <td class="text-gray-700 font-semibold">&emsp;&emsp;<?= $r->harga_hotel ?> IDR</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-700">Transportasi</td>
                                    <td class="text-gray-700 font-semibold">&emsp;&emsp;<?= $r->harga_transport ?> IDR</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-700">Tour Guide</td>
                                    <td class="text-gray-700 font-semibold">&emsp;&emsp;<?= $r->harga_turquid ?> IDR</td>
                                </tr>
                                <tr>
                                    <td class="text-gray-700">Wisata Pantai Kuta</td>
                                    <td class="text-gray-700 font-semibold">&emsp;&emsp;<?= $r->harga_tempatwisata ?> IDR</td>
                                </tr>
                            </table>
                        </div>

                        <a href="book.php?book=<?= $r->id_destinasi ?>"><button class="px-6 py-4 text-center w-full font-semibold bg-blue-500 text-white" type="button">Book</button></a>
                    </div>
                </div>
            </main>
    <?php }
    } ?>
</body>

</html>