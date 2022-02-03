/* La liste des bureaux (adresse et ville) triés par pays décroissant puis par état */
SELECT addressLine1, addressLine2, city, country, state
FROM offices
ORDER BY country DESC, state
/* RESULTAT ==> 7 lignes / 100 Market Street */


/* La liste des motos (nom, vendeur, quantité et marge) triés par marge décroissante */
SELECT productName, productVendor, quantityInStock, (MSRP - buyPrice) AS margin
FROM products
WHERE productLine = 'Motorcycles'
ORDER BY margin DESC
/* RESULTAT ==> 13 lignes / 2003 Harley-Davidson Eagle Drag Bike */


/* La liste des commandes (numéro, date de commande, date d'expédition, écart en jours entre les deux dates et statut) qui sont en cours de traitement ou qui ont été expédiées et ont un écart de plus de 10j triés par écart décroissant puis par date de commande */
SELECT orderNumber, orderDate, shippedDate, DATEDIFF(shippedDate, orderDate) AS processTime, status
FROM orders
WHERE status = 'In Process' OR (status = 'Shipped' AND DATEDIFF(shippedDate, orderDate) > 10)
ORDER BY processTime DESC, orderDate
/* RESULTAT ==> 7 lignes */


/*La liste des produits (nom et valeur du stock à la vente) des années 1960 */
SELECT productName, (quantityInStock * MSRP) AS stockValue
FROM products
WHERE productName LIKE '196%'
/* RESULTAT ==> 16 lignes / 1969 Harley Davidson Ultimate Chopper */


/* La liste des employés (nom, prénom et fonction) et des bureaux (adresse et ville) dans lequel ils travaillent */
SELECT lastName, firstName, jobTitle, addressLine1, addressLine2, city
FROM employees
INNER JOIN offices ON offices.officeCode = employees.officeCode
/* RESULTAT ==> 23 lignes / Diane Murphy */


/* La liste des clients français ou américains (nom du client, nom, prénom du contact et pays) et de leur commercial dédié (nom et prénom) triés par nom et prénom du contact */
SELECT customerName, contactLastName, contactFirstName, country, lastName, firstName
FROM customers
INNER JOIN employees ON employees.employeeNumber = customers.salesRepEmployeeNumber
WHERE country IN ('France', 'USA')
ORDER BY contactLastName, contactFirstName
/* RESULTAT ==> 48 lignes / Miguel Barajas */


/* La liste des lignes de commande (numéro de commande, code, nom et ligne de produit) et la remise appliquée aux voitures ou motos commandées triées par numéro de commande puis par remise décroissante */
SELECT orderNumber, orderdetails.productCode, productName, productLine, (MSRP - priceEach) AS discount
FROM orderdetails
INNER JOIN products ON products.productCode = orderdetails.productCode
WHERE productLine IN ('Classic Cars', 'Vintage Cars', 'Motorcycles')
ORDER BY orderNumber, discount DESC
/* RESULTAT ==> 2026 lignes / 34 */


/* Le prix moyen des produits pour chaque fournisseur triés par prix moyen décroissant */
SELECT productVendor, AVG(MSRP) AS averagePrice
FROM products
GROUP BY productVendor
ORDER BY averagePrice DESC
/* RESULTAT ==> 13 lignes / Welly Diecast Productions / 113.9325 */


/* Compter le nombre de produits pour chaque catégorie de produit ('Classic Cars', 'Motorcycles', ....) */
SELECT productLine, COUNT(productCode)
FROM products
GROUP BY productLine
/* RESULTAT ==> 7 lignes / Classic Cars / 38 */



/* Le total du stock et le total de la valeur du stock à la vente de chaque ligne de produit pour les produits vendus plus de 100$ trié par total de la valeur du stock à la vente */
/*
Calculer pour chque catégorie de produit ('Classic Cars', 'Motorcycles', ....) le :
    - le total du stock
    - le total de la valeur de stock
ce compte ne doit prendre que les produit de plus de 100 dollars et le resultat de la requete doit etre trié par la valeur total de stock
*/
SELECT productLine, SUM(quantityInStock) AS totalStock, SUM(quantityInStock * MSRP) AS totalStockValue
FROM products
WHERE MSRP > 100
GROUP BY productLine
ORDER BY totalStockValue
/* RESULTAT ==> 7 lignes / Ships / 429177.74 */



/* La quantité du produit le plus en stock de chaque vendeur trié par vendeur */
/*
Pour chaque fournisseur, calculé la quantité maximun en stock (tous produits confondu)
*/
SELECT productVendor, MAX(quantityInStock) AS maxInStock
FROM products
GROUP BY productVendor
ORDER BY productVendor
/* RESULTAT ==> 13 lignes / Autoart Studio Design / 9354 */



/* Le prix de l'avion qui coûte le moins cher à l'achat */
SELECT MIN(buyPrice) AS cheapestPricePlane
FROM products
WHERE productLine = 'Planes'
/* RESULTAT ==> 1 ligne / 29.34$ */



/* Le crédit des clients qui ont payé plus de 20000$ durant l'année 2004 trié par crédit décroissant */
/*
Pour l'année 2004, donner la somme des paiements fait par chaque client, uniquement pour ceux qui ont fait plus de 20000 $
le resultat doit etre trié par somme de paiement de manière décroissante
*/
SELECT customerNumber, SUM(amount) AS totalCredit
FROM payments
WHERE paymentDate BETWEEN '2004-01-01' AND '2004-12-31'
GROUP BY customerNumber
HAVING totalCredit > 20000
ORDER BY totalCredit DESC
/* RESULTAT ==> 69 lignes / 141 / 293 765.51 */


/* Le total des paiements effectués de chaque client (numéro, nom et pays) américain, allemand ou français de plus de 50000$ trié par pays puis par total des paiements décroissant */
SELECT customers.customerNumber, customerName, country, SUM(amount) AS totalPayment
FROM customers
INNER JOIN payments ON payments.customerNumber = customers.customerNumber
WHERE country IN ('France', 'Germany', 'USA')
GROUP BY customers.customerNumber, customerName, country
HAVING totalPayment > 50000
ORDER BY country, totalPayment DESC
/* RESULTAT ==> 38 lignes / 146 / 130305.35 */



/* Le montant total de chaque commande (numéro et date) des clients New-Yorkais (nom) trié par nom du client puis par date de commande */
SELECT customerName, orders.orderNumber, orderDate, SUM(quantityOrdered * priceEach) AS totalAmount
FROM customers
INNER JOIN orders ON orders.customerNumber = customers.customerNumber
INNER JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber
WHERE city = 'NYC'
GROUP BY city, customerName, orderNumber, orderDate
ORDER BY customerName, orderDate
/* RESULTAT ==> 16 lignes / Classic Legends / 10115 / 21665.98 */
