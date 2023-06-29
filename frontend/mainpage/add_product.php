<?php
    include_once 'connection.php';
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $descriptionn = $_POST['description'];
    $productType = $_POST['productType'];
    $expiryDate = $_POST['expiryDate'];
    $sectionId = $_POST['sectionId'];
    $lotNumber = $_POST['lotNumber'];
    $productSize = $_POST['productSize'];
    $purchaseId = $_POST['purchaseInvoiceNum'];
    $saleId = $_POST['saleInvoiceNum'];

    $sql = "INSERT INTO products (product_id, name, description, product_type, expiry_date, section_id, lot_number, product_size, buy_invoice_id, sell_invoice_id)
            VALUES ('$productId', '$productName', '$descriptionn', '$productType', 
                    '$expiryDate', '$sectionId', '$lotNumber', '$productSize', '$purchaseId', '$saleId');";
    mysqli_query($con,$sql);

    header("Location: ../index.html?invoiceAdded=success");