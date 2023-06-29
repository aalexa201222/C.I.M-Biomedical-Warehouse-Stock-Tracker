<?php
    include_once 'connection.php';
    $invoiceid = $_POST['invoiceId'];
    $issale = $_POST['isSale'];
    $invoicedate = $_POST['invoiceDate'];
    $employeeid = $_POST['employeeId'];

    $sql = "INSERT INTO invoices (invoice_id, is_sale, invoice_date, employee_id)
            VALUES ('$invoiceid', '$issale', '$invoicedate', '$employeeid');";
    mysqli_query($con,$sql);

    header("Location: ../index.html?invoiceAdded=success");