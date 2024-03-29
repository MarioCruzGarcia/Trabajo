drop database concesionario;
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE IF NOT EXISTS coches(
id INT NOT NULL AUTO_INCREMENT,
marca VARCHAR(40) NOT NULL,
modelo VARCHAR(100) NOT NULL,
etiqueta VARCHAR(7) NOT NULL,
potencia VARCHAR(30) NOT NULL,
combustible VARCHAR(40) NOT NULL,
consumo VARCHAR(40) NOT NULL,
precio int NOT NULL,
PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




INSERT INTO coches (marca, modelo, etiqueta, potencia, combustible, consumo, precio) 
VALUES
    ('ABARTH 500', '595 1.4 16v T-jet 121kW (165 CV)(2023)', 'C', '165CV', 'Gasolina', '6.7l/100km', '29125'),
    ('ABARTH 500C', '595C 1.4 16v T-Jet 121kW (165 CV)(2023)', 'C', '165CV', 'Gasolina', '6.8l/100km', '31530'),
    ('Aiways U5', 'Prime 4x4 (204 CV)(2023)', 'O', '204CV', 'Electrico', '400km', '46900'),
    ('Aiways U6', 'Prime 4x4 (218 CV)(2023)', 'O', '218CV', 'Electrico', '405km', '49400'),
    ('Alfa Romeo Giulia', '2.2 Diesel 118kW (160CV) Super RWD(2023)', 'C', '160CV', 'Diesel', '5l/100km', '39520'),
    ('Alfa Romeo Stelvio', '2.2 Diesel 118kW (160CV) SUPER RWD(2023)', 'C', '160CV', 'Diesel', '5.7l/100km', '45597'),
    ('Alfa Romeo Tonale', '1,6 DS 130 CV SUPER FWD(2023)', 'C', '130CV', 'Diesel', '5.7/100km', '31480'),
    ('Alpine A110', 'A110(2022)', 'C', '252CV', 'Gasolina', '----l/100km', '62200'),
    ('Audi A1', 'A1 Sportback Advance 25 TFSI 70KW(95CV)(2023)', 'C', '95CV', 'Gasolina', '5.6l/100km', '24692'),
    ('Audi A3', 'Sportback Advanced 30 TFSI 81kW (110CV)(2023)', 'C', '110CV', 'Gasolina', '5.7l/100km', '30742'),
    ('Audi A4', 'Advanced 35 TFSI 110kW (150CV) S tronic(2023)', 'ECO', '150CV', 'Microhibrido(Gasolina)', '6.2l/100km', '42805'),
    ('Audi A5', 'Advanced 35 TFSI S tronic Sportback(2023)', 'ECO', '150CV', 'Microhibrido MHEV(Gasolina)', '5.6l/100km', '46063'),
    ('Audi A6', 'Sport 40 TDI 150kW (204CV) S tronic(2023)', 'ECO', '204CV', 'Microhibrido MHEV (Diesel)', '4.3l/100km', '56517'),
    ('Audi A7', 'Sportback S line 40 TDI 150kW S tronic(2023)', 'ECO', '204CV', 'Microhibrido MHEV (Diesel)', '5.3L/100km', '72394'),
    ('Audi A8', '50 TDI 210kW (286CV) quattro tiptronic (2023)', 'ECO', '286CV', 'Microhibrido MHEV (Diesel)', '7.2l/100km', '103565'),
    ('Audi e-tron GT', '60 quattro', '0', '530CV', 'Electrico', '530km', '104542'),
    ('Audi Q2', 'Advanced 30 TFSI 81kW (110CV)(2023)', 'C', '110CV', 'Gasolina', '5.8l/100km', '31254'),
    ('Audi Q3', 'Advanced 35 TDI 110kW (150CV)(2023)', 'C', '150CV', 'Diesel', '5l/100km', '41531'),
    ('Audi Q4 e-tron', 'Advanced 40 e-tron 150kW 82kWh(2023)', '0', '204CV', 'Electrico', '519km', '56635'),
    ('Audi Q5', 'Advanced 35 TDI 120kW S tronic(2023)', 'ECO', '163CV', 'Microhibrido MHEV(Diesel)', '5.6l/100km', '48406'),
    ('Audi Q7', '45 TDI 170kW (232CV) quattro tiptronic(2023)', 'ECO', '231CV', 'Microhibrido MHEV (Diesel)', '7.8l/100km', '71609'),
    ('Audi Q8', '45 TDI 170kW (231CV) quattro tiptronic(2023)', 'ECO', '231CV', 'Microhibrido MHEV (Diesel)', '8.1L/100km', '82363'),
    ('Audi R8', 'V10 FSI performance 419kW RWD S tr.(2023)', 'C', '570CV', 'Gasolina', '12.6l/100km', '177257'),
    ('Audi TT', '40 TFSI 145kW S tronic S Tourist Trophy', 'C', '197CV', 'Gasolina', '6.8l/100km', '53906'),
    ('Bentley Bentayga', '4WD Hybrid', 'C', '449CV', 'Hibrido enchufable PHEV + Gasolina', '3.3l/100km', '202011'),
    ('Bentley Continental GT', 'GT V8 Coupé(2023)', 'C', '550CV', 'Gasolina', '12.1l/100km', '252735'),
    ('Bentley Flying Spur', 'Flying Spur Hybrid (2023)', '0', '544CV', 'Hibrido enchufable PHEV + Gasolina', '----l/100km', '214411'),
    ('BMW i4', 'eDrive35', '0', '286CV', 'Electrico', '483km', '57350'),
    ('BMW i7', 'xDrive60', '0', '544CV', 'Electrico', '652km', '136563'),
    ('BMW iX', 'xDrive50', '0', '530CV', 'Electrico', '482km', '100000'),
    ('BMW Serie 1', '116i 80kW (109CV) Business Advantage(2023)', 'C', '109CV', 'Gasolina', '4.8l/100km', '25700'),
    ('BMW Serie 2', '218i Gran Coupé Sport Line(2023)', 'C', '140CV', 'Gasolina', '5.4l/100km', '31790'),
    ('BMW Serie 3', '318d 110kW (150CV) M Sport Edition(2023)', 'ECO', '150CV', 'Microhibrido MHEV (Diesel)', '4.5l/100km', '43100'),
    ('BMW Serie 4', '420i Coupé Sport Line(2023)', 'C', '184CV', 'Gasolina', '5.8l/100km', '47800'),
    ('BMW Serie 5', '520d Touring M Sport Edition(2023)', 'ECO', '190CV', 'Microhibrido MHEV (Diesel)', '4.8l/100km', '56500'),
    ('BMW Serie 6', '640d xDrive Gran Turismo M Sport Edition(2023)', 'ECO', '320CV', 'Microhibrido MHEV (Diesel)', '6.2l/100km', '85000'),
    ('BMW Serie 7', 'M760Li xDrive(2023)', 'C', '609CV', 'Gasolina', '12.5l/100km', '176000'),
    ('BMW Serie 8', '840i Cabrio(2023)', 'C', '340CV', 'Gasolina', '8.4l/100km', '112800'),
    ('BMW X1', 'sDrive16d 85kW (116CV) Business Advantage(2023)', 'ECO', '116CV', 'Microhibrido MHEV (Diesel)', '4.3l/100km', '33700'),
    ('BMW X2', 'sDrive18d 110kW (150CV) Business Advantage(2023)', 'ECO', '150CV', 'Microhibrido MHEV (Diesel)', '4.8l/100km', '37700'),
    ('BMW X3', 'xDrive20d 140kW (190CV) Business Advantage(2023)', 'ECO', '190CV', 'Microhibrido MHEV (Diesel)', '5l/100km', '46200'),
    ('BMW X4', 'xDrive20d 140kW (190CV) Business Advantage(2023)', 'ECO', '190CV', 'Microhibrido MHEV (Diesel)', '5.2l/100km', '52200'),
    ('BMW X5', 'xDrive30d 195kW (265CV) Business Advantage(2023)', 'ECO', '265CV', 'Microhibrido MHEV (Diesel)', '6.1l/100km', '69800'),
    ('BMW X6', 'xDrive30d 195kW (265CV) Business Advantage(2023)', 'ECO', '265CV', 'Microhibrido MHEV (Diesel)', '6.1l/100km', '75600'),
    ('BMW X7', 'xDrive30d 195kW (265CV) Business Advantage(2023)', 'ECO', '265CV', 'Microhibrido MHEV (Diesel)', '6.1l/100km', '89500'),
    ('BMW Z4', 'sDrive20i(2023)', 'C', '184CV', 'Gasolina', '6.6l/100km', '49900'),
    ('Citroen C1', 'VTI 72KW (110CV) S&S City Edition(2023)', 'C', '110CV', 'Gasolina', '4.7l/100km', '11800'),
    ('Citroen C3', 'PureTech 82KW (110CV) S&S Feel(2023)', 'C', '110CV', 'Gasolina', '4.9l/100km', '14850'),
    ('Citroen C4', 'PureTech 96KW (130CV) S&S Shine(2023)', 'C', '130CV', 'Gasolina', '5.6l/100km', '20950'),
    ('Citroen C5', 'BlueHDi 110KW (150CV) S&S Feel(2023)', 'ECO', '150CV', 'Diesel', '3.9l/100km', '29350'),
    ('Citroen Cactus', 'PureTech 61KW (83CV) Live(2023)', 'C', '83CV', 'Gasolina', '4.8l/100km', '16200'),
    ('Citroen Berlingo', 'BlueHDi 74KW (100CV) S&S Feel(2023)', 'C', '100CV', 'Diesel', '4.2l/100km', '19200'),
    ('Citroen C4 Picasso', 'BlueHDi 88KW (120CV) S&S Feel(2023)', 'C', '120CV', 'Diesel', '4.2l/100km', '25100'),
    ('Dacia Sandero', 'SCe 59KW (80CV) Essential(2023)', 'C', '80CV', 'Gasolina', '5.6l/100km', '9500'),
    ('Dacia Logan', 'SCe 59KW (80CV) Essential(2023)', 'C', '80CV', 'Gasolina', '5.6l/100km', '10000'),
    ('Dacia Duster', 'TCe 74KW (100CV) Comfort(2023)', 'C', '100CV', 'Gasolina', '5.4l/100km', '13900'),
    ('Dacia Sandero Stepway', 'TCe 74KW (100CV) Essential(2023)', 'C', '100CV', 'Gasolina', '5.4l/100km', '12800'),
    ('DS 3', 'PureTech 97KW (130CV) E-Tense So Chic(2023)', 'C', '130CV', 'Gasolina', '4.8l/100km', '24900'),
    ('DS 7', 'BlueHDi 130KW (180CV) Be Chic(2023)', 'C', '180CV', 'Diesel', '4.8l/100km', '34900'),
    ('DS 9', 'PureTech 166KW (225CV) E-Tense Performance Line(2023)', 'ECO', '225CV', 'Gasolina', '6.7l/100km', '54900'),
    ('Ferrari 488', 'Pista(2023)', 'C', '720CV', 'Gasolina', '11.5l/100km', '315000'),
    ('Ferrari F8', 'Tributo(2023)', 'C', '720CV', 'Gasolina', '12.5l/100km', '280000'),
    ('Fiat 500', '1.0 GSE Hybrid Lounge(2023)', 'C', '70CV', 'Microhibrido MHEV (Gasolina)', '3.6l/100km', '14500'),
    ('Fiat Panda', '1.0 GSE Hybrid City Life(2023)', 'C', '70CV', 'Microhibrido MHEV (Gasolina)', '3.5l/100km', '12900'),
    ('Fiat Tipo', '1.0 GSE Hybrid Easy(2023)', 'C', '100CV', 'Microhibrido MHEV (Gasolina)', '4.1l/100km', '18200'),
    ('Ford Fiesta', '1.1 Ti-VCT 63kW (85CV) Trend(2023)', 'C', '85CV', 'Gasolina', '4.5l/100km', '13.250'),
    ('Ford Focus', '1.0 EcoBoost 92kW (125CV) Trend(2023)', 'C', '125CV', 'Gasolina', '4.6l/100km', '19400'),
    ('Ford Mustang', '5.0 Ti-VCT V8 GT Fastback (2023)', 'C', '450CV', 'Gasolina', '12.1l/100km', '48000');
   
   
   CREATE TABLE IF NOT EXISTS motos (
  id INT NOT NULL AUTO_INCREMENT,
  marca VARCHAR(40) NOT NULL,
  modelo VARCHAR(70) NOT NULL,
  etiqueta VARCHAR(5) NOT NULL,
  potencia VARCHAR(10) NOT NULL,
  combustible VARCHAR(40) NOT NULL,
  consumo VARCHAR(40) NOT NULL,
  precio int NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO motos (marca, modelo, etiqueta, potencia, combustible, consumo, precio)
VALUES
   ('Ducati', 'Panigale V4', 'B', '211 hp', 'Gasolina', '8.5 L/100km', '25000'),
   ('Honda', 'CBR600RR', 'C', '118 hp', 'Gasolina', '6.5 L/100km', '12000'),
   ('Kawasaki', 'Ninja 650', 'C', '67 hp', 'Gasolina', '4.3 L/100km', '9000'),
   ('Yamaha', 'MT-07', 'C', '73 hp', 'Gasolina', '5.5 L/100km', '8000'),
   ('Harley-Davidson', 'Sportster Iron 883', 'D', '50 hp', 'Gasolina', '4.9 L/100km', '10000'),
   ('BMW', 'S1000RR', 'C', '205 hp', 'Gasolina', '7.8 L/100km', '18000'),
   ('Suzuki', 'GSX-R750', 'D', '148 hp', 'Gasolina', '6.2 L/100km', '11000'),
   ('Triumph', 'Street Triple RS', 'C', '121 hp', 'Gasolina', '5.4 L/100km', '9500'),
   ('KTM', 'Duke 390', 'B', '44 hp', 'Gasolina', '3.5 L/100km', '6000'),
   ('Kawasaki', 'Ninja H2', 'D', '228 hp', 'Gasolina', '9.5 L/100km', '35000'),
   ('Yamaha', 'YZF-R1', 'D', '200 hp', 'Gasolina', '8.0 L/100km', '16500'),
   ('Honda', 'CB500F', 'C', '47 hp', 'Gasolina', '3.7 L/100km', '6500'),
   ('Suzuki', 'SV650', 'C', '76 hp', 'Gasolina', '4.9 L/100km', '7500'),
   ('KTM', 'Super Duke R', 'D', '177 hp', 'Gasolina', '7.0 L/100km', '15500'),
   ('Kawasaki', 'Z400', 'B', '45 hp', 'Gasolina', '3.9 L/100km', '6000'),
   ('Honda', 'CB650R', 'C', '94 hp', 'Gasolina', '5.3 L/100km', '9500'),
   ('Yamaha', 'YZF-R6', 'C', '116 hp', 'Gasolina', '6.4 L/100km', '13000'),
   ('Suzuki', 'GSX-S750', 'C', '114 hp', 'Gasolina', '5.6 L/100km', '9000'),
   ('Ducati', 'Multistrada V4', 'D', '168 hp', 'Gasolina', '7.3 L/100km', '22000'),
   ('KTM', '1290 Super Adventure R', 'D', '158 hp', 'Gasolina', '7.1 L/100km', '18000'),
   ('BMW', 'R 1250 GS', 'C', '134 hp', 'Gasolina', '5.6 L/100km', '15000'),
   ('Triumph', 'Bonneville T120', 'C', '80 hp', 'Gasolina', '4.9 L/100km', '11500'),
   ('Harley-Davidson', 'Road Glide', 'D', '87 hp', 'Gasolina', '6.5 L/100km', '20000'),
   ('Yamaha', 'Tracer 900 GT', 'C', '115 hp', 'Gasolina', '5.3 L/100km', '12000'),
   ('Honda', 'CBR1000RR-R', 'D', '214 hp', 'Gasolina', '8.4 L/100km', '25000'),
   ('Suzuki', 'V-Strom 650', 'C', '70 hp', 'Gasolina', '4.6 L/100km', '8000'),
   ('Ducati', 'Monster 821', 'C', '109 hp', 'Gasolina', '4.8 L/100km', '12000'),
   ('Kawasaki', 'Versys 650', 'C', '67 hp', 'Gasolina', '4.6 L/100km', '8500'),
   ('Yamaha', 'XSR900', 'C', '113 hp', 'Gasolina', '5.2 L/100km', '9500'),
   ('BMW', 'F 900 R', 'C', '105 hp', 'Gasolina', '4.5 L/100km', '11000'),
   ('Suzuki', 'Hayabusa', 'D', '187 hp', 'Gasolina', '7.9 L/100km', '18000'),
   ('KTM', '790 Duke', 'B', '103 hp', 'Gasolina', '4.3 L/100km', '9500'),
   ('Honda', 'CB1100 RS', 'C', '88 hp', 'Gasolina', '5.9 L/100km', '13000'),
   ('Kawasaki', 'Z900', 'C', '125 hp', 'Gasolina', '5.5 L/100km', '10500'),
   ('Yamaha', 'MT-09', 'C', '119 hp', 'Gasolina', '6.4 L/100km', '9500'),
   ('Ducati', 'Scrambler 800', 'C', '73 hp', 'Gasolina', '5.0 L/100km', '9500'),
   ('Suzuki', 'GSX-S1000', 'D', '152 hp', 'Gasolina', '6.4 L/100km', '12000'),
   ('KTM', '690 SMC R', 'D', '74 hp', 'Gasolina', '5.9 L/100km', '10000'),
   ('Triumph', 'Thruxton RS', 'C', '103 hp', 'Gasolina', '5.0 L/100km', '12500'),
   ('Honda', 'CRF300L', 'B', '26 hp', 'Gasolina', '2.1 L/100km', '6000'),
   ('Yamaha', 'Tenere 700', 'B', '72 hp', 'Gasolina', '4.7 L/100km', '9000'),
   ('Kawasaki', 'Z650', 'B', '67 hp', 'Gasolina', '4.6 L/100km', '8000'),
   ('BMW', 'F 750 GS', 'C', '77 hp', 'Gasolina', '4.1 L/100km', '10000'),
   ('Suzuki', 'V-Strom 1050', 'C', '107 hp', 'Gasolina', '5.7 L/100km', '11500'),
   ('Ducati', 'Diavel 1260', 'D', '157 hp', 'Gasolina', '6.6 L/100km', '20000'),
   ('Honda', 'Rebel 500', 'B', '46 hp', 'Gasolina', '3.6 L/100km', '7000'),
   ('Yamaha', 'XSR700', 'B', '73 hp', 'Gasolina', '4.3 L/100km', '8500'),
   ('KTM', 'RC 390', 'B', '44 hp', 'Gasolina', '3.4 L/100km', '5500'),
   ('Kawasaki', 'Z900RS', 'C', '110 hp', 'Gasolina', '5.5 L/100km', '12000'),
   ('Suzuki', 'Burgman 400', 'C', '32 hp', 'Gasolina', '3.5 L/100km', '7500'),
   ('BMW', 'C 650 GT', 'C', '60 hp', 'Gasolina', '4.5 L/100km', '10000'),
   ('Ducati', 'Hypermotard 950', 'D', '114 hp', 'Gasolina', '5.6 L/100km', '13000'),
   ('Yamaha', 'Tricity 300', 'B', '28 hp', 'Gasolina', '3.2 L/100km', '6500'),
   ('Honda', 'Forza 300', 'C', '25 hp', 'Gasolina', '2.6 L/100km', '7000'),
   ('KTM', '125 Duke', 'B', '14.8 hp', 'Gasolina', '1.7 L/100km', '4500'),
   ('Suzuki', 'SV650X', 'B', '76 hp', 'Gasolina', '4.9 L/100km', '8500'),
   ('Kawasaki', 'Versys 1000', 'D', '118 hp', 'Gasolina', '5.9 L/100km', '14000'),
   ('Yamaha', 'TMAX 560', 'C', '47.6 hp', 'Gasolina', '3.9 L/100km', '11000'),
   ('Ducati', 'SuperSport 950', 'D', '110 hp', 'Gasolina', '5.2 L/100km', '14000');
   
create table if not exists users(
	id int auto_increment primary key,
    nombre varchar (20),
    email varchar (40),
    password varchar (70),
    rol_id int
);
insert into users (nombre, email, password, rol_id) values ('Mario', 'mariocruzgarcia88@gmail.com', 123456, 1);
insert into users (nombre, email, password, rol_id) values ('Victor', 'victor_97_rm@hotmail.com ', 123456, 1);


