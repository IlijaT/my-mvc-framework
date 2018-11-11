# My-MVC-Framework
Small custom PHP MVC framework (Laravel like) with custom router and very basic ORM

# Additional Tables Required

create database mytodo;

use mytodo;

create table todos (

    id INT AUTO_INCREMENT,

    description VARCHAR(255) NOT NULL,

    completed TINYINT NOT NULL,

    PRIMARY KEY (id)

)  ENGINE=INNODB;

insert into todos (description, completed) values ('Finish homework', 0);

insert into todos (description, completed) values ('Go to the store', 0);

insert into todos (description, completed) values ('Learn Spanish', 0);


