
--1 All available products
SELECT Brandname, Productname FROM Brands
INNER JOIN Products
ON brands.BrandId = Products.BrandId;

--2 All available brands
SELECT Brandname FROM Brands;

--3 Top 5 Products with highest cost price
SELECT ProductName, CostPrice, SellingPrice
FROM Products
ORDER BY CostPrice DESC
LIMIT 5;

--4 Top 5 Products with highest selling price
SELECT ProductName, CostPrice, SellingPrice
FROM Products
ORDER BY SellingPrice DESC
LIMIT 5;

--5 Top 5 Products with highest profit margin
SELECT ProductName, CostPrice, SellingPrice
FROM Products
ORDER BY (SellingPrice - CostPrice)DESC
LIMIT 5;

--6 Top 5 Phones with highest storage
SELECT ProductId, storage, RAM, frontcamera, rearcamera
FROM phones
ORDER BY (storage)DESC
LIMIT 5;

--7 Top 5 Phones with highest RAM
SELECT ProductId, storage, RAM, frontcamera, rearcamera
FROM phones
ORDER BY (RAM)DESC
LIMIT 5;

--8 Top 5 Phones with highest front camera MP
SELECT ProductId, RAM, storage, frontcamera, rearcamera
FROM phones
ORDER BY (frontcamera)DESC
LIMIT 5;

--9 Top 5 Phones with highest rear camera MP
SELECT ProductId, RAM, storage, frontcamera, rearcamera
FROM phones
ORDER BY (rearcamera)DESC
LIMIT 5;

--10 Discounts available
SELECT discountdescription, validity FROM discounts;

--11
SELECT   BrandId,max(CostPrice) as Price
FROM     Products
GROUP BY BrandId;


SELECT * FROM Brands
INNER JOIN (SELECT   BrandId,max(CostPrice) as Price
FROM     Products
GROUP BY BrandId)P
ON brands.BrandId = P.BrandId;