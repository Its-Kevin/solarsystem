DROP DATABASE firstLaravel;
CREATE DATABASE firstLaravel; 
USE firstLaravel; 

INSERT INTO solar_systems (name, age_in_years)
VALUES ('solar system', '4.500.000.000');

CREATE TABLE planets (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description VARCHAR(999) NOT NULL,
	size_in_km INT,
	solar_systems_id BIGINT,
	FOREIGN KEY (solar_systems_id) REFERENCES solar_systems(id)
);