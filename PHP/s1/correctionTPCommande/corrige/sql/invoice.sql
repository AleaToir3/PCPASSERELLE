/* Requête SQL du client */

SELECT
    customerName, 
    contactFirstName, 
    contactLastName, 
    addressLine1, 
    addressLine2, 
    postalCode, 
    city, 
    country
FROM customers
INNER JOIN orders ON customers.customerNumber = orders.customerNumber
WHERE orderNumber = 10100

/* Requête SQL des détails de commande */

SELECT
    productName, 
    quantityOrdered, 
    priceEach, 
    (quantityOrdered * priceEach) AS totalPrice
FROM orderDetails
INNER JOIN products ON products.productCode = orderDetails.productCode
WHERE orderNumber = 10100