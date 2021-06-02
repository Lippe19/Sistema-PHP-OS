<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Pisos Lar Soluções</title>

        <!--<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">-->

        <!-- Bootstrap core CSS
        <link href="administrador/assets/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="administrador/fontawesome/css/all.min.css">
        <!--<link rel="stylesheet" href="footer-with-logo.css">-->
        <link rel="icon" href="logo-icone.png">


        <style>
            /*.bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
            .navbar-dark{
                background-color: transparent !important;
            }*/
            .barra {
                height: 5px;
                background-color: rgba(54, 160, 199,.8);
                width: 0%;
                margin: -5px 0px 0px 0px;
                border: none;
                z-index: 1;
                position: relative;
            }
            .barra.anima {
                -webkit-transition: width 4.25s linear;
                -moz-transition: width 4.25s linear;
                -o-transition: width 4.25s linear;
                transition: width 4.25s linear;
            }

            .bg-white { 
                flex-grow: 1;
            }
            .margem {
                margin-top: 60px;
                margin-bottom: 60px;
            }

        </style>
        <!-- Custom styles for this template
        <link href="carousel.css" rel="stylesheet"> -->
        
        
        
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dd6bf5dd96992700fc89728/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </head>
    <body>


        <div class="container">
            <div class="row pt-1 h6" style="margin-bottom: -5px">
                <div class="col-auto mr-auto">
                    <div class="h5" id="face">
                        <a href="https://www.facebook.com" target="_blank" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Nos siga no Facebook" data-content="Conex�o com Facebook em fase de desenvolvimento..." data-placement="top">
                            <i class="icone text-dark fab fa-facebook-square mr-2"></i>
                        </a>
                        <a href="https://www.instagram.com/pisolarsolucoes/?igshid=1u77wyjr1irzc" target="_blank" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Nos siga no Instagram" data-content="Conex�o com Instagram em fase de desenvolvimento..." data-placement="top">
                            <i class="icone text-dark fab fa-instagram mr-2"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=5517988345814&text=Olá,%20gostaria%20de%20fazer%20um%20orçamento!" target="_blank" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Fa�a um Or�amento" data-content="Conex�o com Instagram em fase de desenvolvimento..." data-placement="top">
                            <i class="icone text-dark fab fa-whatsapp mr-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-auto"><a href="administrador/login/login.php" class="text-dark">Espaço Restrito<i class="ml-3 text-dark fas fa-lock"></i></a></div>
            </div>
        </div>

        <!--        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        
                    <div class="container">
                        <a class="navbar-brand" href="#">Carousel</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <form class="form-inline mt-2 mt-md-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mynav sticky-top" style="z-index: 100000" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="logo.png" height="45"></a>

                <button class="navbar-toggler icone-nav" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item pt-1 active hvr-underline-from-center">
                            <a class="nav-link mr-2 abc" href="index.php">Início <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item pt-1  hvr-underline-from-center">
                            <a class="nav-link mr-2 ml-2 abc" href="index.php#sobrenos">Sobre Nós</a>
                        </li>
                        <li class="nav-item pt-1  hvr-underline-from-center">
                            <a class="nav-link mr-2 ml-2 abc" href="index.php#servicos">Serviços</a>
                        </li><!---->

                    </ul>
                </div>

            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="capa-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="capa-2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <hr class="barra anima" />
        </div>

        <section class="container" style="margin-top: 60px;margin-bottom: 60px;">
            <div class="row">


                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 540px;background-color: rgba(0,0,0,.0)">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <img src="marca-1.png" class="card-img" alt="..." style="max-height: 50px;max-width: 50px">
                                    <!--<i class="fas fa-toolbox" style="font-size: 36px"></i>-->
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-title">Materiais de Qualidade</h6>
                                    <p class="card-text">Aplicação de resina a base de água para não ter cheiro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 540px;background-color: rgba(0,0,0,.0)">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <img src="marca-2.png" class="card-img" alt="..." style="max-height: 50px;max-width: 50px">
                                    <!--<i class="fas fa-toolbox" style="font-size: 36px"></i>-->
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-title">Clientes Satisfeitos</h6>
                                    <p class="card-text">Mais de 50 anos no mercado somando clientes fieis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 540px;background-color: rgba(0,0,0,.0)">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <img src="marca-3.png" class="card-img" alt="..." style="max-height: 50px;max-width: 50px">
                                    <!--<i class="fas fa-toolbox" style="font-size: 36px"></i>-->
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-title">O Melhor Preço</h6>
                                    <p class="card-text">Serviço de extrema qualidade que cabe no seu bolso.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider" id="sobrenos">
            <section class="margem">
                <p style="font-family: 'Calistoga', cursive;" class="text-center mb-4">
                    <span style="font-size: 40px;  color: rgba(43, 172, 227,.7); margin-right: -20px;"><i class="fas fa-minus"></i></span>
                    <span style="font-size: 40px;  color: rgba(0,0,0,.9);z-index: 10">Sobre Nós</span>
                </p>

                <div class="row text-center align-items-center">
                    <div class="col-md-12">
                        <div class="py- px-" style="line-height: 28px;letter-spacing: 1px">
                            <p class="h5"><b>Piso Lar Soluções</b> está aqui para lhe oferecer o melhor serviço<br> de restauração e tratamento em pisos.</p>
                            <br>
                            <p>A empresa atua a 54 anos na restauração e tratamento de pisos de madeira, 
                                assoalhos, tacos, decks e outros. A empresa visa sempre manter um serviço de qualidade para 
                                seus clientes estarem sempre satisfeitos. Para mais detalhes sobre nossos serviços acesse nossa 
                                página no Instagram ou entre em contato por telefone.</p>
                        </div>
                    </div>
                </div>
            </section>


            <hr class="featurette-divider" id="servicos">


            <section class="margem">
                <div class="container">

                    <p style="font-family: 'Calistoga', cursive;" class="text-center mb-5">
                        <span style="font-size: 40px;  color: rgba(43, 172, 227,.7); margin-right: -20px;"><i class="fas fa-minus"></i></span>
                        <span style="font-size: 40px;  color: rgba(0,0,0,.9);z-index: 10">Como Trabalhamos</span>
                    </p>

                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-6 d-flex text-center">
                            <!--flex-column-->

                            <div class="bg-white mb-3">
                                <!-- Propor��o 16:9 -->
                                <div class="embed-responsive embed-responsive-4by3 sticky-top">
                                    <iframe class="embed-responsive-item" src="video.mp4"></iframe>
                                </div>
                            </div>

                        </div>


                        <div class="col-sm-12 col-md-12 col-lg-6">

                            <div class="st text-center mb-3" style="">

                                <div class="shadow mb-5 bg-white rounded mx-5 px-5 py-5">
                                    <p style="font-family: 'Calistoga', cursive;">
                                        <span style="font-size: 80px;  color: rgba(0,0,0,.4)">1</span>
                                        <span style="font-size: 40px;  color: rgba(0,0,0,.7); margin-left: -20px;">etapa</span>
                                    </p>
                                    <p class="h6" style="line-height: 28px;letter-spacing: .6px">
                                        Limpeza do piso, para remoção de verniz, usa-se a lixa 24 (disco), 2 vezes.
                                    </p>
                                </div>

                                <div class="shadow mb-5 bg-white rounded mx-5 px-5 py-5">
                                    <p style="font-family: 'Calistoga', cursive;">
                                        <span style="font-size: 80px;  color: rgba(0,0,0,.4)">2</span>
                                        <span style="font-size: 40px;  color: rgba(0,0,0,.7); margin-left: -20px;">etapa</span>
                                    </p>
                                    <p class="h6" style="line-height: 28px;letter-spacing: .6px">
                                        Passa massa (pra ipê e piso perobinha), para tampar os buracos (calafetagem).
                                    </p>
                                </div>

                                <div class="shadow mb-5 bg-white rounded mx-5 px-5 py-5">
                                    <p style="font-family: 'Calistoga', cursive;">
                                        <span style="font-size: 80px;  color: rgba(0,0,0,.4)">3</span>
                                        <span style="font-size: 40px;  color: rgba(0,0,0,.7); margin-left: -20px;">etapa</span>
                                    </p>
                                    <p class="h6" style="line-height: 28px;letter-spacing: .6px">
                                        Lixa de novo e limpa.
                                    </p>
                                </div>

                                <div class="shadow mb-5 bg-white rounded mx-5 px-5 py-5">
                                    <p style="font-family: 'Calistoga', cursive;">
                                        <span style="font-size: 80px;  color: rgba(0,0,0,.4)">4</span>
                                        <span style="font-size: 40px;  color: rgba(0,0,0,.7); margin-left: -20px;">etapa</span>
                                    </p>
                                    <p class="h6" style="line-height: 28px;letter-spacing: .6px">
                                        Aplica o produto aplicação de resina (Primma e Bona Wave), a base de água para não ter cheiro.
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>



            <hr class="featurette-divider">


            <section class="margem">
                <div class="container">
                    <div class="row text-center align-items-center">
                        <div class="col-md-12">
                            <p style="font-family: 'Calistoga', cursive;" class="text-center mb-2">
                                <span style="font-size: 40px;  color: rgba(43, 172, 227,.7); margin-right: -20px;"><i class="fas fa-minus"></i></span>
                                <span style="font-size: 40px;  color: rgba(0,0,0,.9);z-index: 10">Depoimentos</span>
                            </p>

                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner text-center">
                                    <div class="carousel-item active">
                                        <img src="depoimento-1.jpg" class="rounded-circle mb-2" alt="..." style=""><br>
                                        <font class="t_texto2">LEITE ROCHA </font><br>
                                        <font class="t_texto3">Cliente </font>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="depoimento-2.jpg" class="rounded-circle mb-2" alt="..." style=""><br>
                                        <font class="t_texto2">SIRLEI SILVA</font><br>
                                        <font class="t_texto3">Cliente</font>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="depoimento-3.jpg" class="rounded-circle mb-2" alt="..." style=""><br>
                                        <font class="t_texto2">FELIPE OLIVEIRA</font><br>
                                        <font class="t_texto3">Cliente </font>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <hr class="featurette-divider" id="custo">











            <section class="margem">
                <div class="container">
                    <p style="font-family: 'Calistoga', cursive;" class="text-center mb-5">
                        <span style="font-size: 40px;  color: rgba(43, 172, 227,.7); margin-right: -20px;"><i class="fas fa-minus"></i></span>
                        <span style="font-size: 40px;  color: rgba(0,0,0,.9);z-index: 10">Custo Real</span>
                    </p>
                    <div class="row">


                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="bg-succes text-center mb-3" style="">

                                <p class="h5">Como detalhar os custos do negócio?</p>
                                <br>
                                <p>As despesas fixas são aquelas que não têm relação direta com o custo dos produtos. 
                                    Independentemente se você vender 100 ou 1000 unidades, esses gastos não sofrem alterações. 
                                    Já os custos variáveis podem ser alterados conforme a demanda durante a produção ou a 
                                    disponibilização dos serviços.<br><br>
                                    Por exemplo: impostos, comissões sobre vendas, horas extras de funcionários, manutenções 
                                    emergenciais são despesas flutuantes.<br><br></p>

                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Setor</th>
                                            <th scope="col">A</th>
                                            <th scope="col">B</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Quantidades para produzir no mês</th>
                                            <td>2.000</td>
                                            <td><input type="text" name="n1" class="n1 form-control" placeholder="Digite..."></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mão de obra direta</th>
                                            <td>R$ 3.000,00</td>
                                            <td><input type="text" name="n2" class="n2 form-control" placeholder="Digite..."></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Gastos gerais de fabricação</th>
                                            <td>R$ 900,00</td>
                                            <td><input type="text" name="n3" class="n3 form-control" placeholder="Digite..."></td>
                                        </tr>
                                        <tr class="table-active">
                                            <th scope="row">Total</th>
                                            <td><p class="Resultado"></p></td>
                                            <td><p class="resultado"></p></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Horas trabalhadas mês por setor</th>
                                            <td>320</td>
                                            <td><input type="text" name="n4" class="n4 form-control" placeholder="Digite..."></td>
                                        </tr>
                                        <tr class="table-active">
                                            <th scope="row">Custo hora total industrial</th>
                                            <td><p class="Resultado2"></p></td>
                                            <td><p class="resultado2"></p></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Produção de unidades por hora</th>
                                            <td>6</td>
                                            <td><input type="text" name="n5" class="n5 form-control" placeholder="Digite..."></td>
                                        </tr>
                                        <tr class="table-success">
                                            <th scope="row">Custo por unidade</th>
                                            <td><p class="Resultado3"></p></td>
                                            <td><p class="resultado3"></p></td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <th scope="row"><button onclick="resultado()" type="submit" class="btn btn-primary">Calcular</button></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <script>
                                    function resultado() {
                                        var n2 = document.querySelector(".n2").value;
                                        var n3 = document.querySelector(".n3").value;
                                        var n4 = document.querySelector(".n4").value;
                                        var n5 = document.querySelector(".n5").value;

                                        var res = parseFloat(n2) + parseFloat(n3);
                                        var res2 = res / parseFloat(n4);
                                        var res3 = res2 / parseFloat(n5);

                                        var formatter = new Intl.NumberFormat('pt-BR', {
                                            style: 'currency',
                                            currency: 'BRL'
                                        });

                                        document.querySelector(".resultado").innerHTML = formatter.format(res);
                                        document.querySelector(".resultado2").innerHTML = formatter.format(res2);
                                        document.querySelector(".resultado3").innerHTML = formatter.format(res3);

                                        var b2 = 3000.00;
                                        var b3 = 900.00;
                                        var Res = parseFloat(b2) + parseFloat(b3);
                                        var Res2 = Res / 320;
                                        var Res3 = Res2 / 6;

                                        document.querySelector(".Resultado").innerHTML = formatter.format(Res);
                                        document.querySelector(".Resultado2").innerHTML = formatter.format(Res2);
                                        document.querySelector(".Resultado3").innerHTML = formatter.format(Res3);
                                    }//"R$ " + res
                                </script>




                            </div>
                            <!--    <div class="bg-primary text-center mb-3" style="height:500px;"><h4>content box 3</h4></div>
                                <div class="bg-dark text-center mb-3" style="height:500px;"><h4>content box 4</h4></div>-->
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-6 d-flex text-center">
                            <!--flex-column-->
                            <div class="bg-warnin mb-3">
                                <img src="custo.jpg" class="d-block w-100 sticky-top" alt="...">
                    <!--<img src="https://placem.at/things?w=300&h=250&random=1&txt=sticky-top" alt="" class="sticky-top" />-->
                            </div>

                        </div>
                    </div>
                </div>
            </section>













            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark text-white">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Piso Lar Soluções</h6>
        <p>Empresa com 54 anos no mercado atua na restauração e tratamento em pisos de madeira<br>
