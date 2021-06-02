DROP TABLE IF EXISTS tbclientes;

CREATE TABLE `tbclientes` (
  `idcli` int(11) NOT NULL AUTO_INCREMENT,
  `nomecli` varchar(50) NOT NULL,
  `endcli` varchar(100) DEFAULT NULL,
  `fonecli` varchar(50) NOT NULL,
  `emailcli` varchar(50) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`idcli`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

INSERT INTO tbclientes VALUES("1","Dorival Souza","Rua l3, 2019","9555-2233","dorival@gmail.com.br",NULL);
INSERT INTO tbclientes VALUES("2","Ana Rosa Hidalgo","Monte Claro, 456","7799-8888","ana@hotmail.com",NULL);
INSERT INTO tbclientes VALUES("3","Antanio Sebastiao ","Curitiba SP, rua 256","0000-1111","tiao@gmail.com",NULL);
INSERT INTO tbclientes VALUES("7","Vagner Cesar","Santos - SP","3338-0753","cesar@yahoo.com.br",NULL);
INSERT INTO tbclientes VALUES("5","Ricardo Augusto ","L7","3333-9999","rick@gmail.com",NULL);
INSERT INTO tbclientes VALUES("6","Isabella A. da Silva","l3, Los Angeles","5555-5555","isa@live.com",NULL);
INSERT INTO tbclientes VALUES("8","Larissa ","Pacaembu - SP, centro ","9998-0075","lari@gmail.com",NULL);
INSERT INTO tbclientes VALUES("9","Vanessa SATYA ","Interlagos - RS","7700-9976  ","van@terra.com",NULL);
INSERT INTO tbclientes VALUES("13","Leonardo Oliveira ","Rua, Bairro, Cidade, Estado","3333-0000","leo@gmail.com",NULL);
INSERT INTO tbclientes VALUES("14","Debora Santos","Rua Sao Genaro, Diadema - SP","3346-0997","debora@hotmail.com",NULL);
INSERT INTO tbclientes VALUES("16","Jonatham","rua camila da silva ferreira","(17) 981487453","jonathammq@hotmail.com",NULL);
INSERT INTO tbclientes VALUES("17","Enzo","rua 22 33x35","33221078","enzo@hotmail.com",NULL);
INSERT INTO tbclientes VALUES("18","Vanessa ","Los Angeles","12124342","e@e.com",NULL);
INSERT INTO tbclientes VALUES("41","TESTE","TESTE","1111-2222","TESTE@TESTE.COM",NULL);
INSERT INTO tbclientes VALUES("20","Angelina ","Los Angeles","12124342","luizphilippe.sni@gmail.com",NULL);
INSERT INTO tbclientes VALUES("23","teste","Los Angeles","12124342","luiz.philippe_sni@terra.com.br",NULL);
INSERT INTO tbclientes VALUES("24","Daiane ","Los Angeles","12124342","luiz.philippe_sni@terra.com.br",NULL);
INSERT INTO tbclientes VALUES("27","Ronaldo ","Los Angeles","333-7777","luizphilippe.sni@gmail.com",NULL);
INSERT INTO tbclientes VALUES("28","Xxx","pppp","4444","luizphilippe.sni@gmail.com",NULL);
INSERT INTO tbclientes VALUES("42","lpXD","lpXD","33225566","lpXD@lpXD.com",NULL);
INSERT INTO tbclientes VALUES("31","zxcvbnm","Los Angeles","1212-4342","luiz.philippe_sni@terra.com.br",NULL);
INSERT INTO tbclientes VALUES("32","Fernandes ","Ruanda ","333-7777","fer@gmail.com",NULL);
INSERT INTO tbclientes VALUES("33","cezar","website ","9999-2222","cezer@g.com",NULL);
INSERT INTO tbclientes VALUES("34","12ab","website ","9999-2222","fer@gmail.com",NULL);
INSERT INTO tbclientes VALUES("35","helio","website ","9999-2222","e@e.com",NULL);
INSERT INTO tbclientes VALUES("47","Melissa","Avenida L-3","1212-4342","sni@gmail.com",NULL);
INSERT INTO tbclientes VALUES("48","Luiz Philippe A. S.","Avenida L-3","333-7777","luizphilippe.sni@gmail.com",NULL);
INSERT INTO tbclientes VALUES("40","Joanna ","DF","4426-8632","jo@gmail.com",NULL);
INSERT INTO tbclientes VALUES("49","Mathias ","Avenida L-3","333-7777","sni@gmail.com",NULL);


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

INSERT INTO tbos VALUES("1","2019-05-14 13:13:23","OS","Calafetagem de pisos antigos","Serviço Aprovado","Não usar no rodapé","50.60","Ana Paula Fernandes ","1");
INSERT INTO tbos VALUES("2","2019-05-19 15:34:06","OS","Limpar pisos e escadas","Serviço Aprovado","NÃO sujar as paredes ","95.00","Gustavo Silva","5");
INSERT INTO tbos VALUES("4","2019-05-19 15:44:03","Orçamento","Troca de pisos","Aguardando Aprovação","Troca completa","60.80","Carlos Matheus Azevedo","3");
INSERT INTO tbos VALUES("7","2019-05-21 21:03:09","OS","Aqueles que o Telefônica Irmãos ","Serviço Aprovado"," Uma Graça 7J José da .","995.00","Administrador","2");
INSERT INTO tbos VALUES("8","2019-05-21 21:08:13","Orçamento","Frota Uma Estágio ","Serviço Aprovado","Florestal Histórico Lema Branca Sites ","25.00","Luiz Philippe","9");
INSERT INTO tbos VALUES("9","2019-05-22 20:46:47","Orçamento","Voluntários para Gentil José Graça Sites ","Aguardando Aprovação",NULL,"37.90","Bruna Rocha","5");
INSERT INTO tbos VALUES("11","2019-05-28 20:00:37","Orçamento","entrega","Serviço Aprovado","fiquei satisfeito com o produto","50.00","Wallace Oliveira","9");
INSERT INTO tbos VALUES("12","2019-05-29 20:35:17","Orçamento","raspagem de tacos","Aguardando Aprovação","teste","50.00","Wallace Oliveira","5");
INSERT INTO tbos VALUES("14","2019-06-05 19:21:47","OS","troca de tacos","Serviço Aprovado","a residencia tem 50m2","100.00","Administrador","16");
INSERT INTO tbos VALUES("15","2019-06-05 20:13:12","OS","troca de piso","Serviço Aprovado","5 metros ","500.00","Luiz Philippe","16");
INSERT INTO tbos VALUES("16","2019-06-05 21:07:08","OS","troca de tacos","Serviço Aprovado","100m2","100.00","Administrador","16");
INSERT INTO tbos VALUES("17","2019-11-04 11:03:08","Orçamento","t","Aguardando Aprovação","t","100.00","ZÃ© AntÃ´nio","2");


DROP TABLE IF EXISTS tbusuarios;

CREATE TABLE `tbusuarios` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `perfil` varchar(20) NOT NULL,
  `nomefoto` varchar(100) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO tbusuarios VALUES("1","Luiz Philippe","9999-6666","lp","123","admin","customer_support_50px.png");
INSERT INTO tbusuarios VALUES("2","Gustavo Silva","99225-6059","gu","123","user","WhatsApp Image 2019-08-15 at 22.25.56.jpeg");
INSERT INTO tbusuarios VALUES("22","Teste2","(17) 93333-8888","t2","123","admin","WhatsApp Image 2019-08-15 at 22.25.56.jpeg");
INSERT INTO tbusuarios VALUES("4","Carlos Matheus Azevedo","9999-6666","cm","123","admin","C:\\Users\\Usuario\\Documents\\NetBeansProjects\\inte\\src\\imagens\\perfil.png");
INSERT INTO tbusuarios VALUES("5","Bruna Rocha GuimarÃ£es","5599-0066","bruna","123","user","AdobeStock_217722317_Preview.jpeg");
INSERT INTO tbusuarios VALUES("7","Fernanda Montenegro ","5555-8888","fer","123","user","C:\\Users\\Usuario\\Documents\\NetBeansProjects\\inte\\src\\imagens\\perfil.png");
INSERT INTO tbusuarios VALUES("21","Naira Gabriela","5577-9007","naira","123","user","AdobeStock_205726454_Preview.jpeg");
INSERT INTO tbusuarios VALUES("10","Wallace Oliveira","17988049257","wallace","wfo1996","user",NULL);
INSERT INTO tbusuarios VALUES("11","Icaro","7788-9952","icaro","123","user","C:/Users/Usuario/Documents/NetBeansProjects/inte/src/imagens/perfil.png");
INSERT INTO tbusuarios VALUES("16","Luzia","(17) 93333-8888","lu","123","user","WhatsApp Image 2019-09-12 at 23.42.01.png");
INSERT INTO tbusuarios VALUES("14","Cleomar","3355-8899","cleo","1","admin","girl-1208307_640.jpg");


