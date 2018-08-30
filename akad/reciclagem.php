<!-- Essa div pode ser usada para fazer listagem de alunos na tela inicial -->
<div class="col-1">
        <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
          <i class="fa fa-times"></i>
          <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">User Table</h2></div>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td>No.</td>
                  <td>First Name</td>
                  <td>Last Name</td>
                  <td>Username</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>John</td>
                  <td>Smith</td>
                  <td>@jS</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Bill</td>
                  <td>Jones</td>
                  <td>@bJ</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Mary</td>
                  <td>James</td>
                  <td>@mJ</td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Steve</td>
                  <td>Bride</td>
                  <td>@sB</td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>Paul</td>
                  <td>Richard</td>
                  <td>@pR</td>
                </tr>                    
              </tbody>
            </table>    
          </div>                          
        </div>
      </div>           
    </div> <!-- Second row ends -->


    <!--BARRAS DE PROGRESSO, PORCENTAGEM ETC-->
    <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden">
      <div class="col-1 templatemo-overflow-hidden">
        <div class="templatemo-content-widget white-bg templatemo-overflow-hidden">
          <i class="fa fa-times"></i>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1 col-lg-6 col-md-12">
              <h2 class="text-center">Modular<span class="badge">new</span></h2>
              <div id="pie_chart_div" class="templatemo-chart"></div>
            </div>
            <div class="col-1 col-lg-6 col-md-12">
              <h2 class="text-center">Interactive<span class="badge">new</span></h2>
              <div id="bar_chart_div" class="templatemo-chart"></div>
            </div>  
          </div>                
        </div>
      </div>
    </div>

    <!--AVISOS PARA A TELA INICIAL - PODE TER VÁRIAS FUNÇÕES DIFERENTES-->
    <div class="templatemo-flex-row flex-content-row">
      <div class="col-1">              
        <div class="templatemo-content-widget orange-bg">
          <i class="fa fa-times"></i>                
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
              </a>
            </div>
            <div class="media-body">
              <h2 class="media-heading text-uppercase">Consectur Fusce Enim</h2>
              <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
            </div>        
          </div>                
        </div>            
        <div class="templatemo-content-widget white-bg">
          <i class="fa fa-times"></i>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
              </a>
            </div>
            <div class="media-body">
              <h2 class="media-heading text-uppercase">Consectur Fusce Enim</h2>
              <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
            </div>
          </div>                
        </div>            
      </div>

            <div class="templatemo-content-widget white-bg col-1 text-center">
        <i class="fa fa-times"></i>
        <h2 class="text-uppercase">Maris</h2>
        <h3 class="text-uppercase margin-bottom-10">Design Project</h3>
        <img src="images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail">
      </div>

      <div class="templatemo-content-widget white-bg col-1">
        <i class="fa fa-times"></i>
        <h2 class="text-uppercase">Dictum</h2>
        <h3 class="text-uppercase">Sedvel Erat Non</h3><hr>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
        </div>                          
      </div>

          <!--Essa parte pode ser usada para notificar pagamentos pendentes ou coisas do tipo-->   

    <div class="templatemo-flex-row flex-content-row">
      <div class="col-1">              
        <div class="templatemo-content-widget pink-bg">
          <i class="fa fa-times"></i>                
          <h2 class="text-uppercase margin-bottom-10">Latest Data</h2>
          <p class="margin-bottom-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi sapien, fringilla at orci nec, viverra rhoncus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus erat non purus commodo, sit amet varius dolor sagittis.</p>                  
        </div>            
        <div class="templatemo-content-widget blue-bg">
          <i class="fa fa-times"></i>
          <h2 class="text-uppercase margin-bottom-10">Older Data</h2>
          <p class="margin-bottom-0">Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur. Aliquam convallis pharetra odio, in convallis erat molestie sed. Fusce mi lacus, semper sit amet mattis eu, volutpat vitae enim.</p>                
        </div>            
      </div>
    </div>

    <?php

//Conexão com o BD
$link = mysqli_connect("localhost", "root", "", "akad_test");

// if (!$link) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }

// echo "Conexão bem sucedida." . PHP_EOL;
// echo "HOST info: " . mysqli_get_host_info($link) . PHP_EOL;
?>

<?php

//Recebe os dados do form em cadastrar-aluno.php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$valor_debito = $_POST['valor_debito'];
$data_pagamento = $_POST['data_pagamento'];
$observacao = $_POST['observacao'];

// $query_add_aluno = 'INSERT INTO aluno_dados (nome, cpf, nascimento, email, endereco, telefone) VALUES ("'.$nome.'", "'.$cpf.'", "'.$nascimento.'", "'.$email.'", "'.$endereco.'", "'.$telefone.'",)'; //valor_debito.'", "'.$observacao.'")';

$sql = 'INSERT INTO aluno_dados (nome, cpf, nascimento, email, endereco, telefone, sexo, data_pagamento, valor_debito, observacao) VALUES ("'.$nome.'", "'.$cpf.'", "'.$nascimento.'", "'.$email.'", "'.$endereco.'", "'.$telefone.'", "'.$sexo.'", "'.$data_pagamento.'", "'.$valor_debito.'", "'.$observacao.'")';

$result = mysqli_query($link, $sql);
echo $sql;
// $result = mysqli_query($link, $query_add_aluno);

//header('Location: manage-users.php')
?>

