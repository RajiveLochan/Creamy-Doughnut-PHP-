<?php
session_start();
require_once 'connection.php';

function randomLiterals($length = 80)
{
    global $randomString;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

if (isset($_POST['productTitle']) && isset($_POST['productPrice']) && isset($_POST['productType']) && isset($_POST['productDescription']) && isset($_FILES['productImageUpload'])) {
    addProduct($_POST['productTitle'], $_POST['productPrice'], $_POST['productType'], $_POST['productDescription'], $_FILES['productImageUpload']);
} else if (isset($_POST['productTitleModify']) && isset($_POST['productPriceModify']) && isset($_POST['productTypeModify']) && isset($_POST['productDescriptionModify']) && isset($_FILES['productImageModifyUpload'])) {
    modifyProduct($_POST['productTitleModify'], $_POST['productPriceModify'], $_POST['productTypeModify'], $_POST['productDescriptionModify'], $_FILES['productImageModifyUpload']);
} else {
    echo '2';
}


function modifyProduct($productTitleModify, $productPriceModify, $productTypeModify, $productDescriptionModify, $productImagePathModify)
{
    if (productValidation($productTitleModify, $productPriceModify, $productTypeModify, $productDescriptionModify) && (getImagePath($productImagePathModify))) {
        $db = new Database(); //create a new instance of the database class
        $conn = $db->connect(); //assign the connection parameters
        $productImagePathModify = getImagePath($productImagePathModify);
        $stmt = $conn->prepare("UPDATE producttable SET ProductTitle = ?, ProductPrice = ?, ProductDescription = ?, ProductType = ?, ProductImage = ? WHERE ProductTitle = ?");
        $stmt->bind_param('sdssss', $productTitleModify, $productPriceModify, $productDescriptionModify, $productTypeModify, $productImagePathModify, $productTitleModify);
        $stmt->execute();
        echo $stmt->affected_rows; //sends the number of rows affected by the query, usually one
        $stmt->close();
        $conn->close();
    } else {
        echo '3';
    }
}

function addProduct($productTitle, $productPrice, $productType, $productDescription, $productImage)
{
    if (productValidation($productTitle, $productPrice, $productType, $productDescription) && (getImagePath($productImage))) {
        $db = new Database(); //create a new instance of the database class
        $conn = $db->connect(); //assign the connection parameters
        $productID = randomLiterals(80);
        $productImagePath = getImagePath($productImage);
        $stmt = $conn->prepare("INSERT INTO producttable(ProductID, ProductTitle, ProductDescription, ProductPrice, ProductType, ProductImage) VALUES(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssdss', $productID, $productTitle, $productDescription, $productPrice, $productType, $productImagePath);
        $stmt->execute();
        echo $stmt->affected_rows; //sends the number of rows affected by the query, usually one
        $stmt->close();
        $conn->close();
    } else {
        echo '3';
    }
}

function productValidation($productTitle, $productPrice, $productType, $productDescription)
{
    $productTitle = Check_Value($productTitle);
    $productPrice = Check_Value($productPrice);
    $productType = Check_Value($productType);
    $productDescription = Check_Value($productDescription);
    if (empty($productTitle) || empty($productPrice) || empty($productType) || empty($productDescription)) {
        echo '0';
        return false;
    } else {
        if (!preg_match("/^[A-Za-z]|(®™)+$/", $productTitle)
            || !preg_match("/^(([1-9]\d{0,2}(,\d{3})*)|0)?\.\d{1,2}$/", $productPrice)
            || (strlen((string)$productDescription) > 400)
            || (!($productType == "Doughnuts" || $productType == "Coffee"))) {
            echo '2';
            return false;
        } else {
            return true;
        }
    }
}

function getImagePath($file)
{
    $file_name = $file['name'];
    $date = date_create();
    //combine the date time stamp with the file name to create a new file name
    $new_file_name = date_timestamp_get($date) . "-" . $file_name;
    //set where you want to store the files folder name is uploads $new_file_name is the file's new name, for example if uploaded file's name is sample.gif, then the path will be Uploads/sample.gif
    //set the path where the image will be stored
    $path = "uploads/" . $new_file_name;
    if (!empty($file_name)) {
        // Temporary file name stored on the server
        $temp = $file['tmp_name'];
        //copy file to where you want to store the file
        if (!copy($temp, $path)) {
            echo '-22';
        } else {
            return $path;
        }
    } else {
        echo '-11';
        return false;
    }
    return false;
}

function Check_Value($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


/*
if (isset($_GET['username'])) {

}

if (empty($_SESSION['username'])) {//since the session is not found we are redirecting the user to main page to login again
    echo '0';
    header("index.php");
} else {
    if ($_SESSION['username'] == 'admin') { //checking if it was the admin who signed in

    }
}*/
?>