DROP TABLE IF EXISTS tbclientes;

CREATE TABLE `tbclientes` (
  `idcli` int(11) NOT NULL AUTO_INCREMENT,
  `nomecli` varchar(50) NOT NULL,
  `endcli` varchar(100) DEFAULT NULL,
  `fonecli` varchar(50) NOT NULL,
  `emailcli` varchar(50) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`idcli`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

INSERT INTO tbclientes VALUES("1","Dorival Souza","Rua l3, 2019","9555-2233","dorival@gmail.com.br","M",NULL);
INSERT INTO tbclientes VALUES("2","Ana Rosa Hidalgo","Monte Claro, 456","7799-8888","ana@hotmail.com","F",NULL);
INSERT INTO tbclientes VALUES("3","Antanio Sebastiao ","Curitiba SP, rua 256","0000-1111","tiao@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("7","Vagner Cesar","Santos - SP","3338-0753","cesar@yahoo.com.br","M",NULL);
INSERT INTO tbclientes VALUES("5","Ricardo Augusto ","L7","3333-9999","rick@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("6","Isabella A. da Silva","l3, Los Angeles","5555-5555","isa@live.com","F",NULL);
INSERT INTO tbclientes VALUES("8","Larissa ","Pacaembu - SP, centro ","9998-0075","lari@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("9","Vanessa SATYA ","Interlagos - RS","7700-9976  ","van@terra.com","F",NULL);
INSERT INTO tbclientes VALUES("13","Leonardo Oliveira ","Rua, Bairro, Cidade, Estado","3333-0000","leo@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("14","Debora Santos","Rua Sao Genaro, Diadema - SP","3346-0997","debora@hotmail.com","F",NULL);
INSERT INTO tbclientes VALUES("16","Jonatham","rua camila da silva ferreira","(17) 981487453","jonathammq@hotmail.com","M",NULL);
INSERT INTO tbclientes VALUES("17","Enzo","rua 22 33x35","33221078","enzo@hotmail.com","M",NULL);
INSERT INTO tbclientes VALUES("18","Vanessa ","Los Angeles","12124342","e@e.com","F",NULL);
INSERT INTO tbclientes VALUES("41","TESTE","TESTE","1111-2222","TESTE@TESTE.COM","F",NULL);
INSERT INTO tbclientes VALUES("20","Angelina ","Los Angeles","12124342","luizphilippe.sni@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("23","teste","Los Angeles","12124342","email@terra.com.br","F",NULL);
INSERT INTO tbclientes VALUES("24","Daiane ","Los Angeles","12124342","luiz.philippe_sni@terra.com.br","F",NULL);
INSERT INTO tbclientes VALUES("27","Ronaldo ","Los Angeles","333-7777","luizphilippe.sni@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("28","Xxx","pppp","4444","luizphilippe.sni@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("42","lpXD","lpXD","33225566","lpXD@lpXD.com","M",NULL);
INSERT INTO tbclientes VALUES("31","zxcvbnm","Los Angeles","1212-4342","luiz.philippe_sni@terra.com.br","F",NULL);
INSERT INTO tbclientes VALUES("32","Rita Fernandes ","Ruanda ","333-7777","fer@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("33","cezar","website ","9999-2222","cezer@g.com","M",NULL);
INSERT INTO tbclientes VALUES("34","12ab","website ","9999-2222","fer@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("35","helio","website ","9999-2222","e@e.com","M",NULL);
INSERT INTO tbclientes VALUES("47","Melissa","Avenida L-3","1212-4342","sni@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("48","Luiz Philippe A. S.","Avenida L-3","333-7777","luizphilippe.sni@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("40","Joanna ","DF","4426-8632","jo@gmail.com","F",NULL);
INSERT INTO tbclientes VALUES("49","Mathias ","Avenida L-3","333-7777","sni@gmail.com","M",NULL);
INSERT INTO tbclientes VALUES("52","Rosana ","Los Angeles","12124342","lni@gmail.com","F",NULL);


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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO tbos VALUES("1","2019-05-14 13:13:23","OS","Calafetagem de pisos antigos","ServiÁo Aprovado","N„o usar no rodapÈ","50.60","Ana Paula Fernandes ","1");
INSERT INTO tbos VALUES("2","2019-05-19 15:34:06","OS","Limpar pisos e escadas","ServiÁo Aprovado","N√O sujar as paredes ","95.00","Gustavo Silva","5");
INSERT INTO tbos VALUES("4","2019-05-19 15:44:03","OrÁamento","Troca de pisos","Aguardando AprovaÁ„o","Troca completa","60.80","Carlos Matheus Azevedo","3");
INSERT INTO tbos VALUES("7","2019-05-21 21:03:09","OS","Aqueles que o TelefÙnica Irm„os ","ServiÁo Aprovado"," Uma GraÁa 7J JosÈ da .","995.00","Administrador","2");
INSERT INTO tbos VALUES("8","2019-05-21 21:08:13","OrÁamento","Frota Uma Est·gio ","ServiÁo Aprovado","Florestal HistÛrico Lema Branca Sites ","25.00","Luiz Philippe","9");
INSERT INTO tbos VALUES("9","2019-05-22 20:46:47","OrÁamento","Volunt·rios para Gentil JosÈ GraÁa Sites ","Aguardando AprovaÁ„o",NULL,"37.90","Bruna Rocha","5");
INSERT INTO tbos VALUES("11","2019-05-28 20:00:37","OrÁamento","entrega","ServiÁo Aprovado","fiquei satisfeito com o produto","50.00","Wallace Oliveira","9");
INSERT INTO tbos VALUES("12","2019-05-29 20:35:17","OrÁamento","raspagem de tacos","Aguardando AprovaÁ„o","teste","50.00","Wallace Oliveira","5");
INSERT INTO tbos VALUES("14","2019-06-05 19:21:47","OS","troca de tacos","ServiÁo Aprovado","a residencia tem 50m2","100.00","Administrador","16");
INSERT INTO tbos VALUES("15","2019-06-05 20:13:12","OS","troca de piso","ServiÁo Aprovado","5 metros ","500.00","Luiz Philippe","16");
INSERT INTO tbos VALUES("16","2019-06-05 21:07:08","OS","troca de tacos","ServiÁo Aprovado","100m2","100.00","Administrador","16");
INSERT INTO tbos VALUES("17","2019-11-04 11:03:08","OrÁamento","t","Aguardando AprovaÁ„o","t","100.00","Z√© Ant√¥nio","2");


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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO tbusuarios VALUES("1","Luiz Philippe","9999-6666","lp","MTIz","admin","customer_support_50px.png");
INSERT INTO tbusuarios VALUES("2","Gustavo Silva","99225-6059","gu","MTIz","user","WhatsApp Image 2019-08-15 at 22.25.56.jpeg");
INSERT INTO tbusuarios VALUES("4","Carlos Matheus Azevedo","9999-6666","cm","MTIz","admin","men-1979261_1280.jpg");
INSERT INTO tbusuarios VALUES("5","Bruna Rocha Guimar√£es","5599-0066","bruna","MTIz","user","AdobeStock_217722317_Preview.jpeg");
INSERT INTO tbusuarios VALUES("26","Pietra","5577-9007","pi","MTIz","user","coruja.png");
INSERT INTO tbusuarios VALUES("27","Roberta ","(17) 93333-8888","ro","MTIz","user","logo.png");
INSERT INTO tbusuarios VALUES("28","Dimaria","3355-8899","di","MTIz","admin","note-1.png");
INSERT INTO tbusuarios VALUES("29","Angelina ","5566-0987","ge","MTIz","admin","PIAÃÅ-150x150.jpg");


