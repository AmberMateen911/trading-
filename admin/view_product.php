<?php include("../database/connection.php"); ?>
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


    // Check if the delete button was pressed
    if (isset($_POST['delete'])) {
        $product_id = $_POST['product_id'];

        // Prepare the SQL delete statement
        $sql = "DELETE FROM product WHERE id = ?";

        // Use prepared statements to prevent SQL injection
        if ($stmt = $con->prepare($sql)) {
            $stmt->bind_param("i", $product_id); // Bind the product ID as an integer
            if ($stmt->execute()) {
                echo "<p style='color:green; text-align:center' class='msg'>Product deleted successfully.</p>";
            } else {
                echo "<p style='color:red'>Error deleting product: " . $stmt->error . "</p>";
            }
            $stmt->close();
        } else {
            echo "<p style='color:red'>Error preparing statement: " . $con->error . "</p>";
        }
    }

    // Fetch all products from the database
    $sql = mysqli_query($con, "SELECT * FROM product");

    if (!$sql) {
        die("Database query failed: " . mysqli_error($con));
    }
    ?>
    <main>
        <section class="product-list ">
            <h4>Product List</h4>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th class="action-head">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo 'PKR ' . number_format($row['product_price'], 0, '.', ','); ?></td>
                            <td class="pro-image"><img src="../assets/images/d_auto/<?php echo $row['product_image']; ?>"
                                    alt="<?php echo $row['product_name']; ?>"></td>
                            <td>
                                <div class="action-options flex-container">
                                <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="edit-button  text-white san-serif font-14">Edit</a>
                               
                                    <form method="POST" action="view_product.php" style="display:inline;">
                                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete"
                                            class="delete-button text-white san-serif font-14"
                                            onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

</body>

</html>