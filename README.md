# my-mvc-framework
Small custom PHP MVC framework (Laravel like) with custom router and basic ORM

# Additional Tables Required

CREATE DATABASE mytodo;

USE mytodo;

CREATE TABLE IF NOT EXISTS todos (

    id INT AUTO_INCREMENT,

    description VARCHAR(255) NOT NULL,

    completed TINYINT NOT NULL,

    PRIMARY KEY (id)

)  ENGINE=INNODB;

INSERT INTO todos (description, completed) VALUES ('Finish homework', 0);

INSERT INTO todos (description, completed) VALUES ('Go to the store', 0);

INSERT INTO todos (description, completed) VALUES ('Learn Spanish', 0);


