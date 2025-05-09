SELECT Customers.customer_id, customer_name, customer_city, order_id, order_date, amount
FROM Customers
LEFT JOIN Orders ON Orders.customer_id = Customers.customer_id;