<?php
session_start();
require_once 'connection.php';

if(isset($_GET['cart'])) {
    getProductDetails($_GET['cart']);
}

if(isset($_POST['confirmOrder'])) {
    confirmOrder($_POST['confirmOrder']);
}

function confirmOrder($data) {
    if (orderValidation()) {
        $db = new Database(); //create a new instance of the database class
        $conn = $db->connect(); //assign the connection parameters
        $stmt = $conn->prepare("INSERT INTO ordertable(orderID, orderTotal, orderItems, userID) VALUES(?, ?, ?, ?)");
        $stmt->bind_param('sdbs', $productID, $productTitle, $productDescription, $productPrice, $productType, $productImagePath);
        $stmt->execute();
        echo $stmt->affected_rows; //sends the number of rows affected by the query, usually one
        $stmt->close();
        $conn->close();
    } else {
        echo '3';
    }
}

function orderValidation() {

}

function getProductDetails($productID)
{
    if (strlen($productID) > 0) {
        $db = new Database(); //create a new instance of the database class
        $conn = $db->connect(); //assign the connection parameters
        $stmt = $conn->prepare("SELECT * FROM productTable WHERE ProductID = ?");
        if ($stmt === false) {
            trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
        }
        $stmt->bind_param('s', $productID);
        $stmt->execute();
        $res = $stmt->get_result();
        $rows = array();
        while ($row = $res->fetch_assoc()) {
            $rows[] = $row;
        }
        echo json_encode($rows);
        $stmt->close();
        $conn->close();
    } else {
        echo '-1';
    }
}

?>