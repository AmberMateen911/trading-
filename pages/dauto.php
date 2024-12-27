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

        <section class="product-content  container">
            <h2 class="san-serif">Insert Your Statement Here.</h2>
            <p class="font-16 san-serif">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat doloribus ea.
            </p>

            <div class="product-container flex-container">

                <?php
                session_start(); // Start the session
                
                // Check if a product is stored in the session
                if (isset($_SESSION['product'])) {
                    $product = $_SESSION['product'];
                    echo "<div class='product-container flex-container'>
            <div class='image-box'>
                <img src='{$product['image']}' alt='Product Image'>
                <div class='box-content'>
                    <h4 class='product-name san-serif'>{$product['name']}</h4>
                    <p class='product-price text-orange san-serif'>PKR {$product['price']}</p>
                </div>
            </div>
          </div>";
                } else {
                    echo "<div style='color: red;'>No product uploaded yet.</div>";
                }
                ?>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\city.jfif" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>

                </div>
                
                <div class="image-box">
                    <img src="..\assets\images\d_auto\corolla.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\hatch.jfif" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\honda_city.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\land_cruiser.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\TC_hybride.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\toyota_corolla.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\toyota_prado.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\toyota.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\white_city.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>


                <div class="image-box">
                    <img src="..\assets\images\d_auto\city.jfif" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>

                <div class="image-box">
                    <img src="..\assets\images\d_auto\corolla.jpg" alt="">
                    <div class="box-content">
                        <h4 class="product-name san-serif">Product Name</h4>
                        <p class="product-price text-orange san-serif">PKR 7,500,00</p>
                    </div>
                </div>





            </div>
        </section>
    </main>

    <?php include_once "../include/footer.php"; ?>


</body>

</html>