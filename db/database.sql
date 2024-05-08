-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for bravo
DROP DATABASE IF EXISTS `bravo`;
CREATE DATABASE IF NOT EXISTS `bravo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bravo`;

-- Dumping structure for table bravo.autenticar
DROP TABLE IF EXISTS `autenticar`;
CREATE TABLE IF NOT EXISTS `autenticar` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apel` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Dumping data for table bravo.autenticar: 7 rows
/*!40000 ALTER TABLE `autenticar` DISABLE KEYS */;
REPLACE INTO `autenticar` (`id`, `nombre`, `apel`, `tipo`, `usuario`, `password`, `email`) VALUES
	(11, 'Carlos Brayan', 'Ramila Chorens', 'admin', 'carterror', '21232f297a57a5a743894a0e4a801fc3', 'carlos@gamil.com'),
	(38, 'Carlos Brayan', 'Ramila Chorens', 'admin', 'Carlos', 'e6d96502596d7e7887b76646c5f615d9', 'carlos.bramila@gmail'),
	(35, 'Karel', '', 'admin', 'karel', '123', ''),
	(36, 'Javier', '', 'admin', 'javier', '123', ''),
	(39, 'Camilo', '', 'admin', 'camilo', '202cb962ac59075b964b07152d234b70', ''),
	(41, 'Maria Cristina', 'Horta Miras', 'admin', 'cristina', '21232f297a57a5a743894a0e4a801fc3', ''),
	(42, 'Jean', '', 'Cliente', 'jena', 'car', 'casdas@gmail.com');
/*!40000 ALTER TABLE `autenticar` ENABLE KEYS */;

-- Dumping structure for table bravo.contenido
DROP TABLE IF EXISTS `contenido`;
CREATE TABLE IF NOT EXISTS `contenido` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table bravo.contenido: 2 rows
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
REPLACE INTO `contenido` (`id`, `titulo`, `descripcion`) VALUES
	(1, 'Bienvenidos a Bravo S.A.', '<p class="">&nbsp;Bravo S.A. es una empresa mixta hispano-cubana, de participaci�n conjunta entre CORALSA (Corporaci�n Alimentaria de Cuba) y PROVALCA (Proyectos de Valencia en el Caribe).</p><p class="">&nbsp;Fundada el 31 de julio de 1996, ha creado desde sus inicios una solida plataforma empresarial garantizando una gesti�n econ�mica eficaz y transparente, a la vez que est� integrada a la comunidad y comprometida con el desarrollo medio ambiental.</p><p class="">&nbsp; Nos dedicamos a la producci�n y comercializaci�n de embutidos de larga durabilidad y calidad reconocida en el mercado cubano, a partir de carnes seleccionada de cerdo, pavo, pollo y res.</p><p class="">&nbsp;Con un �rea actual de 11000 m<sup>2</sup> y desarrollando un proceso inversionista de 3000 m<sup>2</sup> de crecimiento, en �rea productiva y nuevas l�neas de producci�n, BRAVO S.A. asume nuevos retos.</p><p class="">&nbsp;Trabajamos por la excelencia y nuestro �xito radica en el compromiso constante de satisfacer las necesidades crecientes de clientes y consumidores con altos est�ndares de calidad e inocuidad de los productos, lo que nos ha llevado a convertirnos en lideres en el mercado de elaborados c�rnicos en el pa�s.</p><p class="">&nbsp;El equipo humano est� compuesto por 114 trabajadores altamente calificado que labora d�a a d�a por satisfacer las necesidades de clientes y consumidores y ofrecer un servicio personalizado fruto del trabajo en colectivo. </p>'),
	(2, 'Pol�tica del Sistema Integrado de Gesti�n ', '<p class="">BRAVO S.A se dedica a la producci�n y comercializaci�n de elaborados c�rnicos: jamones cocidos, fiambres, especialidades de pavo, tradicionales, crudos congelados, ahomados, mortadellas y salchichas; bajo la premisa fundamental de la satisfacci�n de las necesidades y exigencias de sus clientes y la comunidad, con relaci�n a los productos, servicios y la protecci�n del medio ambiente.</p><p class="">El Sistema Integrado de Gesti�n articula el funcionamiento de BRAVO S.A. y su politica sirve de marco para establecer y revisar los objetos y metas de calidad y ambientales. para ello cuenta con un equipo de trabajo altamente calificado y de reconocida experiencia.</p><p class="">Con el establecimiento de objeticos y metas BRAVO S.A. se compromete con la mejora continua en el desempe�o ambiental y empresarial y con la prevenci�n de la contaminaci�n, garantizando el cumplimiento de los requisitos legales y cualquier otro que la organizaci�n suscriba.</p><p class="">La pol�tica del SIG es revisar peri�dicamente, comunicada a los miembros de la Organizaci�n y a los que trabjan para ella, al tiempo que est� a disposici�n de nuestros clientes y la comunidad con el fin de dar una respuesta adecuada a sus necesidades.</p>');
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;

-- Dumping structure for table bravo.noticias
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anno` int(4) NOT NULL,
  `noticia` varchar(80) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table bravo.noticias: ~8 rows (approximately)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
