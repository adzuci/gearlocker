use 'gearlocker';

CREATE TABLE Members (
  id    INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name  VARCHAR(64) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  email VARCHAR(64) NOT NULL,
  notes TEXT,
  created_at DATE NOT NULL,
  updated_at DATE NOT NULL
);

CREATE TABLE Gear (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(64) NOT NULL,
 manufacturer VARCHAR(64) NOT NULL,
 purchased_on DATE,
 quantity INT,
 notes TEXT,
 created_at DATE NOT NULL,
 updated_at DATE NOT NULL
);

CREATE TABLE Categories (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(64)
);

CREATE TABLE Gear_Category (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  gear_id INT NOT NULL,
  cat_id INT NOT NULL
);

CREATE TABLE Rentals (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  gear_id INT NOT NULL,
  member_id INT NOT NULL,
  checked_out DATE NOT NULL,
  checked_in DATE,
  quantity INT NOT NULL,
  notes TEXT,
  created_at DATE NOT NULL,
  updated_at DATE NOT NULL
);