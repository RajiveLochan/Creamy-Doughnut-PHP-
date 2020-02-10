<?php
session_start();
require_once 'connection.php';
if (isset($_GET['menu'])) {
    getProducts($_GET['menu']);
}

if (isset($_GET['types'])) {
    getProductTypes();
}

if (isset($_GET['suggest']) && isset($_GET['category'])) {
    getSearchSuggestions($_GET['suggest'], $_GET['category']);
}

if (isset($_GET['productID'])) {
    getProductDetails($_GET['productID']);
}

if(isset($_GET['pSuggest'])) {
    getProductTitle();
}

function getProducts($productType)
{
    if (($productType == "Doughnuts" || $productType == "Coffee")) {
        $db = new Database(); //create a new instance of the database class
        $conn = $db->connect(); //assign the connection parameters
        $stmt = $conn->prepare("SELECT * FROM productTable WHERE ProductType = ?");
        if ($stmt === false) {
            trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
        }
        $stmt->bind_param('s', $productType);
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

function getProductTypes()
{
    $db = new Database(); //create a new instance of the database class
    $conn = $db->connect(); //assign the connection parameters
    $stmt = $conn->prepare("SELECT DISTINCT ProductType FROM productTable");
    if ($stmt === false) {
        trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
    }
    $stmt->execute();
    $res = $stmt->get_result();
    $rows = array();
    while ($row = $res->fetch_array(MYSQLI_BOTH)) {
        echo $row['ProductType'];
        echo '-';
    }
    $stmt->close();
    $conn->close();
}

function getSearchSuggestions($query, $category)
{
    if (strlen($query) > 0 && strlen($category)) {
        $db = new Database(); //create a new instance of the database class
        $conn = $db->connect(); //assign the connection parameters
        $sql = "SELECT ProductID, ProductTitle, ProductDescription FROM producttable WHERE ProductTitle LIKE ?";
        if ($category !== 'All') {
            $sql .= " AND ProductType = '$category'";
        }
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
        }
        $query = '%' . $query . '%';
        $stmt->bind_param('s', $query);
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

function getProductTitle()
{
    $db = new Database(); //create a new instance of the database class
    $conn = $db->connect(); //assign the connection parameters
    $stmt = $conn->prepare("SELECT ProductTitle FROM productTable");
    if ($stmt === false) {
        trigger_error(' Error: ' . $conn->errno . ' ' . $conn->error, E_USER_ERROR);
    }
    $stmt->execute();
    $res = $stmt->get_result();
    $rows = array();
    while ($row = $res->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
    $stmt->close();
    $conn->close();
}

?>