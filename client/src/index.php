<?php
include "../Client-destination.php";
include "header.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Travely</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <img src="http://192.168.31.107/travely/server/image/main-banner.jpg" alt="" class="h-60 w-full object-cover">
    <main class="px-10" style="height: 150vh;">
        <div class="p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-5">
            <?php
            $data_array = $abc->tampil_semua_data();
            foreach ($data_array as $r) {
            ?>
                <!--Card 1-->
                <div class="rounded overflow-hidden shadow-lg">

                    <img title="<?= $r->nm_destinasi ?>" style="height: 180px;" class="w-full" src="http://192.168.31.107/travely/server/image/<?= $r->img_1 ?>" alt="<?php echo $row['nm_destinasi'] ?>">
                    <div class="px-4 py-4">
                        <div class="font-bold text-xl mb-2"><?= $r->nm_destinasi ?></div>
                        <p class="text-gray-700 text-base font-medium">start from <?= $r->harga ?> IDR</p>
                    </div>
                    <a href="details.php?details=<?= $r->nm_destinasi ?>"><button class="px-6 py-4 text-center w-full font-semibold bg-blue-500 text-white" type="button">Details</button></a>

                </div>
            <?php
            }
            unset($data_array, $r, $no);
            ?>
        </div>
    </main>
</body>

</html>