REPLACE INTO `noticias` (`id`, `anno`, `noticia`, `tipo`) VALUES
	(1, 1997, 'Medalla de Oro Lomo Adobado', 'Premios a la calidad del producto'),
	(2, 1998, 'Medalla de Oro Familia de los Productos Curados.', 'Premios a la calidad del producto'),
	(3, 1999, 'Medalla de Oro Familia de las Supremas.', 'Premios a la calidad del producto'),
	(4, 2000, 'Medalla de Oro Blanqueta de Cebolla.', 'Premios a la calidad del producto'),
	(5, 2000, 'Premio Stand Categoría Stand Modular', 'Premios al disenno de Stand'),
	(6, 2001, 'Premio Stand Categoría Stand Modular', 'Premios al disenno de Stand'),
	(7, 2004, 'Mejor Sitio Web e Imagen Integral', 'Premios a la comunicacion y publicidad'),
	(8, 2006, 'Mención Comunicación Integral', 'Premios a la comunicacion y publicidad');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

-- Dumping structure for table bravo.productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `nombre` varchar(40) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table bravo.productos: ~25 rows (approximately)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
REPLACE INTO `productos` (`nombre`, `tipo`, `descripcion`, `imagen`) VALUES
	('Bacón', 'Ahumados', 'Es el producto elaborado a base de carne de cerdo, agua, sales, azúcares y aditivos, sometidos a procesos de inyección  y salmuera, amasado y cocción, envasado al vacío en bolsas de polietileno.<br>\n  <br>Ingredientes:<br>\n Carne de cerdo, agua, preparado de jamón redondo (sal, proteínas vegetal y láctea, dextrosa, \nlactosa,  estabilizantes E-451i y E-407, antioxidantes E-316, E-331, aromas de carne y humo y colorante E-120),  nitrificante (sal y conservante E-250) y humo líquido.\n <br><br>\n  Peso: Variable<br>\n  Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0-5&deg;C\n    </p>', 'images/ahumados/bacon.jpg'),
	('Blanqueta de Cebolla', 'Tradicionales', ' <p>\nEs el producto elaborado a base de carne de cerdo, grasa, sales, aditivos y condimentos, sometidos a procesos de mezclado, amasado, embutido en tripa fina de cerdo y cocinado.<br>\n <br> Ingredientes:<br>\n Carne de cerdo, agua, cebolla, preparado de blanqueta (almidón de trigo, sal, proteína vegetal, especias, potenciador del sabor E-621, conservantes E-250 y E-202).\n <br><br>\n  Peso: aproximado, 1,5 kg <br>\n  Embalaje: 7 unidades por caja selladas.<br>\n  Durabilidad: 90 días.<br>\n  Conservacion: entre 0-5&deg;C\n    </p>', 'images/tradicionales/blanqueta.jpg'),
	('Chopped', 'Fiambres', ' <p>\nEs el producto elaborado a base de carne, aceite vegetal, fécula, sales, azúcares, extensores, aditivos y condimentos, sometidos a procesos de mezclado, embutido y cocción. Embutido en tripa gruesa (160 mm) de material sintético impermeable, grapada en sus 2 extremos.\n<br>Ingredientes:<br>\nCarne de cerdo, agua, aceite vegetal, aislado de proteìna de soya, nitrificante( sal y conservante E-250), preparaddo de chopped ( sal, fècula, proteìnas làcteas, especias naturales, estabilizante E-450i, azúcares, potenciador del sabor E-621, antioxidante E-3l6, aromas de carne y humo, star meta, CNO2 y almidón de trigo.\n<br><br>\n  Peso: aproximado, 1,5 kg <br>\n  Embalaje: 4 unidades por caja selladas.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0-5&deg;C\n    </p>', 'images/fiambres/chopped.jpg'),
	('Chorizo', 'Crudos', 'Producto condimentado, elaborado con carne de cerdo, carne de ave y sales.<br>\n\n           Ingredientes:<br>\n           Carne de cerdo, agua, prote&iacute;na vegetal, almid&oacute;n de trigo, sal, az&uacute;cares, especies, antioxidantes E-316 y colorante E-120.\n           <br>\n           Peso: 50g. por Pieza<br>\n           Embalaje: caja 3 a 4 kg.<br>\n           Durabilidad: 6 meses.<br>\n           Conservacion: -18 &deg;C', 'images/crudos/Chorizo.jpg'),
	('Chorizo Casero', 'Curados', ' <p>\nEs el producto elaborado a base de carne, sales, azúcares, aditivos y condimentos, sometidos a procesos de mezclado, embutido y fermentado. Se embuten en tripa fina de cerdo siendo la longitud de cada pieza de aprox. 10 cm.\n<br>Ingredientes:<br>\nCarne de cerdo, agua, preparado de chorizo (sal, proteínas vegetal y láctea, pimentón, azúcares, especias, aroma de humo, antioxidante E-316, y colorante E-124.)  y NITRIFICANTE ( sal común y conservante E-250).\n<br><br>\n  Peso: aproximado, 1,5 kg <br>\n  Embalaje: 7 unidades por caja selladas.<br>\n  Durabilidad: 90 días.<br>\n  Conservacion: entre 0-5&deg;C\n    </p>', 'images/curados/casero.jpg'),
	('Chorizo Montero', 'Fiambres', ' <p>\nEs el producto elaborado a base de carne de cerdo, agua, sales, aditivos y especiass, sometidos a procesos de mezclado, macerado, embutido en tripa impermeable grapada en sus 2 extremos y cocido en el tacho.\n<br>Ingredientes:<br>\nCarne de cerdo, agua, almidón de papa, preparado de chorizo (sal, proteínas vegetal y láctea, pimentón, azúcares, especias, aroma de humo, antioxidante E-316, y  colorante E-124), nirificante, (sal común y conservante E-250),orégano, humo líquido, tripolifosfato.\n  <br><br>\n  Peso: aproximado, 1,5 kg <br>\n  Embalaje: 20 piezas por caja selladas.<br>\n  Dura', 'images/fiambres/chorizo_montero.jpg'),
	('Chorizo Vela', 'Curados', ' <p>\nEs el producto elaborado a base de carne, sales, azúcares, aditivos y condimentos, sometidos a procesos de mezclado, embutido y fermentado. Se embute  en tripa de colágeno de 55 mm de diámetro grapada en sus 2 extremos.\n<br>Ingredientes:<br>\nCarne de cerdo, agua, preparado de chorizo (sal, proteínas vegetal y láctea, pimentón, azúcares, especias, aroma de humo, antioxidante E-316, y  colorante E-124), nirificante, (sal común y conservante E-250) y sorbato de potasio.\n <br><br>\n  Peso: aproximado, 1,9 kg <br>\n  Embalaje: 12 piezas por caja selladas.<br>\n  Durabilidad: 180 días.<br>\n  Conservacion: entre 0-5&deg;C\n    </p>', 'images/curados/vela.jpg'),
	('Galantina', 'Fiambres', '<p>\n<br>\nPeso aproximado: 3.0 kg por pieza <br>\nEmbalaje: 4 piezas por caja <br>\nDurabilidad: 180 días <br>\nConservación: 0 – 5  &deg;C\n</p>\n', 'images/fiambres/galantina.jpg'),
	('Hamburguesa', 'Crudos', '    <p>\nEs el producto elaborado a base de carne de res o cerdo, agua, texturizado  de soya, fécula, sales, azúcares, extensores, aditivos y condimentos, sometidos a procesos de  mezclado y conformado..De forma redondeada y un grosor aprox. de 1 cm. y posteriormente congelado. Peso: 400 g 1 kg ó 6 kg <br>\n <br>Ingredientes:<br>\n Carne de cerdo o carne de res, (en dependencia del tipo de hamburguesa), agua, carne de ave, texturizado de soya, polvo para empanizar, almidón de trigo, preparado de hamburguesa ( sal, especias, azúcares, cebolla en polvo, antioxidante E-316, colorante E-120)) y colorante rojo punzó.\n <br><br>\n Peso: Variable <br>\n Embalaje: 80 unidades por cajas.<br>\n  Durabilidad: 180 días.<br>\n  Conservacion: entre -20&deg;C\n    </p>', 'images/crudos/Hamburguesa_tradicional.jpg'),
	('Jamon Especial', 'Ahumados', '    <p>\nEs el producto elaborado a base de carne de cerdo, sales, azúcares y aditivos, sometidos a procesos de  inyección con salmuera, macerado, cocción y ahumado, envasado en bolsas de material retráctil termoconformable grapadas en sus dos extremos.\n<br>Ingredientes:<br>\n Pierna de cerdo, agua, preparado de jamón redondo ( sal proteína vegetal y láctea, lactosa, dextrosa, estabilizantes E-451i,y E-407, antioxidante E-316 y  E-331, aromas de carne y humo y colorante E120 ), nitrificante (sal común y conservante E-250) , almidón de papa, aislado de proteína de soya, carragenato y tripolifosfatos \n <br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/ahumados/especial.jpg'),
	('Jamon Pierna', 'Cocidos', '    <p>\nEs el producto elaborado a base de carne, fécula, sales, azúcares, aditivos y extensores, sometido a proceso de inyección y  salmuera, mezclado, embutido y cocción envasado en bolsas de material sintético impermeable, grapadas en sus 2 extremos.\n<br>Ingredientes:<br>\n Pierna de cerdo, agua, almidón de papa, carragenato, preparado de jamón redondo (sal, proteínas vegetal y láctea, dextrosa, lactosa,  estabilizantes E-451i, E-407, antioxidante E-316 y E-331), aromas de carne y humo y colorante E-120)  nitrificante ( sal y conservante E-250), aislado de proteína  vegetal y tripolifosfato.\n <br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/cocidos/pierna.jpg'),
	('Jamon Rapido', 'Cocidos', '    <p>\nEs el producto elaborado a base de carne, fécula, sales, azúcares, aditivos y extensores, sometidos a procesos de  mezclado con  salmuera, reposo y  embutido en tripa de material sintético impermeable, grapada en sus 2 extremos y cocinado.\n<br>Ingredientes:<br>\n Carne de cerdo, agua, preparado de jamón rápido (almidón de trigo, sal, proteínas vegetal y láctea, dextrosa, estabilizantes E-451 a,  E-407, potenciador del sabor E-621, antioxidante E-316, aromas de carne y humo y colorante), nitrificante (sal y nitrito de sodio) humo líquido y aroma.\n <br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>\n', 'images/cocidos/rapido.jpg'),
	('Jamon Serrano', 'Curados', '<p>\n<br>\nPeso aproximado: 7.2 kg por pieza <br>\nEmbalaje: 2 piezas por caja <br>\nDurabilidad: 13 meses <br>\nConservación: 0 – 5 &deg;C\n</p>', 'images/curados/serrano.jpg'),
	('Jamon Visking', 'Ahumados', '    <p>\nEs el producto elaborado a base de carne de cerdo,  sales, azúcares, condimentos y conservantes sometidos a procesos de mezclado con salmuera, embutido y cocción. Embutido en tripa fibrosa, grapadas en sus 2 extremos.\n<br>Ingredientes:<br>\nCarne de cerdo, agua, almidón de papa, preparado de jamón visking (sal, proteínas vegetal y láctea, dextrosa, estabilizantes E-451a, E-407, potenciador del sabor E-621, antioxidante E-316, aromas de carne y humo, especias, y colorante E-120) y nitrificante (sal común y conservante E-250)\n <br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 90 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/ahumados/visking.jpg'),
	('Jamonada Super', 'Mortadellas y Pastas', '    <p>\nEs el producto elaborado a base de carne, fècula, sales, especias, azúcares y aditivos, sometidos a procesos de mezclado con salmuera, embutido en tripa gruesa de material sintético impermeable, grapada en sus 2 extremos y cocinado. .\n<br>Ingredientes:<br>\nCarne de cerdo, agua, preparado de jamòn ràpido (almidón de trigo, sal, proteínas vegetal y láctea, dextrosa, estabilizantes E-451i, E-407, potenciador del sabor E-621, antioxidante E-316, aromas de carne y humo, y colorante E-120.), nitrificante (sal y conservante E-250) humo lìquido y especias.\n<br><br>\n Peso: Variable <br>\n Embalaje: 4 unidades por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/mortapastas/super.jpg'),
	('Lomo Especial', 'Ahumados', '    <p>\nEs el producto elaborado a base de lomo de cerdo, sales, azúcares y aditivos, sometidos a procesos de inyección con salmuera, , cocción, envasado en bolsas de material retráctil termoconformable.y pasteurización.\n<br>Ingredientes:<br>\nLomo de cerdo, agua, preparado de jamón redondo ( sal, proteínas vegetal y láctea,  dextrosa, lactosa, estabilizantes E-451i, E-407, antioxidante E-316,  y E-331, aromas de carne y humo y colorante E- 120), nitrificante (sal y conservante E-250) , isoascorbato de sodio y humo líquido. <br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/ahumados/lomo.jpg'),
	('Longaniza', 'Crudos', 'Producto condimentado, elaborado con carne de cerdo, carne de ave y sales.<br><br>\n\n           Ingredientes:<br>\n           Carne de cerdo, agua, prote&iacute;na vegetal, almid&oacute;n de trigo, sal, az&uacute;cares, especies, antioxidantes E-316 y colorante E-120.\n           <br><br>\n           Peso: 50g. por Pieza<br>\n           Embalaje: caja 3 a 4 kg.<br>\n           Durabilidad: 6 meses.<br>\n           Conservacion: -18 &deg;C', 'images/crudos/Longaniza_cerdo.jpg'),
	('Morcilla de Cebolla', 'Tradicionales', '    <p>\nEs el producto elaborado a base de carne, grasa, sales, aditivos y condimentos, sometidos a procesos de mezclado, amasado, embutido en tripa fina de cerdo siendo la longitud de cada pieza de aprox. 10 cm. y cocido.\n<br>Ingredientes:<br>\nIngredientes: Carne de cerdo, agua, preparado de morcilla(cebolla, almidón de trigo, sal, sangre en polvo, especias, proteína vegetal, estabilizante E-451i, potenciador del sabor E-621 y conservante E-202, E-250 ).<br><br>\n Peso: aprox 1,5 kg <br>\n Embalaje: 7 piezas por caja.<br>\n  Durabilidad: 90 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/tradicionales/morcilla.jpg'),
	('Mortadella Criolla', 'Mortadellas y Pastas', '    <p>\nEs el producto elaborado a base de carne, fécula, sales, extensores, aditivos y especias,  sometidos a procesos de mezclado, embutido , envasado en bolsas de material sintético impermeable, grapadas en sus 2 extremos. y cocinado\n<br>Ingredientes:<br>\nCarne y grasa de cerdo, carne de ave, agua, almidón de trigo, preparado de mortadella (sal, proteína vegetal, especias, aromas, estabilizador E-451a, potenciador del sabor E-621, antioxidante E-316, y colorante E-120.), nitrificante (sal común y  conservante E-250)<br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/mortapastas/criolla.jpg'),
	('Mortadella Siciliana', 'Mortadellas y Pastas', '    <p>\nEs el producto elaborado a base de carnes, aceitunas, fécula, sales, azúcares, extensores, aditivos y especias, sometido a procesos de mezclado, embutido y cocción, envasado en bolsas de material sintético impermeable, grapadas en sus 2 extremos.\n<br>Ingredientes:<br>\n Carne y grasa de cerdo, carne de ave,  agua, aceitunas, almidón de trigo, preparado de mortadella (sal, proteína vegetal, especias, aromas, estabilizante E-451i, potenciador del sabor E-621, antioxidante E-316, y colorante E-120) y nitrificante  (sal común y conservante E-250.)\n <br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/mortapastas/siciliana.jpg'),
	('Pasta de Bocadito', 'Mortadellas y Pastas', '    <p>\nEs el producto elaborado a base de jamones y mortadellas con averías debido a rotura de las tripas o caída de las grapas,, sales, azucares, extensores, aditivos y especias, embutido en bolsas o tripas de material sintético impermeable, grapada en sus dos extremos y cocinado.   \n<br>Ingredientes:<br>\nCarne y grasa de cerdo, carne de ave, agua, harina de trigo, sal ,ajo en polvo, potenciador del sabor E- 621, aromas, conservante E- 250, colorante E –120 y humo líquido\n<br><br>\n Peso: Variable <br>\n Embalaje: 7 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/mortapastas/pasta.jpg'),
	('Pechuga al caramelo', 'Fiambres', '    <p>\nEs el producto elaborado a base de carne de pavo, sales, especias, azúcares , aditivos y extensores sometidos a procesos de mezclado con salmuera, amasado y embutido en tripa gruesa de material sintético impermeable, grapada en sus 2 extremos. y cocinado.\n<br>Ingredientes:<br>\nLos requisitos organolépticos, físico-químicos y microbiológicos se detallan en la norma NEIAL 2882-       Jamón de Pavo. Especificaciones de Calidad.\n<br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>\n', 'images/fiambres/pechuga.jpg'),
	('Picadillo Bravo', 'Crudos', '    <p>\nEs el producto elaborado a base de carne de aves, aceitunas, extensores, aditivos y especies, envasado en tripas de material sintético impermeable, grapadas en sus dos extremos.\n<br>Ingredientes:<br>\nCarne de ave, agua, texturizado de soya, aceitunas, cebolla deshidratada, vino seco preparado de picadillo (sal, especias, potenciador del sabor E- 621 y antioxidante E 316) y NITRIFICANTE (sal común y  conservante E-250)\n  <br><br>\n Peso: 400 g 1 kg ó 6 kg <br>\n  Embalaje: 4 unidades por caja selladas.<br>\n  Durabilidad: 180 días.<br>\n  Conservacion: entre -20&deg;C\n    </p>\n', 'images/crudos/picadillo_bravo.jpg'),
	('Pierna Prensado', 'Cocidos', '    <p>\nEs el producto elaborado a base de carne, fécula, sales, azúcares, aditivos y extensores, sometido a proceso de inyección y  salmuera, mezclado, embutido y cocción envasado en bolsas de material sintético impermeable, grapadas en sus 2 extremos.\n<br>Ingredientes:<br>\nPierna de cerdo, agua, almidón de papa, carragenato, preparado de jamón redondo (sal, proteínas vegetal y láctea, dextrosa, lactosa,  estabilizantes E-451i, E-407, antioxidante E-316 y E-331), aromas de carne y humo y colorante E-120)  nitrificante ( sal y conservante E-250), aislado de proteína  vegetal y tripolifosfato.\n<br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/cocidos/prensado.jpg'),
	('Salshichon al ajo', 'Fiambres', '    <p>\nEs el producto elaborado a base de carne, fécula, sales, azúcares, extensores, aditivos y especias, sometido a procesos de masaje y embutido, envasado en bolsas de material sintético impermeable, grapadas en sus 2 extremos y cocinado.\n<br>Ingredientes:<br>\nCarne de cerdo, agua, almidón de trigo, preparado de salchichón ( azúcares, sal, dextrina, proteína vegetal y láctea, especias, estabilizante E-451i, antioxidante E-316, conservante E-252, y colorante E-120 ) nitrificaante (sal , conservante E 250), ajo en polvo, aroma e isoascorbato..<br><br>\n Peso: Variable <br>\n Embalaje: 4 piezas por caja.<br>\n  Durabilidad: 120 días.<br>\n  Conservacion: entre 0 y 5&deg;C\n    </p>', 'images/fiambres/salshichon.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Dumping structure for table bravo.vinculos
DROP TABLE IF EXISTS `vinculos`;
CREATE TABLE IF NOT EXISTS `vinculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table bravo.vinculos: ~0 rows (approximately)
/*!40000 ALTER TABLE `vinculos` DISABLE KEYS */;
REPLACE INTO `vinculos` (`id`, `nombre`, `direccion`) VALUES
	(1, 'Supervisor', '192.168.1.35');
/*!40000 ALTER TABLE `vinculos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
