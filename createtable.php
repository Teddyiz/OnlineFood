<?php
include 'connection.php';
try {
    $sql="CREATE TABLE food(
          IID INT NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(IID),
          name VARCHAR(225),
          category VARCHAR(225),
          price VARCHAR(225),
          photo VARCHAR(225)
        )";

    $sql="CREATE TABLE user(
          IID INT NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(IID),
          name VARCHAR(225),
          email VARCHAR(225),
          password VARCHAR(225)
        )";

     $sql="CREATE TABLE admin(
          IID INT NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(IID),
          name VARCHAR(225),
          email VARCHAR(225),
          password VARCHAR(225)
        )";
     
      $sql="CREATE TABLE orders(
          IID INT NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(IID),
            first_name VARCHAR(255),
            last_name VARCHAR(255),
            email VARCHAR(255),
            address VARCHAR(255),
            address2 VARCHAR(255),
            country VARCHAR(255),
            zipcode VARCHAR(255),
            cname VARCHAR(255),
            cardnumber VARCHAR(255)
        )";


    $db-> exec($sql);
    echo"table created";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>