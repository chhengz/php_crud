<?php

include "./auth.php";

// Determine the page number
$index = 0;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$page = ($page < 1) ? 1 : $page;
$limit = 10;
$offset = ($page - 1) * $limit;

// Fetch data from the database
$sql = "SELECT * FROM products LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>CRUD | PHP</h1>
    <div class="container">
        <a href="./create.php" class="btn btn-add">Add New Products</a>

        <!-- Display the data in a table -->
        <?php if ($result->num_rows > 0) : ?>
            <table class="table" cellpadding="10">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?= $index += 1; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td class="action">
                                <a href="./edit.php?id=<?= $row['id']; ?>" class="btn btn-update">Edit</a>
                                <a href="./delete.php?id=<?= $row['id']; ?>" class="btn btn-delete"
                                    onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

        <?php else : ?>
            <p>❌ No records found!</p>
        <?php endif; ?>

        <!-- Pagination -->
        <?php

        $sqlCount = "SELECT COUNT(*) AS total FROM products";
        $countResult = $conn->query($sqlCount);
        $totalRow = $countResult->fetch_assoc()['total'];
        $totalPage = ceil($totalRow / $limit);

        if($totalPage > 1) {
            echo "<div>Page:";
            for($i = 1; $i <= $totalPage; $i++) {
                if($i == $page) {
                    echo "<strong>$i</strong>";
                } else {
                    echo "<a href='./index.php?page=$i'>$i</a>";
                }
            }
            echo "</div>";
        }
        ?>

    </div>




</body>

</html>