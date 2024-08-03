<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $short_description = $_POST['short_description'];
    $detailed_description = $_POST['detailed_description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $unit_of_measure = $_POST['unit_of_measure'];
    $dimensions = $_POST['dimensions'];
    $weight = $_POST['weight'];

    $target_dir = "uploads/";
    $upload_ok = 1;
    $images = [];
    foreach ($_FILES["images"]["name"] as $key => $image_name) {
        $target_file = $target_dir . basename($image_name);
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["images"]["tmp_name"][$key]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $target_file)) {
                $images[] = $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
                $upload_ok = 0;
            }
        } else {
            echo "File is not an image.";
            $upload_ok = 0;
        }
    }

    if ($upload_ok) {
        echo "Produto cadastrado com sucesso!";
    }
}
?>
