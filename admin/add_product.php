<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="..\assets\css\global.css">
    <link rel="stylesheet" href="..\assets\css\responsive.css">
</head>

<body>

    <div class="container flex-container add_pro_content">
        <h3 class="font-28 san-serif">Add New Product</h3>
    
        <form method="POST" enctype="multipart/form-data" action="" class="add_pro_form">

            <label for="product_image" class="product_name  font-16 san-serif">Select Image:</label>
            <input type="file" id="product_image" name="product_image" accept="image/*" required
                class="font-16 san-serif"><br><br>

            <label for="product_name" class="product_name font-16 san-serif">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required class="font-16 san-serif"><br><br>

            <label for="product_price" class="product_name  font-16 san-serif">Product Price:</label>
            <input type="text" id="product_price" name="product_price" required class="font-16 san-serif"><br><br>

            <input type="submit" name="submit" value="Add Product" class=" font-16 san-serif add-button">


            <!-- INSERT DATA  -->
            <?php

            include("../database/connection.php");

            if (isset($_POST["submit"])) {
                $product_name = $_POST["product_name"];
                $product_price = $_POST["product_price"];

                // REMOVING COMMAS FROM THE PRODUCT PRICE BEFORE STORING IT
                $product_price = str_replace(',', '', $product_price); // Remove commas
                $product_price = (float) $product_price;

                // DIRECTORY WHERE IMAGES WILL BE STORED
                $uploadDir = '../database/uploads/';
                $fileName = basename($_FILES['product_image']['name']);
                $targetFilePath = $uploadDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                // CREATE UPLOAD DIRECTORY IF IT DOESN'T EXIST
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                //CERTAIN FILE FORMATS
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'jfif'];
                if (in_array(strtolower($fileType), $allowedTypes)) {
                    // UPLOAD THE FILE
                    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $targetFilePath)) {
                        // INSERT INTO THE DATABASE
                        $sql = mysqli_query($con, "INSERT INTO product (product_name, product_price, product_image) 
            VALUES ('$product_name', '$product_price', '$fileName')");


                        if ($sql) {
                           echo '<p style="color:green">Data Inserted Succesfully</p>';
                            // REDIRECT TO THE D_AUTO.PHP PAGE AFTER SUCCESSFUL INSERTION
                            // header("Location: ../admin/add_product.php"); 
            
                            exit();
                        } else {
                            echo 'Data Not Inserted';
                        }
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                    echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
                }
            }
            ?>

        </form>
    </div>

</body>

</html>