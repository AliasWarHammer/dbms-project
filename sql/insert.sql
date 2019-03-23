INSERT INTO Distributors (DistributorId, DistributorName, OnBoardingDate)
VALUES ('DTR001','Aakash','2018-01-01 00:00:01');
INSERT INTO Distributors (DistributorId, DistributorName, OnBoardingDate)
VALUES ('DTR002','Praveen','2018-02-05 00:00:01');
INSERT INTO Distributors (DistributorId, DistributorName, OnBoardingDate)
VALUES ('DTR003','Aroha','2018-01-06 00:00:01');
INSERT INTO Distributors (DistributorId, DistributorName, OnBoardingDate)
VALUES ('DTR004','Rahul','2018-02-01 00:00:01');
INSERT INTO Distributors (DistributorId, DistributorName, OnBoardingDate)
VALUES ('DTR005','Sanket','2018-03-01 00:00:01');


INSERT INTO Brands (BrandId, BrandName, DistributorId)
VALUES ('BRD001','Samsung','DTR001');
INSERT INTO Brands (BrandId, BrandName, DistributorId)
VALUES ('BRD002','Apple','DTR002');
INSERT INTO Brands (BrandId, BrandName, DistributorId)
VALUES ('BRD003','HTC','DTR003');
INSERT INTO Brands (BrandId, BrandName, DistributorId)
VALUES ('BRD004','Motorola','DTR004');
INSERT INTO Brands (BrandId, BrandName, DistributorId)
VALUES ('BRD005','OnePlus','DTR005');
INSERT INTO Brands (BrandId, BrandName, DistributorId)
VALUES ('BRD006','MI','DTR002');
INSERT INTO Brands (BrandId, BrandName, DistributorId)
VALUES ('BRD007','Dell','DTR003');



INSERT INTO Employees (EmployeeId, FirstName, LastName, Salary, EmployeeRole, Expertise, PhoneNumber, EmployeeAddress)
VALUES ('EMP006','Pruthvish','Shah',20000,'Manager','Accounting','9912326841','Jayanagar, Bangalore');
INSERT INTO Employees (EmployeeId, FirstName, LastName, Salary, EmployeeRole, Expertise, PhoneNumber, EmployeeAddress)
VALUES ('EMP001','Parth','Zuckerberg',6000,'Salesman','Samsung Service','9827343456','Old Airport Road, Bangalore');
INSERT INTO Employees (EmployeeId, FirstName, LastName, Salary, EmployeeRole, Expertise, PhoneNumber, EmployeeAddress)
VALUES ('EMP002','Saahil','Jain',5000,'Salesman','Mobiles','8312367899','JP Nagar, Bangalore');
INSERT INTO Employees (EmployeeId, FirstName, LastName, Salary, EmployeeRole, Expertise, PhoneNumber, EmployeeAddress)
VALUES ('EMP003','Rahul','Kaushik',4000,'Salesman','Laptops','987654321','RBI Layout, Bangalore');


INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName)
VALUES ('PRD001',20000,25000,'BRD004','G4');--Motorola
INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName)
VALUES ('PRD002',100000,125000,'BRD007','XPS');--Dell laptop
INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName)
VALUES ('PRD003',50000,55000,'BRD001','S8');--Samsung
INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName)
VALUES ('PRD004',60000,66000,'BRD002','Iphone 7');--Apple
INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName)
VALUES ('PRD005',10000,11000,'BRD006','A2');--MI
INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName)
VALUES ('PRD006',20000,25000,'BRD003','U12');--HTC
INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName)
VALUES ('PRD007',120000,135000,'BRD002','macbook pro');--Apple laptop
INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName)
VALUES ('PRD008',33000,37000,'BRD005','5T');--OnePlus


