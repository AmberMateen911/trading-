<form method="POST" enctype="multipart/form-data" action>

    <label for="product_image">Product Image:</label>
    <input type="file" id="product_image" name="product_image" accept="image/*" required><br><br>

    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name" required><br><br>

    <label for="product_price">Product Price:</label>
    <input type="text" id="product_price" name="product_price" required><br><br>

    <button type="submit">Submit</button>
</form>

<?php
session_start(); // Start the session

function handleError($message) {
    echo "<div style='color: red;'>Error: $message</div>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = !empty($_POST['product_name']) ? htmlspecialchars($_POST['product_name']) : null;
    $productPrice = !empty($_POST['product_price']) ? htmlspecialchars($_POST['product_price']) : null;
    $image = $_FILES['product_image'] ?? null;

    if ($productName && $productPrice && $image) {
        // Correct path to the uploads folder
        $uploadDir = '../admin/uploads/';
        $uploadFile = $uploadDir . basename($image['name']);

        if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
            // Store the product details in the session
            $_SESSION['product'] = [
                'name' => $productName,
                'price' => $productPrice,
                'image' => $uploadFile
            ];
            echo "<div style='color: green;'>Product uploaded successfully!</div>";
        } else {
            handleError("Image upload failed.");
        }
    } else {
        handleError("All fields are required.");
    }
}
?>
