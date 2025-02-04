CREATE DATABASE blog;
use blog;
CREATE TABLE posts (
    id int (10) NOT NULL AUTO_INCREMENT,
    txtblog varchar(200) DEFAULT NULL,
    PRIMARY KEY(id)
);