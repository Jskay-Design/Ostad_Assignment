-- task 4:

-- Write a SQL query to retrieve the top 5 customers who have made the highest total purchase amount. 
-- Display the customer name along with the total purchase amount in descending order of the purchase amount.


SELECT c.name AS customer_name,SUM(o.total_amount) AS purchase_amount
FROM customers c
INNER JOIN orders o ON o.customer_id = c.id
GROUP BY o.customer_id ORDER BY purchase_amount DESC LIMIT 5;