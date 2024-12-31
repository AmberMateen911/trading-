
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="..\assets\css\global.css">
    <link rel="stylesheet" href="..\assets\css\responsive.css">
</head>
<body>
    
</body>
</html>
<?php
include("../database/connection.php"); // Include your database connection

// Initialize variables
$product_id = null;
$product_name = '';
$product_price = '';
$product_image = '';
$message = ''; // Variable to hold success or error messages

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch the product details from the database
    $sql = "SELECT * FROM product WHERE id = ?";
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $stmt->close();

        // Set the product details to variables
        if ($product) {
            $product_name = $product['product_name'];
            $product_price = $product['product_price'];
            $product_image = $product['product_image'];
        }
    } else {
        echo "Error fetching product details.";
    }
} else {
    echo "No product ID specified.";
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    // Get the updated product details from the form
    $product_name = trim($_POST['product_name']);
    $product_price = trim($_POST['product_price']);
    $product_image = trim($_POST['product_image']);

    // Validate the input
    if (empty($product_name) || empty($product_price)) {
        $message = "Error: Product name and price are required.";
    } else {
        // Update the product in the database
        $update_sql = "UPDATE product SET product_name = ?, product_price = ?, product_image = ? WHERE id = ?";
        if ($update_stmt = $con->prepare($update_sql)) {
            $update_stmt->bind_param("sdsi", $product_name, $product_price, $product_image, $product_id);
            if ($update_stmt->execute()) {
                $message = "Success: Product updated successfully!"; // Success message
                // Clear the form fields
                $product_name = '';
                $product_price = '';
                $product_image = '';
            } else {
                $message = "Error: Could not update product."; // Error message
            }
            $update_stmt->close();
        } else {
            $message = "Error: Could not prepare update statement."; // Error message
        }
    }
}
?>

<!-- Display message -->


<div class="flex-container add_pro_form update-form " >

<h4 class="font-28 san-serif">Edit Product</h4>
<form method="POST" action="">
    <label for="product_name" class="product_name" >Product Name:</label>
    <input type="text" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>" class="product_name" required>

    <label for="product_price">Product Price:</label>
    <input type="number" name="product_price" value="<?php echo htmlspecialchars($product_price); ?>" required>

    <label for="product_image">Product Image:</label>
    <input type="text" name="product_image" value="<?php echo htmlspecialchars($product_image); ?>">

    <button type="submit" name="update" class=" font-16 san-serif update-button">Update Product</button>
</form>
</div>

<?php if ($message): ?>
    <div class="message"><?php echo htmlspecialchars($message); ?></div>
<?php endif; ?>



