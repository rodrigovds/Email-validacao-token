<?php
include 'header.php';
?>

<html>
<body>


    <div id="logreg-forms">
        <form class="form-cad" method="POST" action="banco/processamail.php">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Informações para cadastro</h1>
            <div class="social-login">
            <p></p>
             </div>
            <p style="text-align:center">   </p>
            
            <input type="text" id="nome" name="nome" class="form-control" class="form-control" placeholder="Nome">
            <br>
            <input type="text" id="emailcadastro" name="emailcadastro" class="form-control" placeholder="Email">
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Continuar Cadastro</button>
                <a href="index.php" id="voltarlogin"><i class="fas fa-angle-left"></i> Ir para login</a>
        </form>
    </div>


</body>
</html>