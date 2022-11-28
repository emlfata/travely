<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="output.css"> -->

    <title>Details</title>
</head>

<body style="height: 200vh;">
    <main class="px-10">
        <h1 class="text-2xl">Kuta Beach</h1>
        <h2>Bali, Indonesia</h2>
        <div class="grid grid-cols-3 gap-4 p-5">
            <img class="h-96 row-span-2" src="../assets/kuta-1.jpg" alt="Kuta 1">
            <div class="relative aspect-h-1 aspect-w-1"><img src="../assets/kuta-1.jpg" class="w-full h-full absolute inset-0 object-cover"></div>
            <div class="relative aspect-h-1 aspect-w-1"><img src="../assets/kuta-1.jpg" class="w-full h-full absolute inset-0 object-cover"></div>
            <div class="relative aspect-h-1 aspect-w-1"><img src="../assets/kuta-1.jpg" class="w-full h-full absolute inset-0 object-cover"></div>
        </div>
        <hr class="my-4 w-full h-1 bg-gray-300 rounded border-0 md:my-10">
        <h1 class="text-2xl">Facility</h1>
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
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                Cewek Cantik
            </li>
        </ul>
    </main>
</body>

</html>