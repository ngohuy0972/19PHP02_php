-- Cau so 1 : Lấy tất cả các sản phẩm thuộc danh mục Guitars trong tên,
-- có giá lớn hơn 300 và tên có chứa chữ 'o' ,sắp xếp theo giá giảm dần

SELECT * FROM `products` 
INNER JOIN categories ON categories.categoryID = products.categoryID 
WHERE categories.categoryName = 'Guitars' AND products.listPrice > 300 AND products.productName LIKE '%o%'
ORDER BY listPrice DESC

-- Câu số 2 : Lấy tất cả sản phẩm được thêm vào tháng 7 năm 2014, có giá lớn hơn 450 và
-- thuộc danh mục Guitars, sắp xếp theo tăng  dần

SELECT * FROM `products` 
WHERE products.dateAdded = '2014-07-' AND products.listPrice > 450
ORDER BY listPrice

-- Câu số 3 : Lấy ra những sản phẩm khách hàng dùng gmail để mua



-- Câu số 4 : Lấy ra tên thành phố mà khách hàng đã mua sản phẩm có tên là 'Yamaha FG700S'

SELECT DISTINCT addresses.city 
FROM addresses
INNER JOIN customers ON customers.customerID = addresses.addressID
INNER JOIN orders ON orders.customerID = addresses.customerID
INNER JOIN orderitems ON orderitems.orderID = orders.orderID
INNER JOIN products ON products.productID = orderitems.productID
WHERE products.productName LIKE 'Yamaha FG700S'