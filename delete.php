<?php

include  "./auth.php";

if(isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);

    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Record deleted successfully";
        echo "<script>alter('✅ Record deleted successfully')</script>";
        header("Location: ./index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>