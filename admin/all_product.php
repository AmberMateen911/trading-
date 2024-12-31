<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>

    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="..\assets\css\global.css">
    <link rel="stylesheet" href="..\assets\css\responsive.css">

</head>

<body>
    <?php

    // $path = "../database/uploads";
    // $items = scandir($path);
    // echo " <div class='images'> ";
    // foreach ($items as $item) {
    //     // Filter out the current and parent directory entries
    //     if ($item !== '.' && $item !== '..') {
    //         // Check if the item is an image file
    //         if (preg_match('/\.(jpg|jpeg|png|gif|jfif)$/i', $item)) {

    //             echo "<a  href='$path/$item'><img src='$path/$item' alt='$item' '></a>";

    //         }
    //     }
    // }
    // echo " </div><br>";
    ?>

    <main>
        <section class="flex-container product-list ">
            <div>Product Name</div>
            <div>Product Price</div>
            <div>Product Image</div>

        </section>
    </main>


</body>

</html>