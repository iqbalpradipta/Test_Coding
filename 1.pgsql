SELECT DISTINCT Customers.* FROM Customers 
WHERE NOT EXISTS (SELECT * FROM orders WHERE orders.customer_id = Customers.customer_id);