<?php
include "../Client.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Travely</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <img src="../assets/wooden-bridge-koh-nangyuan-island-surat-thani-thailand.jpg" alt="" class="h-60 w-full object-cover">
    <main class="px-10">
        <div class="p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-5">
            <!--Card 1-->
            <div class="rounded overflow-hidden shadow-lg">
                <img title="Kuta, Bali" class="w-full" src="../assets/kuta-1.jpg" alt="Mountain">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Kuta, Bali</div>
                    <p class="text-gray-700 text-base">11-18 Des 2022</p>
                    <p class="text-gray-700 text-base font-bold">start from 10.000.000 IDR</p>
                </div>
                <a href="details.php"><button class="px-6 py-4 text-center w-full font-semibold bg-gray-200" type="button">Details</button></a>
            </div>
            <!--Card 2-->
            <div class="rounded overflow-hidden shadow-lg">
                <img class="w-full" src="../assets/beautiful-tropical-beach-sea-with-coconut-palm-tree-paradise-island.jpg" alt="River">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">River</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#summer</span>
                </div>
            </div>

            <!--Card 3-->
            <div class="rounded overflow-hidden shadow-lg">
                <img class="w-full" src="../assets/beautifull-mountain-morning-mist-batur-bali-indonesia.jpg" alt="Forest">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Forest</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
                </div>
            </div>

            <!--Card 3-->
            <div class="rounded overflow-hidden shadow-lg">
                <img class="w-full" src="../assets/beautifull-mountain-morning-mist-batur-bali-indonesia.jpg" alt="Forest">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Forest</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
                </div>
            </div>

            <!--Card 3-->
            <div class="rounded overflow-hidden shadow-lg">
                <img class="w-full" src="../assets/beautifull-mountain-morning-mist-batur-bali-indonesia.jpg" alt="Forest">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Forest</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
                </div>
            </div>

            <!--Card 3-->
            <div class="rounded overflow-hidden shadow-lg">
                <img class="w-full" src="../assets/beautifull-mountain-morning-mist-batur-bali-indonesia.jpg" alt="Forest">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Forest</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
                </div>
            </div>
        </div>
    </main>
</body>

</html>