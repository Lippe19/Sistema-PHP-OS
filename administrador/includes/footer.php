
</div><!-- wrapper -->

</body>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

        <?php
//        $sql4 = "SELECT COUNT(tipo) FROM tbos WHERE tipo = 'OS' AND MONTH(data_os) = '05'"; //ASC
        $sql4 = "SELECT tipo FROM tbos WHERE tipo = 'OS' AND MONTH(data_os) = '05'"; //ASC
        $con4 = mysqli_query($connect, $sql4);
        $qtdOsMes05 = mysqli_num_rows($con4);
                                                
        $sql4 = "SELECT tipo FROM tbos WHERE tipo = 'Orcamento' AND MONTH(data_os) = '05'"; //ASC
        $con4 = mysqli_query($connect, $sql4);
        $qtdOrMes05 = mysqli_num_rows($con4);
//        $sql4 = "SELECT tipo FROM tbos WHERE tipo = 'Orcamento' AND MONTH(data_os) = '05'"; //ASC
//        $con4 = mysqli_query($connect, $sql4);
//        $qtdOrMes05_1 = mysqli_num_rows($con4);
//        $qtdOrMes05R = $qtdOrMes05 + $qtdOrMes05_1;
        
        
        
        
        $sql4 = "SELECT tipo FROM tbos WHERE tipo = 'OS' AND MONTH(data_os) = '06'"; //ASC
        $con4 = mysqli_query($connect, $sql4);
        $qtdOsMes06 = mysqli_num_rows($con4);
        
        $sql4 = "SELECT tipo FROM tbos WHERE tipo = 'Orcamento' AND MONTH(data_os) = '06'"; //ASC
        $con4 = mysqli_query($connect, $sql4);
        $qtdOrMes06 = mysqli_num_rows($con4);
//        $sql4 = "SELECT tipo FROM tbos WHERE tipo = 'Orcamento' AND MONTH(data_os) = '06'"; //ASC
//        $con4 = mysqli_query($connect, $sql4);
//        $qtdOrMes06_1 = mysqli_num_rows($con4);
//        $qtdOrMes06R = $qtdOrMes06 + $qtdOrMes06_1;
        
        
        
        
        $sql11 = "SELECT tipo FROM tbos WHERE tipo = 'OS' AND MONTH(data_os) = '11'"; //ASC
        $con11 = mysqli_query($connect, $sql11);
        $qtdOsMes11 = mysqli_num_rows($con11);
        
        $sql11 = "SELECT tipo FROM tbos WHERE tipo = 'Orcamento' AND MONTH(data_os) = '11'"; //ASC
        $con11 = mysqli_query($connect, $sql11);
        $qtdOrMes11 = mysqli_num_rows($con11);
