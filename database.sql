create table users (
    id int primary key auto_increment,
    name varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null
);
insert into users (name, email, password) values
('admin', 'admin@gmail.com', 'admin123'),
('user', 'user@gmail.com', 'user123');