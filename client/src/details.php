<?php
include "header.php";
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

<body style="height: 200vh;">
    <main class="px-10">
        <h1 class="text-2xl font-semibold">Kuta Beach</h1>
        <h2>Bali, Indonesia</h2>

        <div class="grid grid-cols-3 gap-4 p-5">
            <div class="relative aspect-h-1 aspect-w-1"><img src="../assets/kuta-1.jpg" class="w-full h-full absolute inset-0 object-cover"></div>
            <div class="relative aspect-h-1 aspect-w-1"><img src="../assets/kuta-2.jpg" class="w-full h-full absolute inset-0 object-cover"></div>
            <div class="relative aspect-h-1 aspect-w-1"><img src="../assets/kuta-3.jpg" class="w-full h-full absolute inset-0 object-cover"></div>
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
                    <div class="font-semibold text-xl mb-2">10.000.000 IDR</div>
                    <p class="text-gray-700 text-base">11-18 Des 2022</p>
                    <p class="font-semibold mt-5">Details:</p>
                    <table class="mb-10">
                        <tr>
                            <td class="text-gray-700">Hotel Penginapan</td>
                            <td class="text-gray-700 font-semibold">&emsp;&emsp;3.000.000 IDR</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700">Transportasi</td>
                            <td class="text-gray-700 font-semibold">&emsp;&emsp;3.000.000 IDR</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700">Tour Guide</td>
                            <td class="text-gray-700 font-semibold">&emsp;&emsp;2.000.000 IDR</td>
                        </tr>
                        <tr>
                            <td class="text-gray-700">Wisata Pantai Kuta</td>
                            <td class="text-gray-700 font-semibold">&emsp;&emsp;2.000.000 IDR</td>
                        </tr>
                    </table>
                </div>
                <a href="details.php"><button class="px-6 py-4 text-center w-full font-semibold bg-blue-500 text-white" type="button">Book</button></a>

            </div>
        </div>
    </main>
</body>

</html>