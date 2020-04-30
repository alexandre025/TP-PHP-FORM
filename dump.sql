#
# SQL Export
# Created by Querious (201069)
# Created: 30 April 2020 at 09:04:57 CEST
# Encoding: Unicode (UTF-8)
#




CREATE DATABASE IF NOT EXISTS `iut_tp_php_form` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE `iut_tp_php_form`;




DROP TABLE IF EXISTS `contact`;


CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name_or_company` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;




INSERT INTO `contact` (`id`, `full_name_or_company`, `email`, `comment`) VALUES
	(1,'Alexandre Ferraille','alexandre.ferraille@gmail.com','Pour accentuer la prestation multi-directionnelle, chaque entité doit dématerialiser les solutions partenaires.'),
	(2,'Getaround','contact@getaround.com','Des milliers de voitures et utilitaires à louer autour de vous. Moins cher et plus rapide.'),
	(3,'Test','test@test.ninja','En termes de process, concernant une globalisation durable, mieux vaut faire converger les harcèlements bénéfices.'),
	(4,'Foo Bar','foo@bar.net','Une fois internalisée la multiplicité référentielle, voici notre conviction : externaliser les potentiels métier.'),
	(5,'John Doe','john@doe.net','En réponse à la prestation conjoncturelle, les bonnes pratiques consistent à impacter les alternatives mobilité.'),
	(6,'Maxime Ferraille','maxime.ferraille@gmail.com','Là où les benchmarks désignent la revalorisation durable, la connaissance des paramètres permet de gagner les kilo-instructions conseil.');

