
/*Usuarios*/
INSERT INTO crs.user (id_user, name_user, pass_user, email_user, rol_user) VALUES 
	('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@hotmail.com', 'manager'), /*Contraseña = admin*/
	('2', 'hector', '81dc9bdb52d04dc20036dbd8313ed055', 'hector@hotmail.com', 'customer'), /*Contraseña = 1234*/
	('3', 'mario', '81dc9bdb52d04dc20036dbd8313ed055', 'mario@hotmail.com', 'customer'), /*Contraseña = 1234*/
	('4', 'arvizu', '81dc9bdb52d04dc20036dbd8313ed055', 'arvizu@hotmail.com', 'customer'), /*Contraseña = 1234*/
	('5', 'olivas', '81dc9bdb52d04dc20036dbd8313ed055', 'olivas@hotmail.com', 'customer'); /*Contraseña = 1234*/

/*Tipos de autos*/
INSERT INTO crs.cartype (id_type, model_car) VALUES 
	('1', 'MAYBACH'), 
	('2', 'BUGATTI VEYRON'),
	('3', 'PAGANI'),
	('4', 'NISSAN'),
	('5', 'MERCEDES'),
	('6', 'AUDI'),
	('7', 'BENTLEY'),
	('8', 'BMW'),
	('9', 'CADILLAC'),
	('10', 'CHEVROLET'),
	('11', 'FERRARI'),
	('12', 'TESLA'),
	('13', 'VOLVO'),
	('14', 'VOLKSWAGEN'),
	('15', 'PORSCHE');

/*Autos*/
INSERT INTO crs.car (id_car, daily_rate, hourly_rate, color, id_type) VALUES 
	('1', '230.50', '12.24', 'Verde', '1'), 
	('2', '430.50', '22.24', 'Azul', '2'), 
	('3', '630.50', '32.24', 'Verde', '4'), 
	('4', '130.50', '8.24', 'Rosado', '5'), 
	('5', '230.50', '12.24', 'Marron', '8'), 
	('6', '230.50', '12.24', 'Verde', '9'), 
	('7', '230.50', '12.24', 'Verde', '13'), 
	('8', '230.50', '12.24', 'Morado', '15'), 
	('9', '230.50', '12.24', 'Negro', '13'), 
	('10', '230.50', '12.24', 'Blanco', '2'), 
	('11', '230.50', '12.24', 'Verde', '3'), 
	('12', '230.50', '12.24', 'Azul', '6'), 
	('13', '230.50', '12.24', 'Rosado', '5'), 
	('14', '230.50', '12.24', 'Rosado', '4'), 
	('15', '230.50', '12.24', 'Gris', '5'), 
	('16', '230.50', '12.24', 'Gris', '7'), 
	('17', '230.50', '12.24', 'Rosado', '6'), 
	('18', '630.50', '32.24', 'Azul', '6'), 
	('19', '630.50', '32.24', 'Verde', '12'), 
	('20', '830.50', '42.24', 'Rojo', '15'), 
	('21', '830.50', '42.24', 'Rojo', '7'), 
	('22', '1030.50', '52.24', 'Rojo', '8'), 
	('23', '1030.50', '52.24', 'Rojo', '14'), 
	('24', '1230.50', '62.24', 'Amarillo', '8'), 
	('25', '1230.50', '72.24', 'Morado', '13'), 
	('26', '1430.50', '82.24', 'Morado', '12'), 
	('27', '1430.50', '82.24', 'Amarillo', '9'), 
	('28', '1630.50', '92.24', 'Amarillo', '10'), 
	('29', '1630.50', '92.24', 'Rojo', '11'), 
	('30', '340.45', '19.50', 'Amarillo', '2');

/* locations */
INSERT INTO crs.location (id_location, name_location, capacity_location) VALUES 
	('1', 'L1_Montes de Ame Calle 50 X 39 y 41', '10'), 
	('2', 'L1_Circuito Colonias Calle 18A X 34 y 36', '5'), 
	('3', 'L1_Las Americas Calle 31B X 10 y 10A', '8'),
	('4', 'L2_Francisco de Montejo Calle 20 X29 y 30', '15');

/*Location car*/
INSERT INTO crs.locationcar (id_location, id_car) VALUES 
	('1', '1'),
	('2', '2'), 
	('3', '3'), 
	('4', '4'), 
	('1', '5'), 
	('2', '6'), 
	('3', '7'), 
	('4', '8'), 
	('1', '9'), 
	('2', '10'), 
	('3', '11'), 
	('4', '12'), 
	('1', '13'), 
	('2', '14'), 
	('3', '15'), 
	('4', '16'), 
	('1', '17'), 
	('2', '18'), 
	('3', '19'), 
	('4', '20'), 
	('1', '21'), 
	('3', '22'), 
	('4', '23'), 
	('1', '24'), 
	('3', '25'), 
	('4', '26'), 
	('1', '27'), 
	('3', '28'), 
	('4', '29'), 
	('1', '30');
