Create database real_state_listing_properties;

use real_state_listing_properties;
create table user(
	user_id int not null auto_increment	primary key ,
	user_name varchar(52) not null,
	user_username varchar(16) not null,
	user_image varchar(16),
	user_address varchar(256) not null,
	user_contact varchar(11) not null,
	user_email varchar(52) unique check (user_email like '%@gmail.com'),
	user_password NVARCHAR(255) not null
    );

    use real_state_listing_properties;
	insert into user(user_id, user_name, user_username, user_image, user_address, user_contact, user_email, user_password) 
    values (1,"XYZ","ABC","uv.png","dchvasjdc ikavcjav","017734896","XYZ@gmail.com","123456789");

    use real_state_listing_properties;
	select *from user;
-----------------------------------------------------------------------------------------------------------------------
use real_state_listing_properties;
create table agent(
	agent_id int not null auto_increment primary key ,
	agent_name varchar(52) not null,
	agent_username varchar(16) not null,
	agent_image varchar(16),
	agent_address varchar(256) not null,
	agent_contact varchar(11) not null,
	agent_email varchar(52) unique check (agent_email like '%@gmail.com'),
	agent_password NVARCHAR(255) 
	);

    use real_state_listing_properties;
	insert into agent(agent_id, agent_name, agent_username, agent_image, agent_address, agent_contact, agent_email, agent_password) 
    values (1,"ABC","XYZ","pq.png","sdhbfvls vsdfvsd","01735322020","XYZ@gmail.com","jfblabfl");

    use real_state_listing_properties;
	select *from agent;
------------------------------------------------------------------------------------------------------------------------
use real_state_listing_properties;
create table review(
	review_id int not null auto_increment primary key,
    agent_id int not null,
	foreign key(agent_id) references agent(agent_id),
    user_id int not null,
	foreign key(user_id) references user(user_id),
    report varchar(256) 
	);

    use real_state_listing_properties;
	insert into review(review_id, agent_id, user_id, report) values (1,1,1,"Agent bhalana, oy ekta batpar");

    use real_state_listing_properties;
	select *from review;
----------------------------------------------------------------------------------------------------------------------
use real_state_listing_properties;
create table generate(
    user_id int not null,
    foreign key(user_id) references user(user_id),
    buyer_id int not null unique key,
    seller_id int not null unique key
);

    use real_state_listing_properties;
    insert into generate(user_id,buyer_id,seller_id) values (1,111,1111);

    use real_state_listing_properties;
    select *from generate;

-------------------------------------------------------------------------------------
use real_state_listing_properties;
create table property(
	prop_id int not null auto_increment primary key, 
	seller_id int not null ,
    foreign key(seller_id) references generate(seller_id),
	prop_location varchar(70) not null,
	porp_type varchar(10) not null,
	prop_description varchar(256) not null,
	prop_size varchar(50) not null,
	prop_price int not null,
	prop_status varchar(10) not null,
	prop_image varchar (100) not null,
	prop_bed int not null,
	prop_bath int not null
	
	);

    use real_state_listing_properties;
	insert into property(prop_id, seller_id, prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath)
    values(1,1111,"Badda","Flat","This is description","2200 sqft","475000","on list", "property1.png","5","4");
	use real_state_listing_properties;
	insert into property(seller_id, prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath,prop_title)
    values(1111,"Dhanmondi","Flat","This is description","2200 sqft","475000","on list", "prop5.jpg","5","4","Metro Melody");

	insert into property(seller_id, prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath, prop_title)
    values(1111,"Gulshan","Flat","This is description","2200 sqft","475000","on list", "prop2.jpeg","5","4","Asha Housing");

	insert into property(seller_id, prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath, prop_title)
    values(1111,"Jatrabari","Flat","This is description","2200 sqft","475000","on list", "prop8.jpg","5","4","Mayeen er Basha");

	insert into property(seller_id, prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath, prop_title)
    values(1111,"Gopibagh","Flat","This is description","2200 sqft","475000","on list", "prop4.jpg","5","4","Ruslan er Basha");

	insert into property(seller_id, prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath, prop_title)
    values(1111,"Shaymoli","Flat","This is description","2200 sqft","475000","on list", "prop10.jpg","5","4","Zenun er Basha");

	insert into property(seller_id, prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath, prop_title)
    values(1111,"Gram","Flat","This is description","2200 sqft","475000","on list", "prop3.jpg","5","4","Manzar er Bahsa");

	insert into property(seller_id, prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath, prop_title)
    values(1111,"Khilgaon","Flat","This is description","2200 sqft","475000","on list", "prop7.jpg","5","4","Ashiker Basha");

	insert into property(prop_location, porp_type, prop_description, prop_size, prop_price, prop_status, prop_image, prop_bed, prop_bath, prop_title)
    values("Khilgaon","Flat","This is description","2200 sqft","475000","on list", "prop7.jpg","5","4","Ashiker Basha");
	
    use real_state_listing_properties;
	select *from property;

	use real_state_listing_properties;
	Alter table property
	add column added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

	use real_state_listing_properties;
	Alter table property
	add column prop_title varchar;
----------------------------------------------------------------------------------
use real_state_listing_properties;
create table listing(
	listing_id int not null auto_increment primary key,
	listing_status varchar(10) not null,
	listing_date Date, 
	listing_comments varchar(256),
	buyer_id int not null ,
    foreign key(buyer_id) references generate(buyer_id),
	seller_id int not null ,
    foreign key(seller_id) references generate(seller_id),
    prop_id int not null,
	foreign key(prop_id) references property(prop_id)
	);

    use real_state_listing_properties;
	insert into listing(listing_id, listing_status, listing_date, listing_comments, buyer_id, seller_id, prop_id) 
    values(1,"pending","2023-12-1","keu kininyen na, vejal ase",111,1111,1);

    use real_state_listing_properties;
	select *from listing;

------------------------------------------------------------------------------
use real_state_listing_properties;
create table amenities(
    prop_id int not null,
	foreign key(prop_id) references property(prop_id),
    bed int not null,
    washroom int not null,
    balcony int not null,
    elevator int not null,
    garage int not null
    );

    use real_state_listing_properties;
    insert into amenities(prop_id, bed, washroom, balcony, elevator, garage)
    values(1,5,3,2,2,1);

    use real_state_listing_properties;
    select *from amenities;