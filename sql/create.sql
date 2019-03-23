CREATE TABLE Distributors
(
    DistributorId VARCHAR(10),
    DistributorName VARCHAR(20) NOT NULL,
    OnBoardingDate TIMESTAMP,
    PRIMARY KEY(DistributorId)
);

CREATE TABLE Brands
(
    BrandId VARCHAR(10),
    BrandName VARCHAR(20) NOT NULL,
    DistributorId VARCHAR(10),
    PRIMARY KEY(BrandId),
    FOREIGN KEY(DistributorId) REFERENCES Distributors
);

CREATE TABLE Employees
(
    EmployeeId VARCHAR(10),
    FirstName VARCHAR(20) NOT NULL,
    LastName VARCHAR(20) NOT NULL,
    Salary INT,
    EmployeeRole VARCHAR(20),
    Expertise VARCHAR(20),
    PhoneNumber VARCHAR(10),
    EmployeeAddress VARCHAR(30),
    PRIMARY KEY(EmployeeId)
);

CREATE TABLE Products
(
    ProductId VARCHAR(10),
    CostPrice INT,
    SellingPrice INT,
    BrandId VARCHAR(10),
    ProductName VARCHAR(20),
    PRIMARY KEY(ProductId),
    FOREIGN KEY (BrandId) REFERENCES Brands
);

CREATE TABLE Phones
(
    ProductId VARCHAR(10),
    RAM INT,
    Storage INT,
    OS VARCHAR(20),
    Display VARCHAR(10),
    Frontcamera INT,
    Rearcamera INT,
    FOREIGN KEY(ProductId) REFERENCES Products
);


CREATE TABLE Laptops
(
    ProductId VARCHAR(10),
    RAM INT,
    Storage INT,
    OS VARCHAR(20),
    Display VARCHAR(30),
    GraphicsCard INT,
    FOREIGN KEY(ProductId) REFERENCES Products
);

CREATE TABLE Discounts
(
    DiscountId VARCHAR(10),
    DiscountDescription VARCHAR(30),
    DiscountType VARCHAR(20),
    Validity TIMESTAMP,
    PRIMARY KEY(DiscountId)
);

CREATE TABLE Payments
(
    PaymentId VARCHAR(10),
    PaymentType VARCHAR(30),
    PRIMARY KEY(PaymentId)
);

CREATE TABLE Customers
(
    CustomerId VARCHAR(10),
    FirstName VARCHAR(20),
    LastName VARCHAR(20),
    PhoneNumber VARCHAR(10),
    Email VARCHAR(30),
    PRIMARY KEY(CustomerId)
);

CREATE TABLE Bills
(
    BillId VARCHAR(10),
    BillTime TIMESTAMP,
    DiscountId VARCHAR(10),
    PaymentId VARCHAR(10),
    CustomerId VARCHAR(10),
    PRIMARY KEY(BillId),
    FOREIGN KEY(DiscountId) REFERENCES Discounts,
    FOREIGN KEY(PaymentId) REFERENCES Payments,
    FOREIGN KEY(CustomerId) REFERENCES Customers
);

CREATE TABLE Has(
    BillId VARCHAR(10),
    ProductId VARCHAR(10),
    FOREIGN KEY(BillId) REFERENCES Bills,
    FOREIGN KEY(ProductId) REFERENCES Products
);
