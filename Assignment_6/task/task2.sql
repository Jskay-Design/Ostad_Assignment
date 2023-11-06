-- task 2:

-- Write a SQL query to retrieve the product name, quantity, and total amount 
-- for each order item. Display the result in ascending order of the order ID.

SELECT o.id,p.name, oi.quantity, o.total_amount
FROM products p
INNER JOIN order_items oi ON oi.product_id = p.id
INNER JOIN orders o ON o.id = oi.order_id
ORDER BY o.id ASC;

