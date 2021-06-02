DROP TABLE IF EXISTS tab_cliente_endereco;

CREATE TABLE `tab_cliente_endereco` (
  `cod_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `cep` varchar(25) DEFAULT NULL,
  `idcli` int(11) NOT NULL,
  PRIMARY KEY (`cod_endereco`,`idcli`),
  KEY `tab_cliente_endereco_fk` (`idcli`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS tbaulas;

CREATE TABLE `tbaulas` (
  `idaula` int(11) NOT NULL AUTO_INCREMENT,
  `nomeaula` varchar(100) NOT NULL,
  `descaula` varchar(110) NOT NULL,
  `videoaula` varchar(150) NOT NULL,
  `idmodulo` int(11) NOT NULL,
  PRIMARY KEY (`idaula`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO tbaulas VALUES("1","a1","d11","WhatsApp Video 2020-05-09 at 17.56.30.mp4","1");
INSERT INTO tbaulas VALUES("2","a2","d2","aula2.mp4","2");
INSERT INTO tbaulas VALUES("3","a3","d3","1406927036_xtudo-280x218.png","3");


DROP TABLE IF EXISTS tbclientes;

CREATE TABLE `tbclientes` (
  `idcli` int(11) NOT NULL AUTO_INCREMENT,
  `nomecli` varchar(50) NOT NULL,
  `endcli` varchar(100) DEFAULT NULL,
  `cidcli` varchar(100) NOT NULL,
  `estacli` varchar(50) NOT NULL,
  `cepcli` varchar(50) NOT NULL,
  `fonecli` varchar(50) NOT NULL,
  `emailcli` varchar(50) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`idcli`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

INSERT INTO tbclientes VALUES("1","Dorival Souza","Aldeia São José ","Florianópolis ","SP","14787-091","99555-2233","dorival@gmail.com.br","M",NULL);
INSERT INTO tbclientes VALUES("2","Ana Rosa Hidalgo","Monte Claro, 456","Vale","BA","77777-089","7799-8888","ana@hotmail.com","F",NULL);
INSERT INTO tbclientes VALUES("3","Antanio Sebastiao ","Curitiba, rua 256","Curitiba ","SP","65787-088","0000-1111","tiao@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("7","Vagner Cesar","Los Angeles","Barretos","SP","14787-091","3338-0753","cesar@yahoo.com.br","M",NULL);
INSERT INTO tbclientes VALUES("5","Ricardo Augusto ","Los Angeles","Barretos","SP","14787-091","3333-9999","rick@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("6","Isabella A. da Silva","l3, Los Angeles","Sertãozinho ","AM","54322-011","5555-5555","isa@live.com","F",NULL);
INSERT INTO tbclientes VALUES("8","Larissa ","Pacaembu - SP, centro ","Pacaembu ","SP","64398-099","9998-0075","lari@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("9","Vanessa SATYA ","Interlagos - RS","Interlagos ","MG","54700-022","7700-9976  ","van@terra.com","F",NULL);
INSERT INTO tbclientes VALUES("13","Leonardo Oliveira ","Barone ","Barone ","SP","78987-870","3333-0000","leo@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("14","Debora Santos","Rua Sao Genaro, Diadema - SP","Diadema ","SP","65789-098","3346-0997","debora@hotmail.com","F",NULL);
INSERT INTO tbclientes VALUES("16","Ronaldo ","Frutal","Frutal","SP","65449-012","(17) 981487453","ronaldo@hotmail.com","M",NULL);
INSERT INTO tbclientes VALUES("17","Enzo","rua 22 33x35","Barretos ","SP","09990-099","3322-1078","enzo@hotmail.com","M",NULL);
INSERT INTO tbclientes VALUES("18","Vanessa ","Los Angeles","Barretos","RJ","14787-091","1212-4342","van@terra.com","F",NULL);
INSERT INTO tbclientes VALUES("20","Angelina ","Registro ","Santos","SP","87777-777","12124342","gelina.sni@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("24","Daiane ","Rio Claro","Colina","ES","89989-900","12124342","dai@terra.com.br","F",NULL);
INSERT INTO tbclientes VALUES("27","Henrique ","Fortaleza ","Fortaleza ","CE","12223-077","3332-7777","henri@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("32","Danielle","Ruanda ","Ruanda ","SP","99788-093","333-7777","dan@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("33","Rosangela ","Olimpia","Olimpia","SP","65787-053","9999-2222","ro@g.com","F",NULL);
INSERT INTO tbclientes VALUES("35","Danielle","Frutal","Frutal","SP","99788-023","9999-2222","dan@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("40","Joanna ","DF","Brasília ","DF","45546-082","4426-8632","jo@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("60","teste11","nova barretos","Barretos","TO","14784-080","33223122","teste11@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("59","AAAAAAA","Fortaleza","Fortaleza","CE","12223-077","33327777","henri@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("61","jose","nova barretos","Barretos","SP","14784-080","33223122","joose11@gmail.com","M",NULL);


DROP TABLE IF EXISTS tbmodulos;

CREATE TABLE `tbmodulos` (
  `idmodulo` int(11) NOT NULL AUTO_INCREMENT,
  `nomemodulo` varchar(100) NOT NULL,
  `descmodulo` varchar(110) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`idmodulo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO tbmodulos VALUES("1","Módulo 01","Introdução do curso",NULL);


DROP TABLE IF EXISTS tbos;

CREATE TABLE `tbos` (
  `os` int(11) NOT NULL AUTO_INCREMENT,
  `data_os` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` varchar(15) NOT NULL,
  `servico` varchar(150) NOT NULL,
  `situacao` varchar(50) DEFAULT NULL,
  `observacao` varchar(150) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `tecnico` varchar(30) DEFAULT NULL,
  `idcli` int(11) NOT NULL,
  PRIMARY KEY (`os`),
  KEY `idcli` (`idcli`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO tbos VALUES("1","2019-05-14 13:13:23","OS","Calafetagem de pisos antigos","Servico Aprovado","Não usar no rodapé","50.60","Icaro Messias","1");
INSERT INTO tbos VALUES("2","2019-05-19 15:34:06","OS","Limpar pisos e escadas","Servico Aprovado","Nao sujar as paredes ","95.00","Jhonatam","5");
INSERT INTO tbos VALUES("4","2019-05-19 15:44:03","Orcamento","Troca de pisos","Aguardando Aprovacao","Troca completa","60.80","Luiz Philippe","3");
INSERT INTO tbos VALUES("7","2019-05-21 21:03:09","OS","Aqueles que o Telefônica Irmãos ","Servico Aprovado"," Uma Gra�a 7J Jos� da .","995.00","Luiz Philippe","2");
INSERT INTO tbos VALUES("8","2019-05-21 21:08:13","Orcamento","Frota Uma Est�gio ","Servico Aprovado","Florestal Hist�rico Lema Branca Sites ","25.00","Luiz Philippe","9");
INSERT INTO tbos VALUES("9","2019-05-22 20:46:47","Orcamento","Restauracao do deck","Aguardando Aprovacao",NULL,"37.90","Icaro Messias","5");
INSERT INTO tbos VALUES("11","2019-05-28 20:00:37","Orcamento","entrega","Servico Aprovado","fiquei satisfeito com o produto","50.00","Wallace Oliveira","9");
INSERT INTO tbos VALUES("12","2019-05-29 20:35:17","Orcamento","raspagem de tacos","Aguardando Aprovacao","teste","50.00","Wallace Oliveira","5");
INSERT INTO tbos VALUES("14","2019-06-05 19:21:47","OS","troca de tacos","Servico Aprovado","a residencia tem 50m2","100.00","Jhonatam","16");
INSERT INTO tbos VALUES("15","2019-06-05 20:13:12","OS","troca de piso","Servico Aprovado","5 metros ","500.00","Luiz Philippe","16");
INSERT INTO tbos VALUES("16","2019-06-05 21:07:08","OS","troca de tacos","Servico Aprovado","100m2","100.00","Icaro Messias","16");
INSERT INTO tbos VALUES("17","2019-11-04 11:03:08","Orcamento","t","Aguardando Aprovacao","t","100.00","Icaro Messias","2");
INSERT INTO tbos VALUES("18","2019-11-18 17:27:09","Orcamento","TESTE","Aguardando Aprovacao","TESTE","70.00","Jhonatam","5");
INSERT INTO tbos VALUES("19","2019-11-18 17:30:39","Orcamento","TESTE","Aguardando Aprovacao","Escavação ","89.00","Wallace Oliveira ","6");
INSERT INTO tbos VALUES("20","2019-11-18 17:34:10","Orcamento","TESTE","Aguardando Aprovacao","Casa inteira","70.00","Luiz Philippe","2");
INSERT INTO tbos VALUES("21","2019-11-18 17:44:46","Orcamento","TESTE","Aguardando Aprovacao",NULL,"85.00","Jhonatam","1");
INSERT INTO tbos VALUES("22","2019-11-18 17:46:35","Orcamento","TESTE","Aguardando Aprovacao",NULL,"70.00","Luiz Philippe","5");
INSERT INTO tbos VALUES("27","2019-11-21 18:29:28","OS","TESTE","Servico Aprovado",NULL,"0.00","Teste2","5");
INSERT INTO tbos VALUES("25","2019-11-19 18:14:09","OS","TESTE","Servico Aprovado","TESTES ","20.00","Icaro Messias","3");
INSERT INTO tbos VALUES("28","2019-11-21 20:01:29","Orcamento","TESTE","Aguardando Aprovacao","AAA","85.00","Icaro Messias","59");


DROP TABLE IF EXISTS tbusuarios;

CREATE TABLE `tbusuarios` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `perfil` varchar(20) NOT NULL,
  `nomefoto` varchar(100) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

INSERT INTO tbusuarios VALUES("1","Luiz Philippe","9999-6666","lp","MTIz","admin","logo-icone-512.png");
INSERT INTO tbusuarios VALUES("2","Icaro Messias","99225-6059","icaro","MTIz","user","img4.png");
INSERT INTO tbusuarios VALUES("4","Jhonatam da Silva","9999-6666","jhon","MTIz","admin","img2.jpg");
INSERT INTO tbusuarios VALUES("5","Wallace Oliveira ","5599-0066","wallace","MTIz","user","img3.ico");


