<?php

include 'header.php';

?>
<body>
    <div id="logreg-forms">
        <form class="form-signin" method="POST">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Acesso ao Sistema</h1>
            <div class="social-login">
                <p></p>
                               
            </div>
            <p style="text-align:center">   </p>
            <label>E-mail</label>
            <input type="email" id="inputEmail" class="form-control" required="" autofocus="">
            <br>
            <label>Senha</label>
            <input type="password" id="inputPassword" class="form-control" required="">
            <br>
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Conectar</button>
            
            <a href="recuperasenha.php" id="forgot_pswd">Precisa de nova senha?</a>
          <!-- <p>Não tem cadastro!!</p>  -->
            <button class="btn btn-primary btn-block" type="button" onClick="novocadastro()" id="btn-signup"><i class="fas fa-user-plus"></i> Crie um novo cadastro!</button></a>
            </form>
            
            <script>
            
                function novocadastro()
                {
                     location.href = "cadastro.php";
                } 
                
            </script>
            

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Resetar Senha</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Voltar</a>
            </form>
            
              </form>
            <br>
            
    </div>
    <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:black"></a>
    </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
    
    
    <!-- Modal -->
<div class="modal fade" id="modalnovocad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <!--FORMULÁRIO PARA CADASTRO DAS INFORMAÇÕES -->
        <form>
  <div class="form-group">
    <label for="number">CPF</label>
    <input type="number" class="form-control" name="cpfcad" id="cpfcad" placeholder="CPF sem traços" required="" autofocus="">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" name="emailcad" id="emailcad"  placeholder="Seu email" required="" autofocus="">
  </div>
   <div class="form-group">
    <label for="name">Nome completo</label>
    <input type="text" class="form-control" name="namecad" id="namecad" placeholder="Seu nome completo" required="" autofocus="">
  </div>
   <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="number" class="form-control" name=telcad" id="telcad"  placeholder="Telefone" required="" autofocus="">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" name="senha1cad" id="senha1cad" placeholder="Senha" required="" autofocus="">
  </div> <div class="form-group">
    <label for="confirmsenha">Confirma Senha</label>
    <input type="password" class="form-control" name="confsenha2" id="confsenha2" placeholder="Repita a senha" required="" autofocus="">
  </div>
  
 
      </div>
      
      <!-- FIM DO FORMULÁRIO PARA CADASTRO DAS INFORMAÇÕES -->
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
         <button type="submit" class="btn btn-primary">Enviar</button>
</form>
       <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button>-->
      </div>
    </div>
  </div>
</div>
</body>
</html>