CREATE TABLE pizza_site (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address_ VARCHAR(255) NOT NULL,
    pizza_size VARCHAR(255) NOT NULL,
    crust VARCHAR(255) NOT NULL,
    toppings VARCHAR(255) NOT NULL,
    sauce VARCHAR(255) NOT NULL
);


INSERT INTO pizza_site (fullname, phone, email, address_, pizza_size, crust, toppings, sauce)
VALUES
('Raman', '123-456-7890', 'raman@gmail.ca', '45 anne st', 'small', 'Thin', 'Peppers', 'Tomato'),
('Manveer', '987-654-3210', 'manveer@gmail.ca', '34 hickling St', 'large', 'stuffed', 'Sausage', 'pesto'),
('Jasmeen', '555-123-4567', 'jasmeen@gmail.ca', '54 voilet St', 'small', 'thick', 'Bacon', 'pepper'),
('Sargun', '999-888-7777', 'sargun@gmail.ca', '32 essa St', 'medium',  'sicilian', 'Pepperoni', 'sweet pizza'),
('Preet', '444-333-2222', 'preet@gmail.ca', '55 fitton St', 'large', 'thick', 'bacon', 'bechamel'),
('Rupinder', '111-222-3333', 'rupinder@gmail.com', '88 bayfield St', 'small', 'Thin', 'bacon', 'pepper'),
('Harjeet', '777-888-9999', 'harjeet@gmail.ca', '45 Walmart St', 'medium', 'Neapolitian', 'ham', 'pesto');


