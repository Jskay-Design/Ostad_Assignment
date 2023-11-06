--insert dummy data for customer
 insert  into `customers`(`id`,`name`,`email`,`location`,`created_at`,`update_at`) values (1,'Alamgir','alamgir@gmail.com','Chattagram','2023-11-05 16:03:53','2023-11-05 16:04:24'),(2,'kabir','kabir@gmail.com','Dhaka','2023-11-05 16:05:03','2023-11-05 16:05:03'),(3,'Chanchal','chanchal@gmail.com','Rangpur','2023-11-05 16:06:02','2023-11-05 16:06:02');

--insert dummy data for product
insert  into `products`(`id`,`category_id`,`name`,`description`,`price`,`created_at`,`update_at`) values (1,1,'HP Laptop',' Laptop Brand',20000,'2023-11-05 16:13:29','2023-11-05 16:14:15'),(2,1,'Dell Laptop','Laptop Brand',38000,'2023-11-05 16:14:07','2023-11-05 16:14:36'),(3,1,'LENOVO','Laptop Brand',40000,'2023-11-05 16:15:02','2023-11-05 16:15:02'),(4,2,'Iphone','Electornic Gedget',120000,'2023-11-05 16:15:31','2023-11-05 16:15:31'),(5,2,'Ice cream','a product to have with dear and near ones',60,'2023-11-05 16:16:35','2023-11-05 16:16:35'),(6,2,'Motorbike','a product for Luxary Item',150000,'2023-11-05 16:16:58','2023-11-05 16:16:58');

--insert dummy data for categories
insert  into `categories`(`id`,`name`,`created_at`,`update_at`) values (1,'Gadgets','2023-11-05 16:02:11','2023-11-05 19:02:19'),(2,'Groceries','2023-11-05 16:09:50','2023-11-05 19:02:34'),(3,'Luxuries Item','2023-11-05 16:09:50','2023-11-05 19:02:34');

--insert dummy data for order_item
 insert  into `order_items`(`id`,`order_id`,`product_id`,`quantity`,`unit_price`,`created_at`,`update_at`) values (4,1,2,1,38000,'2023-11-05 16:19:45','2023-11-05 16:19:45'),(5,2,1,1,20000,'2023-11-05 16:20:56','2023-11-05 16:20:56'),(6,3,5,1,60,'2023-11-05 16:23:37','2023-11-05 16:23:37'),(7,3,6,4,150000,'2023-11-05 16:23:47','2023-11-05 16:23:47'),(8,2,3,1,40000,'2023-11-05 19:01:41','2023-11-05 19:01:41');
