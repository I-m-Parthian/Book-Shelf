CREATE TABLE books (
	book_id int(7) not null PRIMARY KEY AUTO_INCREMENT,
  book_name varchar(128) NOT NULL,
  author_name varchar(128) NOT NULL,
  book_description LONGTEXT NOT NULL,
	image_name LONGTEXT NOT NULL
);
INSERT INTO books(
book_name, author_name, book_description, image_name) VALUES ("Harry Potter and the Philosopher's Stone","J. K. Rowling","Harry Potter and the Philosopher's Stone is a fantasy novel written by British author J. K. Rowling.","gallery_1.jpg")

INSERT INTO books(
book_name, author_name, book_description, image_name) VALUES ("Fantastic Beasts and Where to Find Them","J. K. Rowling","Fantastic Beasts and Where to Find Them is a 2001 guide book written by British author J. K. Rowling about the magical creatures in the Harry Potter universe.","gallery_2.jpg")




table for users

CREATE TABLE users (
	user_id int(7) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_email varchar(128) NOT NULL,
	user_name varchar(128) NOT NULL,
	user_role varchar(128) NOT NULL,
	password varchar(128) NOT NULL
);


INSERT INTO users(
	user_email, user_name,user_role, password) VALUES ('abc@gmail.com','abc','Admin','pass@123')

INSERT INTO users(
		user_email, user_name, user_role, password) VALUES ('xyz@gmail.com','xyz','Reader','pass@123')
