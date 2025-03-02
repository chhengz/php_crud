<?php
include "./auth.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name =  $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);

    $sql = "INSERT INTO products (name, price) VALUES ('$name', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ New record created successfully";
        // header("Location: ./index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>CRUD | PHP | Add New Product</h1>
    <div class="container">
        <a href="./index.php" class="btn btn-add">🏠 Back Home</a>
        <form action="" method="post">
            <label for="name">Name
                <input type="text" name="name" id="name" placeholder="Enter Name here" required>
            </label>
            <label for="price">Price
                <input type="text" name="price" id="price" placeholder="Enter Price here" required>
            </label>
            <input type="submit" class="btn btn-add" value="Add Product" />
        </form>
    </div>


</body>

</html>