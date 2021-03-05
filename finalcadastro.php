<?php

include 'header.php';

$token = $_GET["token"];
$email = $_GET['email'];
$nome  = $_GET['nome'];

require 'banco/consultavalidatoken.php';

consultatoken($email, $token);



?>


      
<htmL>
    <body>
        
         <div id="logreg-forms">
        <form class="form-cad" method="POST" action="banco/updatecadastro.php">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Informações para cadastro</h1>
            <div class="social-login">
            <p></p>
             </div>
            <p style="text-align:center">   </p>
            <label>Nome</label>
            <input type="text" value=<?php echo $nome ?> id="fnome" name="fnome" class="form-control" readonly="true" class="form-control">
            <br>
            <label>E-mail</label>
            <input type="text" value=<?php echo $email ?> id="femail" name="femail" class="form-control" readonly="true" class="form-control">
            <br>
            <input type="hidden" value=<?php echo $token ?> id="token" name="token" class="form-control" readonly="true" class="form-control">
            <br>
            <label>CPF</label>
           <input type="text" id="cpf" name="cpf" class="form-control" class="form-control">
            <br>
            <label>Telefone</label>
            <input type="text" id="telefone" name="celular" class="form-control" class="form-control">
            <br>
           
           <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Finalizar Cadastro</button>
                <a href="index.php" id="voltarlogin"><i class="fas fa-angle-left"></i> Ir para login</a>
        </form>
    </div>
        
        
    <script type="text/javascript">
          $("#telefone, #celular").mask("(00) 00000-0000");
    </script>
    </body>
    
</htmL>