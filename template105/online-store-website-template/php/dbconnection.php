<?php
    $servername = "localhost";
    $name = "name";
    $price = "price";
    $description = "description";
    $images = "images";
    $dbname = "products";

    $conn = mysqli_connect($servername, $name, $price, $description, $images, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Description: " . $row["description"]. " - Price: " . $row["price"]. " - Image: ". $row["images"]. "<br>";
    }} else {
        echo "0 results";
    }
    mysqli_close($conn);
