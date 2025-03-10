# PHP CRUD

## Requirement

- XAMPP Control Panel v3.3.0

## Install + Setup

- Clone Project: `git clone https://github.com/chhengz/php_crud.git`
- Make a Folder in xampp name `php_crud`
- Import SQL File `php_crud.sql` into `localhost/phpmyadmin/index.php?route=/database/import&db=php_crud`

## ScreenShoot

- Home Page
![home page](images/home.png)

- Add New product
![add-new-product](images/add-new-product.png)

- Edit/Update product
![edit-product](images/edit-update.png)

- Delete product (Alert Confirmation)
![delete-product](images/delete-product.png)

## Sample Database Connection

<code>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "php_crud";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("❌ Connection failed: " . $conn->connect_error);
        }
        
        // message to check if the connection is successful
        echo "✅ Connected" . "<br/>";

    ?>
</code>