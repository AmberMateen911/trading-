<?php

include('../database/connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D AUTO</title>
    <link rel="stylesheet" href="..\assets\css\global.css">
    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="..\assets\css\responsive.css">
</head>

<body>

    <!-- HEADRE -->
    <?php include_once "../include/header.php"; ?>

    <main>
        <section class="d-auto background ">
            <div class="hero-content container flex-container">
                <h1 class="text-white san-serif heading">D AUTO</h1>
            </div>
        </section>

        <section class="product-content  container"  id="product-list">
            <h2 class="san-serif">Insert Your Statement Here.</h2>
            <p class="font-16 san-serif">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat doloribus ea.
            </p>

            <div class="product-container flex-container">
                <?php
                $sql = mysqli_query($con, "SELECT * FROM product");
                while ($row = mysqli_fetch_assoc($sql)) {
                    ?>

                    <div class="image-box">
                        <div>
                            <a href=""><img src="../assets/images/d_auto/<?php echo $row['product_image']; ?>" alt=""></a>
                        </div>
                        <div class="box-content">
                            <h4 class="product-name san-serif">
                                <?php echo $row['product_name']; ?>
                            </h4>
                            <p class="product-price text-orange san-serif">
                                <?php
                                // Format the product price with commas
                                echo 'PKR ' . number_format($row['product_price'], 0, '.', ',');
                                ?>
                            </p>
                        </div>
                    </div>

                    <?php
                }
                ?>





            </div>
        </section>
    </main>

    <?php include_once "../include/footer.php"; ?>


</body>

</html>