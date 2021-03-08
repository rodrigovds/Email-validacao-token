<?php
session_start();
$_SESSION['logado'];

include  'header.php';

?>

Olá <?php echo $_SESSION['logado']; ?>

    <div id="logreg-forms">
        <form class="form-cad" method="POST" action="banco/inserirvenda.php">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Cadastro de venda</h1>
            <div class="social-login">
            <p></p>
            </div>
            <p style="text-align:center">   </p>
            <label>Código do imóvel</label>
            <input type="text" id="codImovel" name="codImovel" class="form-control">
            <label>Valor de Venda</label>
            <input type="text" id="vlrVenda" name="vlrVenda" class=" vlrVenda form-control" onblur="calcComissao()">
            <label>Nome Comprador</label>
            <input type="text" id="nomeComprador" name="nomeComprador" class="form-control">
                <label>Selecione o tipo de comissão</label>
                   <!--Valor Valor 1 é vendedor, valor 2 é captador e 3 é os dois juntos-->
                <select class="form-control" id="tipoComissao" name="tipoComissao" aria-label="Default select example">
                <option selected>Selecione</option>
                <option value="1">Vendedor</option>
                <option value="2">Captador</option>
                <option value="3">Captador + Vendedor</option>
                </select>
             <label>Parceria</label>
                <select class="form-control" id="parceria" name="parceria" aria-label="Default select example">
                    <!--Valor para Parceria: 1 é sem parceria / 2 com parceria -->
                <option selected value="1">Não</option>
                <option value="2">Sim 50 - 50</option>
                </select>
            <label>Comissão Imobiliária</label>
            <input type="text" id="comissaoNegociada" name="comissaoNegociada" class=" comissaoNegociada form-control">
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Inserir Venda</button>
                <a href="index.php" id="voltarlogin"><i class="fas fa-angle-left"></i> Ir para login</a>
        </form>
    </div>

<script>
    $('.vlrVenda').mask('#.##0,00', {reverse: true});
    $('.comissaoNegociada').mask('#.##0,00', {reverse: true});
   
</script>


</body>
</html>