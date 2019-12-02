
CREATE TABLE Users(
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  Password varchar(100) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY username (username)
);

INSERT INTO Users (username,Password) VALUES ('destiny','Password@123');