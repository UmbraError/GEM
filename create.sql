CREATE TABLE user (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username TEXT NOT NULL,
	password TEXT NOT NULL,
	accounttype ENUM(
		'Event Staff', 
		'Event Manager', 
		'COO') NOT NULL
);

CREATE TABLE event_log (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	logtype ENUM(
		'Login',
		'Logout',
		'Event Approval') NOT NULL,
	date_time DATETIME NOT NULL,
	employeename TEXT NOT NULL
);

CREATE TABLE agent (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	firstname TEXT NOT NULL,
	middleinitial TEXT NOT NULL,
	lastname TEXT NOT NULL,
	street TEXT NOT NULL,
	city TEXT NOT NULL,
	state TEXT NOT NULL,
	zipcode INT NOT NULL,
	email TEXT NOT NULL,
	officenumber TEXT NOT NULL,
	cellnumber TEXT NOT NULL,
	represent ENUM(
		'for artist',
		'for band',
		'others')
);

CREATE TABLE artist (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	firstname TEXT NOT NULL,
	middleinitial TEXT NOT NULL,
	lastname TEXT NOT NULL,
	gender ENUM('MALE','FEMALE') NOT NULL,
	stree TEXT NOT NULL,
	city TEXT NOT NULL,
	state TEXT NOT NULL,
	zipcode INT NOT NULL,
	email TEXT NOT NULL,
	phonenumber TEXT NOT NULL,
	concertrate TEXT NOT NULL,
	agent INT references agent(ID)
);

CREATE TABLE band (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name TEXT NOT NULL,
	title TEXT NOT NULL,
	concert_rate TEXT NOT NULL,
	notes TEXT NOT NULL,
	agent INT references agent(ID),
	leader_email TEXT NOT NULL,
	leader_cell_number TEXT NOT NULL
);

CREATE TABLE band_members (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name TEXT NOT NULL,
	band INT references band(ID)
);

CREATE TABLE vendor (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name TEXT NOT NULL,
	street TEXT NOT NULL,
	city TEXT NOT NULL,
	state TEXT NOT NULL,
	zipcode INT NOT NULL
);

