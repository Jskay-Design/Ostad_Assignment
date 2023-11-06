-- task 1:

-- Write a SQL query to retrieve all the customer information along with the total number of orders 
-- placed by each customer. Display the result in descending order of the number of orders.

SELECT customers.*, COUNT(orders.id) AS total_number_of_order_placed
FROM customers
INNER JOIN orders ON customers.id = orders.customer_id
GROUP BY orders.customer_id ORDER BY total_number_of_order_placed DESC;
