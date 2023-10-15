CREATE TABLE costumers (
  id int not null auto_increment,
  fname varchar(255) NOT NULL,
  lname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone_num int(10) NOT NULL,
  interest varchar(255) NOT NULL,
  primary key (id)
);

INSERT into costumers(fname, lname, email, phone_num, interest)
VALUES
('Ricky', 'Bobby', 'ricky@email.ca', 1234567890, 'Technology'),
('Jane', 'Doe', 'jane@gmail.ca', 1213141516, 'Movies and Shows'),
('Jon', 'Doe', 'jon@gmail.ca', 1314151612, 'Science'),
('Zeb', 'Something', 'zeb@email.com', 1324252627, 'Economics'),
('Laura', 'Smith', 'laura@someemail.com', 13435363738, 'art'),