//        $sql11 = "SELECT tipo FROM tbos WHERE tipo = 'Orcamento' AND MONTH(data_os) = '11'"; //ASC
//        $con11 = mysqli_query($connect, $sql11);
//        $qtdOrMes11_1 = mysqli_num_rows($con11);
//        $qtdOrMes11R = $qtdOrMes11 + $qtdOrMes11_1;
        ?>
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'O.S', 'Orçamento'],
          ['05',  <?php echo $qtdOsMes05; ?>,      <?php echo $qtdOrMes05; ?>],
          ['06',  <?php echo $qtdOsMes06; ?>,      <?php echo $qtdOrMes06; ?>],
          ['11',  <?php echo $qtdOsMes11; ?>,      <?php echo $qtdOrMes11; ?>]
        ]);

        var options = {
          title: 'Quantidade de Tipo de Serviços no Mês',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>















<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          
        <?php
        $consulta = "select * from tbclientes where sexo = 'M'"; //ASC
        $con = mysqli_query($connect, $consulta);
        $qtdcliM = mysqli_num_rows($con);

        $consulta = "SELECT sexo FROM tbclientes"; //ASC
        $con = mysqli_query($connect, $consulta);
        $qtdsexo = mysqli_num_rows($con);

        $v1 = $qtdcliM * 100;
        $porcentagem = $v1 / $qtdsexo;
        $porcentagem_inteiro = round($porcentagem, 2);

        $cem = 100;

        $mulher = $cem - $porcentagem_inteiro; //12
        ?>
                    
          ['Mulheres',      <?php echo $mulher; ?>],
          ['Homens',     <?php echo $porcentagem_inteiro; ?>],
        ]);

        var options = {
          title: 'Sexo dos Clientes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <!--ARVORE-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:['wordtree']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable(
          [ ['Phrases'],
            <?php 
                $sql3 = "SELECT * FROM tbos LIMIT 5";
                $resultado3 = mysqli_query($connect, $sql3);
                
                $sql2 = "SELECT * FROM tbusuarios LIMIT 5";
                $resultado2 = mysqli_query($connect, $sql2);
                
                $sql = "SELECT * FROM tbclientes LIMIT 5";
                $resultado = mysqli_query($connect, $sql);

                while ($dados = mysqli_fetch_array($resultado)){
                $id = $dados['idcli'];
                $nome = $dados['nomecli'];
                $ende = $dados['endcli'];
                $fone = $dados['fonecli'];
                $emai = $dados['emailcli'];
                $sexo = $dados['sexo'];
            ?>
            ['inter clientes id'],
            ['inter clientes id <?php echo $id; ?>'],
            ['inter clientes nome'],
            ['inter clientes nome <?php echo $nome; ?>'],
            ['inter clientes endereco'],
            ['inter clientes endereco <?php echo $ende; ?>'],
            ['inter clientes telefone'],
            ['inter clientes telefone <?php echo $fone; ?>'],
            ['inter clientes email'],
            ['inter clientes email <?php echo $emai; ?>'],
            ['inter clientes sexo'],
            ['inter clientes sexo <?php echo $sexo; ?>'],
            <?php } ?>
            
            <?php 

                while ($dados = mysqli_fetch_array($resultado2)){
                $idu = $dados['iduser'];
                $u = $dados['usuario'];
                $fo = $dados['fone'];
                $l = $dados['login'];
                $s = $dados['senha'];
                $p = $dados['perfil'];
            ?>
            ['inter usuarios id'],
            ['inter usuarios id <?php echo $idu; ?>'],
            ['inter usuarios usuario'],
            ['inter usuarios usuario <?php echo $u; ?>'],
            ['inter usuarios telefone'],
            ['inter usuarios telefone <?php echo $fo; ?>'],
            ['inter usuarios login'],
            ['inter usuarios login <?php echo $l; ?>'],
            ['inter usuarios senha'],
            ['inter usuarios senha <?php echo $s; ?>'],
            ['inter usuarios perfil'],
            ['inter usuarios perfil <?php echo $p; ?>'],
            <?php } ?>
            
            <?php 

                while ($dados = mysqli_fetch_array($resultado3)){
                $idOs = $dados['os'];
                $dataOs = $dados['data_os'];
                $tipoOs = $dados['tipo'];
                $servicoOs = $dados['servico'];
                $situacaoOs = $dados['situacao'];
                $observacaoOs = $dados['observacao'];
                $valorOs = $dados['valor'];
                $tecnicoOs = $dados['tecnico'];
                $idcliOs = $dados['idcli'];
            ?>
            ['inter ordem_servico id'],
            ['inter ordem_servico id <?php echo $idOs; ?>'],
            ['inter ordem_servico data'],
            ['inter ordem_servico data <?php echo $dataOs; ?>'],
            ['inter ordem_servico tipo'],
            ['inter ordem_servico tipo <?php echo $tipoOs; ?>'],
            ['inter ordem_servico servico'],
            ['inter ordem_servico servico <?php echo $servicoOs; ?>'],
            ['inter ordem_servico situacao'],
            ['inter ordem_servico situacao <?php echo $situacaoOs; ?>'],
            ['inter ordem_servico observacao'],
            ['inter ordem_servico observacao <?php echo $observacaoOs; ?>'],
            ['inter ordem_servico valor'],
            ['inter ordem_servico valor <?php echo $valorOs; ?>'],
            ['inter ordem_servico funcionario'],
            ['inter ordem_servico funcionario <?php echo $tecnicoOs; ?>'],
            ['inter ordem_servico id_cliente'],
            ['inter ordem_servico id_cliente <?php echo $idcliOs; ?>'],
            <?php } ?>
          ]
        );

        var options = {
          wordtree: {
            format: 'implicit',
            word: 'inter'
          }
        };

        var chart = new google.visualization.WordTree(document.getElementById('wordtree_basic'));
        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/ready.js"></script>
<script type="text/javascript">
//    $(document).ready(function () {
//        $('#checkBoxAll').click(function () {
//            if ($(this).is(":checked"))
//                $('.chkCheckBoxId').prop('checked', true);
//            else
//                $('.chkCheckBoxId').prop('checked', false);
//        });
//    });

    function toggleCheckbox(box) {
        var idcli = $(box).attr("value");

            if ($(box).prop("checked") == true) {
                var visible = 1;
            } else {
                var visible = 0;
            }

            var data = {
                "search_data" : 1,
                "idcli" : idcli,
                "visible" : visible
            };

            $.ajax({
                type: "post",
                url: "codigo.php",
                data: data,
                success: function (response) {
                    //alert("Item Checado");
                }
            });
        }
</script>
</html>