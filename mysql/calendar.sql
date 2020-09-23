create table profacture(
	id int primary key auto_increment not null,
	model_number varchar(255),
	category_name varchar(255),
	deparment_name varchar(255),
	manufacturer_name varchar(255),
	upc varchar(255),
	sku varchar(255),
	regular_price varchar(255),
	sale_price varchar(255),
	description varchar(100),
	url varchar(255)
);