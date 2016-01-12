create database if not exists vp ;
use vp;

create table if not exists users  (
	username VARCHAR(50) NOT NULL ,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	user_id INT AUTO_INCREMENT ,
	balance FLOAT ,
	registered BOOLEAN,
	registered_on DATETIME ,
    PRIMARY KEY( user_id)
    
);
/*
 tags ---> Interests 
 
*/


create table if not exists tags (
	tag_id INT AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	description TEXT,
    PRIMARY KEY( tag_id)

);

/* Table connecting users and tags
   Composite Primary Key 
*/

create table if not exists user_tags (
	user_id INT  NOT NULL ,
	tag_id INT  NOT NULL,
    PRIMARY KEY ( user_id , tag_id )


}
