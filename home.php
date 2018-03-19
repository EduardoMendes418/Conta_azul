<?php
  //CONEXAO
  include_once("conexao.php");

  $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);

  //CRIANDO CONEXAO COM BANCO DE DADOS
  $result_usuario = "INSERT INTO tb_usuarios (nome, email, creadted) VALUES('$nome', '$email', NOW())";
  $resultado_usuario = mysqli_query($conn,$result_usuario);
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Conta Azul</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://contaazul.com/wp-content/themes/assets/global/layout/css/wp-global.min.css?v=07042017">
    <link rel="stylesheet" href="https://contaazul.com/wp-content/themes/assets/global/layout/css/countdown.min.css">
  </head>

  <body class="text-center">
    <section class="main">
      <header class="masthead mb-auto main">
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
          <div class="container">
            <div class="navbar-header">
              <img class="cover-heading animated fadeInDown" src="img/conta-azul-titulo.fw.png">
              <h1 class="subtitle animated fadeInDown">Obrigado por se inscrever,<br>em breve receberá novidades!</h1>
              <p class="animated fadeInDown" style="font-family:'opensans-regular'">Compartilhe essa página com amigos para atenderem ao evento com você.</p>
            </div>  
          </div>
        </div>
      </header>

    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="mb-3 mx-auto ">
            <fieldset>
              <div class="form-group field-group">
                <div class="input-group">
                  <button type="button" class="btn btn-outline-light"><i class="fa fa-facebook-f"></i>Compartilhar</button>
                  <button type="button" class="btn btn-outline-light"><i class="fa fa-envelope"></i></i>Mandar e-mail</button>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </div> 
    </section>
  </section>

  <section class="wrapper features ">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h3>Sua empresa precisa de controle financeiro? <br class="hidden-sm hidden-xs" /> Centralize tudo em um único sistema</h3>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-sm-4">
        <img class=" animated jello" src="img/contasapagar.svg">
        <h5>Contas a pagar e a receber</h5>
        <p>Mantenha as contas a pagar e a receber <br class="hidden-sm hidden-xs" /> sempre atualizadas.</p>
      </div>
      <div class="col-sm-4">
        <img class=" animated jello" src="img/notafiscal.svg">
        <h5>Nota fiscal de produto e serviço</h5>
        <p>Emissor de nota fiscal integrado com o <br class="hidden-sm hidden-xs" /> processo de vendas.</p>
      </div>
      <div class="col-sm-4">
        <img class=" animated jello" src="img/boleto.svg">
        <h5>Boleto de cobrança</h5>
        <p>Emita e envie boletos registrados para os seus clientes em poucos segundos.</p>
      </div>

      <div class="clearfix"></div>

      <div class="col-sm-4">
        <img class=" animated jello" src="img/fluxodecaixa.svg">
        <h5>Fluxo de caixa diário e mensal</h5>
        <p>Movimentações de entradas e saídas, geração de caixa e o saldo do caixa por período.</p>
      </div>
      <div class="col-sm-4">
         <img class=" animated jello" src="img/integracao_bancaria.svg">
        <h5>Integração bancária</h5>
        <p>A integração bancária sincroniza lançamentos do ContaAzul com o seu banco.</p>
      </div>
      <div class="col-sm-4">
        <img class=" animated jello" src="img/integracao_contabil.svg">
        <h5>Integração contábil</h5>
        <p>Gaste menos tempo com a burocracia contábil. Envie seus documentos digitalmente e interaja de forma ágil com o contador.</p>
      </div>

      <div class="clearfix"></div>

      <div class="col-sm-4">
        <img class=" animated jello" src="img/conciliacao.svg">
        <h5>Conciliação bancária</h5>
        <p>Economize até 20h por mês com a Conciliação<br>Bancária do ContaAzul.</p>
      </div>
      <div class="col-sm-4">
        <img class=" animated jello" src="img/faturamentoporcliente.svg">
        <h5>Faturamento por cliente</h5>
        <p>A integração bancária sincroniza lançamentos<br>do ContaAzul com o seu banco.</p>
      </div>
      <div class="col-sm-4">
        <img class=" animated jello" src="img/dre.svg">
        <h5>DRE gerencial</h5>
        <p>Relatório de receitas,custos e despesas para<br>entender a saúde financeira da empresa.</p>
      </div>
    </div>
  </div>
</section>

<!--footer-->
      <footer class="footer">
        <div class="container">
        <div class="row row-copy">
          <div class="col-sm-3 hidden-xs text-left">
            <a href="https://contaazul.com"><img src="img/conta-azul-footer.fw.png"></a>
          </div>
            <div class="col-sm-6  text-center">
              <p style="font-family:'opensans-regular'">&copy; 2018 Direitos Reservados<a href="https://contaazul.com/termos"> Termos de Uso</a> - <a href="#">Política de Privacidade</a></p>
            </div>
            <div class="col-sm-3 text-right">
              <ul>
                <li><a style="color:#666" href="http://facebook.com"><i class="fa fa-facebook-f"></i></a></li>
                <li><a  href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li><a  href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                <li><a  href="http://youtube.com"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
        </div>
        </div>
      </footer>
<!--script-->  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
