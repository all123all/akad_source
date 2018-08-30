<?php
include("connect.php");

$forma_pagamento = $_POST['formapagamento'];

if($forma_pagamento == cartao){
    function pagarCartao(){
        include("connect.php");
        $aluno_matricula_show = $_GET['aluno_matricula'];
        $aluno_nome_show = $_GET['aluno_nome'];
        $data = getdate();

        $query_get_situacao_pagamento = mysqli_query($link, 'SELECT situacao_pagamento FROM aluno_dados WHERE id =' . $aluno_matricula_show);
        $row = mysqli_fetch_assoc($query_get_situacao_pagamento);
        $bd_situacao_pagamento = $row['situacao_pagamento'];

        $query_efetuar_pagamento = mysqli_query($link, 'INSERT INTO aluno_dados (situacao_pagamento) VALUE (1) WHERE id =' . $aluno_matricula_show);

        $query_consulta_cartao_caixa = mysqli_query($link, 'SELECT valor_cartao FROM caixa_fluxo');
        $row = mysqli_fetch_assoc($query_consulta_cartao_caixa);
        $bd_cartao_caixa = $row['valor_cartao'];

        $query_get_valor_debito = mysqli_query($link, 'SELECT valor_debito FROM aluno_dados WHERE id= ' . $aluno_matricula_show);
        $row = mysqli_fetch_assoc($query_get_valor_debito);
        $bd_valor_debito = $row['valor_debito'];

        $at_cartao_caixa = $bd_cartao_caixa + $bd_valor_debito;

        $query_at_cartao_caixa = mysqli_query($link, 'INSERT INTO caixa_fluxo (valor_cartao) VALUE ('.$at_cartao_caixa.')');

        //header("Location: http://localhost/akad/user-panel.php?aluno_matricula=$aluno_matricula_show&aluno_nome=$aluno_nome_show");
        echo "Cartao";
    }
}else{
    if($forma_pagamento == dinheiro){
        function pagarDinheiro(){
            include("connect.php");
            $aluno_matricula_show = $_GET['aluno_matricula'];
            $aluno_nome_show = $_GET['aluno_nome'];
            $data = getdate();
        
            $query_get_situacao_pagamento = mysqli_query($link, 'SELECT situacao_pagamento FROM aluno_dados WHERE id =' . $aluno_matricula_show);
            $row = mysqli_fetch_assoc($query_get_situacao_pagamento);
            $bd_situacao_pagamento = $row['situacao_pagamento'];
        
            $query_efetuar_pagamento = mysqli_query($link, 'INSERT INTO aluno_dados (situacao_pagamento) VALUE (1) WHERE id =' . $aluno_matricula_show);
            echo "Dinheiro";
        }
    }
}
?>