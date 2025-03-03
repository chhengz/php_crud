<?php

include "./auth.php";

// Check if ID is provided in GET request
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: ./index.php");
    exit;
}

$id = intval($_GET['id']); // Ensure it's an integer

// Fetch product data from database
$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    die("❌ Product not found.");
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate & sanitize inputs
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);

    if (empty($name) || empty($price)) {
        echo "❌ Name and price cannot be empty.";
    } elseif (!is_numeric($price)) {
        echo "❌ Price must be a valid number.";
    } else {
        // Update the product using prepared statements
        $sql = "UPDATE products SET name = ?, price = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $price, $id);

        if ($stmt->execute()) {
            echo "✅ Record updated successfully";
            // echo '<script>alert("✅ Record updated successfully")</script>';
            // header("Location: ./index.php");
        } else {
            echo "❌ Error updating record: " . $conn->error;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>CRUD | PHP | Update Product</h1>
    <div class="container">
        <a href="./index.php" class="btn btn-add">🏠 Back Home</a>
        <form action="" method="post">
            <label for="name">Name
                <input type="text" name="name" id="name" value="<?= htmlspecialchars($product['name']); ?>">
            </label>
            <label for="price">Price
                <input type="text" name="price" id="price" value="<?= htmlspecialchars($product['price']); ?>">
            </label>
            <input type="submit" class="btn btn-add" value="Update Product" />
        </form>
    </div>
</body>

</html>


<!-- 


include "./auth.php";

if(!$_GET['id']) {
    header("Location: ./index.php");
}

$id = intval($_GET['id']);

// Fetch data from the database
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name =  $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);

    $sql = "UPDATE products SET name = '$name', price = '$price' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Record updated successfully";
        // header("Location: ./index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// check if the product exists
if(!$product) {
    header("Location: ./index.php");
}

// Retrieve the current data
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$product = $result->fetch_assoc(); 



-->