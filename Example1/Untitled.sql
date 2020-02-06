-- Create our lesson_03 example database if it doesn't exist 
create database IF NOT EXISTS lesson_03;
USE lesson_03; 

-- Create the countries table if it doesn't exist
create table IF NOT EXISTS countries (
	id  int(11) NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    description varchar(2000) NULL,
    population int(15) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