INSERT INTO Phones (ProductId, RAM, Storage, OS, Display, Frontcamera, Rearcamera)
VALUES ('PRD001',4,64,'Android','5.9 inch',13,5);--Motorola
INSERT INTO Phones (ProductId, RAM, Storage, OS, Display, Frontcamera, Rearcamera)
VALUES ('PRD003',8,128,'Android','6.2 inch',12,8);--Samsung
INSERT INTO Phones (ProductId, RAM, Storage, OS, Display, Frontcamera, Rearcamera)
VALUES ('PRD004',4,64,'IOS','5.8 inch',8,5);--Apple
INSERT INTO Phones (ProductId, RAM, Storage, OS, Display, Frontcamera, Rearcamera)
VALUES ('PRD005',2,32,'Android','4.9 inch',5,3);--MI
INSERT INTO Phones (ProductId, RAM, Storage, OS, Display, Frontcamera, Rearcamera)
VALUES ('PRD006',6,64,'Android','5.7 inch',8,5);--HTC
INSERT INTO Phones (ProductId, RAM, Storage, OS, Display, Frontcamera, Rearcamera)
VALUES ('PRD008',8,128,'Android','6.1 inch',13,8);--OnePlus



INSERT INTO Laptops (ProductId, RAM, Storage, OS, Display, GraphicsCard)
VALUES ('PRD002',8,128,'Windows','13.3 inch',2);--OnePlus
INSERT INTO Laptops (ProductId, RAM, Storage, OS, Display, GraphicsCard)
VALUES ('PRD007',8,256,'MacOS','13.1 inch',2);--OnePlus


INSERT INTO Discounts (DiscountId, DiscountDescription, DiscountType, Validity)
VALUES ('DCT001','5% off','percentage','2018-12-07 00:00:01');
INSERT INTO Discounts (DiscountId, DiscountDescription, DiscountType, Validity)
VALUES ('DCT002','10% off on credit card','percentage credit','2018-03-31 00:00:01');
INSERT INTO Discounts (DiscountId, DiscountDescription, DiscountType, Validity)
VALUES ('DCT003','Rs.500 off','flat off','2018-06-30 00:00:01');


INSERT INTO Payments (PaymentId, PaymentType)
VALUES ('PAY001','Cash');
INSERT INTO Payments (PaymentId, PaymentType)
VALUES ('PAY002','Credit');
INSERT INTO Payments (PaymentId, PaymentType)
VALUES ('PAY003','Debit');


INSERT INTO Customers (CustomerId, FirstName, LastName, PhoneNumber, Email)
VALUES ('CUS001','Rohan','Sharma','9238538385','rohansharma@gmail.com');
INSERT INTO Customers (CustomerId, FirstName, LastName, PhoneNumber, Email)
VALUES ('CUS002','Shreyas','Karodi','8237945738','shreyaskarodi@yahoo.com');
INSERT INTO Customers (CustomerId, FirstName, LastName, PhoneNumber, Email)
VALUES ('CUS003','Ankit','Babel','8358583754','ankitbabel@gmail.com');


INSERT INTO Bills (BillId, BillTime, DiscountId, PaymentId, CustomerId)
VALUES ('BIL001','2018-02-23 14:23:41','DCT001','PAY001','CUS001');
INSERT INTO Bills (BillId, BillTime, DiscountId, PaymentId, CustomerId)
VALUES ('BIL002','2018-01-03 17:14:32','DCT001','PAY001','CUS002');
INSERT INTO Bills (BillId, BillTime, DiscountId, PaymentId, CustomerId)
VALUES ('BIL003','2018-02-07 13:07:45','DCT001','PAY001','CUS003');


INSERT INTO Has (BillId, ProductId)
VALUES ('BIL001','PRD001');
INSERT INTO Has (BillId, ProductId)
VALUES ('BIL002','PRD003');
INSERT INTO Has (BillId, ProductId)
VALUES ('BIL002','PRD007');
INSERT INTO Has (BillId, ProductId)
VALUES ('BIL003','PRD002');
