var dropdown = document.getElementById('isSale');

var purchaseInvoice = document.createElement("label");
purchaseInvoice.id = "purchaseInvoiceLabel";
purchaseInvoice.style.fontWeight = "bold";
purchaseInvoice.innerText = "Purchase Invoice Number";
var invoiceBox = document.createElement("input");
invoiceBox.id = "purchaseInvoiceBox";
invoiceBox.type = "text";
invoiceBox.placeholder = "Purchase Invoice Number"
invoiceBox.name = "purchaseInvoiceNum";
document.getElementById("formFields").insertBefore(purchaseInvoice, document.getElementById("submitButton"));
document.getElementById("formFields").insertBefore(invoiceBox, document.getElementById("submitButton"));

function addCorrectElement() {
    if (dropdown.value == "1") {
        var purchaseInvoice1 = document.getElementById("saleInvoiceLabel");
        var purchaseInvoice2 = document.getElementById("saleInvoiceBox");
        purchaseInvoice1.parentNode.removeChild(purchaseInvoice1);
        purchaseInvoice2.parentNode.removeChild(purchaseInvoice2);

        var purchaseInvoice = document.createElement("label");
        purchaseInvoice.id = "purchaseInvoiceLabel";
        purchaseInvoice.style.fontWeight = "bold";
        purchaseInvoice.innerText = "Purchase Invoice Number";
        var invoiceBox = document.createElement("input");
        invoiceBox.id = "purchaseInvoiceBox";
        invoiceBox.type = "text";
        invoiceBox.placeholder = "Purchase Invoice Number"
        invoiceBox.name = "purchaseInvoiceNum";
        document.getElementById("formFields").insertBefore(purchaseInvoice, document.getElementById("submitButton"));
        document.getElementById("formFields").insertBefore(invoiceBox, document.getElementById("submitButton"));
    }
    else {
        var purchaseInvoice1 = document.getElementById("purchaseInvoiceLabel");
        var purchaseInvoice2 = document.getElementById("purchaseInvoiceBox");
        purchaseInvoice1.parentNode.removeChild(purchaseInvoice1);
        purchaseInvoice2.parentNode.removeChild(purchaseInvoice2);

        var saleInvoice = document.createElement("label");
        saleInvoice.id = "saleInvoiceLabel";
        saleInvoice.style.fontWeight = "bold";
        saleInvoice.innerText = "Sale Invoice Number";
        var invoiceBox = document.createElement("input");
        invoiceBox.id = "saleInvoiceBox";
        invoiceBox.type = "text";
        invoiceBox.placeholder = "Sale Invoice Number"
        invoiceBox.name = "saleInvoiceNum";
        document.getElementById("formFields").insertBefore(saleInvoice, document.getElementById("submitButton"));
        document.getElementById("formFields").insertBefore(invoiceBox, document.getElementById("submitButton"));
    }
}