Assoalhos, Tacos, Decks e outros</p>
      </div>
      <!-- Grid column -->

      <hr class="w-80 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
        <p>
            <a href="index.php#sobrenos" class="text-white">Sobre Nós</a>
        </p>
        <p>
          <a href="index.php#servicos" class="text-white">Serviços</a>
        </p>
        <p>
          <a href="index.php#custo" class="text-white">Custo Real</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-80 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Nosso Trabalho</h6>
        <img src="secao-1.jpg" class="img-fluid">
      </div>

      <!-- Grid column -->
      <hr class="w-80 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contato</h6>
        <p>
          <i class="fas fa-envelope mr-3"></i> pisoslar@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> 17 988345814</p>
        <p>
          <i class="fas fa-phone mr-3"></i> 17 997094069</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">Direitos reservados
          <a href="#" class="text-white">
            <strong>LIJW</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

        <!--<script src="administrador/assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="administrador/assets/js/core/popper.min.js"></script>
        <script src="administrador/assets/js/core/bootstrap.min.js"></script>-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript">
                                    $(document).ready(function () {
                                        $("#carouselExampleIndicators").on("slide.bs.carousel", function () {
                                            $(".barra", this)
                                                    .removeClass("anima").css("width", "0%");
                                        }).on("slid.bs.carousel", function () {
                                            $(".barra", this)
                                                    .addClass("anima").css("width", "100%");
                                        });
                                        $(".barra", "#carouselExampleIndicators").css("width", "100%");
                                    });
        </script>
    </body>
</html>
