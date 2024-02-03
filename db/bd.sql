-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-05-2016 a las 22:53:11
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `bravo`
-- 
CREATE DATABASE `bravo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bravo`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `autenticar`
-- 

CREATE TABLE `autenticar` (
  `id` int(255) NOT NULL auto_increment,
  `nombre` varchar(20) NOT NULL,
  `apel` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- Volcar la base de datos para la tabla `autenticar`
-- 

INSERT INTO `autenticar` (`id`, `nombre`, `apel`, `tipo`, `usuario`, `password`, `email`) VALUES 
(1, 'Cristina ', 'Horta', 'admin', 'cristy', 'd0a8d2cc19bd1c61c79a', ''),
(11, 'Carlos Brayan', 'Ramila Chorens', 'admin', 'carterror', 'e6d96502596d7e7887b76646c5f615d9', 'carlos@gamil.com');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `contenido`
-- 

CREATE TABLE `contenido` (
  `id` int(255) NOT NULL auto_increment,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `contenido`
-- 

INSERT INTO `contenido` (`id`, `titulo`, `descripcion`) VALUES 
(1, 'Bienvenidos a Bravo S.A.', '<p class="">&nbsp;Bravo S.A. es una empresa mixta hispano-cubana, de participación conjunta entre CORALSA (Corporación Alimentaria de Cuba) y PROVALCA (Proyectos de Valencia en el Caribe).</p><p class="">&nbsp;Fundada el 31 de julio de 1996, ha creado desde sus inicios una solida plataforma empresarial garantizando una gestión económica eficaz y transparente, a la vez que está integrada a la comunidad y comprometida con el desarrollo medio ambiental.</p><p class="">&nbsp; Nos dedicamos a la producción y comercialización de embutidos de larga durabilidad y calidad reconocida en el mercado cubano, a partir de carnes seleccionada de cerdo, pavo, pollo y res.</p><p class="">&nbsp;Con un área actual de 11000 m<sup>2</sup> y desarrollando un proceso inversionista de 3000 m<sup>2</sup> de crecimiento, en área productiva y nuevas líneas de producción, BRAVO S.A. asume nuevos retos.</p><p class="">&nbsp;Trabajamos por la excelencia y nuestro éxito radica en el compromiso constante de satisfacer las necesidades crecientes de clientes y consumidores con altos estándares de calidad e inocuidad de los productos, lo que nos ha llevado a convertirnos en lideres en el mercado de elaborados cárnicos en el país.</p><p class="">&nbsp;El equipo humano está compuesto por 114 trabajadores altamente calificado que labora día a día por satisfacer las necesidades de clientes y consumidores y ofrecer un servicio personalizado fruto del trabajo en colectivo. </p>'),
(2, 'Política del Sistema Integrado de Gestión ', '<p class="">BRAVO S.A se dedica a la producción y comercialización de elaborados cárnicos: jamones cocidos, fiambres, especialidades de pavo, tradicionales, crudos congelados, ahomados, mortadellas y salchichas; bajo la premisa fundamental de la satisfacción de las necesidades y exigencias de sus clientes y la comunidad, con relación a los productos, servicios y la protección del medio ambiente.</p><p class="">El Sistema Integrado de Gestión articula el funcionamiento de BRAVO S.A. y su politica sirve de marco para establecer y revisar los objetos y metas de calidad y ambientales. para ello cuenta con un equipo de trabajo altamente calificado y de reconocida experiencia.</p><p class="">Con el establecimiento de objeticos y metas BRAVO S.A. se compromete con la mejora continua en el desempeño ambiental y empresarial y con la prevención de la contaminación, garantizando el cumplimiento de los requisitos legales y cualquier otro que la organización suscriba.</p><p class="">La política del SIG es revisar periódicamente, comunicada a los miembros de la Organización y a los que trabjan para ella, al tiempo que está a disposición de nuestros clientes y la comunidad con el fin de dar una respuesta adecuada a sus necesidades.</p>');
